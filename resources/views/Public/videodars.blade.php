<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Blokchain</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/assets/css/font-awesome.min.css">
    <!-- lt IE 9>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><!dif-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="assets/images/loading.gif" alt="" /></div>
</div>
<!-- end loader -->
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="index">Asosiy</a>
    <a href="about">Haqida</a>
    <a href="services">Afzallik/Kamchilik</a>
    <a href="crypto">Kriptovalyuta</a>
    <a class="active" href="videodars">Videodarslar</a>
    <a href="contact">Murojaat</a>
</div>
<!-- header -->
<header class="sticky-top">
    <!-- header inner -->
    <div class="head-top">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="index">Blokchain</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <ul class="social_icon text_align_right d_none">
                        <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="http://www.instagram.com/m_farangiiz"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li> <a href="http://t.me/m_farangiiz"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="email text_align_right">
                        <li>
                            <button class="openbtn" onclick="openNav()"><img src="assets/images/menu_btn.png"></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<!-- works -->
<div class="works">
    <div class="container-fluid">
        <div class="row">

            @foreach($data as $val)
                <div class="col-lg-3 col-sm-6">
                    <div class="wallet_box text_align_center">
                        <h3>{{$val->title}}</h3>
                        <iframe width="99%" height="99%" src="https://www.youtube.com/embed/{{$val->url}}" title="Blockchain nima?" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p>
                            {{$val->text}}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- works -->
<!-- footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="logo_bottom" href="index">Blokchain</a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="Informa conta ">
                        <h3>Bog'lanish</h3>
                        <ul>
                            <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i>Tel raqam: +998 99 737 65 99
                                </a>
                            </li>
                            <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i>masharipovafarangiz0510@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright text_align_center ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <p>© 2023. Design by:Farangiz
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.0.0.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
