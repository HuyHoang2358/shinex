@foreach($categories as $category)
    <tr class="intro-x">
        <td class="w-40">
            <div class="flex">
                <div class="w-10 h-10 image-fit zoom-in rounded-full">
                    @if($category->icon)
                        <img alt="Category-icon-{{$category->slug}}" class="rounded-full" src="{{asset($category->icon)}}">
                    @else
                        <div class="h-10 w-10 rounded-full bg-gray-300"></div>
                    @endif
                </div>
            </div>
        </td>
        <td>
            <p class="font-medium whitespace-nowrap">{{str_repeat("----", $level)}}  {{$category->name}}</p>
        </td>
        <td>
            <a class="text-slate-500 flex items-center mr-3" href="javascript:">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="external-link" data-lucide="external-link" class="lucide lucide-external-link w-4 h-4 mr-2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                /categories/{{$category->slug}} </a>
        </td>
        <td class="table-report__action w-56">
            <div class="flex justify-center items-center">
                <a class="flex items-center mr-3" href="{{route('admin.category.edit', $category->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="check-square" data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path></svg> Edit </a>
                <a class="flex items-center text-danger" href="{{route('admin.category.delete', $category->id)}}" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>
            </div>
        </td>
    </tr>
    @if(count($category->childs))
        @include('admin.content.category.row', ["categories"=>$category->childs, "level"=>$level+1])
    @endif
@endforeach
