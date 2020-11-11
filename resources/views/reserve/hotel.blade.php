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
                <h2 class="entry-title">Hotel Booking</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="hotel.html"><i class="fa fa-home"></i></a></li>
                <li class="active">Hotel Booking</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                    <div class="booking-section travelo-box">

                        <form class="booking-form" method="get" action="{{ route('recherche.hotel.select.confirmed') }}">
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
                        <h4>Réservation Détails </h4>
                        <article class="image-box hotel listing-style1">
                            <figure class="clearfix">
                                <a href="hotel-results-details.html" class="hover-effect middle-block middle-block-auto-height" style=""><img class="middle-item" width="270" height="161" alt="" src="assets/images/shortcodes/listings/style01/hotel/1.png" style="
                                            position: absolute;"></a>                                    <div class="travel-title">
                                    <h5 class="box-title">Hotel Hilton<small>Paris france</small></h5>
                                    <a href="hotel-results-details.html" class="button">MODIFIER</a>
                                </div>
                            </figure>
                            <div class="details">
                                <div class="feedback">
                                    <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="" data-original-title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                    <span class="review">270 avis</span>
                                </div>
                                <div class="constant-column-3 timing clearfix">
                                    <div class="check-in">
                                        <label>Entrée</label>
                                        <span>NOV 30, 2014<br>11 AM</span>
                                    </div>
                                    <div class="duration text-center">
                                        <i class="fa fa-clock"></i>
                                        <span>2 Nuit</span>
                                    </div>
                                    <div class="check-out">
                                        <label>Sortie</label>
                                        <span>DEC 02, 2013<br>2 PM</span>
                                    </div>
                                </div>
                                <div class="guest text-center">
                                    <small class="uppercase">1 Chambre familiale standard pour:<br> <span class="skin-color ">3 Personnes</span></small>
                                </div>
                            </div>
                        </article>

                        <h4>Autres Détails</h4>
                        <dl class="other-details">
                            <dt class="feature">Type de chambre :</dt><dd class="value">Standard Famille</dd>
                            <dt class="feature">Prix par chambre:</dt><dd class="value">$121</dd>
                            <dt class="feature">Séjour de 2 nuits:</dt><dd class="value">$242</dd>
                            <dt class="feature">Taxes and fees:</dt><dd class="value">$10</dd>
                            <dt class="total-price">Coût Total</dt><dd class="total-price-value">$252</dd>
                        </dl>
                    </div>

                    <div class="travelo-box contact-box">
                        <h4>Besoin d'une aide Vamo</h4>
                        <p>Nous serions plus qu'heureux de vous aider. Les conseillers de notre équipe sont à votre service 24h / 24 et 7j / 7. </p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="fa fa-headset"></i> +212 522 xx xx xx ALLO!</span>
                            <br>
                            <a class="contact-email" href="hotel-booking.html#">assistance@vamo.africa</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
