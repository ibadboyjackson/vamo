@extends('templates')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="http://www.themeenergy.com/themes/html/book-your-travel/css/lightslider.min.css">

    <style>
        section#content {
            min-height: 400px;
            padding-top: 40px;
            text-align: left;
            background: #f5f5f5;
        }
        #main {
            margin-bottom: 40px;
        }
        .search-results-title {
            background: #fff;
            padding: 0 20px;
            margin: 0;
            border-bottom: 4px solid #f5f5f5;
            line-height: 3em;
        }
        .search-results-title>i {
            color: #fdb714;
            font-size: 20px;
            margin-right: 10px;
        }

        .sort-by-section {
            background: #fff;
            padding: 0 20px
        }

        .sort-by-section li {
            float: left;
            padding: 15px 5px
        }

        .sort-by-section .sort-by-title {
            margin: 15px 20px 0 0;
            line-height: 34px;
            float: left
        }

        .sort-by-section .sort-bar {
            float: left
        }

        .sort-by-section .sort-bar .sort-by-container {
            position: relative;
            display: block
        }

        .sort-by-section .sort-bar .sort-by-container > span {
            background: #f5f5f5;
            height: 34px;
            padding: 0 45px 0 15px;
            line-height: 34px;
            display: block;
            color: #9e9e9e
        }

        .sort-by-section .sort-bar .sort-by-container > span:after {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 30px;
            background: #d9d9d9;
            content: ""
        }

        .sort-by-section .sort-bar .sort-by-container:before, .sort-by-section .sort-bar .sort-by-container:after {
            content: "";
            position: absolute;
            z-index: 1;
            display: block;
            top: 50%;
            right: 12px;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent
        }

        .sort-by-section .sort-bar .sort-by-container:before {
            margin-top: -6px;
            border-bottom: 5px solid #fff
        }

        .sort-by-section .sort-bar .sort-by-container:after {
            margin-top: 2px;
            border-top: 5px solid #fff
        }

        .sort-by-section .sort-bar li.active .sort-by-container > span:after {
            background: #fdb714
        }

        .sort-by-section .swap-tiles {
            float: right;
            font-size: 33px
        }

        .sort-by-section .swap-tiles li > a > i {
            display: block;
            width: 34px;
            line-height: 34px;
            height: 34px;
            background: #f5f5f5;
            color: #d9d9d9;
            text-align: center
        }

        .sort-by-section .swap-tiles li:hover > a > i, .sort-by-section .swap-tiles li.active > a > i {
            background: #4da536;
            color: #fff
        }

        .sort-by-section .swap-tiles li.swap-list > a > i {
            font-size: 30px
        }

        .filters-container.toggle-container {
            background: none
        }

        .filters-container.toggle-container .panel.style1 {
            border: none;
            margin-bottom: 4px;
            background: #fff
        }

        .filters-container.toggle-container .panel.style1 .panel-title {
            padding-left: 5px
        }

        .filters-container.toggle-container .panel.style1 .panel-content {
            padding: 10px 20px 20px
        }

        .search-results-title {
            background: #fff;
            padding: 0 20px;
            margin: 0;
            border-bottom: 4px solid #f5f5f5;
            line-height: 3em
        }

        .search-results-title > i {
            color: #fdb714;
            font-size: 20px;
            margin-right: 10px
        }

        .filters-container .reviews {
            margin: 0;
            letter-spacing: 0.04em
        }

        .filters-container ul.filters-option {
            margin-bottom: 10px
        }

        .filters-container ul.filters-option li {
            margin-bottom: 1px;
            background: #f5f5f5;
            padding: 0 15px
        }

        .filters-container ul.filters-option li a {
            color: inherit;
            display: block;
            padding: 8px 0;
            text-transform: uppercase;
            font-size: 11px
        }

        .filters-container ul.filters-option li small {
            float: right
        }

        .filters-container ul.filters-option li:before {
            float: left;
            width: 15px;
            height: 16px;
            display: block;
            line-height: 14px;
            text-align: center;
            margin-top: 12px
        }

        .filters-container ul.filters-option li:after {
            display: table;
            clear: both;
            content: ""
        }

        .filters-container ul.filters-option li.active {
            background: #4da536
        }

        .filters-container ul.filters-option li.active a {
            color: #fff
        }


        .toggle-container .panel {
            margin-bottom: 0;
            box-shadow: none;
            -webkit-border-radius: 0 0 0 0;
            -moz-border-radius: 0 0 0 0;
            -ms-border-radius: 0 0 0 0;
            border-radius: 0 0 0 0;
            border: none;
            border-bottom: 2px solid #f5f5f5;
            position: relative;
        }
    </style>
