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

</div>
</div>



<div class="row" style="padding:10px;margin-left:0px;" >
<div class=" card card-small card-select-theme" >
<div class="card-body p-0 d-flex" >
<div class="col-md-8 col-sm-12 mb-12 " style="margin-top:2%">

<form  action="{{route('uploadmedia')}}" method="POST" enctype="multipart/form-data">
@csrf
<input class="button-add-media" type="file" name="file" />
<button class="button-add-media" >Ajouter Média</button>
</form>


</div>
</div>
</div>
</div>


<div class="row" style="padding:10px;margin-left:0px;" >
<div class=" card card-small card-select-theme" >
<div class="card-body p-0 d-flex" >
<div class="col-md-6 col-sm-12 mb-12 " style="margin-top:2%">

<form  action="{{route('uploadmedia')}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="col-md-6 col-sm-12 mb-12" style="margin-top:-1%">
<select id="formSelectMedia" class="form_select_media" onclick="filtreMedia()" aria-label="Default select example" style="width: 100%; height:38px; text-align:center">
<option class="type_media" value="all">Afficher tous les médias</option>
<option class="type_media" value="image">Images</option>
<option class="type_media" value="video">Vidéos</option>
<option class="type_media" value="application">Documents</option>
<option class="type_media" value="audio">Son</option>
</select>
</div>

</form>
</div>

<div class="col-md-6 col-sm-12 mb-12 " style="margin-top:2%">
<form  action="{{route('uploadmedia')}}" method="POST" enctype="multipart/form-data">
@csrf

<div class="col-md-6 col-sm-12 mb-12" style="margin-top:-1%">
<nobr><label>Rechercher &nbsp;</label> <input type="text" name="search" class="search" ></nobr>
</div>

</form>
</div>

</div>
</div>
</div>

<div class="row">

@isset($allmedia)
@foreach($allmedia as $media)
<!-- <img src="{{ url('storage/app/'.$media->name_media) }}" alt="" title="" /> -->


<div class="col-md-2 col-sm-12 mb-12" style="margin-top:20px">
<div class="stats-small stats-small--1 card card-small container_media" id="{{ $media->id }}">
<input type="hidden" value="{{ $media->id }}" id="idMedia" class="id_media">

<div class="header_img">
   <button  id="delete" class="deletebtn" data-mediaid="{{ $media->id }}" name="btnMedia" data-toggle="modal" data-target="#modalDeleteMedia" >Supprimer</button>
</div>

<div class="card-body p-0 d-flex card-media">
    <img src="{{ url('storage/app/'.$media->name_media) }}" alt="" title="" class="image" />
</div>

@if(str_contains($media->type_media, 'image') !== true)
<div class="footer_img">
  <h5>{{$media->name_media}}</h5>
</div>
@endif

</div>
</div>

@endforeach
@endisset


<!-- Modal -->
<div class="modal fade" id="modalDeleteMedia" tabindex="-1" role="dialog" aria-labelledby="modalDeleteMediaTitle" aria-hidden="true" data-target="#idMedia">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Supprimer Média</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vous Voulez vraiment supprimer ce Média ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" id="deleteMedia" class="btn btn-danger delete" data-dismiss="modal">Oui</button>
      </div>
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
</div>


</div>
</div>
</div>
</div>
</div>

<script>

$(".deletebtn").on('click', function(){
    var mediaid = $(this).attr("data-mediaid");
    $(".delete").off('click').on('click', function(event){ // Preserve other event handlers if any.
        console.log("mediaid: "+ mediaid);

        $.ajax({
               type: 'DELETE',
               url: "deletemedia/"+mediaid,
               dataType: 'json',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {id:mediaid,"_token": "{{ csrf_token() }}"},

               success: function (data) {
                      alert('success');
               },
               error: function (data) {
                    //  alert(data);
                    // var div_media = document.getElementById('81');
                // console.log("div media: "+ div_media.html());
                $('#'+mediaid).parent().remove();
               }
    });

    });
});


//  function deleteMedia(btnMedia){
//     // $(document).ready(function() {
//         var id = document.getElementById('delete').value ;

//          console.log("id: "+btnMedia);

    //      $( "#deleteMedia" ).click(function() {
    // // var classMedia = document.getElementByClassName('container_media');
    // console.log("id: "+ id);
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    //     });

// });

    //});
    // $.ajax(
    // {
    //     url: "deletemedia/"+id,
    //     type: 'delete', // replaced from put
    //     dataType: "JSON",
    //     data: {
    //         "id": id // method and token not needed in data
    //     },
    //     success: function (response)
    //     {
    //         console.log(response); // see the reponse sent
    //         // var div_media = document.getElementById('containerMedia');
    //         // div_media.parentNode.removeChild.remove(div_media);
    //         $('#containerMedia').html(data.allmedia);

    //     },
    //     error: function(xhr) {
    //      console.log(xhr.responseText); // this line will save you tons of hours while debugging
    //     // do something here because of error
    //    }
    // });
// }

</script>

<script>

function filtreMedia(){
    var idMedia= document.getElementById('formSelectMedia');
    var value = $('#formSelectMedia').find(":selected").val();
    console.log("value of filtre: "+ value);
    @foreach($allmedia as $media)
    var itemMedia = '{{$media->type_media}}' ;
    if(value != "all"){
    if(itemMedia.includes(value)){
        <?php $allmedia =  $media ; ?>
        console.log("media: "+ value + " -> " +'{!! $media !!}');
    }
    }else{
        <?php $allmedia =  $media ; ?>
        console.log("media: "+ value + " -> " +'{!! $media !!}');
    }
    @endforeach
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
