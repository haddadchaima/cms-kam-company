


<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar navbar navbar-expand-lg">
	  
	  
	  <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{route('index.store')}}">
        <strong class="blue-text">STORE-TEC</strong>
      </a>

      <!-- Collapse -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <!-- Links -->

        <!-- Left -->
<div class="collapse navbar-collapse" id="main_nav">
<ul class="navbar-nav">
@foreach($Category as $category)
<li class="nav-item dropdown">
<a class="nav-link  dropdown-toggle" href="{{ route('category.view', $category->id) }}">{{$category->name}}</a>
<ul class="dropdown-menu" style="margin-left:-20px;margin-top:10px;">
@if(count($category->subcategory))
@include('layout.subCategoryList',['subcategory' => $category->subcategory])
@endif
</ul>
</li>
@endforeach
</ul>
	
	
					
					
					


<ul class="navbar-nav ml-auto">

<li class="nav-item">
<div class="dropdown">
                <button style="margin-right:-10px;margin-top:12px;width:62px;text-align:centre;"type="button" class="btn nav-link rounded waves-effect btn1" data-toggle="dropdown">
                    <i style="margin-right:0px;"class="fa fa-shopping-cart" aria-hidden="true"></i> 
					<span style="position:absolute;margin-right:0px;margin-top:2px;"class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu" style="margin-top:40px;margin-left:-20px;">
                    <div class="row total-header-section" style="">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>

                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['product_price'] * $details['quantity'] ?>
                        @endforeach

                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail" style="">
                            <div class="col-lg-12 row" >
                                <div class="col-lg-3 col-sm-3 col-3 cart-detail-img">
                                    <img src="{{ asset('public/photo/products_logo/'.$details['photo']) }}" style="min-width:50px;height:50px;"/>
                                </div>
                                <div class="col-lg-9 col-sm-9 col-9 cart-detail-product">
                                    <p>{{ $details['product_name'] }}</p>
                                    <span class="price text-info"> {{ $details['product_price'] }} {{ $details['product_currency'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row" style="">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
           </li>


		
                            @guest
                            
							    <li class="nav-item">
		                        <a href="{{route('login')}}">
								<button type="button" class="btn nav-link rounded waves-effect btn1" style="margin-top:12px;width:50px;text-align:centre;">
                                <i class="fa fa-user"></i>
                                </button>
								</a>
                                </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Register') }}</a>
                                </li>
                            @endif
                           @else
                          
                          
                            <li class="nav-item dropdown">
                             <a style="margin-top:12px;margin-right:-10px;width:60px;text-align:centre;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <img src="{{ asset('public/profile_pic/user/'.Auth::user()->image) }}" style="width:30px;height:30px;border-radius:50%;"> <span class="caret"></span>
                                </a>
<style>
.dropdown1{
    float:right;
    padding-right: 10px;
}
.dropdown1 .dropdown1-menu{
    padding:10px;
    top:30px !important;
    width:280px !important;
	max-width:100px;
    left:-10px !important;
    box-shadow:0px 5px 30px black;
}
.dropdown1-menu:before{
    content: " ";
    position:absolute;
    top:-20px;
    right:65px;
    border:10px solid transparent;
    border-bottom-color:#fff;
}
</style>
								
								
                                <div style="margin-top:40px;margin-left:-50px;max-width:100px;padding:10px;"class="dropdown1-menu dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                        {{ __('My dashboard') }}
                                    </a>
									<a class="dropdown-item" href="{{route('user.profile')}}">
                                        {{ __('My profile') }}
                                    </a>
									<a class="dropdown-item" href="{{route('user.request')}}">
                                        {{ __('My requests') }}
                                    </a>
									<a class="dropdown-item" href="{{route('user.setting')}}">
                                        {{ __('Setting') }}
                                    </a>
									
									<a class="dropdown-item" href="{{url('user/logout')}}">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest	
		
		
		
		
		
	

	
		
			   
<li class="nav-item">
<button onclick="openSearch()" type="button" class="openBtn btn nav-link rounded waves-effect btn1" style="margin-top:12px;width:50px;text-align:centre;">
<i class="fa fa-search"></i>
</button>
</li>	
		
<li class="nav-item dropdown">
<a style="margin-top:12px;margin-right:-10px;width:60px;text-align:centre;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Devise ( EUR )<span class="caret"></span>
</a>
<div style="margin-top:20px;margin-left:0px;max-width:100px;padding:10px;"class="dropdown1-menu dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">							
<a class="dropdown-item" href="{{route('index.store')}}">EUR ( € )</a>
<a class="dropdown-item" href="{{route('home.store.dolar', 'dol')}}">DOL ( $ )</a>
</div>
</li>		
		
		
		
		
		



						

		 
		 
		 
        </ul>

      </div>

    </div>
  </nav>