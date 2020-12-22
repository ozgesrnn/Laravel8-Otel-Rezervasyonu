<!DOCTYPE html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

    <link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif" />

    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="main-layout">

<div class="loader_bg">
    <div class="loader"><img src="{{asset('assets')}}/images/loading.gif" alt="#" /></div>
</div>

<header>
<!-- header inner -->
<div class="header">
    <div class="head_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="{{asset('assets')}}/images/logo1.jpg" alt="logo"/></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-14 col-sm-14">
                    <li><a class="buy" href="#">Giriş Yap</a></li>
                    <li><a class="buy" href="#">Üye Ol</a></li>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-10 col-lg-10 pcol-md-10 col-sm-10">
                <div class="menu-area">
                    <div class="limit-box">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                <li class="active"> <a href="index.html">Home</a> </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oteller</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Yurtiçi Otelleri</a></li>
                                        <li><a href="#">Yurtdışı Otelleri</a></li>

                                    </ul>
                                </li>
                                <li> <a href="product.html">Erken Rezevasyon</a> </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Turlar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Doğu Ekspresi</a></li>
                                        <li><a href="#">Karadeniz Turu</a></li>
                                        <li><a href="#">GAP Turu</a></li>
                                        <li><a href="#">Kapadokya Turu</a></li>
                                    </ul>
                                </li>
                                <li> <a href="contact.html">Fırsatlar</a> </li>
                                <li> <a href="contact.html">İletişim</a> </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end header inner -->
</div>
</header>
<div class="container">

    <div class="row">


