@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <form class="needs-validation"  method="post" action="">
                @include('components.alert')
                <div class="form-group mb-3">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Menu name" value="" required="">
                    <div class="valid-feedback">

                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="">Danh mục</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="0">Danh mục cha</option>
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Mô tả ngắn</label>
                    <textarea class="form-control textarea" name="description" id="" cols="30" rows="3"></textarea>
                    <div class="valid-feedback">

                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="">Mô tả chi tiết</label>
                    <textarea class="form-control textarea" name="content" id="" cols="30" rows="3"></textarea>
                    <div class="valid-feedback">

                    </div>
                </div>
                <div class="custom-control custom-switch mb-3 ">
                    <input type="checkbox" value="1" name="active" class="custom-control-input" id="customSwitch1">
                    <label class="cursor custom-control-label" for="customSwitch1">Công khai</label>
                </div>
                @csrf
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

        </div> <!-- end card-body-->
    </div>
@endsection
