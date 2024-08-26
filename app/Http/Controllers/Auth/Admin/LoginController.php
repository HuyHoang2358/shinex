<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        // Kiểm tra đã login chưa
        if(Auth::guard('admin')->check()) {
            return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
        }
        return view('admin.auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        if(! Auth::guard('admin')->attempt($request->only('email', 'password'), $request->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email' => 'Đăng nhập không thành công',
                'password' => 'Sai mật khẩu hoặc tài khoản không tồn tại',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
