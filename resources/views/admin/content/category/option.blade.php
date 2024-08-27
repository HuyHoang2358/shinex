@foreach($categories as $category)
    @if($current_category == null || $category->id != $current_category->id)
        @if($current_category && $current_category->parent_id == $category->id)
            <option value="{{$category->id}}" selected>{{str_repeat("----", $level).$category->name}}</option>
        @else
            <option value="{{$category->id}}">{{str_repeat("----", $level).$category->name}}</option>
        @endif

        @if($category->childs)
            @include('admin.content.category.option', ["categories" =>$category->childs, 'level' => $level+1, 'current_category' => $current_category])
        @endif
    @endif
@endforeach
