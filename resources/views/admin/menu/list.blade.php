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
                       <th class="sorting">Name</th>
                       <th class="sorting">Active</th>
                       <th class="sorting">Update</th>
                       <th class="sorting" width="80">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        {!! \App\Helpers\Helper::menu($menus) !!}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
