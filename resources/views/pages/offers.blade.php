@extends('templates')
@section('style')
    <style>
        p {
            line-height: 12px;
            font-family: "Roboto", sans-serif;
        }
        /* search slide*/
        .tab-search .tab-btn-wrapper {
            width: calc((100%) / 5) !important;}
        .tab-search .tab-btn-wrapper .tab-btn i {
            font-size: 1.7rem;
            margin-right: 7px;}
        /* end */
        .hotel-tr-area img { max-width:100%; }

        .hotel-tr-area a {
            -webkit-transition: all 150ms ease;
            -moz-transition: all 150ms ease;
            -ms-transition: all 150ms ease;
            -o-transition: all 150ms ease;
            transition: all 150ms ease;
        }

        .hotel-tr-area .thumbnails li> .fff .caption {
            background:#fff !important;
            padding:10px
        }


        .hotel-tr-area ul.thumbnails {
            margin-bottom: 0px;
        }


        /* Thumbnail Box */
        .hotel-tr-area .caption h4 {
            color: #444;
        }

        .hotel-tr-area .caption p {
            color: #999;
        }



        /* Carousel Control */
        .control-box {
            text-align: right;
            width: 100%;
        }
        .carousel-control{
            background: #666;
            border: 0px;
            border-radius: 0px;
            display: inline-block;
            font-size: 34px;
            font-weight: 200;
            line-height: 18px;
            opacity: 0.5;
            padding: 4px 30px 0px;
            position: static;
            height: 30px;
            width: 15px;
        }
        .carousel-control-next, .carousel-control-prev{
            font-size: 20px;
            height: 40px;
            width: 40px;
            padding: 11px;
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
            background-color: #449d44;
            position: absolute;
            border-radius: 20px;
            color: #fff;
            line-height: 0em;}

        .carousel-control-next, .carousel-control-prev a:hover{font-size: 20px}
        /* Mobile Only */
        @media (max-width: 767px) {
            .hotel-tr-area .control-box {
                text-align: center;
            }
        }
        @media (max-width: 479px) {
            .hotel-tr-area .caption {
                word-break: break-all;
            }
        }


        .hotel-tr-area li { list-style-type:none;}

        ::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
        ::-moz-selection { background: #ff5e99; color: #FFFFFF; }


        .main-footer {
            background: #b2d480;
            padding-top: 35px;
            color: #636363;
        }
        .main-footer #cercle{

            background:#ffffff;
            border-radius:50%;
            width:200px;
            height:200px;
            padding-top:10px;


        }
        .main-footer .logo-meduim {
            width: 100%;
            height: 100%;
            max-width: 204px;
            max-height: 176px;
        }

        .main-footer h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .main-footer p {
            font-size: 15px;
        }

        .main-footer .contact-info {
            margin-top: 30px;
        }

        .main-footer .contact-info p {
            margin-bottom: 12px;
            font-size: 14px;
        }

        .main-footer .contact-info span {
            display: inline-block;
            border-radius: 60px;
            color: #fff;
            background: #249e57;
            padding: 0.3em 0.5em;
            margin-right: 6px;
            font-size: 20px;

        }

        .main-footer .contact-info .fa-phone {
            padding: 0.3em 0.4em;
        }

        .main-footer .contact-info .fa-envelope {
            padding: 0.3em 0.4em;
            font-size: 20px;
        }


        .main-footer .newsletters {
            /* padding-left: 50px;*/
        }

        .main-footer .newsletters .form-control {
            border: 0px;
            height: 43px;
            background: #a3cc68;
            /*border: 1px solid #939497;*/
            border-right: 0px;
        }

        .main-footer .newsletters .input-group {
            background: #a3cc68;
            border-radius: 10px;
            border: 1px solid #939497;
        }

        .main-footer .newsletters .input-group .btn {
            border: 0px;
            font-size: 25px;
            padding: 1px 13px;
            background: #249e57;
            color: #fff;
            border-radius: 10px 10px 10px 10px;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            background: #249e57;
            text-align: center;
            float: left;
            width: 36px;
            height: 36px;
            border-radius: 100%;
            margin-right: 7px;

        }
        .social-links a i{
            font-size: 30px;
            line-height: 38px;
            color: #fff;
        }
        /*start first car-ft-era*/
        .main1 .carousel-card1 {
            max-width: 330px;
            position: relative;
            background:#f6f6f6;
        }

        .main1 .carousel-card1 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 353px;
        }

        .main1 .carousel-card1 .carousel-card-description {
            position: absolute;
            display: block;
            width: 100%;
            bottom: 0;
            padding: 15px;
            color: #000;
            background:rgba(255, 255, 255, 0.77) !important;}

        .main1 .carousel-card1 .carousel-card-description .price {
            font-size: 14px;
            font-weight: 300;
        }

        .main1 .carousel-card1 .carousel-card-description .title {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;

        }

        .main1 .carousel-card1 .carousel-card-description .btn {
            padding-top: 1px;
            padding-bottom: 1px;
            font-size: 14px;
            text-transform: uppercase;
            line-height: 2em;
        }
        /*start cruise-sd-era*/
        .main2 .carousel-card1 {
            max-width: 360px;
            position: relative;
            padding-top: 20px;

        }

        .main2 .carousel-card1 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 250px;

        }

        .main2 .carousel-card1 .carousel-card-description {
            /*position: absolute;*/
            display: block;
            width: 100%;
            bottom: 0;
            padding: 15px;
            color: #000;
            background:rgba(255, 255, 255, 0.77) !important;
            border: 1px solid rgba(204, 204, 204, 0.64);
            text-align: left;

        }

        .main2 .carousel-card1 .carousel-card-description .price {
            font-size: 14px;
            font-weight: 300;
        }

        .main2 .carousel-card1 .carousel-card-description .title {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;

        }

        .main2 .carousel-card1 .carousel-card-description .btn {
            padding-top: 1px;
            padding-bottom: 1px;
            font-size: 14px;
            text-transform: uppercase;
            line-height: 2em;
        }

        #ui-datepicker-div{
            z-index: 9999 !important;
        }
        hr.resa {
            border: 5px solid green;
            border-radius: 5px;
        }
        hr.why {
            border: 2px solid #fff;
            border-radius: 5px;
        }

        .single-logo-part-era {
            margin-right: 30px;
            text-align: center;
        }
        .single-logo-part-era {
            margin-right: 30px;
            text-align: center;
        }
        .single-logo-part-era h6 {
            margin-top: 0px;
            font-size: 12px;
            text-transform: capitalize;
            letter-spacing: 3px;
        }
        .single-logo-part-era img.img_1{
            width: 100%;

        }
        .logo-partner img{
            max-width: 150px;
        }
        .whereto-overlay p.text{line-height: 20px;
        }
        .whereto-overlay h1 {
            color: #fff;
            font-family: "Rubik", sans-serif;
            text-transform: capitalize;
        }
        .whereto-overlay{background: rgba(174, 255, 5, 0.5) !important;}
        .cards-with-image {
            border-bottom: 1px solid #e6e5e4;
        }

        .cards-with-image .card {
            border-radius: 0px;
            border-color: #e6e5e4;
            margin-bottom: 10px;
        }

        .cards-with-image .card .card-body {
            position: relative;
            padding: 0px;
        }

        .cards-with-image .card .card-body img {
            width: 100% !important;
            height: 100% !important;
        }


        .cards-with-image .card .card-body .description {
            position: absolute;
            top: 0;
            left: 0;
            width: 40%;
            padding: 5px 5px 5px 10px;
            height: 100% !important;
            background: rgba(255, 255, 255, 0.8);
            color: #636363;

        }

        .cards-with-image .card .card-body .description p {
            margin-bottom: 12px;
        }

        .cards-with-image .card .card-body .description p .fa {
            color: #26a059;
        }

        .cards-with-image .card .card-body .description h3 {
            font-size: 25px;
            text-transform: uppercase;

        }

        .cards-with-image .card .card-footer {
            background: #fff;
        }

        .cards-with-image .card .card-footer .row p {
            margin-bottom: 0px;
            color: #636363;
            font-size: 15px;
        }

        .cards-with-image .card .card-footer .row p span {
            font-size: 25px;
            font-weight: bold;
            color: #000;
            margin-left: 3px;
            margin-right: 3px;
        }

        .cards-with-image .card .card-footer .row .btn {
            font-size: 14px;
            padding-top: 4px;
            padding-bottom: 4px;
            border-radius: 10px;
            text-transform: uppercase;
        }
        .price small {
            display: inline-block;
            color: #838383;
            font-size: 0.5em;
        }
    </style>
