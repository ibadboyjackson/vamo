@include('includes.head')
@include('includes.header')
<!-- menu end here -->

<!-- Start banner -->
<div class="inner-page-header">
    <img src="{{ asset('assets/images/bg/bookingbg.jpg') }}" alt="Inner Page Header" class="full-width">
    <div class="title-breadcrumb">
        <div class="container">
            <div class="page-sub-title">
                <h4>My account</h4>
            </div>
            <div class="site-page-header clear-fix">
                <div class="site-title">
                    <h2>My account</h2>
                </div>
            </div>
            <div class="site-page-breadcrumb">
                        <span style="color: #10b935" >
                            <a style="" href="contact2.html#">Home </a>
                            <i class="fa fa-angle-double-right"></i> My Account
                        </span>
            </div>
        </div>
    </div>
</div>
<!-- End banner -->
</header>
<!-- / END HOMEPAGE DESIGN AREA -->
<!-- START CONTACT DESIGN AREA -->
<section id="myaccount" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contact-sec">
                <!--<div class="row contact-form-design-area">-->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Dashboard</h2>
                        <div class="title-separator-outer ">
                            <div class="title-separator bg-primary style-liner"></div>
                        </div>
                    </div>
                    <!-- START DASHBOARD AREA -->
                    <div class="myaccount">
                        <nav>
                            <div class="nav nav-tabs myaccount-nav" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-dashboard-tab" data-toggle="tab" href="myaccount.html#nav-dashboard" role="tab" aria-controls="nav-dashboard" aria-selected="true"><i class="fa fa-gear"></i>dashboard</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="myaccount.html#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-user"></i>Profile</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="myaccount.html#nav-booking" role="tab" aria-controls="nav-booking" aria-selected="false"><i class="fa fa-briefcase"></i>booking</a>
                                <a class="nav-item nav-link" id="nav-wishlist-tab" data-toggle="tab" href="myaccount.html#nav-wishlist" role="tab" aria-controls="nav-wishlist" aria-selected="false"><i class="fa fa-heart-o"></i>wishlist</a>
                                <a class="nav-item nav-link" id="nav-cards-tab" data-toggle="tab" href="myaccount.html#nav-cards" role="tab" aria-controls="nav-cards" aria-selected="false"><i class="fa fa-credit-card"></i>cards</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active in" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">
                                <div class="col-no-padd">
                                    <div class="col-md-2 ">
                                        <div class="dashboard-infobox">
                                            <i class="fa fa-tachometer"></i>
                                            <p><span>1534</span> miles</p>
                                        </div>
                                        <div class="dashboard-infobox">
                                            <i class="fa fa-globe"></i>
                                            <p><span>25%</span> world</p>
                                        </div>
                                        <div class="dashboard-infobox">
                                            <i class="fa fa-building"></i>
                                            <p><span>357</span> cities</p>
                                        </div>
                                        <div class="dashboard-infobox">
                                            <i class="fa fa-plane"></i>
                                            <p><span>150</span> trips</p>
                                        </div>
                                    </div>
                                    <div class="col-md-10 padding-left-60">
                                        <div class="recent-activities">
                                            <div class="head-sec">
                                                <h3>Recent activities</h3>
                                            </div>
                                            <div class="content-sec">
                                                <p>
                                                    <i class="fa fa-bars"></i> your listing the TravelCo has been aproved
                                                </p>
                                                <p>
                                                    <i class="fa fa-star"></i> your listing the TravelCo has been aproved
                                                </p>
                                                <p>
                                                    <i class="fa fa-bookmark"></i> your listing the TravelCo has been aproved
                                                </p>
                                                <p>
                                                    <i class="fa fa-heart-o"></i> your listing the TravelCo has been aproved
                                                </p>
                                                <p>
                                                    <i class="fa fa-life-ring"></i> your listing the TravelCo has been aproved
                                                </p>
                                            </div>
                                        </div>
                                        <div class="invoices">
                                            <div class="head-sec">
                                                <h3>Invocies</h3>
                                            </div>
                                            <div class="content-sec">
                                                <div class="content-details">
                                                    <i class="fa fa-bars"></i>
                                                    <h4>Professional Plan</h4> your listing the TravelCo has been aproved
                                                </div>
                                                <div class="content-details">
                                                    <i class="fa fa-bars"></i>
                                                    <h4>Extended Plan</h4> your listing the TravelCo has been aproved
                                                </div>
                                                <div class="content-details">
                                                    <i class="fa fa-bars"></i>
                                                    <h4>Extended Plan</h4> your listing the TravelCo has been aproved
                                                </div>
                                                <div class="content-details">
                                                    <i class="fa fa-bars"></i>
                                                    <h4>Basic Plan</h4> your listing the TravelCo has been aproved
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="profile-details">
                                    <div class="head-profile">
                                        <h3>My Profile</h3>
                                    </div>
                                    <div class="content-profile">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('assets/images/profile.jpg') }}">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-user-secret"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Name:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Moniza
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-calendar-check-o"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Date of Birth:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        25 Jan 1985
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Email:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        example@example.com
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Phone:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        +123-456-789
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-map-marker"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Address:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        23 Blok, Lorum Ipsum, Canada
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <div class="col-md-1">
                                                        <i class="fa fa-globe"></i>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p class="title">
                                                            Country
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Canada
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <a href="myaccount.html#" class="button">Edit Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-profile">
                                        <h3>About Me</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-booking" role="tabpanel" aria-labelledby="nav-booking-tab">
                                <div class="booking-details">
                                    <div class="head-booking">
                                        <h3>Trips You have Booked!</h3>
                                    </div>
                                    <div class="content-booking">
                                        <div class="booking-info">
                                            <div class="col-md-2">
                                                <div class="booking-date">
                                                    <p class="date">
                                                        15
                                                    </p>
                                                    <p class="month">
                                                        august
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="booking-detail">
                                                    <h3>
                                                        Restuarent Details
                                                    </h3>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="booking-action">
                                                    <a class="btn-message bookbtn" href="myaccount.html#">
                                                        Mesage
                                                    </a>
                                                    <a class="btn-apreove bookbtn" href="myaccount.html#">
                                                        Aprove
                                                    </a>
                                                    <a class="btn-cancle bookbtn" href="myaccount.html#">
                                                        Cancle
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="booking-info">
                                            <div class="col-md-2">
                                                <div class="booking-date">
                                                    <p class="date">
                                                        15
                                                    </p>
                                                    <p class="month">
                                                        august
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="booking-detail">
                                                    <h3>
                                                        Restuarent Details
                                                    </h3>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="booking-action">
                                                    <a class="btn-message bookbtn" href="myaccount.html#">
                                                        Mesage
                                                    </a>
                                                    <a class="btn-apreove bookbtn" href="myaccount.html#">
                                                        Aprove
                                                    </a>
                                                    <a class="btn-cancle bookbtn" href="myaccount.html#">
                                                        Cancle
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="booking-info">
                                            <div class="col-md-2">
                                                <div class="booking-date">
                                                    <p class="date">
                                                        15
                                                    </p>
                                                    <p class="month">
                                                        august
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="booking-detail">
                                                    <h3>
                                                        Restuarent Details
                                                    </h3>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking date:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-sticky-note"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                booking details:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            28:12:2018 at 3:20 AM
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-user-secret"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                client:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            Monica smith
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Email:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            example@example.com
                                                        </div>
                                                    </div>
                                                    <div class="detail-info">
                                                        <div class="col-md-1">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>
                                                                Phone:
                                                            </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            +123-456-789
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="booking-action">
                                                    <a class="btn-message bookbtn" href="myaccount.html#">
                                                        Mesage
                                                    </a>
                                                    <a class="btn-apreove bookbtn" href="myaccount.html#">
                                                        Aprove
                                                    </a>
                                                    <a class="btn-cancle bookbtn" href="myaccount.html#">
                                                        Cancle
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-wishlist" role="tabpanel" aria-labelledby="nav-wishlist-tab">
                                <h3 class="wishlist">Your Wish List</h3>
                                <div class="wish-list">
                                    <div class="wish-listitem">
                                        <div class="col-md-3">
                                            <img src="{{ asset('assets/images/offer_01.jpg') }}">
                                        </div>
                                        <div class="col-md-9">
                                            <h3>Grand Lilly hotel dany</h3>
                                            <div class="wish-item-details">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                                <div class="cost-total">
                                                    order total : 1484
                                                </div>
                                                <div class="buttons">
                                                    <a class="btn book-btn">
                                                        Book now
                                                    </a>
                                                    <a class="btn remove-btn">
                                                        remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wish-listitem">
                                        <div class="col-md-3">
                                            <img src="{{ asset('assets/images/offer_02.jpg') }}">
                                        </div>
                                        <div class="col-md-9">
                                            <h3>Grand Lilly hotel dany</h3>
                                            <div class="wish-item-details">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                                <div class="cost-total">
                                                    order total : 1484
                                                </div>
                                                <div class="buttons">
                                                    <a class="btn book-btn">
                                                        Book now
                                                    </a>
                                                    <a class="btn remove-btn">
                                                        remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wish-listitem">
                                        <div class="col-md-3">
                                            <img src="{{ asset('assets/images/offer_03.jpg') }}">
                                        </div>
                                        <div class="col-md-9">
                                            <h3>Grand Lilly hotel dany</h3>
                                            <div class="wish-item-details">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                                <div class="cost-total">
                                                    order total : 1484
                                                </div>
                                                <div class="buttons">
                                                    <a class="btn book-btn">
                                                        Book now
                                                    </a>
                                                    <a class="btn remove-btn">
                                                        remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-cards" role="tabpanel" aria-labelledby="nav-cards-tab">
                                <h3 class="wishlist">Credit / Debit Cards</h3>
                                <div class="ccards">
                                    <div class="settings">
                                        <h3>settings</h3>
                                        <p class="notifications">
                                            Notifications
                                        </p>
                                        <p>change the way you receive the notifications</p>
                                        <p>
                                            <input type="checkbox" name=""> Make my profile private</p>
                                        <p>
                                            <input type="checkbox" name=""> Send me an email when some one replires to one of your comment</p>
                                        <h5>Who can Contact Me?</h5>
                                        <select class="form-control">
                                            <option value="everyone">Every One</option>
                                            <option value="admin">admin</option>
                                        </select>
                                        <h5>payments</h5>
                                        <p>
                                            <input type="checkbox" name=""> auto payment</p>
                                    </div>
                                    <div class="credit-cart-setting col-no-padd">
                                        <form class="col-no-padd">
                                            <div class="col-md-4">
                                                <h5>card type</h5>
                                                <select class="form-control">
                                                    <option value="visa">
                                                        Visa
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-md-8">
                                                <h5>card number</h5>
                                                <input type="text" name="" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <h5>expiry date</h5>
                                                <input type="date" name="" class="form-control">
                                            </div>
                                            <h5>cvv</h5>
                                            <input type="text" class="form-control"></input>
                                            <input type="submit" name="" class="form-control" value="save details">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / END DASHBOARD AREA </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END CONTACT DESIGN AREA -->
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

