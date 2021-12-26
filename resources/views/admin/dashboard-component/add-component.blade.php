@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
<div class="container">
<div class="row">
<div class="py-4 col-lg-12 col-md-12 col-sm-12 mb-4 row">
<div class="row" style="margin-left:0px; ">
<div class="col-md-8 col-sm-12 mb-12" >
<h3 class="page-title"style="" >CMS Kam-Company </h3>
@include('layouts.welcomeday')
</div>

</div>



<div class="row" style="padding:10px;margin-left:0px;" >

<div class=" card card-small card-select-theme" >
<form action = "{{route('addcomponent')}}" method = "POST">
@csrf
<div class="card-body p-0 d-flex" >


<div class="col-md-4 col-sm-12 mb-12 " style="margin-top:2%">
    <label>Nom de Composant &nbsp;</label><input type="text" name="name_cmp">
</div>

<!-- <div class="col-md-2 col-sm-12 mb-12 " style="margin-top:2%">
<h5><a href="">Design</a></h5>
</div> -->

<div class="col-md-8 col-sm-12 mb-12 text-right" style="margin-top:1.5%">

<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

<!-- <div class="col-md-9 col-sm-12 mb-12 text-right" style="margin-top:1.5%"> -->
<button class="button-import-theme">Enregistrer Composant</button>
<button class="button-import-theme">Importer Théme</button>
</div>




</div>
</div>
</div>


<div class="row">

<div class="col-md-12 col-sm-12 mb-12"  style="margin-top:20px">
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex card-create-cmp"  >
<!-- <div class="d-flex flex-column m-auto"> -->
<div class="col-md-8 col-sm-12 mb-12 " style="margin:1.5%; background-color:#f1f1f1;">

<div class="tabs-code ">
  <span class="tab-code span2" onclick="openCode('html')">HTML</span>
  <span class="tab-code span2" onclick="openCode('css')">CSS</span>
  <span class="tab-code span2" onclick="openCode('js')">JS</span>
</div>

<div id="html" class="code">
<h6>Code Html</h6>
<textarea onchange="preview()"  name="code_html" id="codeHTML" style="width:100%; height:40vh; background-color:#f1f1f1;margin-right:1.5%;margin-top:1.5%;" >
</textarea>
</div>

<div id="css" class="code" style="display:none">
<h6>Code css</h6>
<textarea onchange="preview()" name="code_css" id="codeCSS" style="width:100%; height:40vh; background-color:#f1f1f1;margin-right:1.5%;margin-top:1.5%;">
</textarea>
</div>

<div id="js" name="code_js" class="code" style="display:none">
<h6>Code javascript</h6>
<textarea style="width:100%; height:40vh; background-color:#f1f1f1;margin-right:1.5%;margin-top:1.5%;">
</textarea>
</div>

</div>

<div id="preview" class="col-md-3 col-sm-12 mb-12 " style="margin:1.5% ;background-color:#ECF0F1">

</div>


</div>
</div>
</div>


</div>


<div class="page-header no-gutters col-md-8 col-sm-12 mb-12">
</form>

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

function preview(){

var divHTML = document.getElementById("codeHTML").value;
var divCSS = document.getElementById("codeCSS").value;
// var divPreview = document.getElementByID("preview") ;
// alert(divHTML);
document.getElementById("preview").innerHTML = divHTML;

var style = document.createElement('style');
  style.innerHTML = divCSS;
  document.head.appendChild(style);

}

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
