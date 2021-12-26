<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="description" content="D'luxxis  store.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="_token" content="{{csrf_token()}}" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="{{ asset('themes/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/boos4.min.css')}}" type="text/css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="{{ asset('public/css/boos4-1.min.css')}}" type="text/css" rel="stylesheet" media="screen">

<link href="{{ asset('css/store_tables.min.css')}}" type="text/css" rel="stylesheet" media="screen">
<link rel="stylesheet" id="main-stylesheet" href="{{ asset('master_assets/styles/shards-dashboards.1.1.0.min.css')}}">
<link rel="stylesheet" href="{{ asset('master_assets/styles/extras.1.1.0.min.css')}}">
<link href="{{ asset('css/store.css')}}" type="text/css" rel="stylesheet" media="screen">
<link href="{{ asset('css/editpic.css')}}" type="text/css" rel="stylesheet" media="screen">
<link href="{{ asset('css/blog.css')}}" type="text/css" rel="stylesheet" media="screen">
<link href="{{ asset('css/search.css')}}" type="text/css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="{{ asset('css/drap.css')}}" type="text/css" rel="stylesheet" media="screen">


<script type="text/javascript" src="{{ asset('js/buttons.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/all.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/strap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/shards.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sharrre.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>


</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
@include('layouts.admin.adminnavbarre')
<div class="app-main pr">
@include('layouts.admin.adminsidebar')
<div class="app-main__outer">
<div  class="app-main__inner app-body body-shadow {{ Auth::user()->body }}">
<div class="body_top">
@section('content')
@show
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{ asset('js/table/jquery.table.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/table/tables.view.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/input/search.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/back.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/blog.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/editpic.js')}}"></script>

<script type="text/javascript" src="{{ asset('themes/assets/scripts/main.js')}}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
</body>
</html>
