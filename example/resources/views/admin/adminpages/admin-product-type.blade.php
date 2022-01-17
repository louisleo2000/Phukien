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
                            <h4>Thêm loại sản phẩm mới 🎉🎊</h4>
                            <!-- <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">30 done</span> this month
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin-product-type/add" method="post" id="myform">
                        @csrf
                        <div class="mb-3">
                            <label for="">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên loại sản phẩm" :value="old('name')" required autofocus>
                        </div>
                        <div class="mb-3 file-upload-wrapper">
                            <label for="">Hình ảnh</label>
                            <div class="row">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn-info col-2 btn-img">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> Chọn ảnh
                                </a>
                                <div class="col">
                                    <input id="thumbnail" class="form-control" type="text" name="img" style=" border-top-left-radius: 0px ; border-bottom-left-radius:0px ;">
                                </div>

                            </div>
                            <img id="imgpreview" style="margin-top:15px;max-height:200px;" alt="">
                            <!-- <div class="col-sm-4 body-img" id="bgimg">
                                <div class="form-group inputDnD">
                                    <input name="img" type="file" class="form-control-file text-success font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Kéo và thả ảnh ở đây" require>
                                </div>
                            </div> -->
                        </div>
                        <div class="mb-3">
                            <label for="">Danh mục sản phẩm</label>
                            @if(isset($listCategories))
                            @if($listCategories->count() !=0)
                            <select class="form-control" name="category_id" id="type_id" :value="old('category_id')" required>
                                @foreach ($listCategories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <a class="font-weight-bold" style="margin-left: 10px;text-decoration: underline;" href="{{route('admin-categories')}}"> Thêm danh mục sản phẩm </a>
                            @else
                            <p>Bạn cần thêm danh mục sản phẩm trước<a href="{{route('admin-categories')}}"> tại đây</a></p>
                            @endif
                            @else
                            <p>Bạn cần thêm danh mục sản phẩm trước<a href="{{route('admin-categories')}}"> tại đây</a></p>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="">Mô tả</label>
                            <textarea class="form-control" id='my-editor' name="descrip" placeholder="Nhập mô tả" cols="30" rows="5" required></textarea>
                        </div>


                    </form>
                    <div class="col text-end" id="btnAdd">
                        <button class="btn bg-gradient-warning mb-0" onclick="save('/admin-product-type/add',1)"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm loại sản phẩm</button>
                    </div>
                    <div class="col text-end" id="btnEdit" style="display: none; ">
                        <button class="btn bg-gradient-secondary mb-0" onclick="cancel()">Hủy</button>
                        <button class="btn bg-gradient-warning mb-0" onclick="save('/edit-product-type/')"><i class="fas fa-save    "></i>&nbsp;&nbsp;Lưu lại</button>
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
    <div class="col-11">
        <div class="card mb-4 p-2">
            <div class="card-header pb-0 ">
                <h4>Loại sản phẩm</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive ">

                    <table class="align-items-center mb-0 table-border yajra-datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Tên loại sản phẩm</th>
                                <th>Danh mục</th>
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
        <div class="col-3 ">{{$listLsp->links('layouts.paginate')}}</div>
    </div> -->
</div>
<script type="text/javascript">
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin-product-type.list') }}",
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
                data: 'img',
                name: 'img'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'categories',
                name: 'categories'
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
