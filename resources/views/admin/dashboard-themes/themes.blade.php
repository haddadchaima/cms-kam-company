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
<div class="col-md-4 col-sm-12 mb-12 text-right" >
<!-- <button> -->
<button  class="button-add-theme" data-target="#addTheme" data-toggle="modal">Ajouter Théme</button>

</div>
<form id="formTheme"  action="{{route('addtheme')}}" method="POST" enctype="text/plain">
      @csrf
<!-- Modal -->
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="modal fade" id="addTheme" tabindex="-1" role="dialog" aria-labelledby="addThemeTitle" aria-hidden="true" data-target="#idMedia">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Théme</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

      <div class="row">
              <div class="form-group col-md-12">
      <label>Description Théme &nbsp;</label><input id="descTheme" type="text" name="description_theme"></br>
      </div>
      </div>

      <div class="row">
              <div class="form-group col-md-12">

             <select id="typeTheme" name="type_theme" class="form-select" aria-label="Default select example" style="width: 75%; height:38px; text-align:center">
        <option id="">Voyages</option>
        <option id="">Education</option>
        <option id="">Commerce</option>
        <option id="">Food</option>
        </select>
        </div>
    </div>
    <div class="row">
              <div class="form-group col-md-12">
      <label>Importer Théme &nbsp;</label><input id="pathTheme" type="file" name="path_theme"></br>
</div>
</div>

<div class="row">
              <div class="form-group col-md-12">
      <label>Capture d'ecran Théme</label><input id="pathScreenshot" type="file" name="path_screenshot_theme"></br>
      </div>
      </div>
      <div class="row">
              <div class="form-group col-md-12">
      <label>Prix Théme &nbsp;</label><input id="priceTheme" type="text" name="price_theme"></br>
      </div>
      </div>
      <div class="row">
              <div class="form-group col-md-12">
      <button class="choose-theme" >Enregistrer Théme</button><br>
      </div>
      </div>

    </div>
  </div>
</div>
</form>

</div>

<div class="row" style="padding:10px;margin-left:0px;" >
<div class=" card card-small card-select-theme" >
<div class="card-body p-0 d-flex" >
<div class="col-md-2 col-sm-12 mb-12 " style="margin-top:2%">

<h6>Choisir Catégorie: </h6>


</div>

<div class="col-md-2 col-sm-12 mb-12" style="margin-top:1.5%">
<select class="form-select" aria-label="Default select example" style="width: 100%; height:38px; text-align:center">
<option id="">Voyages</option>
<option id="">Education</option>
<option id="">Commerce</option>
<option id="">Food</option>
</select>
</div>

<div class="col-md-8 col-sm-12 mb-12 text-right" style="margin-top:2%;" >

<span class="type-theme-span">Tous</span>
<span class="type-theme-span">Gratuit</span>
<span class="type-theme-span">Premium</span>

</div>

</div>
</div>
</div>


<div class="row">
@foreach($themes as $theme)
<div class="col-md-4 col-sm-12 mb-12 theme-container" onclick="window.location.href=''" style="margin-top:20px" >
<div class="stats-small stats-small--1 card card-small">
<div class="card-body p-0 d-flex card-theme"  >
<!-- <div class="d-flex flex-column m-auto"> -->


<div class="col-md-12 info-theme ">
 <div class="container-theme">
 <img id="screenshot" src="{{ url('storage/app/'.$theme->path_screenshot_theme) }}" alt="" title="" class="image" />
</div>
<span id="description" class="text-left" style="float:left;">{{ $theme->description_name }}</span>
<h6 id="price" class="text-right" style="color: #6cb2eb; font-weight: bold"> {{ $theme->price_theme}}</h6>
</div>



<!-- </div> -->
</div>
</div>
</div>

@endforeach
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
//  $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

    // $(".choose-theme").click(function(e){

    //     e.preventDefault();

    //     var data = $(this).serialize();
    //     console.log("data: "+data);
    //     var url = '{{route('addtheme')}}';

    //     $.ajax({
    //        url:url,
    //        method:'POST',
    //        data:data,
    //        success:function(response){
    //           if(response.success){
    //               alert(response.message) //Message come from controller
    //           }else{
    //               alert("Error")
    //           }
    //        },
    //        error:function(error){
    //           console.log(error)
    //        }
    //     });
	// });
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".button-add-theme").on('click', function(){
        // $("#formTheme").show();
    })
$(".choose-theme").on('click', function(e){
    // e.preventDefault();
    var desc = $("#descTheme").val();
    var price = $("#priceTheme").val();
    var path = $("#pathTheme").val();
    var screenshot = $("#pathScreenshot").val();
console.log(desc);
// $("#formTheme").hide();
    var url = '{{route('addtheme')}}';

    // $.ajax({
    //        url:url,
    //        method:'POST',
    //        data: $("#formTheme").serialize(),

    //        success:function(data){
    //         $('div.theme-container').html(data);

    //        }
    //     });

    // $("#screenshot").attr("src", screenshot);
    // $("#description"). ;
    // $("#price"). ;
    // $("#")

//     $('div.theme-container').fadeOut();
//     $('div.theme-container').load(url, function() {
//       $('div.table-container').fadeIn();
//   });


    // window.location = "/addtheme";

});

function refreshData(){

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
