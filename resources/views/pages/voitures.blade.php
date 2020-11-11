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
        /*start cruise-sd-era*/
        .main2 .carousel-card1 {
            max-width: 330px;
            position: relative;
        }

        .main2 .carousel-card1 .card-carousel-image {
            max-width: 100%;
            max-height: 100%;
            /*height: 250px;*/
            padding: 25px;
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
    </style>
@stop
@section('content')
    <section class="car-area6" data-stellar-background-ratio="0.6" style="overflow-x: hidden;">
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
                                                    <li role="presentation" class="tab-btn-wrapper  ">
                                                        <a href="index1-6.html#fcar" aria-controls="fcar" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURE</span>
                                                            <span class="xs">RECHERCHE VOITURE</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper  active">
                                                        <a href="index1-6.html#fflight" aria-controls="fflight" role="tab" data-toggle="tab" class="tab-btn" >
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURE</span>
                                                            <span >+</span>
                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>

                                                            <span class="xs">RECHERCHE VOITURE + VOL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index1-6.html#fpack" aria-controls="fpack" role="tab" data-toggle="tab" class="tab-btn" style=" line-height: 2em;">
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURE</span>
                                                            <span style=" margin: 0 5px 0 5px;">+</span>
                                                            <i class="fa fa-building-o"></i>
                                                            <span class="text">HÔTEL</span>
                                                            <span style=" margin: 0 5px 0 5px;">+</span>

                                                            <i class="fa fa-plane"></i>
                                                            <span class="text">VOL</span>
                                                            <span class="xs">RECHERCHE VOITURE + VOL + HÔTEL</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="tab-btn-wrapper">
                                                        <a href="index1-6.html#fhotel" aria-controls="fhotel" role="tab" data-toggle="tab" class="tab-btn">
                                                            <i class="fa fa-car"></i>
                                                            <span class="text">VOITURE</span>
                                                            <span >+</span>
                                                            <i class="fa fa-building-o"></i>
                                                            <span class="text">HÔTEL</span>

                                                            <span class="xs">RECHERCHE VOITURE + HÔTEL</span>
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
                                                        <div role="tabpanel" id="fcar" class="tab-pane fade ">
                                                            <div class="find-widget find-hotel-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOITURE</h4>

                                                                        <form class="content-widget">

                                                                            <div class="text-input small-margin-top">
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Lieu de prise en charge</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="place text-box-wrapper">
                                                                                    <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Lieu de restitution</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" placeholder="Write the place" class="tb-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-daterange">
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de prise en charge</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-o-clock input-group-addon"></i> Heure</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="HH:MM" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="text-box-wrapper half">
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de restitution</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="MM/DD/YY" id="datepicker" class="tb-input">
                                                                                        </div>
                                                                                        <label class="tb-label"><i class="tb-icon fa fa-clock input-group-addon"></i> Heure</label>
                                                                                        <div class="input-group">
                                                                                            <input type="date" value="HH:MM" id="datepicker" class="tb-input">
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
                                                        <div role="tabpanel" id="fflight" class="tab-pane fade in active ">
                                                            <div class="find-widget find-flight-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOITURE + VOL</h4>

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
                                                        <div role="tabpanel" id="fpack" class="tab-pane fade in ">
                                                            <div class="find-widget find-car-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOITURE + VOL + HÔTEL</h4>

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
                                                        <div role="tabpanel" id="fhotel" class="tab-pane fade">
                                                            <div class="find-widget find-tours-widget widget">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-sm-offset-0">
                                                                        <h4 class="title-widgets" style=" padding: 0;">RECHERCHE VOITURE + HÔTEL</h4>

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

    <!-- slider end here-->


    <!-- START  FIRST CAR PLACE DESIGN AREA -->
    <section id="car-era" class="section-padding">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title ">
                            <h2>Connectez-vous aux plus grandes enseignes de location de voitures</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">


                    <div class="logo-partner owl-carousel">
                        <!-- START SINGLE PARTNER DESIGN AREA -->
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/1.png" alt="image">
                            </div>

                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/2.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/3.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/4.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/5.png" alt="image">

                            </div>
                        </div>


                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/6.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/7.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/8.png" alt="image">

                            </div>
                        </div>
                        <div class="single-logo-part-era item">
                            <div class="testi-locationimg">
                                <img src="assets/images/partners/rental/9.png" alt="image">

                            </div>
                        </div>
                        <!-- <div class="single-logo-part-era item">
                             <div class="testi-locationimg">
                                 <img src="assets/images/clientreview/location2.jpg" alt="image">

                             </div>
                         </div>

                         <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    </div>

                </div><!-- /.col-xs-12 -->
            </div></div>
    </section>
    <!-- / END  FIRST CAR PLACE DESIGN AREA -->
    <!-- START  SECOND CAR PLACE DESIGN AREA -->
    <section id="car-era" class="section-padding">
        <div class="">
            <div class="container main2">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title ">
                            <h2>Meilleurs offres de location de voiture</h2>
                            <div class="title-separator-outer ">
                                <div class="title-separator bg-primary style-liner"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="carousel-card1">
                            <a href="#" style="text-decoration: none;color:#000">
                                <h3 style="text-transform: uppercase;text-align: center">Catégorie compacte</h3>
                                <img src="assets/images/compact.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
                                            </div>
                                        </a>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="carousel-card1">
                            <a href="#" style="text-decoration: none;color:#000">
                                <h3 style="text-transform: uppercase;text-align: center">Classe intermédiare</h3>
                                <img src="assets/images/subcompact.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
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
                                <h3 style="text-transform: uppercase;text-align: center">Citadine</h3>
                                <img src="assets/images/intermediate.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
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
                                <h3 style="text-transform: uppercase;">familliale</h3>
                                <img src="assets/images/familiales.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
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
                                <h3 style="text-transform: uppercase;">Cabriolet</h3>
                                <img src="assets/images/CAB_BG.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
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
                                <h3 style="text-transform: uppercase;">Minibus</h3>
                                <img src="assets/images/minibus.png" class="card-carousel-image"></a>
                            <div class="carousel-card-description">

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="price">
                                                <p style="font-weight: 300;">
                                                    À partir de
                                                    <span style="color:green;font-weight: 900">000 €</span>
                                                    <br>
                                                    par Jour</span>
                                                </p></div>


                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" style="text-decoration: none;color:#000">
                                            <div class="log">
                                                <a href="#" class="btn btn-success btn-success-light float-right">VOIR LES OFFRES</a>
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
    <!-- / END  SECOND CAR PLACE DESIGN AREA -->
    <!-- start discover -->
    <section class="where-to-travel section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title ">
                        <h2>Les destinations les plus populaires en Mars</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/Australia_sidney.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>Sidney</h1>
                            <p class="text">À partir de <span style="color:green;font-weight: 900">000€</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/1.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>New-York</h1>
                            <p class="text">À partir de <span style="color:green;font-weight: 900">000€</span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/viceroy-bali.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>Ankara</h1>
                            <p class="text">À partir de <span style="color:green;font-weight: 900">000€</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/rome.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>Rôme</h1>
                            <p class="text">À partir de <span style="color:green;font-weight: 900">000€</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wttrvl">
                    <div class="whereto">
                        <img src="assets/images/home2/whereto/crète-ile-Santorini-retouch-cut.jpg" alt="image">
                        <div class="whereto-overlay">
                            <h1>Sinronti</h1>
                            <p class="text">À partir de <span style="color:green;font-weight: 900">000€</span></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>
    <!-- end discover-->

@stop
