<div class="header_index app-header header-shadow {{ Auth::user()->header }}">
            <div class="app-header__logo">
                <div class="logo-src" style="width:140px;height:43px;">
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>

            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
        
        
            
            <div class="app-header__content">
                <div class="app-header-left">
                    <div  class="filter">
                        <select id="id_filter" name="name">
                            <option style="background-color:transparent">All</option>
                            <option style="background-color:transparent" value="category">category</option>
                            <option  style="background-color:transparent" value="subcategory">subcategory  </option>
                            <option  style="background-color:transparent" value="product">product  </option>
                            <option  style="background-color:transparent" value="user">user  </option>    
                        </select>
                    </div>
                    <div class="search-wrapper" >
                        <div class="input-holder ipusearch">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                        <ul id="resultsearch" class="list-group" ></ul> 
                    </div>

              
                    <ul class="header-menu nav nav2">
                      
                        <li class="dropdown nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                






<div class="btn-group">
<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
<img class="user-avatar rounded-circle mr-2" src="{{ asset('public/profile_pic/admin/'.Auth::user()->image) }}" style="width:40px;height:40px;border-radius:50%;"alt="User Avatar">
<span class="d-none d-md-inline-block"> {{ Auth::user()->firstname }}</span>
<i class="fa fa-angle-down ml-2 opacity-8"></i>
</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<a href="" type="button" tabindex="0" class="dropdown-item">Profile</a>
<a href="" type="button" tabindex="0" class="dropdown-item">Change info</a>
<a href="" type="button" tabindex="0" class="dropdown-item">Change password</a>
<a href="" type="button" tabindex="0" class="dropdown-item">Account settings</a>
<div tabindex="-1" class="dropdown-divider"></div>
<button href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" type="button" tabindex="0" class="dropdown-item">Logout</button>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</div>
</div>
</div>
                             
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
       