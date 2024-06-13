<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Internation malumotlar</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                                <li class="breadcrumb-item active">Internation malumotlar</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('internation.store')}}" method="post" onsubmit="updateEditorContent()">
                    @csrf
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="telegram" placeholder="telegram linkni kiriting" value="https://t.me/">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="instagram" placeholder="Instagram linkni kiriting" value="https://www.instagram.com/">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="facebook" placeholder="Facebook linkni kiriting" value="https://www.facebook.com/">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="linkedin" placeholder="Linkedin linkini kiriting" value="https://www.linkedin.com/">
                        </div>
                    </div>



                    {{-- umumiy --}}
                    <div class="row">

                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('internation.index')}}" class="btn btn-default btn-squared btn-light px-20">cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</x-layouts.admin>
