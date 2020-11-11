@extends('templates')

@section('style')
    <style>
        p {
            line-height: 1em;
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
        /*start first cruise*/
        .main1 .carousel-card1 {
            max-width: 355px;
            position: relative;
            background:#f6f6f6;
        }

        .main1 .carousel-card1 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 290px;
        }

        .main1 .carousel-card1 .carousel-card-description {
            /*position: absolute;*/
            display: block;
            width: 100%;
            bottom: 0;
            padding: 15px;
            color: #000;
            background:rgba(255, 255, 255, 0.77) !important;
            border: 1px solid rgba(204, 204, 204, 0.64);
        }

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
            max-width: 330px;
            position: relative;
            background:#f6f6f6;
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
            padding: 8px 10px;
            color: #000;
            background:rgba(255, 255, 255, 0.77) !important;
            border: 1px solid rgba(204, 204, 204, 0.64);
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


    </style>
@stop
@section('stylesheet')

@stop
@section('content')
    <section class="cruise-area5" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
        <div class="display-table">
            <div class="display-table-cell5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section style=" top: -100px;position: absolute;background:rgba(255, 255, 255, 0.77);border-radius: 14px;">
                                <div class="tab-search tab-search-long tab-search-default">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-3 col-xs-12 col-xs-offset-3" style="
                                                    padding-left: 50px;" >
                                                <ul role="tablist" class="nav nav-tabs">
                                                    <li role="presentation" class="tab-btn-wrapper ">
                                                        <a href="index1-3.html#fhotel" aria-controls="fhotel" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-building-o"></i>
                                                            <span class="text">CROISIÈRES</span>
                                                            <span class="xs">RECHERCHE CROISIRES</span>
                                                        </a>
                                                    </li>
                                                    <!-- <li role="presentation" class="tab-btn-wrapper active">
                                                             <a href="index1-3.html#cars" aria-controls="cars" role="tab" data-toggle="tab" class="tab-btn" style=" line-height: 2em;">
                                                                     <i class="fa fa-plane"></i>
                                                                     <span class="text">VOL</span>
                                                                     <span style=" margin: 0 10px 0 10px;">+</span>
                                                                     <i class="fa fa-home"></i>
                                                                     <span class="text">VACANCES</span>
                                                                     <span style=" margin: 0 10px 0 10px;">+</span>
                                                                     <i class="fa fa-car"></i>
                                                                     <span class="text">VOITURES</span>

                                                                     <span class="xs">RECHERCHE VOL + VACANCES + VOITURE</span>
                                                                 </a>
                                                         </li>-->





                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-1">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" id="fhotel" class="tab-pane fade ">
                                                            <div class="find-widget find-hotel-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">LOCATION CROISIRES</h4>

                                                                        <form class="content-widget">
                                                                            <!--<div class="ffw-radio-selection">
                                                                                                    <span class="ffw-radio-btn-wrapper">
                                                                                                        <input type="radio" name="flight type" value="one way" id="flight-type-1" checked="checked" class="ffw-radio-btn">
                                                                                                        <label for="flight-type-1" class="ffw-radio-label">One Way</label>
                                                                                                    </span>
                                                                                                    <span class="ffw-radio-btn-wrapper">
                                                                                                        <input type="radio" name="flight type" value="round trip" id="flight-type-2" class="ffw-radio-btn">
                                                                                                        <label for="flight-type-2" class="ffw-radio-label">Round Trip</label>
                                                                                                    </span>
                                                                                                    <span class="ffw-radio-btn-wrapper">
                                                                                                        <input type="radio" name="flight type" value="multiple cities" id="flight-type-3" class="ffw-radio-btn">
                                                                                                        <label for="flight-type-3" class="ffw-radio-label">Multiple Cities</label>
                                                                                                    </span>
                                                                                                    <div class="stretch">&nbsp;</div>
                                                                                                </div>-->
                                                                            <div class="text-input small-margin-top">
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Départ:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Arrivé:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de départ</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de retour</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper" style="">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-user input-group-addon"></i>Adulte</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down-->
                                                                                        <select class="form-control custom-select selectbox">
                                                                                            <option selected="selected">1</option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                            <option>6</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count child-count text-box-wrapper" style="">
                                                                                    <label class="tb-label" style=""><i class="tb-icon fa fa-child input-group-addon"></i>Bébé</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down-->
                                                                                        <select class="form-control custom-select selectbox">
                                                                                            <option selected="selected">0</option>
                                                                                            <option>1</option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                            <option>6</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="btn-slide style_btn2" style="">
                                                                                    <h5>CHERCHER</h5>
                                                                                    <a href="hotel-details.html"><span class="icons left_ico">
                                                                                                                                                            <i class="fa fa-long-arrow-right"></i>
                                                                                                                                                        </span></a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div></div>
                                                            </div>
                                                        </div>
                                                        <!-->  <div role="tabpanel" id="cars" class="tab-pane fade in active ">
                                                            <div class="find-widget find-car-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE HOTEL + VOL + VOITURE</h4>

                                                                        <form class="content-widget">

                                                                            <div class="text-input small-margin-top">
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Départ:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Arrivé:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de départ</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de retour</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper" style="">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-user input-group-addon"></i>Adulte</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down->
                                                                                        <select class="form-control custom-select selectbox">
                                                                                            <option selected="selected">1</option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                            <option>6</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count child-count text-box-wrapper" style="">
                                                                                    <label class="tb-label" style=""><i class="tb-icon fa fa-child input-group-addon"></i>Bébé</label>
                                                                                    <div class="select-wrapper">
                                                                                        <!--i.fa.fa-chevron-down->
                                                                                        <select class="form-control custom-select selectbox">
                                                                                            <option selected="selected">0</option>
                                                                                            <option>1</option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                            <option>5</option>
                                                                                            <option>6</option>
                                                                                            <option>7</option>
                                                                                            <option>8</option>
                                                                                            <option>9</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="btn-slide style_btn2" style="">
                                                                                    <h5>CHERCHER</h5>
                                                                                    <a href="hotel-details.html"><span class="icons left_ico">
                                                                                        <i class="fa fa-long-arrow-right"></i>
                                                                                    </span></a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                                                                </div></div></div>
                                                </div>-->




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
    <!-- slide end here-->
    <!-- START CRUISE FIRST PLACE DESIGN AREA -->
    <section id="cruise-era" class="tour-places section-padding">
        <div class="container main1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title " style="line-height: 1em">
                        <h2>PROMOTIONS CROISIÈRES</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias repellat porro quo. Ab quos debitis possimus aperiam ipsam, iure, adipisci nobis fugiat, cumque doloremque dicta enim tempore similique blanditiis officia.</p>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-list owl-carousel">
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/cruise/cruise_2.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-trip">
                                            <p style="font-weight: 900;">
                                                <span>Italie et Baléares</span>
                                            </p></div>
                                        <div class="name-cruise-fleet">
                                            <p style="font-weight: 300;">MSC Croisières | MSC Fantasia</p>
                                        </div>
                                        <div class="name-cruise-description">
                                            <p style="font-weight: 300;">8 Jours au départ de Marseille</p>
                                        </div>
                                        <div class="name-cruise-departure">
                                            <p style="font-weight: 300;"><b>Départs</b> <span>28 Avril au 13 13 Octobre</span></p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em; ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">DÉTAILS</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/cruise/cruise_3.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-trip">
                                            <p style="font-weight: 900;">
                                                <span>Perles de la Mer Égée et Venise</span>
                                            </p></div>
                                        <div class="name-cruise-fleet">
                                            <p style="font-weight: 300;">Costa Croisières | Costa Luminosa</p>
                                        </div>
                                        <div class="name-cruise-description">
                                            <p style="font-weight: 300;">9 Jours au départ de Venise</p>
                                        </div>
                                        <div class="name-cruise-departure">
                                            <p style="font-weight: 300;"><b>Départs</b> <span>17 Mai au 06 Septembre</span></p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em;">
                                    <aa href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">DÉTAILS</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/cruise/cruise_4.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-trip">
                                            <p style="font-weight: 900;">
                                                <span>Entre Mer et Histoire</span>
                                            </p></div>
                                        <div class="name-cruise-fleet">
                                            <p style="font-weight: 300;">Costa Croisières | Costa Deliziosa</p>
                                        </div>
                                        <div class="name-cruise-description">
                                            <p style="font-weight: 300;">8 Jours au départ de Venise</p>
                                        </div>
                                        <div class="name-cruise-departure">
                                            <p style="font-weight: 300;"><b>Départs</b> <span>31 Mars au 28 Avril</span></p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em;">
                                    <aa href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">DÉTAILS</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->

        </div>
        <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
        <!-- START SINGLE TOUR PLACE DESIGN AREA -->
        </div>
        </div>
    </section>
    <!-- / END  FIRST CRUISE PLACE DESIGN AREA -->
    <!-- START CRUISE SECOND PLACE DESIGN AREA -->
    <section id="cruise-sd-era" class="tour-places section-padding">
        <div class="container main2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title " style="line-height: 1em">
                        <h2>NOS PRINCIPALES ZONES</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias repellat porro quo. Ab quos debitis possimus aperiam ipsam, iure, adipisci nobis fugiat, cumque doloremque dicta enim tempore similique blanditiis officia.</p>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tour-list owl-carousel text-center">
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/cruise/cruise_5.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-area">
                                            <p style="font-weight: 900;">
                                                <span>Méditerranée Occidentale</span>
                                            </p></div>


                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/cruise/cruise_6.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-area">
                                            <p style="font-weight: 900;">
                                                <span>Europee du Nord / Fjords</span>
                                            </p></div>


                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/cruise/cruise_5.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-area">
                                            <p style="font-weight: 900;">
                                                <span>Méditerranée Occidentale</span>
                                            </p></div>


                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/cruise/cruise_7.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-area">
                                            <p style="font-weight: 900;">
                                                <span>Tour du monde</span>
                                            </p></div>


                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/cruise/cruise_8.jpg" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-cruise-area">
                                            <p style="font-weight: 900;">
                                                <span>Afrique du Nord et Meditérranée</span>
                                            </p></div>


                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->

        </div>
        <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
        <!-- START SINGLE TOUR PLACE DESIGN AREA -->
        </div>
        </div>
    </section>
    <!-- / END  SECOND CRUISE PLACE DESIGN AREA -->

    <!--Brand start here-->
    <section id="cruise-tr-era" class=" section-padding " data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title text-center">
                        <h2>Nos partenaires</h2>
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
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/cruise/1.jpg" alt="image">
                            </div>

                        </div>
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/cruise/2.jpg" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/cruise/3.png" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/cruise/4.jpg" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/cruise/5.png" alt="image">

                            </div>
                        </div>

                        <!-- START SINGLE TESTIMONIAL DESIGN AREA ->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location2.jpg" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA ->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location3.jpg" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA ->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location4.jpg" alt="image">

                            </div>
                        </div>
                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA ->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location1.jpg" alt="image">

                            </div>
                        </div>
                        <!-- START SINGLE TESTIMONIAL DESIGN AREA ->
                        <div class="single-flight-ft-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/clientreview/location2.jpg" alt="image">

                            </div>
                        </div>

                        <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand end here-->
@stop
