@extends('templates')
@section('style')

@stop
@section('scripts')

@stop
@section('content')
    <!-- Start banner -->
    <div class="inner-page-header">
        <img src="{{ asset('assets/images/bg/contact-usbg.jpg') }}" alt="Inner Page Header" class="full-width">
        <div class="title-breadcrumb">
            <div class="container">
                <div class="page-sub-title">
                    <h4>Enjoy trip on cruise</h4>
                </div>
                <div class="site-page-header clear-fix">
                    <div class="site-title">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="site-page-breadcrumb">
                        <span style="color: #10b935" >
                            <a style="" href="contact2.html#">Home </a>
                            <i class="fa fa-angle-double-right"></i> Contact Us
                        </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner -->
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->
    <!-- Map -->
    <div class="contactmap section-padding">
        <div class="container">
            <div class="row">
                <div class="map1  wow fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.2871743706564!2d-71.06165938447522!3d42.357718779187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3708485209583%3A0x6e248f25891a1cc4!2sSchool+St%2C+Boston%2C+MA+02108%2C+USA!5e0!3m2!1sen!2sin!4v1507011599646" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- //Map -->
    <section id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact-sec">
                    <div class="contact-address row block">
                        <div class="col-md-4">
                            <div class="contact-icon-box">
                                <i class="fa fa-phone default-bg"></i>
                                <div class="description">
                                    <small>We are on 24/7</small>
                                    <h5>Local: 123-456-123-HELLO</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-icon-box">
                                <i class="fa fa-envelope-o default-bg"></i>
                                <div class="description">
                                    <small>Send us email on</small>
                                    <h5>exmaple@exmaple.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-icon-box ">
                                <i class="fa fa-map-marker-alt default-bg"></i>
                                <div class="description">
                                    <small>meet us at</small>
                                    <h5>Expo, P.O Box, 987 Exo Avenue</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- START CONTACT FORM DESIGN AREA -->
                    <div class="contact-form">
                        <form id="contact-form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="contact_name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="contact_email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="subject" class="form-control" id="contact_subject" placeholder="subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="6" name="message" class="form-control" id="message" placeholder="Your Message" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="actions wow fadeInUp" data-wow-delay=".4s">
                                        <input type="submit" value="send message" name="submit" id="submit" class="" title="Submit Your Message!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / END CONTACT FORM DESIGN AREA </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- START COMPANY DESIGN AREA -->
    <div class="company-logo-area  wow fadeInU">
        <div class="container">
            <div id="owl-brands" class="company-logo-list owl-carousel unicase-owl-carousel owl-outer-nav">
                <div class="item">
                    <div class="item_inner">
                        <img alt="image" src="{{ asset('assets/images/company-logo/company_1.png') }}">
                    </div>

                </div>

                <!-- /.item -->
                <div class="item">
                    <div class="item_inner">
                        <img alt="image" src="{{ asset('assets/images/company-logo/company_2.png') }}">
                    </div>
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="item_inner">
                        <img alt="image" src="{{ asset('assets/images/company-logo/company_3.png') }}">
                    </div>
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="item_inner">
                        <img alt="image" src="{{ asset('assets/images/company-logo/company_4.png') }}">
                    </div>
                </div>
                <!-- /.item -->
                <div class="item">
                    <div class="item_inner">
                        <img alt="image" src="{{ asset('assets/images/company-logo/company_5.png') }}">
                    </div>
                </div>
            </div>
            <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div>
                <!-- /.owl-carousel -->
            </div>
        </div>
    </div>   <!-- / END COMPANY DESIGN AREA -->
@stop
