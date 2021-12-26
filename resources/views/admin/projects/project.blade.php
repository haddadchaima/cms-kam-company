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
<div class=" card card-small card-add-project" >
<div class="card-body p-0 d-flex card-add-project" >
<div class="col-md-12 col-sm-12 mb-12 card-add-project" >

<form  action="{{route('createProject')}}" method="POST" enctype="multipart/form-data">
@csrf
<table class="form-project" >
<tr><th><label>Nom de Projet &nbsp;</label> </th><td><input class="" type="text" name="name_project" /><br></td></tr>
<tr><th><label>Description &nbsp;</label> </th><td><input class="" type="text" name="description" /><br></td></tr>
<tr><th><label>Catégorie</label></th><td><select class="form-select" aria-label="Default select example" style="width: 100%; height:38px; text-align:center" name="category_project">
<option id="">Voyages</option>
<option id="">Education</option>
<option id="">Commerce</option>
<option id="">Food</option>
</select>  </td></tr>
<tr><th><label>Nombre de Théme &nbsp;</label> </th><td><input class="" type="number" name="nbr_theme"/><br> </td></tr>
<tr><th><label>Nom de Site &nbsp;</label> </th><td><input class="" type="text" name="name_website"/><br> </td></tr>
</table>
<button class="button-add-media" >Créer Projet</button>
</form>


</div>
</div>
</div>
</div>
<!--  -->

<div class="row">
@foreach($allproject as $project)
<div class="col-md-3 col-sm-12 mb-12" data-toggle="modal" data-target="#modalChoose" >
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex" id="border-left">
<div class="d-flex flex-column m-auto">
<div class="stats-small__data text-center">

<div class="col-lg-12 col-md-12 col-sm-12">
    <img src="{{ asset('public/image/undraw/web_devices.svg') }}" style="width:100px;height:100px;margin-top:10px;">
</div>
<h6 class="stats-small__value count my-3">{{$project->nbr_theme}}</h6>
<span class="stats-small__label text-uppercase textnormal">{{$project->name}}</span>
<div class="space"></div>
</div>
</div>
</div>
</div>
</div>

@endforeach


<!-- Modal -->
<div class="modal fade" id="modalChoose" tabindex="-1" role="dialog" aria-labelledby="modalChooseTitle" aria-hidden="true" data-target="#idMedia">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Etablir votre Théme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <center>
      <button type="button" id="" onclick="window.location.href='{{ url('/admin/theme/')}}/'+{{$project->id}}" class="btn-choose btn btn-success choose-theme" data-dismiss="modal">Choisir Théme</button><br>
      <button type="button" id="" onclick="window.location.href='{{ url('/admin/listcomponent/')}}'" class="btn-choose btn btn-success choose-cmp" data-dismiss="modal">Choisir Composant</button>
        </center>
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
