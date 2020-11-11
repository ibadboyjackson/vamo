@extends('templates')

@section('style')
    <style>
        .listing-style3.hotel .details .main-box-title {
            border-bottom: 1px solid #f5f5f5;
            text-align: left;
            padding: 0;

        }
        .listing-style3.hotel .details .sd-main-box-title {
            border-left: 1px solid #f5f5f5;
        }
        .listing-style3.hotel .details .main-box-description p{
            text-align: left;
            padding: 0;
        }

        .hotels_box_detail .reviews ul {
            margin-bottom: 10px;
        }
        .hotels_box_detail .reviews ul li {
            padding: 0;
        }
        .hotels_box_detail .reviews ul li a i {
            color: #ff6c26;
        }
        .details .reviews i.fa {
            font-size: 10px;
            color:rgb(235, 233, 55);
        ;}
        .details .reviews .list-inline>li{
            padding: 0
        }

        .main-box-description .price {
            color: #7db921;
            font-size: 1.37em}

        .listing-style3.hotel .box-title i{
            font-size: 15px;
            margin-right: 5px;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

@stop

@section('script')
@stop

@section('content')
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="fa fa-search"></i><b>{{ $results->count() }}</b> Resultat(s) Trouvé(s)</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modifier Recherche
                                    </a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <form method="post" lpformnum="3">
                                            <div class="form-group">
                                                <label>destination</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="Paris">
                                            </div>
                                            <div class="form-group">
                                                <label>check in</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width hasDatepicker" placeholder="dd/mm/aa" id="dp1553487059052"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>check out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width hasDatepicker" placeholder="dd/mm/aa" id="dp1553487059053"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                </div>
                                            </div>
                                            <br>
                                            <button class="btn-medium icon-check uppercase full-width">Nouvelle Recherche</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#price-filter" class="collapsed">Prix</a>
                                </h4>
                                <div id="price-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="price-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div>
                                        <br>
                                        <span class="min-price-label pull-left">100 DH</span>
                                        <span class="max-price-label pull-right">800 DH</span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#rating-filter" class="collapsed">Notes Utilisateurs
                                    </a>
                                </h4>
                                <div id="rating-filter" class="panel-collapse collapse filters-container">
                                    <div class="panel-content">
                                        <div id="rating" class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div>
                                        <br>
                                        <small>2458 AVIS</small>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#accomodation-type-filter" class="collapsed">Type d'hébergement
                                    </a>
                                </h4>
                                <div id="accomodation-type-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">All<small>(722)</small></a></li>
                                            <li><a href="#">Hotel<small>(982)</small></a></li>
                                            <li><a href="#">Resort<small>(127)</small></a></li>
                                            <li class="active"><a href="#">Bed &amp; Breakfast<small>(222)</small></a></li>
                                            <li><a href="#">Condo<small>(158)</small></a></li>
                                            <li><a href="#">Residence<small>(439)</small></a></li>
                                            <li><a href="#">Guest House<small>(52)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#amenities-filter" class="collapsed">Équipements</a>
                                </h4>
                                <div id="amenities-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Bathroom<small>(722)</small></a></li>
                                            <li><a href="#">Cable tv<small>(982)</small></a></li>
                                            <li class="active"><a href="#">air conditioning<small>(127)</small></a></li>
                                            <li class="active"><a href="#">mini bar<small>(222)</small></a></li>
                                            <li><a href="#">wi - fi<small>(158)</small></a></li>
                                            <li><a href="#">pets allowed<small>(439)</small></a></li>
                                            <li><a href="#">room service<small>(52)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#language-filter" class="collapsed">Langue d'accueil
                                    </a>
                                </h4>
                                <div id="language-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">English<small>(722)</small></a></li>
                                            <li><a href="#">Español<small>(982)</small></a></li>
                                            <li class="active"><a href="#">Português<small>(127)</small></a></li>
                                            <li class="active"><a href="#">Français<small>(222)</small></a></li>
                                            <li><a href="#">Suomi<small>(158)</small></a></li>
                                            <li><a href="#">Italiano<small>(439)</small></a></li>
                                            <li><a href="#">Sign Language<small>(52)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">PLus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modifier Recherche
                                    </a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <form method="post" lpformnum="3">
                                            <div class="form-group">
                                                <label>destination</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="Paris">
                                            </div>
                                            <div class="form-group">
                                                <label>check in</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_from" class="input-text full-width hasDatepicker" placeholder="dd/mm/aa" id="dp1553487059052"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>check out</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" name="date_to" class="input-text full-width hasDatepicker" placeholder="dd/mm/aa" id="dp1553487059053"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                </div>
                                            </div>
                                            <br>
                                            <button class="btn-medium icon-check uppercase full-width">Nouvelle Recherche</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="sort-by-section clearfix">
                            <h4 class="sort-by-title block-sm">Resultats classés par:</h4>
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-name"><a class="sort-by-container" href="#"><span>Nom</span></a></li>
                                <li class="sort-by-price"><a class="sort-by-container" href="#"><span>Prix</span></a></li>
                                <li class="clearer visible-sms"></li>
                                <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>Avis</span></a></li>
                                <li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>Popularité</span></a></li>
                            </ul>

                        </div>
                        <div class="hotel-list listing-style3 hotel">


                            @foreach($results as $result)
                                 <article class="box">
                                <figure class="col-sm-5 col-md-4">
                                    <a title="" href="{{ route('recherche.hotel.detail', $result->id) }}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="{{ asset("/uploads/$result->file") }}"></a>
                                </figure>
                                <div class="details col-sm-7 col-md-8">
                                    <div>
                                        <div class="main-box-title">
                                            <h4 class="box-title">{{ $result->name }}<small><i class="fa fa-bar-chart green-color"></i> {{ $result->district }}, {{ $result->city }} {{ $result->country }}</small></h4>
                                            <div class="amenities">
                                                <i class="fa fa-wifi circle"></i>
                                                <i class="fa fa-swimmer circle"></i>
                                                <i class="fa fa-utensils circle"></i>
                                                <i class="fa fa-tv circle"></i>
                                            </div>
                                        </div>
                                        <div class="sd-main-box-title">
                                            <div class="reviews">
                                                <ul class="list-inline list-unstyled">
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                </ul></div>
                                            <span class="review">270 Avis</span>
                                        </div>
                                    </div>
                                    <div class="main-box-description">
                                        <p>{{ html_entity_decode( strip_tags($result->description)) }}</p>
                                        <div style=" border-left: 1px solid #f5f5f5;">
                                            <span class="price"><small>Par Pers./ Par Nuit</small>{{ $result->price }} DH</span>
                                            <a class="button btn-small full-width text-center" title="" href="{{ route('recherche.hotel.select') }}">Reservez</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                        <a href="#" class="uppercase full-width button btn-large">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
