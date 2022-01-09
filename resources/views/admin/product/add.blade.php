@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form class="needs-validation" enctype="multipart/form-data"  method="post" action="">
                @include('components.alert')
                <div class="row">
                    <div class="form-group mb-3 col-lg-6">
                        <label for="">Tên Sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Menu name" value="{{ old('name') }}" required="">
                        <div class="valid-feedback">

                        </div>
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label for="">Danh mục</label>
                        <select name="menu_id" id="" class="form-control">
                            <option value="0">Danh mục</option>
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label for="">Giá gốc (vnđ)</label>
                        <input type="number" min="0" class="form-control" name="price" id="" placeholder="Giá gốc" value="{{ old('price') }}" >
                        <div class="valid-feedback"></div>
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label for="">Giá khuyến mại (vnđ)</label>
                        <input type="number" min="0" class="form-control" name="price_sale" id="" placeholder="Giá khuyến mại" value="{{ old('price_sale') }}">
                        <div class="valid-feedback"></div>
                    </div>

                    <div class="form-group mb-3 col-lg-12">
                        <label for="">Mô tả ngắn</label>
                        <textarea class="form-control textarea" name="description" id="" cols="30" rows="3"></textarea>
                        <div class="valid-feedback">

                        </div>
                    </div>
                    <div class="form-group mb-3 col-lg-12">
                        <label for="">Mô tả chi tiết</label>
                        <textarea class="form-control textarea" name="content" id="" cols="30" rows="3"></textarea>
                        <div class="valid-feedback">

                        </div>
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label for="validationAvatar">Ảnh sản phẩm</label>
                        <div class="custom-file cursor_label">
                            <input type="file" name="file" id="thumbProduct" value=""
                                   class="custom-file-input cursor uploadImage"
                                   size="" placeholder="Image">
                            <input type="hidden" name="thumb" class="file_input">
                            <label class="custom-file-label label_img" for="thumbProduct">Chọn tệp tin</label>

                        </div>
                        <div class="img_show"></div>

                    </div>
                    <div class="form-group mb-3 col-lg-7">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" value="1" name="active" class="custom-control-input" id="customSwitch1">
                            <label class="cursor custom-control-label" for="customSwitch1">Công khai</label>
                        </div>
                    </div>

                    @csrf
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

        </div> <!-- end card-body-->
    </div>
@endsection
