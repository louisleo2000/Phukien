@extends('admin.admin-dashboard')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            @if(Session::get('thanhcong'))
            <div class="alert alert-success">
                <strong>{{Session::get('thanhcong')}}</strong>
            </div>
            @endif
            @if(Session::get('loi'))
            <div class="alert alert-danger">
                <strong>{{Session::get('loi')}}</strong>
            </div>
            @endif
            <header class="panel-heading">
                THÊM SẢN PHẨM
            </header>
            <div class="panel-body">
                <div class="position-center">

                    <form action="addsp" method="post">
                        @csrf
                        <!-- <div class="form-group">
                            <label for="tensp">Mã sản phẩm</label>
                            <input type="text" class="form-control" name="masp" id="masp" placeholder="Nhập mã sản phẩm" value="{{old('masp')}}">
                        </div> -->
                        <div class="form-group">
                            <label for="tensp">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="tensp" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="dongia">Đơn giá</label>
                            <input type="number" class="form-control" name="dongia" placeholder="Nhập đơn giá">
                        </div>
                        <div class="form-group">
                            <label for="giakm">Giá khuyến mãi</label>
                            <input type="number" class="form-control" name="giakm" placeholder="Nhập giá khuyến mãi">
                        </div>
                        <div class="form-group">
                            <label for="">Loại sản phẩm</label>
                            <select class="form-control" name="loaisp">
                                @foreach ($listLSP as $item)
                                <option value="{{$item->maloaisp}}">{{$item->tenLsp}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Đơn vị tính</label>
                            <select class="form-control" name="dvt">
                                <option value="Cái">Cái</option>
                                <option value="Hộp">Hộp</option>
                                <option value="Bộ">Bộ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mausac">Màu sắc</label>
                            <input type="text" class="form-control" name="mausac" placeholder="Nhập màu cách nhau bởi dấu phẩy">
                        </div>
                        <div class="form-group">
                            <label for="motasp">Mô tả sản phẩm</label>
                            <textarea class="form-control" name="motasp" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hinhsp">Hình ảnh sản phẩm</label>
                            <input class="form-control" type="text" name="hinhsp">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>
                        <!-- <div class="checkbox">
                            <label>
                                <input name="New" checked type="checkbox"> Sản phẩm mới?
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" id="listproducts">
        DANH SÁCH SẢN PHẨM
    </div>
    <!-- <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div> -->
    <div class="table-responsive">
        <table class="table table-striped b-t b-light">
            <thead>
                <tr>
                    <th style="width:20px;">
                        <label class="i-checks m-b-none">
                            <input type="checkbox"><i></i>
                        </label>
                    </th>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Giá bán</th>
                    <th style="width:30px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listSP as $item)
                <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>{{$item->masp}}</td>
                    <td><span class="text-ellipsis">{{$item->tensp}}</span></td>
                    <td><span class="text-ellipsis">{{number_format($item->giakm,0, "," , ".")}}</span></td>
                    <td>
                        <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="panel-footer">
        <div class="row">

            <div class="col-sm-5 text-center">
                <small class="text-muted inline m-t-sm m-b-sm">Từ {{$b= $listSP->currentPage()*$listSP->count()-$listSP->count()+1}} đến {{ $a=  $listSP->currentPage()*$listSP->count()}} trên {{$listSP->total()}} sản phẩm</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                    @if(!$listSP->onFirstPage())
                    <li><a href="{{$listSP->previousPageUrl()}}#listproducts"><i class="fa fa-chevron-left"></i></a></li>
                    @endif
                    @foreach (range(1, $listSP->lastPage()) as $number)
                    @if($number == $listSP->currentPage())
                    <li class="page-item active"><a href="addproduct?page={{$number}}#listproducts">{{$number}}</a></li>
                    @else
                    <li class="page-item "><a href="addproduct?page={{$number}}#listproducts">{{$number}}</a></li>
                    @endif
                    @endforeach
                    @if($listSP->hasMorePages())
                    <li><a href="{{$listSP->nextPageUrl()}}#listproducts"><i class="fa fa-chevron-right"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </footer>
</div>

@endsection