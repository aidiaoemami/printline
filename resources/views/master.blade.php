<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="/css/style-navbar.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/style-navbar.js"></script>
<script type="text/javascript" src="/js/list.js"></script>
<link rel="stylesheet" type="text/css" href="/css/footer.css">

<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
@if (session()->has('level'))
<div style="background: #76b852"id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="{{route('home')}}">Home</a></li>
                <li class="upper-links"><a class="links" href="{{route('tokosaya')}}">Toko Saya</a></li>
                <li class="upper-links"><a href="{{route('tambahlayanan')}}" class="links">Tambah Layanan</a>
                    
                </li>
                <li class="upper-links"><a class="links" href="http://clashhacks.in/">Saldo</a></li>
                @if ((session()->has('login')))
                <li class="upper-links">
                    <a class="links" href="http://clashhacks.in/">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>Notifikasi
                    </a>
                </li>
                    <li class="upper-links dropdown"><a class="links">{{\Auth::user()->nama}}</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="upper-links"><a class="links" href="{{route('login')}}">Login</a></li>
                <li class="upper-links dropdown"><a class="links" href="{{route('register')}}">Daftar</a>
                    <!-- <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{route('register')}}">Menjadi Seller</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{route('register')}}">Menjadi Customer</a></li>
                    </ul> -->
                </li>
                @endif
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin:0px;"><span class="largenav">PrintLine</span></h1>
            </div>
            <!-- <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input style="color:black"class="flipkart-navbar-input col-xs-11" type="text" placeholder="Search for Products, Brands and more" name="search">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
    <a href="http://clashhacks.in/">Link</a>
</div>
@endif
<!-- tampilan user -->
@if (!session()->has('level'))
<div style="background: #76b852"id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="{{route('tokosaya')}}">About</a></li>
                <li class="upper-links"><a class="links" href="https://campusbox.org/">Tempat Cetak</a></li>
                <li class="upper-links"><a class="links" href="{{route('login')}}">Cetak Dokumen</a></li>
                @if ((session()->has('login')))
                <li class="upper-links">
                    <a class="links" href="http://clashhacks.in/">
                        <svg class="" width="16px" height="12px" style="overflow: visible;">
                            <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                        </svg>Notifikasi
                    </a>
                </li>
                <li class="upper-links"><a class="links" href="http://clashhacks.in/">Pesanan Saya</a></li>
                    <li class="upper-links dropdown"><a class="links">{{\Auth::user()->nama}}</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="upper-links"><a class="links" href="{{route('login')}}">Login</a></li>
                <li class="upper-links dropdown"><a class="links" href="{{route('register')}}">Daftar</a>
                    <!-- <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="{{route('register')}}">Menjadi Seller</a></li>
                        <li class="profile-li"><a class="profile-links" href="{{route('register')}}">Menjadi Customer</a></li>
                    </ul> -->
                </li>
                @endif
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Brand</span></h2>
                <h1 style="margin:0px;"><span class="largenav">PrintLine</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">
                    <input style="color:black"class="flipkart-navbar-input col-xs-11" type="text" placeholder="Search for Products, Brands and more" name="search">
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@yield('content')

<br>
<br>
<!-- footer -->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
---- Include the above in your HEAD tag --------

<div class="footer-bottom">
<div class="container">
          <div class="row">
            <div class="col-sm-6 ">
              <p>CopyRight © 2017 Digital All Rights Reserved</p>
              <div class="copyright-text">
                <p>CopyRight © 2017 Digital All Rights Reserved</p>
              </div>
            </div> End Col
            <div class="col-sm-6">              
              <ul class="social-link pull-right">
                <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>           
                <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
                <li><a href=""><span class="glyphicon glyphicon-heart-empty"></span></a></li>
              </ul>             
            </div> End Col
          </div>
        </div>
</div> -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

<!--   FOOTER START================== --> 
<footer class="footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <h4 class="title">About us</h4>
            <p>Sebuah Website penyedia layanan untuk cetak dokumen</p>
            <ul class="social-icon">
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Address</h4>
            <span class="acount-icon">          
            <p>Permai 5 Cipadung<br>Cibiru<br>Kota Bandung, Jawa Barat</p>        
            </span>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Category</h4>
            <div class="category">
                <a href="#">men</a>
                <a href="#">women</a>
                <a href="#">boy</a>
                <a href="#">girl</a>
                <a href="#">Car</a>
                <a href="#">teshart</a>
                <a href="#">top</a>
                <a href="#">glass</a>
                <a href="#">baby dress</a>          
            </div>
        </div>
        <div class="col-sm-3">
            <h4 class="title">Payment</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <ul class="payment">
                <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>            
                <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
            </ul>
            </div>
        </div>
        <hr>
        <div class="row text-center"><a href="http://lacodeid.com/" style="color: #fff;">Copyright © PrintLile 2018</a></div>
    </div>  
</footer>
</body>
</html>