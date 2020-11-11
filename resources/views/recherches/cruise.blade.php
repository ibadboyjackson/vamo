@extends('templates')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <style>
        a.button {
            display: inline-block;
            background: #d9d9d9;
            font-size: 15px !important;
            line-height: 1.8333em;
            white-space: nowrap;
            text-align: center;
            color: #fff;
            border: 0;
        }

        .details .reviews i.fa {
            font-size: 10px;
            color:rgb(235, 233, 55);
        ;}
    </style>
@stop

@section('scripts')
@stop

@section('content')
    <!-- menu start here -->
    <!-- menu end here -->
    <section id="content">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="fa fa-search"></i><b>{{ $results->count() }}</b> Résultats trouvés.</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modifer Recherche</a>
                                </h4>
                                <div id="modify-search-panel" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <form method="post" lpformnum="3">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <input type="text" class="input-text full-width" placeholder="" value="Paris">
                                            </div>
                                            <div class="form-group">
                                                <label>Date Départ</label>
                                                <div class="datepicker-wrap">
                                                    <input type="text" class="input-text full-width hasDatepicker" placeholder="mm/dd/yy" id="dp1553494448562"><img class="ui-datepicker-trigger" src="assets/images/icons/blank.png" alt="" title="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cruise Length</label>
                                                <div class="selector full-width">
                                                    <select>
                                                        <option value="">Durée Croisière</option>
                                                    </select><span class="custom-select">Durée Croisière</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cruise line</label>
                                                <div class="selector full-width">
                                                    <select>
                                                        <option value="">Ligne de croisière
                                                            e</option>
                                                    </select><span class="custom-select">Ligne de croisière
                                                            </span>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-medium icon-check uppercase full-width">Nouvelle Recherche</button>
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
                                        <span class="min-price-label pull-left">1000 DH</span>
                                        <span class="max-price-label pull-right">8000 DH</span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#rating-filter" class="collapsed">Utilisateur Evaluation</a>
                                </h4>
                                <div id="rating-filter" class="panel-collapse collapse filters-container">
                                    <div class="panel-content">
                                        <div id="rating" class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div>
                                        <p class="reviews"><small>2458 AVIS</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cruise-length-filter" class="collapsed">Durée Croisière</a>
                                </h4>
                                <div id="cruise-length-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="cruise-length-range" class="slider-color-yellow ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 83.33333333333334%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 83.33333333333334%;"></a></div>
                                        <br>
                                        <span class="min-cruise-length pull-left">0</span>
                                        <span class="max-cruise-length pull-right">10 NIGHTS</span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cruise-line-filter" class="collapsed">Ligne Croisière</a>
                                </h4>
                                <div id="cruise-line-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Any<small>(722)</small></a></li>
                                            <li><a href="#">Azamara<small>(982)</small></a></li>
                                            <li><a href="#">Princess cruises<small>(127)</small></a></li>
                                            <li class="active"><a href="#">cunard line<small>(222)</small></a></li>
                                            <li><a href="#">MSC Cruises<small>(158)</small></a></li>
                                            <li><a href="#">aida cruises<small>(439)</small></a></li>
                                            <li><a href="#">celebrity cruises<small>(52)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cruise-preference-filter" class="collapsed">Préférence Croisière</a>
                                </h4>
                                <div id="cruise-preference-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">buffet restaurant</a></li>
                                            <li><a href="#">Entertainment</a></li>
                                            <li class="active"><a href="#">swimming pools</a></li>
                                            <li class="active"><a href="#">Clubs</a></li>
                                            <li><a href="#">fitness center</a></li>
                                            <li><a href="#">Live Shows</a></li>
                                            <li><a href="#">Duty Free shops</a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cruise-cabin-type-filter" class="collapsed">Type Cabine</a>
                                </h4>
                                <div id="cruise-cabin-type-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Inside<small>($620)</small></a></li>
                                            <li><a href="#">Oceanview<small>($982)</small></a></li>
                                            <li class="active"><a href="#">Balcony<small>($127)</small></a></li>
                                            <li class="active"><a href="#">Suites<small>($222)</small></a></li>
                                            <li><a href="#">Junior Suite<small>($158)</small></a></li>
                                            <li><a href="#">Suite w/ Balcony<small>($439)</small></a></li>
                                            <li><a href="#">Outside<small>($52)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="sort-by-section box clearfix">
                            <h4 class="sort-by-title block-sm">Resultat classé par:</h4>
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-name"><a class="sort-by-container" href="#"><span>Compagnie</span></a></li>
                                <li class="sort-by-price"><a class="sort-by-container" href="#"><span>Prix</span></a></li>
                                <li class="clearer visible-sms"></li>
                                <li class="sort-by-date active"><a class="sort-by-container" href="#"><span>Date</span></a></li>
                                <li class="sort-by-cruise-line"><a class="sort-by-container" href="#"><span>Ligne Croisière</span></a></li>
                            </ul>

                        </div>
                        <div class="cruise-list listing-style3 cruise">
                            @foreach($results as $result)
                                <article class="box">
                                    <figure class="col-sm-4">
                                        <a title="" href="{{ route('recherche.cruise.detail', $result->id) }}" class="hover-effect popup-gallery" style="margin-top: 15px;margin-left: 5px;"><img width="270" height="160" alt="" src="{{ asset("/uploads/$result->file") }}"></a>
                                    </figure>
                                    <div class="details col-sm-8">
                                        <div class="clearfix">
                                            <h4 class="box-title pull-left"><b>{{ ucfirst($result->from) }} {{ ucfirst($result->to) }}</b><small>8 Jours / 7 Nuits</small></h4>
                                            <span class="price pull-right"><small>À partir de</small>${{ $result->price }}</span>
                                        </div>
                                        <div class="character clearfix" style="margin-bottom: 0;">
                                            <div class="col-xs-3 cruise-logo">
                                                <img src="{{ asset("/uploads/profile/$result->image") }}" alt="">
                                            </div>
                                            <div class="col-xs-4 date">
                                                <i class="fa fa-clock green-color"></i>
                                                <div>
                                                    <span class="skin-color">8 jours</span><br>Départ de {{ ucfirst($result->from) }}
                                                </div>
                                            </div>
                                            <div class="col-xs-5 Pension">
                                                <div>
                                                    <span class="skin-color">Pension : </span> <br><span><i class="fa fa-utensils" style="padding-right: 10px"></i> complete</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="character clearfix" style="border-top: 0;">
                                            <div class="col-xs-12 trajet">
                                                <i class="fa fa-map-marked-alt green-color" style="padding-right: 10px;;;;"></i>
                                                <div>
                                                    <span class="skin-color">Parcours</span>: {{ ucfirst($result->from) }} - Valence - Civitavecchia - La spezia - Gênes - Marseilles - {{ ucfirst($result->to) }}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix">
                                            <div class=" pull-left">
                                                <div class="reviews">
                                                    <ul class="list-inline list-unstyled">
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                        <li><a href="#"><span>270 reviews</span></a></li>
                                                    </ul></div>

                                            </div>
                                            <a href="{{ route('recherche.cruise.select') }}" class="button btn-full pull-right">Reservez</a>
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
@stop
