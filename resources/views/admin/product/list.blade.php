@extends('admin.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">{{ $title }}</h4>
            <p class="text-muted font-13 mb-4">
                Trang hiển thị {{ $title }}
            </p>

            <div id="key-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <table id="key-datatable" class="table dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="key-datatable_info" style="position: relative; width: 1008px;">
                    <thead>
                    <tr role="row">
                       <th class="sorting" width="50">ID</th>
                       <th class="sorting">Tên sản phẩm</th>
                       <th class="sorting">Giá</th>
                       <th class="sorting">Công khai</th>
                       <th class="sorting">Cập nhật</th>
                       <th class="sorting" width="80">H.động</th>
                    </tr>
                    </thead>
                    <tbody>
                        {!! \App\Helpers\Helper::products($products) !!}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
