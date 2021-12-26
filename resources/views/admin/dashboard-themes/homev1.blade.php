@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
<div class="container">
<div class="row">
<div class="py-4 col-lg-12 col-md-12 col-sm-12 mb-4 row">
<div class="row" style="margin-left:0px;">
<div class="col-md-8 col-sm-12 mb-12">
<h3 class="page-title"style="" >CMS Kam-Company </h3>
@include('layouts.welcomeday')
</div>


</div>


<div class="row" style="padding:10px;margin-left:0px;">
<div class="stats-small stats-small--1 card card-small" >
<div class="card-body p-0 d-flex">
<div class="col-md-6 col-sm-12 mb-12">
<div class="stats-small__data text-center" style="margin-top:50px;">
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
<img src="{{ asset('public/image/undraw/all_the_data.svg')}}" style="width:200px;height:200px;">
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
<img style="width:140px;height:40px;" id="main-logo" class="d-inline-block align-top mr-1"  src="{{ asset('public/photo/logo/my-shop-logo-1583225903.jpg')}}" alt="Logo Dashboard" >
<p class="textnormalfull" style="font-size:20px;color:#000000;">
{{ session()->get('success') }}</p>
</div>
</div>
</div>
</div>
@endif
</div>
</div>






<div class="row">

<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href=''">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left1">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/image/undraw/user_flow.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">10</h6>
<span class="stats-small__label text-uppercase textnormal">Category</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href=''">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/image/undraw/web_devices.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">10</h6>
<span class="stats-small__label text-uppercase textnormal">Users</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href=''">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left1">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/image/undraw/work_chat.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">10</h6>
<span class="stats-small__label text-uppercase textnormal">Blog</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>



<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href=''">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">
<div class="col-lg-12 col-md-12 col-sm-12"><img src="{{ asset('public/image/undraw/world.svg') }}" style="width:100px;height:100px;margin-top:10px;"></div>
<h6 class="stats-small__value count my-3">10</h6>
<span class="stats-small__label text-uppercase textnormal">Contact</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>
</div>




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
@endsection
