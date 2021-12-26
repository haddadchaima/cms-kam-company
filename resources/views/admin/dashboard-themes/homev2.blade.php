@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
<div class="container">
<div class="row">
<div class="py-4 col-lg-12 col-md-12 col-sm-12 mb-4 row">
<div class="row" style="margin-left:0px;">
<div class="col-md-8 col-sm-12 mb-12">
<h3 class="page-title"style="" >CMS Kam-Company </h3>
</div>


<div class="col-md-4 col-sm-12 mb-12 padding0 text-right">
<a href="{{route('settings.index')}}"><button class="btn_dachboard"><i class="fa fa-cog floatleftincons"></i> Settings</button></a>
<div class="btn-group">
<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn_dachboard_auto">
@foreach($language as $post)
<img class="user-avatar rounded-circle mr-2" src="{{ asset('photo/language_logo/'.$post->photo) }}" style="width:30px;height:30px;"alt="User Avatar">
@endforeach</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
@foreach($language_list as $post)
<form class="p-0 btn" action = "{{ route('admin.update.languages')}}" method = "POST">
@csrf
<div class="btn-group">
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="languages" value="{{$post->id}}"/>
<button type="submit" class="dropdown  p-0 btn">
<a type="button" tabindex="0" class="dropdown-item">
<img class="user-avatar rounded-circle mr-2" src="{{ asset('photo/language_logo/'.$post->photo) }}" style="width:40px;height:40px;border-radius:50%;"alt="User Avatar">
{{$post->name}}
</a>
</button>
</div>
</form>
@endforeach
</div>
</div>

<div class="btn-group">
<button data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn_dachboard_auto2">
@if(Auth::user()->dashboard=='1')
Version 1
@elseif(Auth::user()->dashboard=='2')
Version 2
@elseif(Auth::user()->dashboard=='3')
Version 3
@endif
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<form class="p-0 btn" action = "{{ route('admin.update.dashboard')}}" method = "POST">
@csrf
<div class="btn-group">
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="dashboard" value="1"/>
<button type="submit" class="dropdown  p-0 btn">
<a type="button" tabindex="0" class="dropdown-item">
Version 1
</a>
</button>
</div>
</form>
<form class="p-0 btn" action = "{{ route('admin.update.dashboard')}}" method = "POST">
@csrf
<div class="btn-group">
<input type="hidden" name="_method" value="PATCH">
<input type="hidden" name="dashboard" value="2"/>
<button type="submit" class="dropdown  p-0 btn">
<a type="button" tabindex="0" class="dropdown-item">
Version 2
</a>
</button>
</div>
</form>
</div>
</div>

</div>
</div>


<div class="row" style="padding:10px;margin-left:0px;">
<div class="stats-small stats-small--1 card card-small background-light1">
<div class="card-body p-0 d-flex">
<div class="col-md-6 col-sm-12 mb-12">
<div class="stats-small__data textleft" style="margin-top:50px;">
<h6 class="stats-small__value count my-3">Hello {{ Auth::user()->firstname }}</h6>
<span class="stats-small__label text-uppercase textnormal">{{ Auth::user()->email }}</span>
 <h3 class="textnormal">Role :
@if(Auth::user()->role=='1')
Admin
@elseif(Auth::user()->role=='2')
Super admin
@elseif(Auth::user()->role=='3')
Read-Only Admin
@endif
</h3>
</div>
</div>

<div class="col-md-6 col-sm-12 mb-12">
<img src="{{ asset('image/undraw/about_me.svg')}}" style="width:200px;height:200px;">
</div>
</div>
</div>
</div>
</div>



<div class="page-header no-gutters col-md-8 col-sm-12 mb-12">
@if(session()->get('success'))
<div class="modal fade" id="overlay">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body" style="text-align:center;">
<label class="stats-small__value count my-3 textblodfull">Welcome</label>
<img style="width:140px;height:40px;" id="main-logo" class="d-inline-block align-top mr-1"  src="{{ asset('photo/logo/my-shop-logo-1583225903.jpg')}}" alt="Logo Dashboard" >
<p class="textnormalfull" style="font-size:20px;color:#000000;">
{{ session()->get('success') }}</p>
</div>
</div>
</div>
</div>
@endif
</div>





<div class="row">
<div class="col-md-8 col-sm-12 mb-12">
<div class="card card-small h-100">
<div class="card-header border-bottom">
<h6 class="m-0">Our clients</h6>
</div>
<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
</div>
<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:200%;height:100%;left:0; top:0"></div>
</div>
</div>
<canvas id="chart-line" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
</div>
</div>


