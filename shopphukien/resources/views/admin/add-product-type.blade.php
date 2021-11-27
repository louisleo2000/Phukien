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
                THÊM LOẠI SẢN PHẨM
            </header>
            <div class="panel-body">
                <div class="position-center">

                    <form action="addlsp" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="malsp">Mã loại sản phẩm</label>
                            <input type="text" class="form-control" name="malsp" placeholder="Nhập mã loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="tensp">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" name="tenlsp" placeholder="Nhập tên loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="motasp">Mô tả loại sản phẩm</label>
                            <textarea class="form-control" name="motalsp" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hinhsp">Hình ảnh sản phẩm</label>
                            <input class="form-control" type="text" name="hinhlsp">
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>

                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading" id="listproducts">
        DANH SÁCH loại SẢN PHẨM
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
                    <th>Mã LSP</th>
                    <th>Tên LSP</th>
                    <th>Mô tả</th>
                    <th>Link hình ảnh</th>
                    <th style="width:30px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listLSP as $item)
                <tr>
                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                    <td>{{$item->maloaisp}}</td>
                    <td><span class="text-ellipsis">{{$item->tenLsp}}</span></td>
                    <td><span class="text-ellipsis">{{$item->motaLsp}}</span></td>
                    <td><span class="text-ellipsis">{{$item->hinhanhLSP}}</span></td>
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
                <small class="text-muted inline m-t-sm m-b-sm">Từ {{$b= $listLSP->currentPage()*$listLSP->count()-$listLSP->count()+1}} - {{ $a=  $listLSP->currentPage()*$listLSP->count()}} trên {{$listLSP->total()}} loại sản phẩm</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">
                <ul class="pagination pagination-sm m-t-none m-b-none">
                    @if(!$listLSP->onFirstPage())
                    <li><a href="{{$listLSP->previousPageUrl()}}#listproducts"><i class="fa fa-chevron-left"></i></a></li>
                    @endif
                    @foreach (range(1, $listLSP->lastPage()) as $number)
                    @if($number == $listLSP->currentPage())
                    <li class="page-item active"><a href="addproduct-type?page={{$number}}#listproducts">{{$number}}</a></li>
                    @else
                    <li class="page-item "><a href="addproduct-type?page={{$number}}#listproducts">{{$number}}</a></li>
                    @endif
                    @endforeach
                    @if($listLSP->hasMorePages())
                    <li><a href="{{$listLSP->nextPageUrl()}}#listproducts"><i class="fa fa-chevron-right"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </footer>
</div>

@endsection