@extends('templates')
@section('style')
    <style>
        #logo img{padding-right: 27px;
        ;}
        .float-right{float: right;}
        header .social-icon {padding: 35px 0 0 0;}
        .form-searchtop {
            display: inline-block;
            width: 80%;
            height: 45px;
            /* font-size: 12px; */
            line-height: 1.43;
            line-height: 1.43;
            background-color: transparent;
            background-image: none;
            border-radius: 11px;
            box-shadow: none;
            /* margin-bottom: 20px; */
            padding: 12px 15px;
            border: 1px solid #ccc;
            background: #fff;
            -webkit-transition: .3s;
            transition: .3s;
            font-family: "Roboto", sans-serif;
        }
        .welcome-image-area5 {
            position: relative;
            height: 70%;
        }
        .style_btn2 {
            width: 150px;
            height: 38px;
            overflow: hidden;
            transition: .5s;
            position: relative;
            display: inline-block;
            border-radius: 20px;
            vertical-align: middle;
            margin-top: 35px;
            margin-left: 10px;
            color: #fff;
            cursor: pointer;
        }
        .find-widget .text-box-wrapper .tb-input {
            line-height: 34px;
            position: relative;
            z-index: 1;
            width: 175px;
            height: 35px;
            padding: 0 2em 0 20px;
            text-align: left;
            border: 1px solid #cecece;
            border-radius: 20px;
            background-color: transparent;
            color: #bbbbbb;}
        .tab-search .tab-btn-wrapper {
            width: calc((75% - 5px) / 6) !important;}
        .tab-search .tab-btn-wrapper .tab-btn {
            font-size: 1.26rem;}
        .tab-search-default .find-widget {
            padding: 0;
        }
        .main .vy-module--equal .row [class*=col-] .vy-promobox {
            height: 100%;
            display: block;
        }
        .vy-promobox {
            display: block;
            overflow: hidden;
            min-height: 320px;
            border: 1px solid #ddd;
            position: relative;
            background-color: #fff;
            border: 3px solid #ededed;
            border-radius: 8px;
            font-size: 14px;
            padding: 0;
            line-height: 1.2;
        }
        .vy-promobox .box__banner img {
            width: 100%;
            position: absolute;
        }
        .vy-promobox .box__banner {
            min-height: 150px;
            position: relative;
            overflow: hidden;
        }
        .vy-promobox .box__banner .box__info {
            top: 0;
            width: 77%;
            height: 100%;
            padding: 20px 15px;
            display: block;
            position: relative;
            min-height: 150px;
        }
        .vy-promobox--headergradient .box__banner .box__info {
            background: linear-gradient(135deg, white 0%, rgba(255, 255, 255, 0.4) 100%);
        }
        .box__content {
            padding: 15px;}
        .vy-promobox .box__content {
            padding-top: 0;}
        .vy-promobox .box__banner .box__info .box__title {
            margin: 0;
            color: #666;
            padding-top: 0;
            font-size: 24px;
            font-weight: bolder;
            padding-bottom: 15px;
            letter-spacing: 1px;
        }
        .vy-promobox .box__banner .box__info .box__list {
            line-height: 24px;
            font-size: 16px;
            flex-direction: column;
            list-style-type: none;

        }
        .vy-promobox .box__banner .box__info .box__list li {
            color: #333;
            width: 100%;
            max-width: 100%;
            padding: 5px 0;
            font-size: 13px;

        }
        .vy-promobox .box__banner .box__info .box__list li [class*=vy-icon-] {
            font-size: 20px;
            margin-right: 5px;
            vertical-align: sub;
        }
        [class^=vy-icon-], [class*=" vy-icon-"] {
            white-space: nowrap;
        }
        .vy-promobox .box__content__cta .price {
            font-size: 24px;
            margin-right: 30px;
            margin-bottom: 0;
        }
        .vy-promobox .box__content__cta .price, .vy-promobox .box__content__cta .mv_button {
            display: inline-block;
        }
        .price {
            font-weight: 600;
        }
        .price__extra-text {
            font-weight: 400;
            color: #666;
        }
        .price__decimals {
            font-size: .66em;
            vertical-align: bottom;
        }
        .vy-promobox .box__content__cta .price .price-currency {
            margin: 0 5px;
            font-size: 24px;
            color: #666;
            font-family: "BrandonText-Medium",Calibri,Verdana;
            top: 4px;
            position: relative;
        }

        .vy-promobox .box__content__cta .mv_button {
            max-width: 280px;
            padding: 10px 49px 10px 35px;
            color: #333;
        }
        .vy-promobox .box__content__cta .price, .vy-promobox .box__content__cta .mv_button {
            display: inline-block;
        }
        .fa-plane:before {
            color: green;
        }
        .fa-check-circle:before {
            content: "\f17c";
            color: white;
            background: rgb(0, 173, 0);
            border-radius: 20px;
            font-size: 20px;
            margin-right: 10px}
        .mv_button {
            display: inline-block;
            cursor: pointer;
            outline: 0;
            text-align: center;
            text-decoration: none;
            box-sizing: border-box;
            text-decoration: none !important;
            font-size: 16px;
            padding: 11px 35px;
            color: #666;
            border-radius: 50px;
            transition: all .15s ease-in;
            border: 2px solid #fc0;
            background-color: #fc0;
            font-family: "BrandonText-Regular",Calibri,Verdana;
            font-weight: 600 !important;
            white-space: initial;
            line-height: 1.3em;
        }
        .mv_button.size-lg {
            font-size: 18px;
            padding: 16px 35px;
            border-radius: 50px;
        }
        .vy-promobox .box__content__cta .mv_button {
            display: inline-block;
        }
        .mv_button.icon-right.size-lg {
            position: relative;
            font-family: "BrandonText-Regular",Calibri,Verdana !important;
            padding-right: 45px;
        }
        .vy-login--register {
            background: #eee;
            text-align: center;
            font-size: 12px;}
        .vy-login {
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border: none;
            min-height: 320px;
            padding: 0 20px 5px;
            background-color: #f8f8f8;
        }
        .vy-login__content {
            font-size: 14px;
        }
        .vy-login__content .vy-login__header {
            padding: 10px 0;
            position: relative;
            text-align: center;
            border-bottom: 1px dotted #ccc;
        }
        .vy-login__content .vy-login__header [class*=vy-icon-] {
            left: 50%;
            top: 50%;
            position: absolute;
            -webkit-transform: translateY(-50%) translateX(-50%);
            -moz-transform: translateY(-50%) translateX(-50%);
            -ms-transform: translateY(-50%) translateX(-50%);
            -o-transform: translateY(-50%) translateX(-50%);
            transform: translateY(-50%) translateX(-50%);
            font-size: 27px;
        }
        vy-login--register .vy-login__main {
            padding: 15px 0 0;
        }
        .vy-login--register .vy-login__main .title {
            font-size: 14px;
        }
        .vy-login__content .vy-login__main .title {
            margin-top: 10px;
            padding-top: 0;
            font-weight: bold;
            font-family: "BrandonText-Medium",Calibri,Verdana;
        }
        .vy-login__content .vy-login__list {
            width: 90%;
            margin: 0 auto;
            text-align: left;
            list-style-type: none;
        }
        .vy-login .vy-login__footer {
            margin-top: 10px;
            text-align: center;
            position: relative;
        }
        .vy-login--register .vy-login__footer .mv_button {
            margin-top: 0;
        }
        .vy-login .vy-login__footer .mv_button {
            width: 250px;
            padding: 10px 0;
            margin: 30px 15px 12px 15px;
        }
        .vy-login a {
            color: #ffffff;
        }
        .vy-acuerdos-banner-module__item img {
            display: block;
            max-width: 100%;
            margin: 0 auto;
            border-radius: 5px;
            height: 373px;

        }
        .vy-login__header span {
            color: #000;
            font-weight: bold;
            font-family: "BrandonText-Regular",Calibri,Verdana;
            font-size: 25px;
            padding-left: 7px;
        }
        footer .widget ul i {
            color: #fff;
            background: green;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 38px;
            /* padding-right: 20px; */
        }

        footer .widget ul i {top: 0px;
            left: -7Px;}

    </style>
@stop
@section('content')

    <!-- slider start here -->
    <!-- START HEADER DESIGN AREA -->
    <section class="welcome-image-area5" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
        <div class="display-table">
            <div class="display-table-cell5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section style=" top: 360px;position: absolute;background: white;border-radius: 14px;">
                                <div class="tab-search tab-search-long tab-search-default">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-2 col-xs-12 col-xs-offset-2" style="
                                                    padding-left: 27px;" >
                                                <ul role="tablist" class="nav nav-tabs">
                                                    <li role="presentation" class="tab-btn-wrapper ">
                                                        <a href="index.html#fhotel" aria-controls="fhotel" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-building"></i>
                                                            <span class="text">HOTELS</span>
                                                            <span class="xs">RECHERCHE HOTEL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper active ">
                                                        <a href="index.html#flight" aria-controls="flight" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>
                                                            <span class="xs">RECHERCHE VOL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index.html#cars" aria-controls="cars" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURES</span>
                                                            <span class="xs">RECHERCHE VOITURES</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index.html#tours" aria-controls="tours" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-suitcase"></i>
                                                            <span class="text">CIRCUIT</span>
                                                            <span class="xs">RECHERCHE CIRCUITS</span>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index.html#cruises" aria-controls="cruises" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-ship"></i>
                                                            <span class="text">CROISIERES</span>
                                                            <span class="xs">RECHERCHE CROISIERES</span>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" id="fhotel" class="tab-pane fade ">
                                                            <div class="find-widget find-hotel-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE HOTEL</h4>
                                                                        @include('includes.hotel')
                                                                    </div></div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" id="flight" class="tab-pane fade in active">
                                                            <div class="find-widget find-flight-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOL</h4>
                                                                        @include('includes.search')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" id="cars" class="tab-pane fade in ">
                                                            <div class="find-widget find-car-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOITURES</h4>
                                                                        @include('includes.voiture')
                                                                    </div></div></div>
                                                        </div>
                                                        <div role="tabpanel" id="tours" class="tab-pane fade">
                                                            <div class="find-widget find-tours-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE CIRCUITS</h4>
                                                                        @include('includes.cruise')
                                                                    </div></div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" id="cruises" class="tab-pane fade in ">
                                                            <div class="find-widget find-cruise-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE CROISIERES</h4>
                                                                        @include('includes.croisiere')
                                                                    </div></div</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- / END HEADER DESIGN AREA -->
    <!--start top destination-->
    <section class="offter-area section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Top destination</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias repellat porro quo. Ab quos debitis possimus aperiam ipsam, iure, adipisci nobis fugiat, cumque doloremque dicta enim tempore similique blanditiis officia.</p>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="offer">
                        <img alt="image" src="assets/images/home2/topdestination/louvre_topo.jpg">
                        <div class="overlay-offer">
                            <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                            <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                            <a href="tour-details.html" class="button">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="offer">
                        <img alt="image" src="assets/images/home2/topdestination/5ab407721f0000280616b313.jpg">
                        <div class="overlay-offer">
                            <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                            <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                            <a href="tour-details.html" class="button">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="offer">
                        <img alt="image" src="assets/images/home2/topdestination/bangkok-celibataire.jpg">
                        <div class="overlay-offer">
                            <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                            <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                            <a href="tour-details.html" class="button">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End top destination -->
    <!-- start discover -->
    <section class="where-to-travel">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Découvrez les offres des villes</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/Australia_sidney.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/1.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/viceroy-bali.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/rome.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/crète-ile-Santorini-retouch-cut.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/Casablanca-Morocco.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/Brazzaville.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>ski holiday 2018</h1>
                            <p class="text">create your perfect winter escape</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end discover-->

    <!-- video start here -->
    <!--div class="video">
        <img src="assets/images/bg/video5-bg.jpg" class="img-responsive" alt="video-bg" title="video-bg" />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="matter text-center">
                        <h5>Awesome Experiences for</h5>
                        <h6>Tourism & Traveling.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div
    <div class="video-area video-area-2" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-area-text text-center wow bounceIn">
                        <a href="https://www.youtube.com/watch?v=6NC_ODHu5jg" class="video-play mfp-iframe">
                            <i class="fa fa-play"></i>
                        </a>
                        <h5>Awesome Experiences for <br> Tourism & Traveling.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- video end here -->
    <!--Zone Reservation-->
    <section class="section-padding">
        <div class="vamo_mdule_resa">
            <div class="vamo-module"><div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title ">
                                <h2>Résa Rapide</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">




                            <a href="index.fr.html" target="_blank" class="vy-promobox vy-promobox--headergradient">
                                <div class="box__banner">
                                    <img src="assets/images/quick_reser/coches.jpg" alt="image">
                                    <div class="box__info">
                                        <h2 class="title title--secondary box__title">Louez une voiture</h2>
                                        <ul class="list-with-icon box__list">
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span> Annulation gratuite jusqu'à 24&nbsp;h à l'avance</li>
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span>Plus de 1 500 prestataires</li>
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span>Possibilités d'obtenir des Avios</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box__content">
                                    <img src="assets/images/quick_reser/cars_icons.png" alt="image" class="box__content__brands">
                                    <div class="" style="
padding: 20px;"><div class="row"><div class="col-sm-12 col-sm-offset-1"><form class="formnsearch" _lpchecked="1">
                                                    <input name="search" class="form-searchtop" placeholder="Ville d'arrivée" type="search" style="
width: 86%;"><button type="submit" class="fa fa-search fa-2" style="position: absolute; right: 85px;bottom: 5px;background: rgba(255, 255, 255, 0);color: green;font-size: 30px;">
                                                    </button></form></div></div></div>
                                    <div class="box__content__cta">
                                        <p class="price"><sup class="price__decimals price__extra-text">À partir de&nbsp;</sup><span class="price-currency js-multicurrency" data-currency="EUR" data-euro-value="10.0"><span class="price-currency__amount">10,</span><span class="price-currency__decimals">00</span> </span><sup class="price__decimals price__extra-text">&nbsp;par jour</sup></p>
                                        <button data-href="" class="callToAction  mv_button size-lg icon icon-right" onclick="window.open('http://cars.vueling.com/fr/?#/searchcars', '_self')">
                                            Réservez maintenant&nbsp;!
                                        </button>
                                    </div>
                                </div>
                            </a>



                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">




                            <a href="index.fr.html" target="_blank" class="vy-promobox vy-promobox--headergradient">
                                <div class="box__banner">
                                    <img src="assets/images/quick_reser/hoteles.jpg" alt="image">
                                    <div class="box__info">
                                        <h2 class="title title--secondary box__title">Réservez votre hôtel</h2>
                                        <ul class="list-with-icon box__list">
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span>&nbsp;Jusqu'à 50&nbsp;% de réduction sur certains hébergements</li>
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span>Nous alignons nos prix</li>
                                            <li class="list-with-icon__item"><span class="fa fa-check-circle"><span ></span><span ></span></span>Possibilités d'obtenir des Avios</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box__content">
                                    <img src="assets/images/quick_reser/hotels_icons.png" alt="image" class="box__content__brands">
                                    <div class="" style="
padding: 20px;"><div class="row"><div class="col-sm-12 col-sm-offset-1"><form class="formnsearch" _lpchecked="1">
                                                    <input name="search" class="form-searchtop" placeholder="Ville d'arrivée" type="search" style="
width: 86%;"><button type="submit" class="fa fa-search fa-2" style="
position: absolute; right: 85px;bottom: 5px;background: rgba(255, 255, 255, 0);color: green;font-size: 30px;">
                                                    </button></form></div></div></div>
                                    <div class="box__content__cta">
                                        <p class="price"><sup class="price__decimals price__extra-text">À partir de&nbsp;</sup><span class="price-currency js-multicurrency" data-currency="EUR" data-euro-value="20.0"><span class="price-currency__amount">20,</span><span class="price-currency__decimals">00</span> </span><sup class="price__decimals price__extra-text"> par nuit</sup></p>
                                        <button data-href="" class="callToAction  mv_button size-lg icon icon-right" onclick="window.open('http://hotel.vueling.com/index.fr.html', '_self')">
                                            Réservez maintenant&nbsp;!
                                        </button>
                                    </div>
                                </div>
                            </a>



                        </div>
                    </div>
                </div></div>
        </div>
    </section>
    <!-- / End Zone reservation-->
    <!--Start Advantage-->
    <div class="vy-module"><div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">


                    <div class="vy-login vy-login--register" id="contentPushRegister">
                        <div class="vy-login__content">
                            <div class="vy-loader hide">
                            </div>
                            <div class="vy-login__header">
                                <a href=""><img src="assets/images/logo-3.png" width="70"><span>CLUB</span></a>
                            </div>
                            <div class="vy-login__main">
                                <h6 class="title">Vous êtes nouveau ici&nbsp;?</h6>
                                <p><strong>Inscrivez-vous maintenant</strong> dans notre club et profitez encore plus de vos voyages&nbsp;:</p>
                                <ul class="list-with-icon vy-login__list">
                                    <li class="list-with-icon__item"><strong><span class="fa fa-check-circle"><span ></span><span></span></span>&nbsp;Cumuler des Avios</strong> avec nous et nos partenaires.</li>
                                    <li class="list-with-icon__item list-with-icon__item--double"><span class="fa fa-check-circle"><span ></span><span></span></span>&nbsp;Utilisez-les pour obtenir des <strong>remises</strong> et même des vols gratuits !</li>
                                </ul>
                            </div>
                            <div class="vy-login__footer">
                                <a class="mv_button color-darkGrey icon icon-right" href="" target="_blank">
                                    M'inscrire
                                </a>

                                <p>
                                    Vous avez déjà un compte&nbsp;?
                                    <a data-ajax="true" data-ajax-begin="OnAjaxBegin" data-ajax-complete="OnAjaxComplete" data-ajax-method="GET" data-ajax-mode="replace" data-ajax-update="#contentPushLogin" href="#">Accédez</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="contentPushLogin"></div>




                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">






                    <a href="recommandations-pour-prendre-l-avion" class="vy-acuerdos-banner-module__item">
                        <img src="assets/images/home2/makeamouve.jpg" alt="image">
                    </a>


                </div>
            </div>
        </div></div>
    <!--/ End Advantage-->
    <!-- categories start here -->
    <div class="placetop">
        <div class="container">
            <div class="row">
                <div class="places">
                    <div class="section-title text-center">
                        <h2>Nos Packages Circuits</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                    <!--Start hotel Button-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery-menu text-center gallery-menu-5-2">
                                <button type="button" class="active" data-filter="*">Tous</button>
                                <button type="button" data-filter=".cat-1">Africa</button>
                                <button type="button" data-filter=".cat-2">Asia</button>
                                <button type="button" data-filter=".cat-3">Europa</button>
                                <button type="button" data-filter=".cat-4">American</button>
                            </div>
                        </div>
                    </div>
                    <!--End gallery Button-->
                </div>
                <div class="gallery-items-5-2">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-2 cat-4">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t1.jpg"><i class="fa fa-link"></i></a>
                                   </span>
                                </div>
                                <div class="matter">
                                    <p>grand switerland $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>Grand Switerland</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-1 cat-4">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t2.jpg" alt="t2" title="t2" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t2.jpg"><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                                <div class="matter">
                                    <p>discover japan $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>Discover Japan</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-2 cat-3 cat-4">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t3.jpg" alt="t3" title="t3" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t3.jpg"><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                                <div class="matter">
                                    <p>Niko Trip $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>Niko Trip</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-2 cat-3">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t4.jpg" alt="t4" title="t4" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t4.jpg"><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                                <div class="matter">
                                    <p>Singapore Trip $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>Singapore Trip</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item  cat-1 cat-2 cat-4">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t5.jpg" alt="t5" title="t5" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t5.jpg"><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                                <div class="matter">
                                    <p>The New California $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>The New California</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 grid-item cat-1  cat-4">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="index5.html#"><img src="assets/images/tours/5/t6.jpg" alt="t6" title="t6" class="img-responsive" /></a>
                                <div class="hoverbox link-center">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                    <span>
                                        <a class="venobox" data-gall="myGallery" href="assets/images/tours/5/t6.jpg"><i class="fa fa-link"></i></a>
                                    </span>
                                </div>
                                <div class="matter">
                                    <p>greece, santormi $575.00</p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4>Astro Place Hotels</h4>
                                    <div class="rate">
                                        <div class="pull-left">
                                            <span>HOT DEALS</span>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
                                </div>
                                <div class="text-left">
                                    <div class="border-left-btm col-md-12 no-padding padding_none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='booking-form.html'">Book Now </button>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 no-padding padding_none">
                                            <button type="button" onclick="location.href='tours.html'">View More </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- categories end here -->
    <!-- testimonail start here -->
    <section id="testimonial" class="testimonial-area section-padding testimonial-5" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Reviews & Experience</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-list owl-carousel">
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location1.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client3.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MIANCI MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">25 Nov</span>
                                <div class="single-testi-des">
                                    <p>No need to hunt for photo inspiration here mortise burg castle royal hunt in lodge, Dresden, simply TravelCo, best of Germany throwback, </p>
                                </div>
                            </div>
                        </div>
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location2.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client2.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHONE MORE</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">16 Dec</span>
                                <div class="single-testi-des">
                                    <p>Good morning Roma! Watching Rome wake up from its highest hill of Monte Mario Rome, ig Rome, ig, Italy, monte Mario, view Tiber, revere, Lazio</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location3.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client1.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MARIA MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">10 Oct</span>
                                <div class="single-testi-des">
                                    <p>Panorama, landscape, autumn Scholes Leopold scorn, Austria simply TravelCo, Rome Italy, Mattina reflections, travel photography.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location4.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client4.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHATLI MURA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">21 Nov</span>
                                <div class="single-testi-des">
                                    <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location1.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client3.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MIANCI MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">25 Nov</span>
                                <div class="single-testi-des">
                                    <p>No need to hunt for photo inspiration here mortise burg castle royal hunt in lodge, Dresden, simply TravelCo, best of Germany throwback, </p>
                                </div>
                            </div>
                        </div>
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location2.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client2.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHONE MORE</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">16 Dec</span>
                                <div class="single-testi-des">
                                    <p>Good morning Roma! Watching Rome wake up from its highest hill of Monte Mario Rome, ig Rome, ig, Italy, monte Mario, view Tiber, revere, Lazio</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location3.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client1.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MARIA MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">10 Oct</span>
                                <div class="single-testi-des">
                                    <p>Panorama, landscape, autumn Scholes Leopold scorn, Austria simply TravelCo, Rome Italy, Mattina reflections, travel photography.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location4.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client4.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHATLI MURA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">21 Nov</span>
                                <div class="single-testi-des">
                                    <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location1.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client3.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MIANCI MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">25 Nov</span>
                                <div class="single-testi-des">
                                    <p>No need to hunt for photo inspiration here mortise burg castle royal hunt in lodge, Dresden, simply TravelCo, best of Germany throwback, </p>
                                </div>
                            </div>
                        </div>
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location2.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client2.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHONE MORE</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">16 Dec</span>
                                <div class="single-testi-des">
                                    <p>Good morning Roma! Watching Rome wake up from its highest hill of Monte Mario Rome, ig Rome, ig, Italy, monte Mario, view Tiber, revere, Lazio</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location3.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client1.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">MARIA MONA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">10 Oct</span>
                                <div class="single-testi-des">
                                    <p>Panorama, landscape, autumn Scholes Leopold scorn, Austria simply TravelCo, Rome Italy, Mattina reflections, travel photography.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-testimonial item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location4.jpg" alt="image">
                                <img class="testi-clinetimg" src="assets/images/clientreview/client4.jpg" alt="image">
                            </div>
                            <div class="testi-details">
                                <span class="social-icon-c"><i class="fa fa-instagram"> </i></span>
                                <h4 class="name-c">JHATLI MURA</h4>
                                <h6 class="client-id">@client</h6>
                                <span class="date">21 Nov</span>
                                <div class="single-testi-des">
                                    <p>Nunc eu neque in nisl aliquet blandit. Donec sodales velit at auctor mollis. Sed vitae placerat risus. Etiam tincidunt ipsum nec ante vulputate iaculis mus.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonail end here -->
@stop