<div class="col-lg-4 col-sm-12 mb-12">
<div class="card card-small h-100">
<div class="card-header border-bottom">
<h6 class="m-0">Users by gender</h6>
</div>
<div class="card-body d-flex py-0">
<canvas height="220"id="pieChart"></canvas>
 </div>
<div class="card-footer border-top">
<div class="row">
<div class="col text-right view-report">
<a href="#">Full report &rarr;</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="space"></div>
<div class="space"></div>

<div class="row">

<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href='{{route('category.index')}}'">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left1">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('image/undraw/user_flow.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">{{count($Category)}}</h6>
<span class="stats-small__label text-uppercase textnormal">Category</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href='{{route('user.index')}}'">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('image/undraw/web_devices.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">{{count($Users_list)}}</h6>
<span class="stats-small__label text-uppercase textnormal">Users</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href='{{route('news.index')}}'">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left1">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('image/undraw/work_chat.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">{{count($Blog)}}</h6>
<span class="stats-small__label text-uppercase textnormal">Blog</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>



<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href='{{route('contact.index')}}'">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('image/undraw/world.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">{{count($Contact)}}</h6>
<span class="stats-small__label text-uppercase textnormal">Contact</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>
</div>





<div class="space"></div>
<div class="space"></div>



<div class="row">
<div class="col-md-12 col-sm-12 mb-12">
<div class="card card-small h-100">
<div class="card-header border-bottom">
<h6 class="m-0">Last products</h6>
</div>
<div class="space"></div>
<div class="card-body d-flex py-0 row">
<table class="table table-striped" style="width:100%">
<thead>
<tr>
<th>Name</th>
<th>Price</th>
<th style="text-align:center;">Etat</th>
<th style="text-align:center;">Offer</th>
</tr>
</thead>
<tbody id="posts-crud">
@foreach($Product as $post)

<tr id="post_id_{{ $post->id }}">
<td>
<a href="{{ route('product.show', $post->id) }}">
<img class="user-avatar rounded-circle mr-2" src="{{ asset('photo/products_logo/'.$post->photo) }}" style="width:40px;height:40px;border-radius:50%;"alt="product logo">
{{ $post->product_name  }}
</a>
</td>
<td>{{ $post->product_price  }} {{ $post->product_currency  }}</td>
<td style="text-align:center;">
@if($post->active =='1')
<span class="active_back">active</span>
@else
<span class="blocked_back">blocked</span>
@endif
</td>


<td style="text-align:center;">
@if($post->remise=='0')
<i class="fa fa-star" style="color:#c0c0c0;" aria-hidden="true"></i>
@else
<i class="fa fa-star" style="color:#229902;" aria-hidden="true"></i>
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="space"></div>
<div class="space"></div>

</div>
</div>



</div>
</div>
</div>




<script>
	//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
type: 'pie',
data: {
labels: ["Company ( 4 )", "Individual ( 4 )"],
datasets: [{
data: [3, 5],
backgroundColor: ["#052ab4", "#6a84e8"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
}]
},
options: {
responsive: true
}
});
	</script>
<script>
		$('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 3000);
</script>




<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
                datasets: [{

                    data: [{{$Userscountmale01->count()}}, {{$Userscountmale02->count()}}, {{$Userscountmale03->count()}}, {{$Userscountmale04->count()}}, {{$Userscountmale05->count()}}, {{$Userscountmale06->count()}}, {{$Userscountmale07->count()}}, {{$Userscountmale08->count()}}, {{$Userscountmale09->count()}}, {{$Userscountmale10->count()}}, {{$Userscountmale11->count()}}, {{$Userscountmale12->count()}}],
                    label: "Male",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [{{$Userscountfemale01->count()}}, {{$Userscountfemale02->count()}}, {{$Userscountfemale03->count()}}, {{$Userscountfemale04->count()}}, {{$Userscountfemale05->count()}}, {{$Userscountfemale06->count()}}, {{$Userscountfemale07->count()}}, {{$Userscountfemale08->count()}}, {{$Userscountfemale09->count()}}, {{$Userscountfemale10->count()}}, {{$Userscountfemale11->count()}}, {{$Userscountfemale12->count()}}],
                    label: "Female",
                    borderColor: "#3cba9f",
                    fill: false
                }]
            },
            options: {title: {
                    display: true,
                    text: 'Clients year {{date("Y")}}'
                }
            }
        });
    });
</script>

@endsection
