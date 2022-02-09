<!--Start topbar header-->
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top gradient-scooter">
     <ul class="navbar-nav mr-auto align-items-center">
       <li class="nav-item">
         <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
       </li>
     </ul>

     <ul class="navbar-nav align-items-center right-nav-link">
       <li class="nav-item">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
           <span class="user-profile"><img src="{{URL::to('assets2/assets/images/avatars/avatar-17.png')}}" class="img-circle" alt="user avatar"></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
           <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('assets2/assets/images/avatars/avatar-17.png')}}" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-2 user-title">Katrina Mccoy</h6>
               <p class="user-subtitle">mccoy@example.com</p>
               </div>
              </div>
             </a>
           </li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-divider"></li>
          <li><a  class="dropdown-item icon-people mr-2" href="{{url('user/profile')}}">
              Profile</a></li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-divider"></li>
           <li><a class="dropdown-item icon-power mr-2" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form></li>
         </ul>
       </li>
     </ul>
   </nav>
   </header>
   <!--End topbar header-->