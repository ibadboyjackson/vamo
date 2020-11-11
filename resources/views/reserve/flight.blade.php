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
                <h2 class="entry-title">Flight Booking</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="flight.html"><i class="fa fa-home"></i></a></li>
                <li class="active">Flight Booking</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                    <div class="booking-section travelo-box">

                        <form class="booking-form" method="get" action="{{ route('recherche.select.confirmed') }}">
                            <div class="person-information">
                                <h2> Vos informations personnelles </h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Prenom</label>
                                        <input type="text" name="first_name" class="input-text full-width" value="" placeholder="">
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>NOM</label>
                                        <input type="text" name="last_name" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Adresse e-mail </label>
                                        <input type="text" name="email_address" class="input-text full-width" value="" placeholder="">
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Vérifier l'adresse e-mail </label>
                                        <input type="text" name="r_email_address" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Code Postal</label>
                                        <div class="selector">
                                            <select name="country_code" class="full-width">
                                                <option value="+44">United Kingdom (+44)</option>
                                                <option value="+1">United States (+1)</option>
                                            </select><span class="custom-select full-width">United Kingdom (+44)</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Numero de Téléphone</label>
                                        <input type="text" name="phone_number" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input name="is_receive_promotion" type="checkbox" value="1"> Je souhaiterais recevoir les offres promotionelles <span class="skin-color">Vamo</span>.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-information">
                                <h2>Les informations de votre carte </h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>type de carte de crédit </label>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option>sélectionner une carte </option>
                                            </select><span class="custom-select full-width">sélectionner une carte </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Nom du titulaire </label>
                                        <input type="text" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Numero de la carte </label>
                                        <input type="text" class="input-text full-width" value="" placeholder="">
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Numéro d'identification de la carte </label>
                                        <input type="text" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Date Expiration</label>
                                        <div class="constant-column-2">
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option>Mois</option>
                                                </select><span class="custom-select full-width">month</span>
                                            </div>
                                            <div class="selector">
                                                <select class="full-width">
                                                    <option>Année</option>
                                                </select><span class="custom-select full-width">year</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-2">
                                        <label>code postal de facturation </label>
                                        <input type="text" class="input-text full-width" value="" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> En continuant, vous acceptez les  <a href="hotel-booking.html#"><span class="skin-color">Termes et conditions </span></a>.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <button type="submit" class="full-width btn-large">CONFIRMER LA RESERVATION </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                    <div class="booking-details travelo-box">
                        <h4>Booking Details</h4>
                        <article class="flight-booking-details">
                            <figure class="clearfix">
                                <a title="" href="flight-detailed.html" class="middle-block middle-block-auto-height" style="position: relative;"><img class="middle-item" alt="" src="assets/images/flights/flights_1.jpg" style="position: absolute; "></a>
                                <div class="travel-title">
                                    <h5 class="box-title">Indianapolis à paris<small>Vol Aller Simple</small></h5>
                                    <a href="flight-detailed.html" class="button">MODIFIER</a>
                                </div>
                            </figure>
                            <div class="details">
                                <div class="constant-column-3 timing clearfix">
                                    <div class="check-in">
                                        <label>Décollage </label>
                                        <span>30 NOV 2019<br>7:50 </span>
                                    </div>
                                    <div class="duration text-center">
                                        <i class="fa fa-clock"></i>
                                        <span>1H30m</span>
                                    </div>
                                    <div class="check-out">
                                        <label>Atterrissage </label>
                                        <span>30 NOV 2019<br>9:20 </span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <h4>Autres Détails</h4>
                        <dl class="other-details">
                            <dt class="feature">Compagnie:</dt><dd class="value">Delta</dd>
                            <dt class="feature">Type de vol :</dt><dd class="value">Economic</dd>
                            <dt class="feature">Tarif de base :</dt><dd class="value">$320</dd>
                            <dt class="feature">Taxes et frais:</dt><dd class="value">$300</dd>
                            <dt class="total-price">Coût Total</dt><dd class="total-price-value">$620</dd>
                        </dl>
                    </div>

                    <div class="travelo-box contact-box">
                        <h4>Besoin d'une aide Vamo</h4>
                        <p>Nous serions plus qu'heureux de vous aider. Les conseillers de notre équipe sont à votre service 24h / 24 et 7j / 7. </p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="fa fa-headset"></i> +212 522--- ALLO!</span>
                            <br>
                            <a class="contact-email" href="hotel-booking.html#">assistance@vamo.africa</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
