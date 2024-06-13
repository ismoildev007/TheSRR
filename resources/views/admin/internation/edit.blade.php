<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Internation tahrirlash</h4>
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
                <form action="{{ route('internation.update', $internation->id) }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_uz" class="form-label">Telegram</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="telegram" value="{{ $internation->telegram }}" placeholder="Telegram">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_ru" class="form-label">Instagram</label>
                            <input type="text" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="instagram" value="{{ $internation->instagram }}" placeholder="Instagram">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_ru" class="form-label">Facebook</label>
                            <input type="text" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="facebook" value="{{ $internation->facebook }}" placeholder="Facebook">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_en" class="form-label">Linkedin</label>
                            <input type="text" id="title_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="linkedin" value="{{ $internation->linkedin }}" placeholder="Linkedin">
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('internation.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>