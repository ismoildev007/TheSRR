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
                <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')
                    {{-- uz --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_uz" class="form-label">Address</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="address" value="{{ $contact->address }}" placeholder="Manzil">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_ru" class="form-label">Email</label>
                            <input type="email" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="email" value="{{ $contact->email }}" placeholder="Email">
                        </div>
                        <div class="col-md-4 mb-25 my-5">
                            <label for="title_en" class="form-label">Phone Number</label>
                            <input type="text" id="title_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="number" value="{{ $contact->number }}" placeholder="number">
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('contact.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>