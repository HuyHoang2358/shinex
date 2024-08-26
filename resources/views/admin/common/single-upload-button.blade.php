<div class="input-group gap-2">
    <input id="thumbnail" class="form-control" type="text" name="{{$input_name}}">
    <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> Chọn
        </a>
    </span>
</div>
<div id="holder" style="margin-top:15px;max-height:100px;"></div>

<script type="text/javascript">
    // single upload button
    let is_single_upload_button = true;
    let lfm = function(id, type, options) {
        let button = document.getElementById(id);
        button.addEventListener('click', function () {
            //console.log("click");
            let route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            let target_input = document.getElementById(button.getAttribute('data-input'));
            let target_preview = document.getElementById(button.getAttribute('data-preview'));

            //console.log("route_prefix: ", route_prefix);
            //console.log("target_input: ", target_input);
            console.log("target_preview: ", target_preview);

            window.open(route_prefix + '?type=' + type || 'file', 'FileManager', 'width=1200,height=700');
            window.SetUrl = function (items) {
                if (!is_single_upload_button) if(items.length > 0) items = items[0];

                target_input.value = items.map(function (item) {
                    return item.url.replace(/^.*\/\/[^\/]+/, '');
                }).join(',');


                console.log("target_input", target_input.value)

                // set the value of the desired input to image url
                target_input.dispatchEvent(new Event('change'));

                // clear previous preview
                target_preview.innerHTML = '';
                console.log("target_preview: ", target_preview);

                // set or change the preview image src
                items.forEach(function (item) {
                    let img = document.createElement('img')
                    img.setAttribute('style', 'height: 5rem')
                    img.setAttribute('src', item.thumb_url)
                    target_preview.appendChild(img);
                });

                // trigger change event
                target_preview.dispatchEvent(new Event('change'));
            };
        });
    }
    let route_prefix = "{{url('/admin/laravel-filemanager')}}";
    lfm('lfm', 'image', {prefix: route_prefix});
</script>
