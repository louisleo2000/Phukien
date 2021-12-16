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
                            <h4>Thêm sản phẩm mới 💕</h4>
                            <!-- <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">30 done</span> this month
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin-product/add" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" :value="old('name')" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="">Hình ảnh</label>
                            <input type="text" class="form-control" name="img" placeholder="Nhập đường dẫn hình ảnh" :value="old('img')" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Loại sản phẩm</label>
                            @if(isset($listLsp))
                            @if($listLsp->count() !=0)
                            <select class="form-control" name="product_type_id" :value="old('product_type_id')" required>
                                @foreach ($listLsp as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @else
                            <p>Bạn cần thêm loại sẩn phẩm <a href="{{route('admin-product-type')}}">tại đây!</a></p>
                            @endif
                            @else
                            <p>Bạn cần thêm loại sẩn phẩm <a href="{{route('admin-product-type')}}">tại đây!</a></p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="">Đơn vị tính</label>
                            <select class="form-control" name="unit" :value="old('unit')" required>
                                <option value="Cái">Cái</option>
                                <option value="Hộp">Hộp</option>
                                <option value="Bộ">Bộ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Màu sắc</label>
                            <input type="text" class="form-control" name="color" placeholder="Nhập nhiều màu cách nhau bởi dấu phẩy" :value="old('color')" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Mô tả</label>
                            <textarea class="form-control" name="descrip" placeholder="Nhập mô tả" cols="30" rows="5" :value="old('descrip')" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Đơn giá</label>
                            <input type="number" class="form-control" name="unit_price" placeholder="Đơn giá" min="1" :value="old('unit_price')" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Giá khuyển mãi</label>
                            <input type="number" class="form-control" name="promo_price" placeholder="Giá khuyến mãi" min="1" :value="old('promo_price')" required>
                        </div>
                        <div class="col text-end">
                            <button class="btn bg-gradient-info mb-0" type="submit"><i class="fas fa-plus"></i>&nbsp;&nbsp;Thêm sản phẩm</button>
                        </div>
                    </form>
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
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h4>Sản phẩm</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sản phẩm</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Loại sản phẩm</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày tạo</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày cập nhật</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Màu sắc</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listProducts as $item)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{$item->img}}" class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$item->descrip}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{$item->productTypes->name}}</p>
                                    <p class="text-xs text-secondary mb-0">{{$item->descrip}}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$item->created_at}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$item->updated_at}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class=" text-xs font-weight-bold">{{$item->color}}</span>
                                </td>
                                <td class="align-middle">

                                    <a href="javascript:;" class="font-weight-bold text-xs badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                        Sửa
                                    </a>
                                    <br>
                                    <a href="javascript:;" class=" font-weight-bold text-xs badge badge-sm bg-gradient-danger" style="margin-top: 2px;" data-toggle="tooltip" data-original-title="Edit user">
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection