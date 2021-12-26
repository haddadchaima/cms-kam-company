<!DOCTYPE html>
<html lang="en">

<head>
<title>@yield('title')</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
<link href="{{ asset('public/bootstrap/css/simple-sidebar.css') }}" rel="stylesheet">
<style>
.showbox1{background-color:#ffffff;padding:20px 20px 20px 20px;}
.titleapp{margin-top:20px;padding:0px 0px 20px 0px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.lastinfo{color:#3931d8;}
.border_list{border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
.dashhome{background-color:#ffffff;border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
#dashhomelink{color:#09029c;}
.dashhometitre{color:#000000;font-size:25px;}
.textblod{color:#000000;font-size:15px;font-weight:blod;font-weight:700;}
.textnormal{color:#000000;font-size:15px;font-weight:normal;font-weight:400;}
.textnormalbtn{color:#ffffff;font-size:15px;font-weight:normal;font-weight:400;}
.navbarleft{background-color:#3c4b64;}
.navbarleftlink{background-color:#3c4b64;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.navbarleftlink:hover{background-color:#321fdb;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.sidebar-heading{color:#000000;font-size:13px;font-weight:blod;font-weight:700;}
#menu-toggle{color:#7f7f8a;}
#menu-toggle:hover{color:#a0a0a3;}
.pagetitle{color:#000000;font-size:20px;font-weight:normal;font-weight:400;}
#pagetitleprimerlink{color:#887ee5;font-size:15px;font-weight:normal;font-weight:400;}
#pagetitlesecondelink{color:#a0a0a3;font-size:15px;font-weight:normal;font-weight:400;}
</style>
    <style type="text/css">
        
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

</style>
    <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">EDUCATION APP</div>
      <div class="list-group list-group-flush">
        <a href="{{url('user/dashboard')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="{{url('user/profile')}}" class="list-group-item list-group-item-action bg-light">My profile</a>
        <a href="{{route('user.evaluation')}}" class="list-group-item list-group-item-action bg-light">My Evaluation</a>
        <a href="{{url('user/setting')}}" class="list-group-item list-group-item-action bg-light">Setting</a>
        <a href="{{route('user.section')}}" class="list-group-item list-group-item-action bg-light">Section</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);">
        <a class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <!--<li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>-->
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ ucfirst(Auth()->user()->firstname) }}
			  <img src="{{ asset('public/profile_pic/user/'.ucfirst(Auth()->user()->image)) }}" style="width:30px;height:30px;border-radius:50%;">

              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('user/profile')}}">Profile</a>
                <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      @section('content')
      @show
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('public/bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