@stop
@section('content')
<!-- / END HOMEPAGE DESIGN AREA -->
<section id="content">
    <div class="container">
        <div id="main">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <h4 class="search-results-title">
                        <i class="fa fa-search"></i><b>{{ $results->count() }}</b> results trouvés.</h4>
                    <div class="toggle-container filters-container">
                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modifier la recherche</a>
                            </h4>
                            <div id="modify-search-panel" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <form method="post" lpformnum="3">
                                        <div class="form-group">
                                            <label>LIEU DE DEPART</label>
                                            <input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot">
                                            <label>LIEU D'ARRIVÉ</label>
                                            <input type="text" class="input-text full-width" placeholder="" value="city, district, or specific airpot">
                                        </div>
                                        <div class="form-group">
                                            <label>DÉPART</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_from" class="input-text full-width hasDatepicker" placeholder="jj/mm/aa" id="dp1553466047060"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>ARRIVÉ</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" name="date_to" class="input-text full-width hasDatepicker" placeholder="jj/mm/aa" id="dp1553466047061"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                            </div>
                                        </div>
                                        <br>
                                        <button class="btn-medium icon-check uppercase full-width">Nouvelle recherche</button>
                                    </form>
                                </div>
                            </div>
                        </div></div>
                    <div class="toggle-container filters-container">
                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#price-filter" class="" aria-expanded="true">Price</a>
                            </h4>
                            <div id="price-filter" class="panel-collapse collapse in" aria-expanded="true" style="">
                                <div class="panel-content">
                                    <div id="price-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div>
                                    <br>
                                    <span class="min-price-label pull-left">1000 DH</span>
                                    <span class="max-price-label pull-right">8000 DH</span>
                                    <div class="clearer"></div>
                                </div><!-- end content -->
                            </div>
                        </div>

                        <div class="panel style1 arrow-right" aria-expanded="true">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#flight-times-filter" class="collapsed" aria-expanded="false">Temps Vol</a>
                            </h4>
                            <div id="flight-times-filter" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-content">
                                    <div id="flight-times" class="slider-color-yellow ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 25.017373175816537%; width: 58.373870743571935%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 25.017373175816537%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 83.39124391938847%;"></a></div>
                                    <br>
                                    <span class="start-time-label pull-left">06:00</span>
                                    <span class="end-time-label pull-right">20:00</span>
                                    <div class="clearer"></div>
                                </div><!-- end content -->
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#flight-stops-filter" class="collapsed">Esacales Vol</a>
                            </h4>
                            <div id="flight-stops-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        <li><a href="#">1 Escale</a></li>
                                        <li><a href="#">2 Escales</a></li>
                                        <li class="active"><a href="#">3 Escales</a></li>
                                        <li><a href="#">Multidestination</a></li>
                                    </ul>
                                    <a class="button btn-mini">Plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#airlines-filter" class="collapsed">COMPAGNIE</a>
                            </h4>
                            <div id="airlines-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        @foreach($results as $result)
                                            <li><a href="#">{{ $result->company_name }}<small>({{ $result->price }}) DH</small></a></li>
                                        @endforeach
                                    </ul>
                                    <a class="button btn-mini">MORE</a>
                                </div>
                            </div>
                        </div>

                        <div class="panel style1 arrow-right">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#flight-type-filter" class="collapsed">Type de vol</a>
                            </h4>
                            <div id="flight-type-filter" class="panel-collapse collapse">
                                <div class="panel-content">
                                    <ul class="check-square filters-option">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Premiere Classe</a></li>
                                        <li class="active"><a href="#">Classe Economique</a></li>
                                        <li><a href="#">Class Premium Eco</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="sort-by-section clearfix box">
                        <h4 class="sort-by-title block-sm">Résultat classé par:</h4>
                        <ul class="sort-bar clearfix block-sm">
                            <li class="sort-by-price"><a class="sort-by-container" href="#"><span>PRIX</span></a></li>
                            <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>DURÉE</span></a></li>
                            <li class="sort-by-name"><a class="sort-by-container" href="#"><span>COMPAGNIE</span></a></li>
                        </ul>
                    </div>



                    <div class="flight-list listing-style3 flight">





                    @foreach($results as $result)

                        <article class="box">
                            <figure class="col-xs-3 col-sm-2">
                                <a href="{{ route('recherche.detail', $result->id) }}"><span><img width="94" height="90" alt="" src="{{ asset("/uploads/$result->file") }}"></span></a>
                            </figure>
                            <div class="details col-xs-9 col-sm-10">
                                <div class="details-wrapper">
                                    <div class="first-row">
                                        <div>
                                            <h4 class="box-title">{{ $result->from }} to {{ $result->to }}<small>Aller Simple</small></h4>
                                            <a class="button btn-mini stop">1 Escale</a>
                                            <div class="amenities">
                                                <i class="fa fa-wifi circle"></i>
                                                <i class="fa fa-music circle"></i>
                                                <i class="fa fa-utensils circle"></i>
                                                <i class="fa fa-suitcase circle"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="price"><small>PRIX/PERS</small>{{ $result->price }} <span class="currency"><small>DH</small></span></span>
                                        </div>
                                    </div>
                                    <div class="second-row">
                                        <div class="time">
                                            <div class="take-off col-sm-4">
                                                <div class="icon"><i class="fa fa-plane green-color"></i></div>
                                                <div>
                                                    <span class="skin-color">Départ</span><br> {{ date('j M, Y H:i',strtotime($result->date_depart))  }}

                                                </div>
                                            </div>
                                            <div class="landing col-sm-4">
                                                <div class="icon"><i class="fa fa-plane green-color" style= "transform: rotateX(180deg)"></i></div>
                                                <div>
                                                    <span class="skin-color">Arrivé</span><br>{{ date('j M, Y H:i',strtotime($result->date_back))  }}
                                                </div>
                                            </div>
                                            <div class="total-time col-sm-4">
                                                <div class="icon"><i class="fa fa-clock green-color"></i></div>
                                                <div>
                                                    <span class="skin-color">total time</span><br>{{ (strtotime($result->date_back) - strtotime($result->date_depart))/60/60/24 }} Heures
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="{{ route('recherche.select') }}" class="button btn-small full-width">RESERVEZ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                @endforeach



                    </div>
                    <a class="button uppercase full-width btn-large">load more listings</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START FOOTER DESIGN AREA -->



































