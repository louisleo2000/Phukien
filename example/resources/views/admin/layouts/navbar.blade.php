<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
                @if(isset($title))
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$title}}</li>
                @else
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dash board</li>
                @endif
            </ol>
            @if(isset($title))
            <h6 class="font-weight-bolder mb-0">{{$title}}</h6>
            @else
            <h6 class="font-weight-bolder mb-0">Dash board</h6>
            @endif
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i style="font-size: 20px;" class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <!-- <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body px-0">
                                <i class="fa fa-user me-sm-1"></i>

                            </a>
                        </li> -->
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="{{route('profile')}}">
                                <div class="d-flex py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Thông tin người dùng</span>
                                        </h6>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item border-radius-md" :href="route('logout')" class="dropdown-item " onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <div class="d-flex py-1">
                                        <div class="d-flex flex-row justify-content-center">
                                            <i style="font-size: 20px;margin-right: 10px;" class="fas fa-sign-out-alt"></i>
                                            <span class="font-weight-bold">Đăng xuất</span>
                                        </div>
                                    </div>
                                </a>
                            </form>
                        </li>

                    </ul>
                </li>

                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