@stop

@section('content')
    <!-- START HEADER DESIGN AREA -->
    <section class="offer-area7" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
        <div class="display-table">
            <div class="display-table-cell5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 text-center" style=" float: right;">
                            <h2>DÉCOUVREZ NOS</h2>
                            <h2 style="color: rgba(255, 255, 255, 0.75);background: #1d941a;border-radius: 20px; line-height: 1.4em;font-size: 35px;">OFFRES EXCLUSIFS</h2>
                            <h2>POUR VOS VACANCES</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- / END HEADER DESIGN AREA -->

    <!-- slider end here-->

    <!-- START  FIRST OFFER PLACE DESIGN AREA -->
    <section id="offer-era" class="section-padding">
        <div class="">
            <div class="container main2">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title ">
                            <h2>PAR ICI NOS BONS PLANS</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                       line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 0 9px 6px;"> -40%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/offre1.png" class="card-carousel-image"></a></div>

                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Dakhla - Maroc

                                                </p>
                                            </div>
                                            <div class="type-plane">
                                                <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>6 J / 5 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price" style="margin-top: 10px">
                                            <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                                <p>À partir</p>
                                                <p><span style="color:green;font-weight: 900">000 €</span></p>
                                                <div class="log">
                                                    <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="carousel-card1">
                            <a href="#" style="text-decoration: none;color:#000">
                                <img src="assets/images/offre2.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Rome - Italie

                                                </p>
                                            </div>
                                            <div class="type-plane">
                                                <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price" style="margin-top: 10px">
                                            <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                                <p>À partir</p>
                                                <p><span style="color:green;font-weight: 900">000 €</span></p>
                                                <div class="log">
                                                    <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                                    line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 5px 10px 6px;"> -30%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/offre3.png" class="card-carousel-image"></a></div>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Londres - Angleterre

                                                </p>
                                            </div>
                                            <div class="type-plane">
                                                <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>11 J / 10 N</span> Complet</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price" style="margin-top: 10px">
                                            <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                                <p>À partir</p>
                                                <p><span style="color:green;font-weight: 900">000 €</span></p>
                                                <div class="log">
                                                    <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <a href="#" style="text-decoration: none;color:#000">
                                <img src="assets/images/poffre6.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Marrakech - Maroc

                                                </p>
                                            </div>
                                            <div class="type-plane">
                                                <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price" style="margin-top: 10px">
                                            <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                                <p>À partir</p>
                                                <p><span style="color:green;font-weight: 900">000 €</span></p>
                                                <div class="log">
                                                    <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                                            line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 5px 10px 6px;"> -35%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/offre5.png" class="card-carousel-image"></a></div>                                                    <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">M'bour - Sénégal

                                                </p>
                                            </div>
                                            <div class="name-hotel">
                                                <p ><i class="fa fa-building-o" style="margin-right:10px"></i><span>Framissima Palm Beach</span>
                                                </p></div>
                                            <!--<div class="type-plane">
                                                    <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>-->
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="price" style="margin-top: 10px">
                                            <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                                <p>À partir</p>
                                                <p><span style="color:green;font-weight: 900">000 €</span></p>
                                                <div class="log">
                                                    <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                                </div>
                                            </a>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                                                line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 5px 10px 6px;"> -24%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/offre7.png" class="card-carousel-image"></a></div>                                                        <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Barcelone - Espagne

                                                </p>
                                            </div>
                                            <div class="name-hotel">
                                                <p ><i class="fa fa-building-o" style="margin-right:10px"></i><span>Hilton Diagonal Mar</span>
                                                </p></div>
                                            <!--<div class="type-plane">
                                                    <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>-->
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Royal Air Maroc</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                            <p>À partir</p>
                                            <p><span style="color:green;font-weight: 900">000 €</span></p>
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                            </div>
                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                                    line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 5px 10px 6px;"> -20%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/car3.png" class="card-carousel-image"></a></div>                                                        <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Croisière - Méditeranée

                                                </p>
                                            </div>
                                            <div class="town">
                                                <p ><i class="fa fa-building-o" style="margin-right:10px;font-size: 700"></i><span>Espagne, Maroc, Italie</span>
                                                </p></div>
                                            <!--<div class="type-plane">
                                                    <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>-->
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>MSC Croisières</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                            <p>À partir</p>
                                            <p><span style="color:green;font-weight: 900">000 €</span></p>
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                            </div>
                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <a href="#" style="text-decoration: none;color:#000">
                                <img src="assets/images/car2.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Croisière - South Africa

                                                </p>
                                            </div>
                                            <div class="town-contry">
                                                <p ><i class="fa fa-building-o" style="margin-right:10px;font-size: 700"></i><span>Cap town, harera, top</span>
                                                </p></div>
                                            <!--<div class="type-plane">
                                                    <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>-->
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>Costa Pacifia</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                            <p>À partir</p>
                                            <p><span style="color:green;font-weight: 900">000 €</span></p>
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                            </div>
                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="carousel-card1">
                            <div >
                                <p style="position: absolute;color: #fff;background: green;border-radius: 20px;height: 40px;
                                                                line-height: 20px;width: 40px;right: 10px;top: 30px; padding: 10px 5px 10px 6px;"> -10%</p>
                                <a href="#" style="text-decoration: none;color:#000">
                                    <img src="assets/images/car1.png" class="card-carousel-image"></a></div>                                                        <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="town-contry " style="margin: 3px 0 12px;">
                                                <p style="font-weight: 900">Croisière - Italie Portugal

                                                </p>
                                            </div>
                                            <div class="town-contry">
                                                <p ><i class="fa fa-building-o" style="margin-right:10px;font-size: 700"></i><span>Italie, Espagne, Portugal</span>
                                                </p></div>
                                            <!--<div class="type-plane">
                                                    <p ><i class="fa fa-plane" style="margin-right:10px"></i><span>Vol Aller-Retour</span>
                                                </p></div>-->
                                            <div class="typ-trip">
                                                <p><i class="fa fa-plane" style="margin-right:10px" ></i><span>8 J / 7 N</span> Petit Déjeuner</p>
                                            </div>
                                            <div class="compagny-fleet">
                                                <p>Avec <small>MSC Croisières</small></p>
                                            </div>


                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" style="text-decoration: none;color:#000;text-align: right">
                                            <p>À partir</p>
                                            <p><span style="color:green;font-weight: 900">000 €</span></p>
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">PROFITEZ</a>
                                            </div>
                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- / END  FIRST OFFER PLACE DESIGN AREA -->
    <!-- START  SECOND OFFER PLACE DESIGN AREA -->
    <section id="offer-sd-era" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>NOTRE SÉLECTION DU MOMENT</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards-with-image">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="card text-center">
                            <div class="card-body" style="height: 340px !important">
                                <img src="assets/images/Paris-1.png" >
                                <div class="description">
                                    <img src="assets/images/partner2.png" alt="" style=" width: 140px !important;height: 90px !important;">
                                    <hr style="  border:1px solid #d83535; margin: 0;">
                                    <h3 class="description-title">paris</h3>
                                    <p> À partir de </p>
                                    <p class="price"><span style="font-weight:bold;font-size:20px">235 €</span> <small>TTC A/R</small></p>
                                    <p style=" padding-bottom: 20px;">Un bagage de 23 kgs+ un repas offert</p>
                                    <button class="btn btn-success btn-success-light float-right btn-block" style=" background:#d83535;height:37px;font-size:10px;">RESERVEZ</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="card text-center">
                                <div class="card-body" style="height: 170px !important">
                                    <img src="assets/images/145883186.png" style="height: 160px !important">
                                    <div class="description">
                                        <h4 class="description-title" style=" background: #62ac1e;width:70px;color:#fff;">Agadir</h4>
                                        <div class="name-hotel"><p style="font-weight: 900">IBEROSTAR FOUNTY
                                                BEACH HOTEL 4*</p></div>
                                        <div> À partir de <p class="price"><span style="font-weight:bold; font-size: 14px;color:orangered ">147 €/ Nuit</span> </p></div>
                                        <button class="btn btn-success btn-success-light float-right btn-block" style=" background:#d83535;height: 20px;font-size:12px;line-height: 5px">RESERVEZ</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="card text-center">
                                <div class="card-body" style="height: 170px !important">
                                    <img src="assets/images/CAB_BG.png" style=" height: 160px !important;width: 219px !important;right: 50px; position: absolute;">
                                    <div class="description">
                                        <h4 class="description-title" style=" background: #62ac1e;width:115px;color:#fff; ">Mini Cooper</h4>
                                        <div class="name-car"><p style="font-weight: 900">Cabriolet sur Mésure</p></div>
                                        <div> Dès<p class="price"><span style="font-weight:bold; font-size: 14px;color:orangered ">35 €/ Jour</span> </p></div>
                                        <button class="btn btn-success btn-success-light float-right btn-block" style=" background:#d83535;height: 20px;font-size:12px;line-height: 5px">RESERVEZ</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- / END  SECOND OFFER PLACE DESIGN AREA -->

@stop