<footer class="main-footer">
    <section class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo-footer">
                    <div id="cercle">
                        <img src="{{ asset('assets/images/logo-meduim.png') }}" class="logo-meduim" alt="">
                    </div>
                </div>
                <div class="col-md-3 contact">
                    <h3>Contacts</h3>
                    <div class="contact-info">
                        <p><span class="fa fa-map-marker"></span>divhiuvhvheuvhehvhvhviojv</p>
                        <p><span class="fa fa-phone"></span>(+212) 000 000</p>
                        <p><span class="fa fa-envelope"></span>cgsccvjvvn@hvdvv.com</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget">
                        <h4>Instagram</h4>
                        <ul class="instagram-list">
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta1.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta2.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta3.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta4.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta5.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta6.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta7.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta8.jpg') }}"></a></li>
                            <li><a href="#"><img alt="image" src="{{ asset('assets/images/insta/insta9.jpg') }}"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 newsletters">
                    <h3>Newsletters</h3>
                    <p>Joignez-vous à notre newsletter</p>
                    <div class="input-group with-icon-right">
                        <form class="formnsearch" _lpchecked="1" >
                            <input name="newsletter" class="form-searchtop" placeholder="Votre email" type="search" style=" width:100%; min-width: 255px;">
                            <button type="submit" class="fa fa-chevron-right" style=" position: absolute;; right: 0px;background: green;color: white;font-size: 30px;border-radius: 10px;height: 45px;">
                            </button></form>                                </div>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-text left-align">
                        <h6>copyright © Vamo 2019. all rights Reserved</h6>              </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-text text-center" style=" padding: 7px;">
                        <a href="#" style=" color: #fff;margin: 20px; ">À propos</a>
                        <a href="#" style=" color: #fff;margin: 20px;">Mentions légales</a>
                        <a href="#" style=" color: #fff;margin: 20px">Aide ?</a>

                    </div>
                </div>
                <div class="col-md-4 right-align">
                    <img src="{{ asset('assets/images/img_paiefooter.png') }}">
                </div>
            </div>
        </div>
    </div>
</footer>















<!-- / END CONTACT DETAILS DESIGN AREA -->
<!-- START SCROOL UP DESIGN AREA -->
<div class="scroll-to-up">
    <div class="scrollup" style="display: block;">
        <span class="fa fa-chevron-up"></span>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/owlcarousel/js/owl.carousel.mini.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/venobox.min.js') }}"></script>
<script src="{{ asset('assetsassets/js/form-contact.js') }}"></script>
<script src="{{ asset('assets/js/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://www.teamworktec.com.travel-gateway.gridhosted.co.uk/assets/js/jqwidgets/scripts/date-picker.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="http://www.themeenergy.com/themes/html/book-your-travel/js/lightslider.min.js"></script>
<script>
    $( '#slider' ).slider({
        range: "min",
        value:1,
        min: 0,
        max: 10,
        step: 1
    });
</script>
</body>

</html>
@stop
