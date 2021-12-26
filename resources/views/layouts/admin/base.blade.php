<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
<link rel="stylesheet" href="{{ asset('public/css/boos4.min.css')}}" type="text/css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="{{ asset('public/css/boos4-1.min.css')}}" type="text/css" rel="stylesheet" media="screen">
<link href="{{ asset('public/themes/main.css')}}" rel="stylesheet"></head>
<link href="{{ asset('public/themes/main2.css')}}" rel="stylesheet"></head>

<link href="{{ asset('public/css/dataTables.bootstrap5.min.css')}}" type="text/css" rel="stylesheet" media="screen">
<link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('public/master_assets/styles/shards-dashboards.1.1.0.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/master_assets/styles/extras.1.1.0.min.css')}}"> 
<script async defer src="{{ asset('public/js/buttons.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    
    
<style>
.position_fixed{z-index:99999999;position:fixed;background-color:#c0c0c0;padding:10px;width:100%;text-align:center;}
#subcateg_title{font-size:20px;font-weight:bold;font-weight:600;}
#img_book{width:90%;height:250px;}
#textarea-height{height:150px;}
.background1{background-color:#9e844a;}
#border-left1{border-left:7px solid #9e844a;background-color:#f1f5f9;}
#border-left1:hover{border-left:7px solid #9e844a;background-color:#ffffff;}

#border-left2{border-left:7px solid #d3bc8a;background-color:#f1f5f9;}
#border-left2:hover{border-left:7px solid #d3bc8a;background-color:#ffffff;}
</style>
<style>
#input_search {
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#filter_list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
</style>
<style>
.no-results{font-size:25px;font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serif}
.btn-switch{text-align:center;background-color:#f1f1f1;border-radius:0%;padding:7px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}
.btn-switch i{margin-top:5px;margin-left:0px;color:#a0a0a0;}
.btn-switch:hover i{margin-top:5px;color:#858585;}

.btn-switch-active{text-align:center;background-color:#c0c0c0;border-radius:0%;padding:7px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}
.btn-switch-active i{margin-top:5px;margin-left:0px;color:#a0a0a0;}
.btn-switch-active:hover i{margin-top:5px;color:#858585;}

.float_right{float:right;}
.floatleftincons{float:left;margin-top:5px;}
.padding0{padding:0px;}
.btn_dachboard{border-radius:20px;transition:1s;width:160px;padding:10px;background-color:#ffffff;border:1px solid #f1f1f1;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_dachboard:hover{transition:1s;width:160px;padding:10px;background-color:#9e844a;border:1px solid #9e844a;color:#ffffff;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.floatright{float:right;}
.textcenter{text-align:center;}
.btn_slider_edit{text-align:center;margin-top:-20px;}
.color1{color:#ffffff;}
</style>
<style>
.bg6{transition:2s;opacity:3;min-height:400px;text-align:center;background-image: url('{{ asset('public/photo/slider/10.jpg')}}');background-repeat: no-repeat;background-size: 100% 100%;}
.bg6:hover{opacity:0.8;min-height:400px;text-align:center;background-image: url('{{ asset('public/photo/slider/10.jpg')}}');background-repeat: no-repeat;background-size: 100% 100%;
transition: all .5s cubic-bezier(.8,.5,.2,1.4);
    transform: scale(1);
    filter: blur(1px);}


.bg8{transition:2s;opacity:3;min-height:200px;text-align:center;background-image: url('{{ asset('public/photo/slider/slide-3-1.jpg')}}');background-repeat: no-repeat;background-size: 100% 100%;}
.bg8:hover{transition:2s;opacity:0.8;min-height:200px;text-align:center;background-image: url('{{ asset('public/photo/slider/slide-3-1.jpg')}}');background-repeat: no-repeat;background-size: 100% 100%;transition: all .5s cubic-bezier(.8,.5,.2,1.4);
    transform: scale(1);
    filter: blur(1px);}

.div_col{transition:2s;border:2px solid #021a96;border-radius:40px 0px 40px 0px;padding:20px;min-height:250px;background-color:#2095b6;}
.div_col:hover{transition:2s;border:2px solid #9e844a;border-radius:40px 0px 40px 0px;padding:20px;min-height:350px;}
.div_col .div_col_text{margin-top:0px;transition:2s;color:#ffffff;}
.div_col:hover .div_col_text{margin-top:10px;transition:2s;}

.div_col_img_view{width:50px;height:50px;margin-top:-70px;transition:2s;}
.div_col:hover .div_col_img .div_col_img_view{width:120px;height:120px;margin-top:0px;transition:2s;}



.div_col1{transition:2s;border:2px solid #021a96;border-radius:40px 0px 40px 0px;padding:20px;min-height:250px;background-color:#9e844a;}
.div_col1:hover{transition:2s;border:2px solid #9e844a;border-radius:40px 0px 40px 0px;padding:20px;min-height:350px;}
.div_col1 .div_col_text1{margin-top:0px;transition:2s;color:#ffffff;}
.div_col1:hover .div_col_text1{margin-top:10px;transition:2s;}

.div_col_img_view1{width:50px;height:50px;margin-top:-70px;transition:2s;}
.div_col1:hover .div_col_img1 .div_col_img_view1{width:120px;height:120px;margin-top:0px;transition:2s;}



.div_col3{transition:2s;border:2px solid #021a96;border-radius:40px 0px 40px 0px;padding:20px;min-height:250px;background-color:#2095b6;}
.div_col3:hover{transition:2s;border:2px solid #9e844a;border-radius:40px 0px 40px 0px;padding:20px;min-height:350px;}
.div_col3 .div_col_text3{margin-top:0px;transition:2s;color:#ffffff;}
.div_col3:hover .div_col_text3{margin-top:10px;transition:2s;}

.div_col_img_view3{width:50px;height:50px;margin-top:-70px;transition:2s;}
.div_col3:hover .div_col_img3 .div_col_img_view3{width:120px;height:120px;margin-top:0px;transition:2s;}






.div_col5{transition:2s;border:2px solid #021a96;border-radius:40px 0px 40px 0px;padding:20px;min-height:250px;background-color:#9e844a;}
.div_col5:hover{transition:2s;border:2px solid #9e844a;border-radius:40px 0px 40px 0px;padding:20px;min-height:350px;}
.div_col5 .div_col_text5{margin-top:0px;transition:2s;color:#ffffff;}
.div_col5:hover .div_col_text5{margin-top:10px;transition:2s;}

.div_col_img_view5{width:50px;height:50px;margin-top:-70px;transition:2s;}
.div_col5:hover .div_col_img5 .div_col_img_view5{width:120px;height:120px;margin-top:0px;transition:2s;}



.text_font{font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serif}
.text_font2{font-family:"Segoe UI Bold","Segoe UI Web Bold","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Bold,"Helvetica Neue",Arial,sans-serif}
.btn_col2{background-color:transparent;border:0px solid transparent;color:#000000;padding:10px 20px 10px 20px;}
.btn_col2:hover{background-color:transparent;border:0px solid transparent;color:#ffffff;padding:10px 20px 10px 20px;transition:1s;}
</style>

<style>
.line_v1{position:absolute;height:1px;width:80px;background-color:#920202;margin-top:-21px;margin-left:0px;}

.full{margin-top:100px;background-color:#9e844a;padding:20px 0px 40px 0px;}
.div_col4{transition:2s;border:0px solid #021a96;border-radius:0px 0px 0px 0px;padding:20px;min-height:250px;background-color:#ffffff;text-align:center;}
.div_col4:hover{transition:2s;border:0px solid #9e844a;border-radius:0px 0px 0px 0px;padding:20px;min-height:250px;}
.div_col4 .div_col_text4{margin-top:0px;transition:2s;color:#000000;text-align:center;}
.div_col4:hover .div_col_text4{margin-top:0px;transition:1s;color:#ffffff;font-size:0px;}

.div_col_img_view4{width:0px;height:0px;margin-top:-70px;transition:2s;}
.div_col4:hover .div_col_img4 .div_col_img_view4{width:120px;height:120px;margin-top:-20px;transition:2s;}



.text_font{font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serif}
.text_font2{font-family:"Segoe UI Bold","Segoe UI Web Bold","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Bold,"Helvetica Neue",Arial,sans-serif}
.div_col4 .btn_col2{background-color:transparent;border:0px solid transparent;color:#000000;padding:10px 20px 10px 20px;}
.div_col4:hover .btn_col2{margin-top:-10px;background-color:transparent;color:#000000;padding:10px 20px 10px 20px;transition:1s;border:2px solid #9e844a;text-decoration:none;}
</style>
<style>
.step_active{background-color:#9e844a;border:1px solid #c0c0c0;color:#ffffff;font-size:15px;font-weight:blod;font-weight:700;border-radius:50%;width:80px;height:80px;margin-left:0px;}
.step_seconde{background-color:#f1f1f1;border:1px solid #c0c0c0;color:#c0c0c0;font-size:15px;font-weight:blod;font-weight:700;border-radius:50%;width:80px;height:80px;margin-left:0px;}
.step_full{margin-top:20px;text-align:center;}
.step_line{background-color:#9e844a;width:80px;height:2px;}

.divcam{margin-top:90px;}
.textblodfull{color:#000000;font-size:15px;font-weight:blod;font-weight:700;width:100%;}
.textnormalfull{color:#000000;font-size:15px;font-weight:normal;font-weight:400;width:100%;}
.textnormalfull_count{color:#da9f1f;font-size:15px;font-weight:normal;font-weight:400;width:100%;}
.textnormalfull_qty{color:#8b8b8a;font-size:15px;font-weight:normal;font-weight:400;width:100%;}

.items_list{border-bottom:1px solid #f1f1f1;padding:10px 0px 10px 0px;}
.fa_gris{color:#a3a2a0;}
.edit_btn_cart{color:#a3a2a0;font-size:16px;font-family:"Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol",HelveticaNeue-Light,"Helvetica Neue",Arial,sans-serif;font-weight:normal;font-weight:500;}
</style>
<style>
.NA{color:#f74123;}
.error_text{color:#f74123;}
.profile_bg{background-color:#cec8fb;}
.btn_cercle_edit{text-align:center;background-color:#f1f1f1;border-radius:50%;padding:7px;width:67px;height:67px;border:1px solid #f1f1f1;}
.btn_cercle_block{text-align:center;background-color:#b01c04;color:#ffffff;border-radius:50%;padding:7px;width:67px;height:67px;border:1px solid #b01c04;}
.btn_cercle_actived{text-align:center;background-color:#11a102;color:#ffffff;border-radius:50%;padding:7px;width:67px;height:67px;border:1px solid #11a102;}
.padding10{padding:10px;}
.padding0{padding:0px;}
.subcategory{margin-left:20px;}
.icons-edit{color:#c0c0c0;}
.icons-edit:hover{color:#a5a3a3;}
.active_back_color_icons{color:#229902;}
.noactive_back_color_icons{color:#c0c0c0;}
.active_back{background-color:#229902;color:#ffffff;border-radius:5px;padding:0px 5px 0px 5px;}
.active_back:hover{background-color:#229902;color:#ffffff;border-radius:5px;padding:0px 5px 0px 5px;text-decoration:none;}
.blocked_back{background-color:#cc0513;color:#ffffff;border-radius:5px;padding:0px 5px 0px 5px;}
.in_progress_back{background-color:#b78b06;color:#ffffff;border-radius:5px;padding:0px 5px 0px 5px;}
.in_progress_back:hover{background-color:#b78b06;color:#ffffff;border-radius:5px;padding:0px 5px 0px 5px;text-decoration:none;}
.espace_li_menu{background-color:#c0c0c0;}

.has-error{border-color:#cc0000;background-color:#ffff99;}
.model_btn_save:disabled,.model_btn_save[disabled]{opacity: 0.2;}


.td_btn{padding:2px 2px 0px 2px;text-align:right;width:160px;}

.btn-edite{text-align:center;background-color:transparent;border-radius:50%;padding:7px;}
.btn-edite i{margin-top:5px;margin-left:2px;color:#000000;}
.btn-edite:hover i{margin-top:5px;color:#858585;}

.btn-delete{text-align:center;background-color:transparent;border-radius:50%;padding:7px;}
.btn-delete i{margin-top:5px;margin-left:1px;color:#000000;}
.btn-delete:hover i{margin-top:5px;color:#858585;}

.btn-delete-form{text-align:center;background-color:transparent;border:1px solid transparent;border-radius:50%;padding:7px;}
.btn-delete-form i{margin-top:5px;margin-left:1px;color:#000000;}
.btn-delete-form:hover i{margin-top:5px;color:#858585;}


.tablenodata{position:absolute;margin-top:80px;text-align:center;}
.page-title2{color:#0408b3;font-size:17px;font-weight:blod;font-weight:700;}


.btn_add{text-align:center;text-decoration:none;background-color:#f1f1f1;border:1px solid#f1f1f1;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add:hover{text-decoration:none;background-color:#edebeb;border:1px solid #edebeb;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}



.btn_add2{text-decoration:none;background-color:#f1f1f1;border:1px solid#f1f1f1;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2:hover{text-decoration:none;background-color:#edebeb;border:1px solid#edebeb;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2active{text-decoration:none;background-color:#d5d2d2;border:1px solid#d5d2d2;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2active:hover{text-decoration:none;background-color:#d5d2d2;border:1px solid#d5d2d2;color:#6b6b6c;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}



.btn_add2blocked{text-decoration:none;background-color:#edebeb;border:1px solid #edebeb;color:#c0c0c0;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.btn_add2blocked:hover{text-decoration:none;background-color:#edebeb;border:1px solid #edebeb;color:#c0c0c0;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}


.titleappseconde{margin-top:20px;}
.titleappseconde h3{color:#000000;}
.bluetext{color:#0408b3;font-size:17px;font-weight:blod;font-weight:700;}
.pagetitle_seconde{color:#000000;font-size:25px;font-weight:normal;font-weight:400;}

.cadre_add{background-color:#ffffff;border:1px solid#dad9d9;padding:10px;}
.cadre_filter{background-color:#ffffff;border:1px solid#dad9d9;padding:10px;}


.model_fa_close{float:right;}

.model_btn_delete{text-decoration:none;text-align:center;background-color:#c60202;border:1px solid#c60202;color:#ffffff;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_delete:hover{text-decoration:none;text-align:center;background-color:#920202;border:1px solid#920202;color:#ffffff;padding:5px;width:100px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_save{background-color:#0408b3;border:1px solid#0408b3;color:#ffffff;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_save:hover{background-color:#011157;border:1px solid#011157;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}

.model_btn_close{background-color:#e9e9ec;border:1px solid#e9e9ec;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);text-align:center;text-decoration:none;color:#000000;}

.model_btn_close:hover{background-color:#dddde0;border:1px solid#dddde0;padding:5px;width:100px;;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);text-align:center;text-decoration:none;color:#000000;}

.bgr-black{background-color:#011157;}
#menu-a{color:#ffffff;background-color:#011157;}
#menu-a:hover{color:#007bff;background-color:#ffffff;font-weight:blod;font-weight:700;}
.text-while{color:#ffffff;}

.btn-cercle{float:right;text-align:center;background-color:#e1dede;width:30px;height:30px;border-radius:50%;margin-top:-5px;}
.btn-cercle i{margin-top:6px;color:#c0c0c0;}
.btn-cercle:hover i{margin-top:6px;color:#858585;}

#border-left{border-left:7px solid #59a4f0;background-color:#f1f5f9;}
#border-left:hover{border-left:7px solid #59a4f0;background-color:#ffffff;}
#card-gris{background-color:#f1f1f1;}
#card-gris h6{color:#000000;}
.space{width:100%;height:8px;}
table {font-size:14px;}
.showbox1{background-color:#ffffff;padding:20px 20px 20px 20px;}
.titleapp{margin-top:20px;padding:10px 10px 10px 10px;-webkit-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
-moz-box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);
box-shadow: 0px 6px 5px 0px rgba(138,134,138,1);}


.lastinfo{color:#3931d8;}
.border_list{border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
.dashhome{background-color:#ffffff;border-bottom:1px solid #c0c0c0;padding:10px 0px 10px 0px;}
#dashhomelink{color:#09029c;}
.dashhometitre{color:#000000;font-size:25px;}
.textblod{color:#000000;font-size:15px;font-weight:blod;font-weight:700;}
.textnormal{color:#000000;font-size:15px;font-weight:normal;font-weight:400;}

.textblod_h2{color:#000000;font-size:35px;font-weight:blod;font-weight:700;}
.textnormal_h2{color:#000000;font-size:17px;font-weight:normal;font-weight:400;line-height:1.8;}

.textblodfull{color:#000000;font-size:15px;font-weight:blod;font-weight:700;width:100%;}
.textnormalfull{color:#000000;font-size:15px;font-weight:normal;font-weight:400;width:100%;}

.textbloddelete{color:#000000;font-size:25px;font-weight:blod;font-weight:700;width:100%;}
.textnormaldelete{color:#000000;font-size:15px;font-weight:normal;font-weight:400;width:100%;}


.textnormalbtn{color:#ffffff;font-size:15px;font-weight:normal;font-weight:400;}
.navbarleft{background-color:#3c4b64;}
.navbarleftlink{background-color:#3c4b64;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.navbarleftlink:hover{background-color:#321fdb;color:#ffffff;font-size:13px;font-weight:normal;font-weight:400;}
.sidebar-heading{color:#ffffff;font-size:13px;font-weight:blod;font-weight:700;}
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



.blueblod 
{
background-color: #2316a5;
}
.circle-tile-heading.blueblod:hover 
{
background-color: #140885;
}


.bluenormal 
{
background-color: #3194f5;
}
.circle-tile-heading.bluenormal:hover 
{
background-color: #2c89dc;
}



.asfirblod 
{
background-color: #f7a10f;
}
.circle-tile-heading.asfirblod:hover 
{
background-color: #d98a03;
}


.redblod 
{
background-color: #e34e4e;
}
.circle-tile-heading.redblod:hover 
{
background-color: #de4343;
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
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
@include('layouts.admin.adminnavbarre')       
@include('layouts.admin.layout-options')
<div class="app-main">
@include('layouts.admin.adminsidebar')       
			
				
<div class="app-main__outer">
<div class="app-main__inner">
@section('content')
@show
</div>
</div>
</div>
</div>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script>
function search() {
  let input = document.querySelector("#input_search");
  let list_items = document.querySelectorAll(".list_search");
  let filter = input.value.toUpperCase();
  
  let match = false;
  
  list_items.forEach(item => {
  
    let text = item.textContent.toUpperCase();
    
    if (text.includes(filter)) {
      match = true;
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
  
  document.querySelector(".no-result").style.display = match ? 'none' : 'block';
}

document.querySelector("#input_search").addEventListener('input', () => search())
</script>
<script>
function goBack() {
  window.history.back();
}
</script>
<script type="text/javascript" src="{{ asset('public/themes/assets/scripts/main.js')}}"></script></body>
</html>
