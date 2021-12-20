@extends('admin.layouts.dashboard')
@section('admin_content')
<div class="container-fluid py-4">
    <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
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
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Orders overview</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                        <span class="font-weight-bold">24%</span> this month
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-bell-55 text-success text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-html5 text-danger text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-cart text-info text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-credit-card text-warning text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                            </div>
                        </div>
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                <i class="ni ni-key-25 text-primary text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                            </div>
                        </div>
                        <div class="timeline-block">
                            <span class="timeline-step">
                                <i class="ni ni-money-coins text-dark text-gradient"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                            </div>
                        </div>
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
    <div class="col-12" id='table'>
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h4>Danh mục sản phẩm</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
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