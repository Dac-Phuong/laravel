<div class="modal fade" id="kt_modal_update_user" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Sửa thông tin người dùng</h4>
                </div>
                <!--end::Modal title-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </div>
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body my-7">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="#" wire:submit.prevent="submit"
                    enctype="multipart/form-data">
                    <!--begin::Scroll-->
                    <!--begin::Input group-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label" for="basic-icon-default-fullname">Họ và tên </label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="ti ti-user"></i></span>
                                    <input type="text" class="form-control" wire:model.defer="name"
                                        id="basic-icon-default-fullname" placeholder="Nhập họ và tên"
                                        aria-label="nguyenvanc" aria-describedby="basic-icon-default-fullname2"
                                        fdprocessedid="86kjk">
                                </div>
                                @error('name')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                    <input type="text" id="basic-icon-default-email" wire:model.defer="email"
                                        class="form-control" placeholder="Nhập email" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2" fdprocessedid="40irmg">
                                </div>
                                @error('email')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="basic-icon-default-phone">Số điện thoại</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="ti ti-phone"></i></span>
                                    <input type="text" id="basic-icon-default-phone" wire:model.defer="phone"
                                        class="form-control phone-mask" placeholder="Nhập số điện thoại"
                                        aria-label="Nhập số điện thoại" aria-describedby="basic-icon-default-phone2"
                                        fdprocessedid="wwg4hf">
                                </div>
                                @error('phone')
                                    <span class="error text-danger fs-7">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="multicol-password">Mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="multicol-password" wire:model.defer="password"
                                            class="form-control" placeholder="············"
                                            aria-describedby="multicol-password2" fdprocessedid="vb9bj">
                                        <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                    @error('password')
                                        <span class="error text-danger fs-7">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                          
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close"
                            wire:loading.attr="disabled">Hủy</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Lưu</span>
                            <span class="indicator-progress" wire:loading wire:target="submit">
                                ...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

