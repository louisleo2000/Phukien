@extends('admin.layouts.dashboard')
@section('admin_content')
<div class="container-fluid py-4">
    <div class="row my-4">
        <div class="col-lg-11 col-md-6 mb-md-0 mb-4">
            @if(Session::get('success'))
            <div class="alert alert-success">
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                <strong>{{Session::get('fail')}}</strong>
            </div>
            @endif
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h4>Thêm danh mục sản phẩm🎊</h4>

                            <!-- <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">30 done</span> this month
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin-categories/add" method="post" id="myform">
                        @csrf
                        <div class="mb-3">
                            <label for="">Tên danh mục sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục sản phẩm" :value="old('name')" required autofocus>
                        </div>
                    </form>
                    <div class="col text-end" id="btnAdd">
                        <button class="btn bg-gradient-dark mb-0" onclick="save('/admin-categories/add',1)"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm danh mục</button>
                    </div>
                    <div class="col text-end" id="btnEdit" style="display: none; ">
                        <button class="btn bg-gradient-secondary mb-0" onclick="cancel()">Hủy</button>
                        <button class="btn bg-gradient-warning mb-0" onclick="save('/edit-categories/')"><i class="fas fa-save    "></i>&nbsp;&nbsp;Lưu lại</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @if(Session::get('del-success'))
    <div class="alert alert-success">
        <strong>{{Session::get('del-success')}}</strong>
    </div>
    @endif
    <div class="col-11" id='table'>
        <div class="card mb-4 p-2">
            <div class="card-header pb-0">
                <h4>Danh mục sản phẩm</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive ">
                <table class="table  table-striped table-bordered yajra-datatable" data-url="/show-product-type/">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-8"></div>
        <div class="col-3 ">{{$list->links('layouts.paginate')}}</div>
    </div> -->
</div>
<script type="text/javascript">
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin-categories.list') }}",
        language: {
                "decimal": "",
                "emptyTable": "Không có dữ liệu phù hợp",
                "info": "Đang xem từ _START_ đến _END_ trên tổng _TOTAL_ ",
                "infoEmpty": "Đang xem từ 0 đến 0 trên tổng 0 ",
                "infoFiltered": "(lọc trong _MAX_ total)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Hiển thị _MENU_ ",
                "loadingRecords": "Đang tải...",
                "processing": "Đang xử lý...",
                "search": "Tìm kiếm:",
                "zeroRecords": "Không tìm thấy dữ liệu phù hợp",
                "paginate": {
                    "first": "Đầu tiên",
                    "last": "Cuối",
                    "next": "Tiếp theo",
                    "previous": "Trước"
                },
                "aria": {
                    "sortAscending": ": sắp xếp tăng dần",
                    "sortDescending": ": sắp xép giảm dần"
                }
            },
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'updated_at',
                name: 'updated_at'
            },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });
</script>
@endsection
