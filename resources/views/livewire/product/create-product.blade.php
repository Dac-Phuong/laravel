<div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Thêm sản phẩm</h4>
                </div>
                <!--end::Modal title-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </div>
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body ">
                <!--begin::Form-->
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-name">Tên sản phẩm</label>
                                <input type="text" class="form-control" wire:model.defer="name"
                                    id="bs-validation-name" placeholder="Nhập tên sản phẩm">
                                @error('name')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-email">Giá sản phẩm</label>
                                <input type="text" wire:model.defer="price" id="bs-validation-email"
                                    class="form-control" placeholder="Giá sản phẩm" aria-label="Giá sản phẩm">
                                @error('price')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-email">Khuyến mãi (%)</label>
                                <input type="text" value="0" wire:model.defer="sale" id="bs-validation-email"
                                    class="form-control" placeholder="0" aria-label="john.doe">
                                @error('sale')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-country">Danh mục cha</label>
                                <select class="form-select" wire:model.defer="category_id" id="bs-validation-country">
                                    <option value="">---Chọn danh mục cha---</option>
                                    @foreach ($categories as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Chọn ảnh sản phẩm</label>
                                <input type="file" wire:model.defer="image" class="form-control">
                                @error('image')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">Mô tả sản phẩm</label>
                                <textarea class="form-control" wire:model.defer="description" id="bs-validation-bio" name="bs-validation-bio"
                                    rows="3"></textarea>
                            </div>
                            <div class="text-center pt-15">
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"
                                    aria-label="Close" wire:loading.attr="disabled">Hủy</button>
                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Lưu</span>
                                    <span class="indicator-progress" wire:loading wire:target="submit">
                                        ...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
