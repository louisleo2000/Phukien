   <!-- TOP HEADER -->
   <div id="top-header">
       <div class="container">
           <ul class="header-links pull-left">
               <li><a href="#"><i class="fa fa-phone"></i> 0123-456-789</a></li>
               <li><a href="#"><i class="far fa-envelope"></i> email@email.com</a></li>
               <li><a href="#"><i class="fa fa-map-marker-alt"></i> Nha Trang - Khánh Hòa</a></li>
           </ul>
           <ul class="header-links pull-right">
               @if(Auth::user() != null)
               <li>
                   <div class="dropdown" style="margin-top: -10px; ">
                       <button class="btn btn-secondary dropdown-toggle" style="background-color: #FFB0BD;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <div style="margin-left: 5px; color: maroon; ">
                               <i class="fas fa-user-circle    "></i>{{ Auth::user()->name}}
                               <i class="fas fa-chevron-down " style="font-size: 11px;"></i>
                           </div>
                       </button>
                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <form method="POST" action="{{ route('logout') }}">
                               @csrf
                               <a :href="route('logout')" class="dropdown-item " onclick="event.preventDefault();
                                                this.closest('form').submit();" style="font-size: 16px; ">
                                   Đăng xuất
                               </a>
                           </form>
                           @if(Auth::user()->role == 'admin')
                           <a class="dropdown-item" href="{{route('dashboard')}}">Dash board</a>
                           @endif
                           <!-- <a class="dropdown-item" href="#">Something else here</a> -->

                       </div>
                   </div>
               </li>
               @else
               <li>
                   <a href="{{ route('login') }}">
                       Đăng nhập
                   </a>
               </li>
               @endif
               <!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
               <!-- <li><a href="#"><i class="fa fa-user-o"></i> Tài khoản</a></li> -->
           </ul>
       </div>
   </div>
   <!-- /TOP HEADER -->