<!-- news start here -->
<div class="news">
    <div class="newsinner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="index5.html#"><img src="{{ asset('assets/images/foot-banner1.jpg') }}" alt="foot-banner1" title="foot-banner1" class="img-responsive" /></a>
                            <div class="hoverbox"></div>
                            <div class="matter">
                                <p class="des"><span class="fa fa-building"></span> Hotel</p>
                                <button type="button"> Booking Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="index5.html#"><img src="{{ asset('assets/images/foot-banner2.jpg') }}" alt="foot-banner2" title="foot-banner2" class="img-responsive" /></a>
                            <div class="hoverbox"></div>
                            <div class="off">
                                <span>Best Packages</span>
                            </div>
                            <div class="matter">
                                <p class="des1"><span>Package</span> to <small>Dubai</small></p>
                                <button type="button"> Booking Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="index5.html#"><img src="{{ asset('assets/images/foot-banner3.jpg') }}" alt="foot-banner3" title="foot-banner3" class="img-responsive" /></a>
                            <div class="hoverbox"></div>
                            <div class="matter">
                                <p class="des2"><i class="icon_percent_alt"></i> 50% off <span>Ireland Tour</span></p>
                                <button type="button"> Booking Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <form class="subscribe text-center">
                        <div class="form-group">
                            <div class="input-group">
                                <h3>Subscribe to our newsletter</h3>
                                <input placeholder="Enter your email" name="subscribe_email" value="" type="text">
                                <button class="btn btn-default btn-lg submit_news" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- news end here -->
<!-- START FOOTER DESIGN AREA -->
<footer class="main-footer">
    <section class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo-footer">
                    <div id="cercle">
                        <img src="{{asset('assets/images/logo-meduim.png')}}" class="logo-meduim" alt="">
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
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta1.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta2.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta3.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta4.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta5.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta6.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta7.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta8.jpg')}}"></a></li>
                            <li><a href="#"><img alt="image" src="{{asset('assets/images/insta/insta9.jpg')}}"></a></li>
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
                    <img src="{{asset('assets/images/img_paiefooter.png')}}">
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('[data-toggle="tab"],[data-toggle="pill"]').click(function() {
            $(this).parent().children('.active[data-toggle="tab"],.active[data-toggle="pill"]').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
</body>

</html>
