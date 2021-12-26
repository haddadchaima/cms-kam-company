@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
<div class="container">
<div class="row">
<div class="py-4 col-lg-12 col-md-12 col-sm-12 mb-4 row">
<div class="row" style="margin-left:0px; ">
<div class="col-md-6 col-sm-12 mb-12" >
<h3 class="page-title"style="" >CMS Kam-Company </h3>
@include('layouts.welcomeday')
</div>
<div class="col-md-6 col-sm-12 mb-12 text-right" >
<!-- <button> -->
<a href="{{ url('/admin/gotoaddcomponent') }}" class="button-add-comp"  role="button">Ajouter Composant</a>
<a href="{{ url('/admin/addtheme') }}" class="button-add-theme"  role="button">Ajouter Théme</a>
</div>

</div>



<div class="row">

<div class="col-md-3 col-sm-12 mb-12" onclick="window.location.href=''" style="margin-top:20px;">
<div class="stats-small stats-small--1 card card-small" style="padding: 20px;">
<div id="container_component" class="comp" style="height:550px">

</div>
</div>
</div>


<div class="col-md-9 col-sm-12 mb-12" onclick="window.location.href=''" style="margin-top:20px;">
<div class="stats-small stats-small--1 card card-small" style="padding: 20px;">
<div id="" class="comp" style="height:550px">

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
</div>


</div>
</div>
</div>
</div>
</div>

<script>

var style = document.createElement('style');
var parser = new DOMParser();

@foreach($components as $comp)

   document.getElementById("container_component").innerHTML += '{!! $comp->code_html !!}';
//    style.innerHTML += 'display: flex; width: 90%; justify-content: center;margin: 0 auto;';
   style.innerHTML += '{!! ($comp->code_css) !!}' ;
//    style.innerHTML += '.comp{width: 70%; height: 25px;}';
    document.head.appendChild(style);

@endforeach

</script>


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
