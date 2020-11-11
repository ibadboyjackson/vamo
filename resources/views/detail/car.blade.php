@extends('templates')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@stop
@section('scripts')
@stop
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Car Detailed</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="hotel.html"><i class="fa fa-home"></i></a></li>
                <li class="active">Car Detailed</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container car-detail-page">
            <div class="row">
                <div id="main" class="col-md-9">
                    <div class="featured-image box">
                        <img src="{{ asset("/uploads/$car->file") }}" alt="">
                    </div>
                    <div class="tab-container">
                        <ul class="tabs">
                            <li class="active">
                                <a href="#car-details" data-toggle="tab">Détails Reservation Voiture</a>
                            </li>
                            <li>
                                <a href="#car-upgrade" data-toggle="tab">Améliorez votre voiture </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="car-details">
                                <div class="intro box table-wrapper full-width hidden-table-sms">
                                    <div class="col-sm-4 table-cell travelo-box">
                                        <dl class="term-description">
                                            <dt>Agence Location:</dt><dd>Ez Rent a Car</dd>
                                            <dt>Type Voiture:</dt><dd>{{ $car->type }}</dd>
                                            <dt>Nom Voiture:</dt><dd>{{ $car->name }}</dd>
                                            <dt>Passager:</dt><dd>4</dd>
                                            <dt>Bagage:</dt><dd>2</dd>
                                            <dt>Equipement:</dt><dd>Disponible
                                            </dd><dt>Taxes &amp; Fees:</dt><dd>${{ $car->price }}</dd>
                                            <dt>total price:</dt><dd>${{ $car->price }}</dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-8 table-cell">
                                        <div class="detailed-features clearfix">
                                            <div class="col-md-6">
                                                <h4 class="box-title">
                                                    Lieu de prise en charge
                                                    <small>Téléphone: 1-0825889755</small>
                                                </h4>
                                                <div class="icon-box style11">
                                                    <div class="icon-wrapper">
                                                        <i class="fa fa-clock"></i>
                                                    </div>
                                                    <dl class="details">
                                                        <dt class="skin-color">Heure de ramassage </dt>
                                                        <dd>Ma, 14 Nov, 2019  |  11:00 </dd>
                                                    </dl>
                                                </div>
                                                <div class="icon-box style11">
                                                    <div class="icon-wrapper">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                    </div>
                                                    <dl class="details">
                                                        <dt class="skin-color">Lieu</dt>
                                                        <dd>{{ $car->restriction }} </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="box-title">
                                                    Détails du lieu de dépose
                                                    <small>Téléphone: 1-0825889755</small>
                                                </h4>
                                                <div class="icon-box style11">
                                                    <div class="icon-wrapper">
                                                        <i class="fa fa-clock"></i>
                                                    </div>
                                                    <dl class="details">
                                                        <dt class="skin-color">Heure de d&pos</dt>
                                                        <dd>Ven, 15 Nov, 2019  |  11:00  </dd>
                                                    </dl>
                                                </div>
                                                <div class="icon-box style11">
                                                    <div class="icon-wrapper">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                    </div>
                                                    <dl class="details">
                                                        <dt class="skin-color">Lieu</dt>
                                                        <dd>{{ $car->restriction }}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('recherche.cars.select') }}" class="button btn-large full-width">RESERVEZ MAINTENANT</a>

                                <div style="padding-top: 20px">
                                    <h2>Informations sur la location de voiture </h2>
                                    <p>Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.</p>
                                </div>
                                <br>
                                <div class="car-features box">
                                    <div class="row add-clearfix">
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-user circle"></i>4 Passagers
                                                </span>
                                        </div>
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-suitcase circle"></i>2 Bagages
                                                </span>
                                        </div>
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-snowflake circle"></i>Climatisation
                                                </span>
                                        </div>
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-music circle"></i>Music
                                                </span>
                                        </div>
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-gas-pump circle"></i>Vehicule Diesel
                                                </span>
                                        </div>
                                        <div class="col-sms-6 col-sm-6 col-md-4">
                                                <span class="icon-box style2">
                                                    <i class="fa fa-car circle"></i>Transmission Automatique
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <h2>Améliorer votre location </h2>
                                <div class="intro box table-wrapper full-width hidden-table-sms">
                                    <div class="col-md-4 table-cell travelo-box protect-passengers">
                                        <div class="icon-box style12">
                                            <div class="icon-wrapper">
                                                <i class="fa fa-baby circle"></i>
                                            </div>
                                            <h5 class="details title">Protégez vos passagers plus petits et plus légers</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Siège enfant </label>
                                                <div class="selector full-width">
                                                    <select>
                                                        <option value="1">1</option>
                                                    </select><span class="custom-select">1</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Siège de bébé t</label>
                                                <div class="selector full-width">
                                                    <select>
                                                        <option value="0">0</option>
                                                    </select><span class="custom-select">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 table-cell">
                                        <div class="car-damage travelo-box">
                                            <div class="pull-right logo">
                                                <img src="assets/images/cars/logo/5.png" alt="">
                                            </div>
                                            <div class="icon-box box style12">
                                                <div class="icon-wrapper">
                                                    <i class="fa fa-car-crash circle"></i>
                                                </div>
                                                <h5 class="details title">Ajouter une protection contre les dommages de la voiture de location </h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-8">
                                                    <label class="radio radio-inline">
                                                        <input type="radio" name="damage-protection">Oui, ajoutez une protection contre les dommages causés par une voiture de location pour la période de location, pour un montant de 18,00 USD. / Jour <a href="#" class="skin-color">En Savoir Plus</a>
                                                    </label>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label class="radio radio-inline">
                                                        <input type="radio" name="damage-protection">No Thanks
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="car-upgrade">
                                <h2>Améliorez votre expérience de voiture</h2>
                                <p>Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. </p>
                                <div class="car-list listing-style3 car">
                                    <article class="box">
                                        <figure class="col-xs-3">
                                            <span><img width="189" height="120" alt="" src="assets/images/cars/7.png"></span>
                                        </figure>
                                        <div class="details col-xs-9 clearfix">
                                            <div class="col-sm-8">
                                                <div class="clearfix">
                                                    <h4 class="box-title">Economy Car<small>bmw mini</small></h4>
                                                    <div class="logo">
                                                        <img src="assets/images/cars/logo/1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="amenities">
                                                    <ul>
                                                        <li><i class="fa fa-user circle"></i>4</li>
                                                        <li><i class="fa fa-suitcase circle"></i>3</li>
                                                        <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                        <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                        <li><i class="fa fa-music circle"></i>OUI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-2 character">
                                                <dl class="">
                                                    <dt class="skin-color">kilométrage</dt><dd>Illimité</dd>
                                                    <dt class="skin-color">Pickup Time</dt><dd>5:45</dd>
                                                    <dt class="skin-color">Lieu</dt><dd>London city</dd>
                                                </dl>
                                            </div>
                                            <div class="action col-xs-6 col-sm-2">
                                                <span class="price"><small>per day</small>$45.39</span>
                                                <a href="car-booking.html" class="button btn-small full-width">Selectionner</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-xs-3">
                                            <span><img width="189" height="120" alt="" src="assets/images/cars/10.png"></span>
                                        </figure>
                                        <div class="details col-xs-9 clearfix">
                                            <div class="col-sm-8">
                                                <div class="clearfix">
                                                    <h4 class="box-title">Full Size<small>Holden sv6</small></h4>
                                                    <div class="logo">
                                                        <img src="assets/images/cars/logo/2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="amenities">
                                                    <ul>
                                                        <li><i class="fa fa-user circle"></i>4</li>
                                                        <li><i class="fa fa-suitcase circle"></i>3</li>
                                                        <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                        <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                        <li><i class="fa fa-music circle"></i>OUI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-2 character">
                                                <dl class="">
                                                    <dt class="skin-color">kilométrage</dt><dd>Illimité</dd>
                                                    <dt class="skin-color">Pickup Time</dt><dd>5:45</dd>
                                                    <dt class="skin-color">Lieu</dt><dd>London city</dd>
                                                </dl>
                                            </div>
                                            <div class="action col-xs-6 col-sm-2">
                                                <span class="price"><small>Par Jour</small>$100</span>
                                                <a href="car-booking.html" class="button btn-small full-width">Selectionner</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-xs-3">
                                            <span><img width="189" height="120" alt="" src="assets/images/cars/9.png"></span>
                                        </figure>
                                        <div class="details col-xs-9 clearfix">
                                            <div class="col-sm-8">
                                                <div class="clearfix">
                                                    <h4 class="box-title">Luxury Elite<small>bmw 5 series</small></h4>
                                                    <div class="logo">
                                                        <img src="assets/images/cars/logo/3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="amenities">
                                                    <ul>
                                                        <li><i class="fa fa-user circle"></i>4</li>
                                                        <li><i class="fa fa-suitcase circle"></i>3</li>
                                                        <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                        <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                        <li><i class="fa fa-music circle"></i>OUI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-2 character">
                                                <dl>
                                                    <dt class="skin-color">kilométrage</dt><dd>Illimité</dd>
                                                    <dt class="skin-color">Pickup Time</dt><dd>5:45</dd>
                                                    <dt class="skin-color">Lieu</dt><dd>London city</dd>
                                                </dl>
                                            </div>
                                            <div class="action col-xs-6 col-sm-2">
                                                <span class="price"><small>Par Jour</small>$79.39</span>
                                                <a href="assets/car-booking.html" class="button btn-small full-width">Selectionner</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-xs-3">
                                            <span><img width="189" height="120" alt="" src="assets/images/cars/11.png"></span>
                                        </figure>
                                        <div class="details col-xs-9 clearfix">
                                            <div class="col-sm-8">
                                                <div class="clearfix">
                                                    <h4 class="box-title">Mini Car<small>Fiat 500</small></h4>
                                                    <div class="logo">
                                                        <img src="assets/images/cars/logo/4.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="amenities">
                                                    <ul>
                                                        <li><i class="fa fa-user circle"></i>4</li>
                                                        <li><i class="fa fa-suitcase circle"></i>3</li>
                                                        <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                        <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                        <li><i class="fa fa-music circle"></i>OUI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-2 character">
                                                <dl>
                                                    <dt class="skin-color">kilométrage</dt><dd>Illimité</dd>
                                                    <dt class="skin-color">Pickup Time</dt><dd>5:45</dd>
                                                    <dt class="skin-color">Lieu</dt><dd>London city</dd>
                                                </dl>
                                            </div>
                                            <div class="action col-xs-6 col-sm-2">
                                                <span class="price"><small>Par Jour</small>$15.39</span>
                                                <a href="car-booking.html" class="button btn-small full-width">Selectionner</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-xs-3">
                                            <span><img width="189" height="120" alt="" src="assets/images/cars/12.png"></span>
                                        </figure>
                                        <div class="details col-xs-9 clearfix">
                                            <div class="col-sm-8">
                                                <div class="clearfix">
                                                    <h4 class="box-title">Intermédiaire <small>Renault grand scenic</small></h4>
                                                    <div class="logo">
                                                        <img src="assets/images/cars/logo/1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="amenities">
                                                    <ul>
                                                        <li><i class="fa fa-user circle"></i>4</li>
                                                        <li><i class="fa fa-suitcase circle"></i>3</li>
                                                        <li><i class="fa fa-snowflake circle"></i>AC</li>
                                                        <li><i class="fa fa-gas-pump circle"></i>12</li>
                                                        <li><i class="fa fa-music circle"></i>OUI</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-2 character">
                                                <dl>
                                                    <dt class="skin-color">kilométrage</dt><dd>Illimité</dd>
                                                    <dt class="skin-color">Pickup Time</dt><dd>5:45</dd>
                                                    <dt class="skin-color">Lieu</dt><dd>London city</dd>
                                                </dl>
                                            </div>
                                            <div class="action col-xs-6 col-sm-2">
                                                <span class="price"><small>Par Jour</small>$30.21</span>
                                                <a href="car-booking.html" class="button btn-small full-width">Selectioner</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <a href="#" class="button btn-large full-width">CHARGER PLUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <article class="detailed-logo">
                        <figure>
                            <img width="114" height="85" src="{{ asset("/uploads/$car->image") }}" alt="">
                        </figure>
                        <div class="details">
                            <h2 class="box-title">{{ $car->name }}<small>economy car</small></h2>
                            <span class="price clearfix">
                                    <small class="pull-left">Par Jour</small>
                                    <span class="pull-right">${{ $car->price }}</span>
                                </span>
                            <div class="mile clearfix">
                                <span class="skin-color">kilométrage:</span>
                                <span class="mileage pull-right">{{ $car->kilometer }}</span>
                            </div>
                            <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                            <a class="button green full-width uppercase btn-full" style="color: #fff" href="{{ route('recherche.cars.select') }}">Reservez</a>
                        </div>
                    </article>
                    <div class="travelo-box contact-box">
                        <h4>Besoin d'une aide Vamo</h4>
                        <p>Nous serions plus qu'heureux de vous aider. Les conseillers de notre équipe sont à votre service 24h / 24 et 7j / 7. </p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="fa fa-headset"></i> +212 522--- ALLO!</span>
                            <br>
                            <a class="contact-email" href="hotel-booking.html#">assistance@vamo.africa</a>
                        </address>
                    </div>
                    <div class="travelo-box book-with-us-box">
                        <h4>Pourquoi réserver avec nous? </h4>
                        <ul>
                            <li>
                                <i class="fa fa-building circle"></i>
                                <h5 class="title"><a href="#">135,00+ Hotels</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                            <li>
                                <i class="fa fa-piggy-bank circle"></i>
                                <h5 class="title"><a href="#">Taux bas &amp; Économies</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                            <li>
                                <i class="fa fa-headset circle"></i>
                                <h5 class="title"><a href="#">Excellent Service Client</a></h5>
                                <p>Nunc cursus libero pur congue arut nimspnty.</p>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
@stop
