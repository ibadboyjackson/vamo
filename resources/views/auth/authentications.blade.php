@extends('templates')
@section('style')
    <style>
        .nav-tabs>li>a{font-size: 22px;}
        .nav-tabs>li>a{background: #62ac1e;}
        .nav-tabs>li.active>a{
            color: #62ac1e;
            cursor: pointer;
            border: none;
            background: #ffffff;
            opacity: .8;
        }
    </style>
@stop
@section('content')
    <!-- Login -->
    <section id="login" class=" login-area8 section-padding">
        <div class="container">
            <h3 class="hidden">hidden</h3>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="profile-login">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="login2.html#home" aria-controls="home" role="tab" data-toggle="tab">SE CONNECTER</a></li>
                            <li role="presentation" ><a href="login2.html#profile" aria-controls="profile" role="tab" data-toggle="tab">S'INSCRIRE</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <!-- LOGIN -->



                        <div class="tab-content padding_half">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="agent-p-form" >
                                    <form action="{{ route('user.login') }}" method="post" class="callus clearfix" style=" padding: 20px;">
                                        @include('includes.messages')
                                        @csrf
                                        <div class="single-query form-group col-sm-12">
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="single-query form-group  col-sm-12">
                                            <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-6">
                                                    <div class="search-form-group white form-group text-left">
                                                        <div class="check-box-2"><i><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}></i></div>
                                                        <span class="checkbox2-label" style="color:#000">Se souvenir</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <a href="login2.html#" class="lost-pass">Mot de passe perdu?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12">
                                            <input type="submit" value="Connexion" class="button">
                                        </div>
                                    </form>

                                    <div class="social-login ">
                                        <div class="">
                                            <div class="row">
                                                <div class="section-title text-center" style="padding:0">
                                                    <h3>Ou continuer avec</h3>
                                                    <div class="title-separator-outer ">
                                                        <div class="title-separator bg-primary style-liner"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-12">
                                                    <div class="col-md-6">
                                                        <button class="slogin-btn facebook-lbtn"><i class="fa fa-facebook"></i> Login Via Facebook</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="slogin-btn gplus-lbtn"><i class="fa fa-google-plus"></i> Login Via Google</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!--  REGISTRATION -->

                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="agent-p-form">
                                    <form class="callus clearfix" style=" padding: 20px;" method="post" action="{{ route('user.post.register') }}">
                                        @csrf
                                        <div class="single-query col-sm-12 form-group">
                                            <input type="text" class="form-control" placeholder="username" name="name" required>
                                        </div>
                                        <div class="single-query col-sm-12 form-group">
                                            <input type="text" class="form-control" placeholder="Email " name="email">
                                        </div>
                                        <div class="single-query col-sm-12 form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                        </div>
                                        <div class="single-query col-sm-12 form-group">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer  Mot de passe">
                                        </div>
                                        <div class="search-form-group white col-sm-12 form-group text-left">
                                            <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                                            <span class="checkbox2-label" style="color: #000">J'ai lu et accepté les <a>Conditions générales de vente</a></span>
                                        </div>
                                        <div class="search-form-group white col-sm-12 form-group text-left">
                                            <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                                            <span class="checkbox2-label" style="color: #000">Recevoir Newsletters</span>

                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="query-submit-button" style=" margin-bottom: 20px;">
                                                <input type="submit" value="Créer un compte" class="button">
                                            </div>
                                        </div>
                                        <div class="social-login " style="margin-top: 20px">
                                            <div class="">
                                                <div class="row">
                                                    <div class="section-title text-center" style="padding:0">
                                                        <h3>Ou continuer avec</h3>
                                                        <div class="title-separator-outer ">
                                                            <div class="title-separator bg-primary style-liner"></div>
                                                        </div>
                                                    </div>
                                                    <div class=" col-md-12">
                                                        <div class="col-md-6">
                                                            <button class="slogin-btn facebook-lbtn"><i class="fa fa-facebook"></i> Login Via Facebook</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="slogin-btn gplus-lbtn"><i class="fa fa-google-plus"></i> Login Via Google</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login end -->

@stop
