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
        /*start first hotel-ft-era*/
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
        /*start hotel-td-era*/
        .main .carousel-card {
            max-width: 330px;
            position: relative;
            background:#f6f6f6;
        }

        .main .carousel-card .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            height: 317px;
        }

        .main .carousel-card .carousel-card-description {
            /* position: absolute;*/
            display: block;
            width: 100%;
            bottom: 0;
            padding: 8px 10px;
            color: #fff;
            background: rgba(0, 0, 0, 0.7) !important;
        }

        .main .carousel-card .carousel-card-description .price {
            font-size: 14px;
            font-weight: 300;
        }

        .main .carousel-card .carousel-card-description .title {
            font-size: 15px;
            font-weight: 900;
            margin-bottom: 5px;
            display: block;
            text-transform: uppercase;

        }

        .main .carousel-card .carousel-card-description .btn {
            padding-top: 1px;
            padding-bottom: 1px;
            font-size: 14px;
            text-transform: uppercase;
            line-height: 3em;
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

    </style>
@stop
@section('content')
    <!-- START HEADER DESIGN AREA -->
    <section class="vol-area4" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
        <div class="display-table">
            <div class="display-table-cell5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <section style=" top: -100px;position: absolute;background:rgba(255, 255, 255, 0.77);border-radius: 14px;">
                                <div class="tab-search tab-search-long tab-search-default">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-1 col-xs-12 col-xs-offset-1" style="
                                                    padding-left: 27px;" >
                                                <ul role="tablist" class="nav nav-tabs">
                                                    <li role="presentation" class="tab-btn-wrapper ">
                                                        <a href="index1-4.html#fhotel" aria-controls="fhotel" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>
                                                            <span class="xs">RECHERCHE VOL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper active ">
                                                        <a href="index1-4.html#flight" aria-controls="flight" role="tab" data-toggle="tab" class="tab-btn" >
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>
                                                            <span >+</span>
                                                            <i class="fa fa-building-o"></i>
                                                            <span class="text">HÔTELS</span>

                                                            <span class="xs">RECHERCHE VOL + HÔTEL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index1-4.html#cars" aria-controls="cars" role="tab" data-toggle="tab" class="tab-btn" style=" line-height: 2em;">
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>
                                                            <span style=" margin: 0 5px 0 5px;">+</span>
                                                            <i class="fa fa-building-o"></i>
                                                            <span class="text">HÔTELS</span>
                                                            <span style=" margin: 0 5px 0 5px;">+</span>

                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURES</span>
                                                            <span class="xs">RECHERCHE VOL + HÔTEL + VOITURE</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index1-4.html#tours" aria-controls="tours" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOLS</span>
                                                            <span >+</span>
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURES</span>

                                                            <span class="xs">RECHERCHE VOLS + VOITURES</span>
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
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOLS</h4>

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
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Arrivé:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de départ</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de retour</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" value="MM/DD/YY"  id="datepicker1" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="count adult-count text-box-wrapper" style=" left: 100px; position: relative;">
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
                                                                                <div class="count child-count text-box-wrapper" style=" position: relative; left: 100px;">
                                                                                    <label class="tb-label" style="">"<i class="tb-icon fa fa-child input-group-addon"></i>Bébé</label>
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
                                                        <div role="tabpanel" id="flight" class="tab-pane fade in active">
                                                            <div class="find-widget find-flight-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOLS + HÔTELS</h4>

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
                                                        <div role="tabpanel" id="cars" class="tab-pane fade in ">
                                                            <div class="find-widget find-car-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOLS + HÔTELS + VOITURE</h4>

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
                                                        <div role="tabpanel" id="tours" class="tab-pane fade">
                                                            <div class="find-widget find-tours-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOLS + VOITURES</h4>

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

    <!--End top destination -->
    <!-- START FIRST FLIGHT PLACE DESIGN AREA -->
    <section id="flight-era" class="tour-places section-padding">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Réservez votre billets d'avion en un clic</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias repellat porro quo. Ab quos debitis possimus aperiam ipsam, iure, adipisci nobis fugiat, cumque doloremque dicta enim tempore similique blanditiis officia.</p>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 col-sm-offset-1">

                    <div class="col-md-2 test-hr " style=" background: rgb(6, 162, 25);width: 128px;height: 105px; color: #000;border-radius: 20px; margin: 0 30px 0 30px;padding-top: 3px;" >
                        <a href="#">
                            <img src="assets/images/magnifier-tool.png">                        </a>
                    </div>
                    <div class="col-md-1" style="text-align: center;padding-top: 30px;">
                        <hr class="resa">
                    </div>

                    <div class="col-md-2 " style=" background: rgb(6, 162, 25);width: 128px;height: 105px; color: #000;border-radius: 20px; margin: 0 30px 0 30px;">
                        <a href="#">
                            <img src="assets/images/align-justify.png">                        </a>
                        </a>

                    </div>
                    <div class="col-md-1 " style="text-align: center;padding-top: 30px;">
                        <hr class="resa">
                    </div>

                    <div class="col-md-2 " style=" background: rgb(6, 162, 25);width: 128px;height: 105px; color: #000;border-radius: 20px; margin: 0 30px 0 30px;padding-top: 3px;">
                        <a href="#">
                            <img src="assets/images/mobile.png">                        </a>
                        </a>

                    </div>
                    <div class="col-md-1" style="text-align: center;padding-top: 30px;">
                        <hr class="resa">

                    </div>
                    <div class="col-md-2 " style=" background: rgb(6, 162, 25);width: 128px;height: 105px; color: #000;border-radius: 20px; margin: 0 30px 0 30px;">
                        <a href="#">
                            <img src="assets/images/check-mark-black-outline.png">                        </a>
                        </a>

                    </div>

                </div>

            </div>
            <!-- / END SINGLE TOUR PLACE DESIGN AREA -->
            <!-- START SINGLE TOUR PLACE DESIGN AREA -->
        </div>

    </section>
    <!-- / END  FIRST FLIGHT PLACE DESIGN AREA -->

    <!-- START  SECOND FLIGHT PLACE DESIGN AREA -->
    <section id="flight-sd-era" class="section-padding">
        <div class="hotel-tr-area">
            <div class="vamo-module">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="section-title ">
                                <h2>Top destinations</h2>
                                <div class="title-separator-outer ">
                                    <div class="title-separator bg-primary style-liner"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12">


                        <div class="carousel slide" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <ul class="thumbnails">
                                        <li class="col-sm-4">
                                            <div class="fff main">
                                                <div class="thumbnail offer">
                                                    <img alt="image" src="assets/images/home2/topdestination/bangkok-celibataire.jpg">
                                                    <div class="overlay-offer">
                                                        <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                                                        <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                                                        <a href="tour-details.html" class="button">View Details</a>
                                                    </div>                                                    </div>
                                                <div class="thumbnail carousel-card">

                                                    <img src="assets/images/vols3.png" class="card-carousel-image">
                                                    <div class="carousel-card-description">
                                                        <span class="title">BARCELONE</span>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="nbr-hotel"><span>44 Hôtels</span></div>
                                                                <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-sm-4">
                                            <div class="fff main">
                                                <div class="thumbnail offer">
                                                    <img alt="image" src="assets/images/home2/topdestination/5ab407721f0000280616b313.jpg">
                                                    <div class="overlay-offer">
                                                        <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                                                        <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                                                        <a href="tour-details.html" class="button">View Details</a>
                                                    </div>                                                    </div>
                                                <div class="thumbnail carousel-card">

                                                    <img src="assets/images/vols10.png" class="card-carousel-image">
                                                    <div class="carousel-card-description">
                                                        <span class="title">CRETE</span>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="nbr-hotel"><span>19 Hôtels</span></div>
                                                                <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>                                                </div>
                                        </li>
                                        <li class="col-sm-4">
                                            <div class="fff main">
                                                <div class="thumbnail offer">
                                                    <img alt="image" src="assets/images/home2/topdestination/bangkok-celibataire.jpg">
                                                    <div class="overlay-offer">
                                                        <h2 class="text-shadow">Fly To Euorpe From <span class="text-shadow">$980</span></h2>
                                                        <h4 class="text-shadow">AND SAVE on every bird deal</h4>
                                                        <a href="tour-details.html" class="button">View Details</a>
                                                    </div>                                                    </div>
                                                <div class="thumbnail carousel-card">

                                                    <img src="assets/images/vols11.png" class="card-carousel-image">
                                                    <div class="carousel-card-description">
                                                        <span class="title">CRETE</span>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="nbr-hotel"><span>19 Hôtels</span></div>
                                                                <div class="price">à partir de <span style=" color: rgb(0, 209, 0);font-weight:bold; font-size: 14px;">000€</span></div>

                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>                                                 </div>
                                        </li>

                                    </ul>
                                </div><!-- /Slide1 -->
                                <!-- Slide2     <div class="item">
                                       <ul class="thumbnails">
                                           <li class="col-sm-4">
                                               <div class="fff">
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                               </div>
                                           </li>
                                           <li class="col-sm-4">
                                               <div class="fff">
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                               </div>
                                           </li>
                                           <li class="col-sm-4">
                                               <div class="fff">
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                                   <div class="thumbnail">
                                                       <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                   </div>
                                               </div>
                                           </li>

                                       </ul>
                                 </div><! /Slide2 -->
                                <!-- Slide3 >    <div class="item">
                                      <ul class="thumbnails">
                                          <li class="col-sm-4">
                                              <div class="fff">
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="col-sm-4">
                                              <div class="fff">
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="col-sm-4">
                                              <div class="fff">
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                                  <div class="thumbnail">
                                                      <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                  </div>
                                              </div>
                                          </li>

                                      </ul>
                                </div><! /Slide3 -->
                            </div>


                            <nav>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style=" margin-left: -1px;"> <span class="fa fa-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a style=" position: absolute;right: -40px;" class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                            </nav>
                            <!-- /.control-box -->

                        </div><!-- /#myCarousel -->

                    </div><!-- /.col-xs-12 -->
                </div></div>
        </div>
    </section>
    <!-- / END  SECOND FLIGHT PLACE DESIGN AREA -->

    <!-- START  THIRD FLIGHT PLACE DESIGN AREA -->

    <section id="flight-tr-era" class="tour-places section-padding">
        <div class="container main1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Meilleurs offre en Maroc</h2>
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
                            <img src="assets/images/vols3.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="nbr-star-hotel">
                                            <p>
                                                <span>Casablanca</span> vers
                                            </p></div>
                                        <div class="name-place-to-go">
                                            <p style="font-weight: 900;">kuala lampur</p>
                                        </div>
                                        <div class="place">
                                            <p style=" color:#f1f3ef;background: #000; padding: 6px;width: auto;">
                                                <span class="fa fa-map-marker" style=" color: rgb(0, 155, 0);"></span> Allez-simple</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">RESERVER</a>
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
                            <img src="assets/images/vols10.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="nbr-star-hotel">
                                            <p>
                                                <span>Casablanca</span> vers
                                            </p></div>
                                        <div class="name-place-to-go">
                                            <p style="font-weight: 900;">Barcelone</p>
                                        </div>
                                        <div class="place">
                                            <p style=" color:#f1f3ef;background: #000; padding: 6px;width: auto;">
                                                <span class="fa fa-map-marker" style=" color: rgb(0, 155, 0);"></span> Allez-simple</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">RESERVER</a>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-place item ">
                    <div class="carousel-card1">
                        <a href="#" style="text-decoration: none;color:#000">
                            <img src="assets/images/vols11.png" class="card-carousel-image"></a>
                        <div class="carousel-card-description">

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="nbr-star-hotel">
                                            <p>
                                                <span>Casablanca</span> vers
                                            </p></div>
                                        <div class="name-place-to-go">
                                            <p style="font-weight: 900;">Milan</p>
                                        </div>
                                        <div class="place">
                                            <p style=" color:#f1f3ef;background: #000; padding: 6px;width: auto;">
                                                <span class="fa fa-map-marker" style=" color: rgb(0, 155, 0);"></span> Allez-simple</p>
                                        </div>
                                    </a>  </div>
                                <div class="col-md-6" style=" text-align: right;line-height: 1.3em">
                                    <a href="#" style="text-decoration: none;color:#000">
                                        <div class="price">
                                            <p>à partir de</p>
                                            <span style=" color: rgb(0, 209, 0);font-weight:300; font-size: 14px;line-height: 1em;">000€</span></span>


                                        </div>

                                        <div class="log">
                                            <a href="#" class="btn btn-success btn-success-light float-right">RESERVER</a>
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

    <!-- / END  THIRD FLIGHT PLACE DESIGN AREA -->


    <!-- START FOURTH FLIGHT PLACE DESIGN AREA -->

    <section id="flight-tr-era" class=" section-padding" style="background: #07a125;
        padding-top: 70px;
        padding-bottom: 40px;
        position: relative;
        position: relative;color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2">
                        <hr class="why">
                    </div>
                    <div class="col-md-8">
                        <div class="section-title text-center">
                            <h2 style="color: #fff">Pourquoi reserver sur VAMO</h2>
                        </div>                          </div>
                    <div class="col-md-2">
                        <hr class="why">

                    </div>
                </div>
                <div class="container">
                    <div class="col-md-4 text-center">
                        <h4 style="background: #fff;border-radius: 10px;line-height: 2em;color: #07a125;">Vol pas cher en un clic</h4>
                        <p style=" line-height: 20px;">Profitez de nos tarifs exclusifs pour les clients VAmo et de nos prix compétitifs sur des centaines de destinations à travers le monde. Dépêchez-vous, réservez votre vol dès maintenant !
                            + 80 compagnies aériennes
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4 style="background: #fff;border-radius: 10px;line-height: 2em;color: #07a125;">+80 compagnies aériennes</h4>
                        <p style=" line-height: 20px;">En réservant votre vol sur VAmo, vous avez la possibilité de choisir parmi les offres de plus de 80 compagnies aériennes afin de sélectionner celle qui vous correspond le mieux.
                            Vols multi-destinations
                        </p>

                    </div>
                    <div class="col-md-4 text-center">
                        <h4 style="background: #fff;border-radius: 10px;line-height: 2em;color: #07a125;">Vols multi-desitinations</h4>
                        <p style=" line-height: 20px;">Vous souhaitez voir plusieurs destinations en un seul voyage ? Le moteur de recherche de Vamo vous permet de rechercher parmi des milliers de vols.
                        </p>

                    </div>
                </div>
            </div>
    </section>

    <!-- / END  FOURTH FLIGHT PLACE DESIGN AREA -->

    <!--Brand start here-->

    <!--Brand end here-->
    <!-- news start here -->

@stop
