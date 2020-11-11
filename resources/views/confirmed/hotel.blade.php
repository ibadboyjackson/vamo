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
                <li class="active">Réservation Hotel Confirmé</li>
            </ul>
        </div>
    </div>

    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sm-8 col-md-9">
                    <div class="booking-information travelo-box">
                        <h2>Booking Confirmation</h2>
                        <hr>
                        <div class="booking-confirmation clearfix">
                            <i class="soap-icon-recommend icon circle"></i>
                            <div class="message">
                                <h4 class="main-message">Nous vous remercions. Votre commande est confirmée maintenant. </h4>
                                <p>Un email de confirmation a été envoyé à l'adresse email fournie. </p>
                            </div>
                            <a href="#" class="button btn-full print-button uppercase">Imprimer les détails </a>
                        </div>
                        <hr>
                        <h2>Traveler Information</h2>
                        <dl class="term-description">
                            <dt>Numéro Reservation:</dt><dd>5784-BD245</dd>
                            <dt>Prénom:</dt><dd>Jessica</dd>
                            <dt>Nom:</dt><dd>Brown</dd>
                            <dt>Adresse Email:</dt><dd>Info@Jessica.com</dd>
                            <dt>Adresse:</dt><dd>353 Third floor Avenue</dd>
                            <dt>Ville / Region:</dt><dd>Paris,France</dd>
                            <dt>Code Postal:</dt><dd>75800-875</dd>
                            <dt>Pays:</dt><dd>United States of america</dd>
                        </dl>
                        <hr>
                        <h2>Paiement</h2>
                        <p>Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna, posuere ut dictum quis.</p>
                        <br>
                        <p class="red-color">Payment is made by Credit Card Via Paypal.</p>
                        <hr>
                        <h2>Voir les details de la réservation</h2>
                        <p>Praesent dolor lectus, rutrum sit amet risus vitae, imperdiet cursus neque. Nulla tempor nec lorem eu suscipit. Donec dignissim lectus a nunc molestie consectetur. Nulla eu urna in nisi adipiscing placerat. Nam vel scelerisque magna. Donec justo urna, posuere ut dictum quis.</p>
                        <br>
                        <a href="#" class="red-color underline view-link">https://www.vamo.africa/booking-details/</a>
                    </div>
                </div>
                <div class="sidebar col-sm-4 col-md-3">
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
