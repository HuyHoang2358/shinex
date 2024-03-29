<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(): Factory|View|Application
    {
        $cpus = Cpu::paginate(config("system.perPage"));
        return view('admin.content.component.cpu.index', ["cpus" => $cpus]);
    }
    public function add(): Factory|View|Application
    {
        return view("admin.content.component.cpu.add",[
            "categories" => $this->getCategories(),
            "brands" => $this->getBrands(),
        ]);
    }

    private function fillDataToCpu($item, $input): void
    {
        $item["socket"] = $input["socket"] ?? "";
        $item["core_type"] = $input["core_type"] ?? "";
        $item["core_series"] = $input["core_series"] ?? "";
        $item->save();
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();

        // Create post
        $post = new Post();
        $this->fillDataToPost($post, $input);

        // Create CPU
        $cpu = new Cpu();
        $this->fillDataToCpu($cpu, $input);

        // Create Component
        $component = new Component();
        $input["detail_id"] = $cpu->id;
        $this->fillDataToComponent($component, $input);

        // Create product
        $product = new Product();
        $input["post_id"] = $post->id;
        $input["detail_id"] = $component->id;
        $this->fillDataToProduct($product, $input);

        // Redirect to main board index page
        return redirect()->route('admin.component.cpu.index');
    }
    public function edit($id): Factory|View|Application
    {
        $item = Cpu::find($id);
        return view("admin.content.component.cpu.edit",[
            "categories" => $this->getCategories(),
            "brands" => $this->getBrands(),
            "item" =>$item
        ]);
    }
    public function update($id, Request $request): RedirectResponse
    {
        $input = $request->all();

        // Update cpu
        $cpu = Cpu::find($id);
        $this->fillDataToCpu($cpu, $input);

        // Update Component
        $component = Component::find($cpu->component->id);
        $this->fillDataToComponent($component, $input);

        // Update product
        $product = Product::find($cpu->component->product->id);
        $this->fillDataToProduct($product, $input);

        // Update Post
        $post = Post::find($product->post_id);
        $this->fillDataToPost($post, $input);

        return redirect()->route('admin.component.cpu.index');
    }
    public function destroy($id): RedirectResponse
    {
        $item = Cpu::find($id);
        $product = Product::find($item->component->product->id);
        if ($product){
            $product->delete();
        }
        return redirect()->route("admin.component.cpu.index");
    }
}
