<body>
<!-- START PRELOADER AREA-->
<div class="preloader-area">
    <div class="spinner">
        <img src="{{ asset('assets/images/logo-3.png') }}" width="200">
        <h2>Vamo, votre application de voyage mobile</h2>
    </div>
</div>
<!-- END PRELOADER AREA -->
<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup">
        <span class="fa fa-chevron-up"></span>
    </div>
</div>
<!-- / END SCROOL UP DESIGN AREA -->
<!-- top start here -->
<div id="top">
    <div class="container">
        <div id="top-links" class="nav">
            <ul class="list-inline inline-2 pull-left">
                <li>
                    <a href="index5.html#">Bienvenue sur Vamo  &nbsp;  {{ auth()->check() ? auth()->user()->name : '' }}</a>
                </li>
                <li>
                    <form method="post" enctype="multipart/form-data" id="form-language">
                        <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                Language : <span class="name"><span class="hidden-xs">English</span> <i class="fa fa-caret-down"></i></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript::">English</a></li>
                            </ul>
                        </div>
                    </form>
                </li>
                <li>
                    <form method="post" enctype="multipart/form-data" id="form-currency">
                        <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                Currency : <span class="name"><span class="hidden-xs"> (USD)</span> <i class="fa fa-caret-down"></i></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">&#8364; Euro</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">&#163; Pound Sterling</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="list-inline pull-right button login-reg">
                @guest
                    <li><a href="{{ route('user.login') }}">Login</a>
                        <span>/</span>
                        <a href="{{ route('user.register') }}">Register</a>
                    </li>
                @else
                    <li>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="post">
                            @csrf
                        </form>
                    </li>
                @endguest
                <li><a href="index5.html#"><i class="fa fa-heart"></i> Wishlist</a></li>
                <li><a href="index5.html#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- top end here -->
<!-- header start here-->
<header class="">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-md-4 col-xs-12">
                <div id="logo">
                    <a href="/"><img class="img-responsive" src="{{ asset('assets/images/flogo2.jpg') }}" alt="logo" title="logo" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 text-center">
                <div class="social-icon">
                    <ul class="list-inline inline-2">
                        <li class="">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook Default-clr-hvr" aria-hidden="true"></i></a>
                        </li>
                        <li class="">
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter Default-clr-hvr" aria-hidden="true"></i></a>
                        </li>
                        <li class="">
                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus Default-clr-hvr" aria-hidden="true"></i></a>
                        </li>
                        <li class="">
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram Default-clr-hvr" aria-hidden="true"></i></a>
                        </li>
                        <li class="">
                            <a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p Default-clr-hvr" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 hidden-xs">
                <div class="button-login pull-right" style=" margin: 30px;">
                    <button type="button" class="btn btn-default btn-lg" onclick="location.href='tourbooking.html'">Reservez</button>
                    <button type="button" class="btn btn-primary btn-lg" onclick="location.href='tours.html'">Nos circuits <i class="fa fa-caret-square-o-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end here -->
<!-- menu start here -->
<div id="menu" class="default-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 responsive_padding_btm">
                <nav class="navbar header5">
                    <div class="navbar-header">
                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                        <ul class="nav navbar-nav">
                            <!-- <li class="dropdown"><a href="index5.html#" class="dropdown-toggle" data-toggle="dropdown">HOME<span class="caret"></span></a>
                                 <div class="dropdown-menu">
                                     <div class="dropdown-inner">
                                         <ul class="list-unstyled">
                                             <li><a href="../../../www.shmai.com/preview/travelco/index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 1</a></li>
                                             <li><a href="index2.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 2</a></li>
                                             <li><a href="index-shop.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 3</a></li>
                                             <li><a href="index4.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 4</a></li>
                                             <li><a href="index5.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 5</a></li>
                                             <li><a href="index-revslider.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 6</a></li>
                                             <li><a href="index6.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 7</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </li>-->
                            <!--Menu hotel>-->
                            <li class="dropdown"><a data-toggle="dropdown1" class="dropdown-toggle" href="index1-2.html">Hotels<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('hotels') }}">Hotels</a></li>
                                </ul>
                            </li>
                            <!--Menu hotel end >-->
                            <!--Menu flight>-->
                            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="index1-3.html">Vols<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('vols') }}">Vols</a></li>
                                </ul>
                            </li>
                            <!--Menu flight end >-->
                            <!--Menu cars>-->
                            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="index1-4.html">Vacances<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('vacances') }}">Vacances</a></li>
                                </ul>
                            </li>
                            <!--Menu cars end>-->
                            <!--Menu tour >-->
                            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="index1-5.html">Voitures<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('voitures') }}">Location de voitures</a></li>
                                </ul>
                            </li>
                            <!--Menu tour end>-->
                            <!--Menu cruise >-->
                            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="index1-6.html">Croisière<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('croisieres') }}">Croisières</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="index1-6.html">Offres<span class="caret"></span></a>
                                <ul class=" dropdown-menu">
                                    <li><a href="{{ route('offers') }}">Les offres</a></li>
                                </ul>
                            </li>


                            <li><form class="formnsearch" _lpchecked="1" >
                                    <input name="search" class="form-searchtop" placeholder="Recherche" type="search"><button type="submit" class="fa fa-search fa-2" style="
                                        padding: 0px -25px 0px 0px;position: absolute;right: 31px;top: 20px;background: #FFF;color: green;font-size: 20px;
                                        /* float: var(); */">
                                    </button></form></li>
                            <!--Menu Page end>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- menu end here -->
