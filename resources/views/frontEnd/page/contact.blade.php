@extends('layout')
@section('main')
    <div class="container">
        <form action="{{ route('postContact') }}" method="POST" accept-charset="utf-8">
            @csrf
            <section>
                <div class="container d-flex flex-wrap  mt-5">
                    <div class="col-md-7 col-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="section-article contactpage" style="  padding-left: 20px;">
                            <h1 style="color: black">Liên hệ với chúng tôi</h1>
                            <div class="form-comment">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group" style="width: 200px;">
                                            <label for="name"><em> Họ tên</em><span class="required">*</span></label>
                                            <input id="name" name="name" type="text" value=""   .0
                                                class="form-control" fdprocessedid="q9687g">
                                            @error('name')
                                                <span
                                                    style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group" style="width: 200px;">
                                            <label for="email"><em> Email</em><span class="required">*</span></label>
                                            <input id="email" name="email" class="form-control" type="email"
                                                value="" fdprocessedid="zvmonj">
                                            @error('email')
                                                <span
                                                    style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group" style="width: 200px;">
                                            <label for="phone"><em> Số điện thoại</em><span
                                                    class="required">*</span></label>
                                            <input type="number" id="phone" class="form-control" name="phone"
                                                fdprocessedid="k6opeh">
                                            @error('phone')
                                                <span
                                                    style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
                                    <textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
                                    @error('title')
                                        <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
                                    <textarea id="message" name="description" class="form-control custom-control" rows="5"></textarea>
                                    @error('description')
                                        <span style="font-size: 14px;color: red;font-weight: 400">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn-update-order" fdprocessedid="kqyfif">Gửi nhận xét</button>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="f-contact" style="padding-left: 32px;">
                            <h1 style="color: black">Thông tin liên hệ</h1>
                            <ul class="list-unstyled">
                                <li class="clearfix">
                                    <i class="fa fa-map-marker fa-1x" style="color:#286CD9; padding: 10px; "></i>
                                    <span style="color: black"> Đồng Hỷ ,TP-Thái Nguyên</span><br>
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-phone fa-1x" style="color:#286CD9;padding: 10px;  "></i>
                                    <span style="color: black">08.335588 - 0981.33557</span>
                                </li>
                                <li class="clearfix">
                                    <i class="fa fa-envelope fa-1x " style="color:#286CD9; padding: 10px; "></i>
                                    <span><a style="color: black"
                                            href="mailto:sale.24hstore@gmail.com">nguyendacphuong11@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </section>
        </form>
    </div>
@endsection
