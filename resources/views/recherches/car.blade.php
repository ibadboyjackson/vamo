@extends('templates')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <style>
        .listing-style3.car .details .logo {
            margin: 3px 0 15px 8px;
            float: left;
            border-bottom: 1px solid #e1e1e1;
            border-left: 0;
            padding: 8px;
        }
    </style>
@stop

@section('scripts')
@stop

@section('content')
    <!-- Start content -->
    <section id="content" class="gray-area">
        <div class="container">
            <div id="main">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <h4 class="search-results-title"><i class="fa fa-search"></i><b>{{ $results->count() }}</b> Resultats Trouvés.</h4>
                        <div class="toggle-container filters-container">
                            <div class="panel style1 arrow-right">
                                <div class="panel style1 arrow-right">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#modify-search-panel" class="collapsed">Modifier la Recherche</a>
                                    </h4>
                                    <div id="modify-search-panel" class="panel-collapse collapse">
                                        <div class="panel-content">
                                            <form method="post" lpformnum="3">
                                                <div class="form-group">
                                                    <label>Lieu de Prise en Charge</label>
                                                    <input type="text" class="input-text full-width" placeholder="city, district, or specific airpot" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>pick-up date</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" class="input-text full-width hasDatepicker" placeholder="mm/dd/yy" id="dp1553480633721"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lieu de Restitution</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" class="input-text full-width hasDatepicker" placeholder="mm/dd/yy" id="dp1553480633722"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                    </div>
                                                </div>
                                                <br>
                                                <button class="btn-medium icon-check uppercase full-width">Nouvelle Recherche</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#price-filter" class="collapsed">Prix</a>
                                </h4>
                                <div id="price-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <div id="price-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div>
                                        <br>
                                        <span class="min-price-label pull-left">100 DH</span>
                                        <span class="max-price-label pull-right">8000 DH</span>
                                        <div class="clearer"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#cartype-filter" class="collapsed"> Type Voiture</a>
                                </h4>
                                <div id="cartype-filter" class="panel-collapse collapse filters-container">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Full Size<small>(10)</small></a></li>
                                            <li><a href="#">Compact<small>(82)</small></a></li>
                                            <li class="active"><a href="#">Economy<small>(127)</small></a></li>
                                            <li><a href="#">Luxury / Premium<small>(22)</small></a></li>
                                            <li><a href="#">Mini Car<small>(38)</small></a></li>
                                            <li><a href="#">Van / Minivan<small>(39)</small></a></li>
                                            <li><a href="#">Exotic / Special<small>(72)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#car-rental-agent-filter" class="collapsed">Agence de Location</a>
                                </h4>
                                <div id="car-rental-agent-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Fox Rent A Car<small>(08)</small></a></li>
                                            <li><a href="#">Payless<small>(32)</small></a></li>
                                            <li class="active"><a href="#">Ez rent a car<small>(227)</small></a></li>
                                            <li><a href="#">Thrifty<small>(22)</small></a></li>
                                            <li><a href="#">Enterprise<small>(18)</small></a></li>
                                            <li><a href="#">Alamo<small>(29)</small></a></li>
                                            <li><a href="#">Dollar<small>(12)</small></a></li>
                                        </ul>
                                        <a class="button btn-mini">lus</a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel style1 arrow-right">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#car-preferences-filter" class="collapsed"> Preferences Voiture</a>
                                </h4>
                                <div id="car-preferences-filter" class="panel-collapse collapse">
                                    <div class="panel-content">
                                        <ul class="check-square filters-option">
                                            <li><a href="#">Passenger Quantity</a></li>
                                            <li class="active"><a href="#">Satellite Navigation</a></li>
                                            <li class="active"><a href="#">Air Conditioning</a></li>
                                            <li><a href="#">Doors</a></li>
                                            <li><a href="#">Diesel Vehicle</a></li>
                                        </ul>
                                        <a class="button btn-mini">Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="sort-by-section clearfix">
                            <h4 class="sort-by-title block-sm">Résultat classé par:</h4>
                            <ul class="sort-bar clearfix block-sm">
                                <li class="sort-by-name"><a class="sort-by-container" href="#"><span>Nom</span></a></li>
                                <li class="sort-by-price"><a class="sort-by-container" href="#"><span>Prix</span></a></li>
                                <li class="clearer visible-sms"></li>
                                <li class="sort-by-rating active"><a class="sort-by-container" href="#"><span>Évaluation</span></a></li>
                                <li class="sort-by-popularity"><a class="sort-by-container" href="#"><span>Popularité</span></a></li>
                            </ul>

                        </div>
                        <div class="car-list listing-style3 car">

                            @foreach($results as $result)
                                <article class="box">
                                <figure class="col-xs-3">
                                    <a href="{{ route('recherche.cars.detail', $result->id) }}">
                                        <span><img width="189" height="120" alt="" src="{{ asset("/uploads/$result->file") }}"></span>
                                    </a>
                                </figure>
                                <div class="details col-xs-9 clearfix">
                                    <div class="col-sm-8">
                                        <div class="clearfix">
                                            <h4 class="box-title"><small>{{ $result->name }}</small>{{ $result->type }}</h4>
                                        </div>
                                        <div class="amenities row">
                                            <ul class="col-xs-12">
                                                <li><i class="fa fa-user circle"></i>4</li>
                                                <li><i class="fa fa-suitcase circle"></i>3</li>
                                                <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                <li><i class="fa fa-music circle"></i>YES</li>
                                            </ul>
                                            <div class="row" style="padding: 5px">
                                                <div class="take-off col-sm-6" style=" padding: 20px;;">
                                                    <div class="icon"><i class="fa fa-map-marked-alt green-color"></i></div>
                                                    <div style="border-right: 1px solid #006622;">
                                                        <span class="skin-color">Prise en charge</span><br>{{ $result->restriction }}
                                                    </div>
                                                </div>
                                                <div class="landing col-sm-6" style=" padding-top: 20px;;">
                                                    <div class="icon"><i class="fa fa-map-marked-alt green-color"></i></div>
                                                    <div>
                                                        <span class="skin-color">Lieu de Restitution</span><br>{{ $result->charge }}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 character">
                                        <dl class="">
                                            <dt class="skin-color">Kilometrage</dt><dd>{{ $result->kilometer }}</dd>
                                            <dt class="skin-color">Assurance</dt><dd>{{ $result->assurance }}</dd>
                                            <dt class="skin-color">Location</dt><dd>{{ $result->location }}</dd>
                                        </dl>
                                    </div>
                                    <div class="action col-xs-6 col-sm-2">
                                        <div class="logo">
                                            <img src="{{ asset("/uploads/$result->image") }}" alt="">
                                        </div>
                                        <span class="price"><small>par jour</small>{{ $result->price }} DH</span>
                                        <a href="{{ route('recherche.cars.select') }}" class="button btn-small full-width">select</a>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <a href="#" class="button uppercase full-width btn-large">load more listings</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
