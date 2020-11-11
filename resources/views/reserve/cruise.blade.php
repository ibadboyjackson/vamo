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
                <h2 class="entry-title">Cruise Booking</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="cruise.html"><i class="fa fa-home"></i></a></li>
                <li class="active">Cruise Booking</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sm-8 col-md-9">
                    <div class="booking-section travelo-box">
                        <form class="cruise-booking-form" method="get" action="{{ route('recherche.cruise.select.confirmed') }}">
                            <div class="person-information">
                                <h2>Vos informations personnelles </h2>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Prénom</label>
                                        <input type="text" name="first_name" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Nom</label>
                                        <input type="text" name="last_name" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Adresse e-mail</label>
                                        <input type="text" name="email_address" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Vérifier l'adresse e-mail</label>
                                        <input type="text" name="r_email_address" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Pays de citoyenneté</label>
                                        <div class="selector">
                                            <select name="country" class="full-width">
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                            </select><span class="custom-select full-width">United Kingdom</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Date de Naissance/label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="Date de Naisssance" class="input-text full-width hasDatepicker" placeholder="jj/mm/aa" data-min-date="01/01/1900" data-change-year="1" id="dp1553666381316"><img class="ui-datepicker-trigger" src="images/icon/blank.png" alt="" title="">
                                                    </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Genre</label>
                                                <div>
                                                    <label class="radio radio-inline radio-square checked">
                                                        <input type="radio" name="Genre" checked="checked" value="M">Homme
                                                    </label>
                                                    <label class="radio radio-inline radio-square">
                                                        <input type="radio" name="Genre" value="F">Femme
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Code Pays</label>
                                        <div class="selector">
                                            <select name="country_code" class="full-width">
                                                <option>United Kingdom (+44)</option>
                                                <option>United States (+1)</option>
                                            </select><span class="custom-select full-width">United Kingdom (+44)</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Numero téléphone</label>
                                        <input type="text" name="phone_number" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6 col-md-5">
                                        <label>Adresse Domicile</label>
                                        <input type="text" name="home_address" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; cursor: auto; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                    <div class="form-group col-sm-6 col-md-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <label>Pays</label>
                                                <div class="selector full-width">
                                                    <select name="state">
                                                        <option value="uk">UK</option>
                                                    </select><span class="custom-select">UK</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Boite Postale</label>
                                                <input type="text" name="zipcode" class="input-text full-width" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_receive_promotion" value="Y"> Je souhaiterais recevoir les offres promotionelles <span class="skin-color">Vamo</span>.
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
                                        <input type="text" class="input-text full-width" value="" placeholder="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h2>Informations d'arrivée / de vol </h2>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <label>Compagnie Aériènne</label>
                                    <div class="selector full-width">
                                        <select>
                                            <option value="">Select...</option>
                                        </select><span class="custom-select">Selectionner...</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <label>Numero Arrivée</label>
                                    <input type="text" class="input-text full-width" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat no-repeat;">
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
                <div class="sidebar col-sm-4 col-md-3">
                    <div class="booking-details travelo-box">
                        <h4>Booking Details</h4>
                        <article class="image-box cruise listing-style1">
                            <figure class="clearfix">
                                <a title="" href="cruise-detailed.html" class="hover-effect middle-block" style="position: relative;"><img class="middle-item" alt="" src="assets/images/cruise/3.png" style="position: absolute; top: 50%; margin-top: -37.5px; left: 50%; margin-left: -70px;"></a>
                                <div class="travel-title">
                                    <h5 class="box-title">Carnival<small>baja mexico</small></h5>
                                    <a href="cruise-results-details.html" class="button">MODIFIER</a>
                                </div>
                            </figure>
                            <div class="details">
                                <div class="feedback">
                                    <div data-placement="bottom" data-toggle="tooltip" title="" class="five-stars-container" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                    <span class="review">270 avis</span>
                                </div>
                                <div class="constant-column-3 timing clearfix">
                                    <div class="check-in">
                                        <label>Départ</label>
                                        <span>10 Fev, 2019<br>10H</span>
                                    </div>
                                    <div class="duration text-center">
                                        <i class="fa fa-clock"></i>
                                        <span>4 Nuiy</span>
                                    </div>
                                    <div class="check-out">
                                        <label>Returns</label>
                                        <span>15 Fev, 2019<br>2H</span>
                                    </div>
                                </div>
                                <div class="guest text-center">
                                    <small class="uppercase">1 grande suite pour <br><span class="skin-color">2 Personnes</span></small>
                                </div>
                            </div>
                        </article>

                        <h4>Autres Détails</h4>
                        <dl class="other-details">
                            <dt class="feature">Type: Chambre</dt><dd class="value">Grand Suite</dd>
                            <dt class="feature">Repas &amp; Diner:</dt><dd class="value">$121</dd>
                            <dt class="feature">Prix Croisière:</dt><dd class="value">$529</dd>
                            <dt class="feature">Taxes &amp; Charges:</dt><dd class="value">$173</dd>
                            <dt class="total-price">Coût Total</dt><dd class="total-price-value">$823</dd>
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
