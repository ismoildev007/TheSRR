<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Biz haqimizdani tahrirlash</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <button class="btn" onClick="changeLang('uz')" style="background: #0c4a4a">UZ</button>
                                <button class="btn" onClick="changeLang('ru')" style="background-color: #0c4a6e">RU</button>
                                <button class="btn" onClick="changeLang('en')" style="background-color: #0c4a8e">EN</button>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_uz" class="form-label">Name Uz</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="name_uz" value="{{ $category->name_uz }}" placeholder="Name UZ">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_ru" class="form-label">Name Ru</label>
                            <input type="text" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="name_ru" value="{{ $category->name_ru }}" placeholder="Name RU">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_en" class="form-label">Name En</label>
                            <input type="text" id="title_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="name_en" value="{{ $category->name_en }}" placeholder="Name EN">
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('category.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>