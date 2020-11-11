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
        /*start first vacancy*/
        .main1 .carousel-card1 {
            max-width: 330px;
            position: relative;
            background:#f6f6f6;
        }

        .main1 .carousel-card1 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 405px;
        }

        .main1 .carousel-card1 .carousel-card-description {
            position: absolute;
            display: block;
            width: 100%;
            bottom: 0;
            padding: 8px 10px;
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
        /*start vacancy-sc-era*/

        .main2 .carousel-card2 {
            max-width: 330px;
            position: relative;
            background:#f6f6f6;
        }

        .main2 .carousel-card2 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 305px;
        }

        .main2 .carousel-card2 .carousel-card-description {
            position: absolute;
            display: block;
            width: 100%;
            bottom: 0;
            padding: 8px 10px;
            color: #000;
            background:rgba(255, 255, 255, 0.77) !important;}

        .main2 .carousel-card2 .carousel-card-description .price {
            font-size: 14px;
            font-weight: 300;
        }

        .main2 .carousel-card2 .carousel-card-description .title {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;

        }

        .main2 .carousel-card2 .carousel-card-description .btn {
            padding-top: 1px;
            padding-bottom: 1px;
            font-size: 14px;
            text-transform: uppercase;
            line-height: 2em;
        }
    </style>
@stop
@section('content')
    <!-- START HEADER DESIGN AREA -->
    <section class="vacancy-area3" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
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
                                                            <span class="text">LOCATIONS DE VACANCES</span>
                                                            <span class="xs">RECHERCHE LOCATIONS DE VACANCES</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper active">
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
                                                    </li>





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
                                                                        <h4 class="title-widgets" style=" padding: 0;">LOCATION VACANCE</h4>

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
                                                        <div role="tabpanel" id="cars" class="tab-pane fade in active ">
                                                            <div class="find-widget find-car-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE HOTEL + VOL + VOITURE</h4>

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
                                                                    </div></div></div>
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

    <!-- / END HEADER DESIGN AREA -->
    <!--start top destination-->

    <!--End top destination -->
    <!-- START VACANCY FIRST PLACE DESIGN AREA -->
    <section id="vacancy-era" class="tour-places section-padding">
        <div class="container main1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title " style="line-height: 1em">
                        <h2>Trouvez la location de vacances qui vous convient</h2>
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
                            <img src="assets/images/vac2.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="typ-immo1">
                                            <p style="font-weight: 900;">
                                                <span>Studios</span>
                                            </p></div>
                                        <div class="nbr-typ-immo-1">
                                            <p style="font-weight: 300;">45 634 Studios</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">VOIR</a>
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

                            <img src="assets/images/vac3.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="typ-immo2">
                                            <p style="font-weight: 900;">
                                                <span>Appartements</span>
                                            </p></div>
                                        <div class="nbr-typ-immo-2">
                                            <p style="font-weight: 300;">45 634 Studios</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">VOIR</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/vac4.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="typ-immo3">
                                            <p style="font-weight: 900;">
                                                <span>Villas</span>
                                            </p></div>
                                        <div class="nbr-typ-immo-3">
                                            <p style="font-weight: 300;">45 634 Studios</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">VOIR</a>
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
    <!-- / END  FIRST VACANCY PLACE DESIGN AREA -->

    <!-- START VACANCY SECOND PLACE DESIGN AREA -->
    <section id="vacancy-sd-era" class="tour-places section-padding">
        <div class="container main2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Nos dernières annonces de location</h2>
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
                    <div class="carousel-card2">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/vac5.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-typ-immo1">
                                            <p style="font-weight: 900;">
                                                <span>Studios beaux-arts</span>
                                                <span style="font-weight: 300;"><small>6 pers</small> </span></p></div>
                                        <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">DECOUVRIR</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
                <!-- START SINGLE TOUR PLACE DESIGN AREA -->
                <div class="single-place item ">
                    <div class="carousel-card2">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/vac6.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-typ-immo1">
                                            <p style="font-weight: 900;">
                                                <span>Appart' des chatelets </span>
                                                <span style="font-weight: 300;"><small>8 pers</small> </span></p></div>
                                        <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">DECOUVRIR</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card2">
                        <a href="#" style="text-decoration: none;color:#000">

                            <img src="assets/images/vac7.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-9 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="name-typ-immo1">
                                            <p style="font-weight: 900;">
                                                <span>Villa des pré </span>
                                                <span style="font-weight: 300;"><small>14 pers</small> </span></p></div>
                                        <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>
                                    </a>  </div>
                                <div class="col-md-3" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right" style="margin-top: 9px">DECOUVRIR</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>
    <!-- / END  SECOND VACANCY PLACE DESIGN AREA -->
    <!--    THIRD VACANCY PLACE DESIGN AREA -->
    <section class="deal-area section-padding" id="deal">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="section-title text-center">
                        <h2>Tendances</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 no-padding-right">
                    <div class="col-md-8 col-sm-8 sm-no-padding-right">
                        <!-- single deal -->
                        <div class="single-deal">
                            <img alt="image" src="assets/images/deals/offer1.jpg">
                            <div class="single-deal-overflow">
                                <div class="overflow-middle">
                                    <h5>MALAISIE</h5>
                                    <h2>23 456 annonces</h2>
                                    <a href="deals.html" class="button">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.single deal -->
                    </div>
                    <div class="col-md-4 col-sm-4 sm-no-padding-right">
                        <!-- single deal -->
                        <div class="single-deal">
                            <img alt="image" src="assets/images/deals/offer2.jpg">
                            <div class="single-deal-overflow">
                                <div class="overflow-middle">
                                    <h5>ESPAGNE</h5>
                                    <h2>23 456 annonces</h2>
                                    <a href="deals.html" class="button">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.single deal -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4 sm-no-padding-right">
                        <!-- single deal -->
                        <div class="single-deal">
                            <img alt="image" src="assets/images/deals/offer4.jpg">
                            <div class="single-deal-overflow">
                                <div class="overflow-middle">
                                    <h5>CHINA</h5>
                                    <h2>28 492 annonces</h2>
                                    <a href="deals.html" class="button">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.single deal -->
                    </div>
                    <div class="col-md-8 col-sm-8 sm-no-padding-right">
                        <!-- single deal -->
                        <div class="single-deal">
                            <img alt="image" src="assets/images/deals/offer5.jpg">
                            <div class="single-deal-overflow">
                                <div class="overflow-middle">
                                    <h5>RWANDA</h5>
                                    <h2>13 456 annonces</h2>
                                    <a href="deals.html" class="button">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.single deal -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 sm-no-padding-right">
                    <div class="col-md-12 col-sm-12 no-padding">
                        <!-- single deal -->
                        <div class="single-deal">
                            <img alt="image" src="assets/images/deals/offer3.jpg">
                            <div class="single-deal-overflow">
                                <div class="overflow-middle">
                                    <h5>USA</h5>
                                    <h2>63 971 annonces</h2>
                                    <a href="deals.html" class="button">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.single deal -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / End THIRD VACANCY PLACE DESIGN AREA -->

@stop
