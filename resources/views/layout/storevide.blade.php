
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/mdb.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	

<style>
	.containerdash{margin-top:110px;}
	</style>
<style type="text/css">
        /* Custom Radio Button Start*/

.radiotextsty {
  color: #A5A4BF;
  font-size: 18px;
}

.customradio {
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: 0px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.customradio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 22px;
  width: 22px;
  background-color: white;
  border-radius: 50%;
  border:1px solid #BEBEBE;
}

/* On mouse-over, add a grey background color */
.customradio:hover input ~ .checkmark {
  background-color: transparent;
}

/* When the radio button is checked, add a blue background */
.customradio input:checked ~ .checkmark {
  background-color: white;
  border:1px solid #BEBEBE;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.customradio input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.customradio .checkmark:after {
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #A3A0FB;
}

/* Custom Radio Button End*/
</style>
<style>
.text_title_home_blod{font-family:"Segoe UI Bold","Segoe UI Web Bold","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Bold,"Helvetica Neue",Arial,sans-serif;color:#000000;font-size:27px;font-weight:blod;font-weight:500;padding:10px;}
.text_title_home_light{font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serifcolor:#000000;font-size:27px;font-weight:normal;font-weight:300;padding:10px;}
.menu_li{font-size:16px;font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serifcolor:#000000;font-weight:normal;font-weight:500;padding:10px;}

.btn1{font-size:16px;font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serifcolor:#000000;font-weight:normal;font-weight:500;padding:10px 10px 10px 10px;}
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
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
  <style>

* {
  box-sizing: border-box;
}


.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 9999999999999999999999999999999999999999999999;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 46%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: left;
  width: 80%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>    
</head>
<body>
@include('layout.navbare')


<main>


<div class="container">
@yield('content')
</div>
@yield('scripts')

</main>

    <script>
        var root_url = <?php echo json_encode(route('data')) ?>;
        var store = <?php echo json_encode(route('company.store')) ?>;
    </script>
    @stack('ajax_crud')

	
	

<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html> 