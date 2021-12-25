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
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h4>Loại sản phẩm</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">

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