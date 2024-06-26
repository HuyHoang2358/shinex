<div data-twe-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="exampleModalVarying" tabindex="-1" aria-labelledby="exampleModalVaryingLabel" aria-hidden="true">
    <div data-twe-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-[5%] min-[576px]:max-w-[500px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!--modal title-->
                <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="exampleModalVaryingLabel">
                    Thêm sản phẩm mới
                </h5>
                <!--Close button of the modal-->
                <button type="button"
                    class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
                    data-twe-modal-dismiss aria-label="Close">
                    <span class="[&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                <!--Form field-->
                <form id="add-product-form" method="POST" action=" {{ route('admin.product.store') }} ">
                    @csrf
                    <!--product name-->
                    <div class="mb-3">
                        <label for="recipient-name" class="text-neutral-500 dark:text-neutral-400">Tên sản phẩm</label>
                        <input type="text"
                            class="relative m-0 -me-0.5 block w-full flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-inset focus:outline-none dark:border-neutral-500 dark:bg-body-dark dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:autofill:shadow-autofill dark:focus:border-primary"
                            id="product-name" name="product-name"/>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="text-neutral-500 dark:text-neutral-400">Hình ảnh</label>
                        <div class="flex gap-2">
                            <input type="url"
                            class="form-control relative m-0 -me-0.5 block w-full flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-inset focus:outline-none dark:border-neutral-500 dark:bg-body-dark dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:autofill:shadow-autofill dark:focus:border-primary"
                            id="thumbnail" name="file-path" readonly/>
                            <button id="lfm" data-input="thumbnail" data-preview="holder" class="add-image-file">
                                <i class="fa-solid fa-upload"></i>
                            </button>
                        </div>
                        <div class="mt-3" id="holder"></div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message-text" class="text-neutral-500 dark:text-neutral-400">Miêu tả</label>
                        <textarea
                            class="relative m-0 -me-0.5 block w-full flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-inset focus:outline-none dark:border-neutral-500 dark:bg-body-dark dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                            id="product-description" name="product-description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="text-neutral-500 dark:text-neutral-400">Nội dung</label>
                        <textarea
                            class="relative m-0 -me-0.5 block w-full flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-inset focus:outline-none dark:border-neutral-500 dark:bg-body-dark dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                            id="product-content" name="product-content"></textarea>
                    </div>
                </form>
            </div>
            <div
                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                <button type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-main-color transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400"
                    data-twe-modal-dismiss data-twe-ripple-init data-twe-ripple-color="light">
                    Hủy
                </button>
                <button id="submit-button" type="submit"
                    class="ms-1 inline-block rounded bg-main-color px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    data-twe-ripple-init data-twe-ripple-color="light">
                    Lưu thay đổi
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    var route_prefix = "/laravel-filemanager";
    $('#lfm').filemanager('image', {prefix: route_prefix});

    $('#submit-button').click(function() {
        $('#add-product-form').submit();
    });
</script>
