@extends('templates')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

@stop
@section('scripts')
@stop
@section('content')
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Détails Croisière</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">Détails Croisière</li>
            </ul>
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div id="main" class="col-md-9">
                    <div class="tab-container style1" id="cruise-main-content">
                        <ul class="tabs">
                            <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                            <li><a data-toggle="tab" href="#calendar-tab">calendar</a></li>
                            <li class="pull-right"><a class="button btn-full green-bg white-color" href="#">TRAVEL GUIDE</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="photos-tab" class="tab-pane fade in active">
                                <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2600%; transition-duration: 0s; transform: translate3d(-870px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 870px; float: left; display: block;"><img src="assets/images/cruise/gallery/11.jpg" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class="flex-active-slide"><img src="{{ asset("/uploads/$cruise->file") }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/2.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/3.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/4.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/5.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/6.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/7.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/8.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/9.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/cruise/gallery/10.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets//cruise/gallery/11.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class="clone" aria-hidden="true"><img src="{{ asset('assets/images/cruise/gallery/1.jpg') }}" alt="" draggable="false"></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li><li><a class="">5</a></li><li><a class="">6</a></li><li><a class="">7</a></li><li><a class="">8</a></li><li><a class="">9</a></li><li><a class="">10</a></li><li><a class="">11</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                                <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                            <li class="flex-active-slide" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/cruise/gallery/thumbnail/1.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/2.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/3.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/4.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/5.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/6.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/7.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/8.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/9.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/10.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class=""><img src="{{ asset('assets/images/cruise/gallery/thumbnail/11.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                        </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                            </div>
                            <div id="calendar-tab" class="tab-pane fade">
                                <label>SELECT MONTH</label>
                                <div class="col-sm-6 col-md-4 no-float no-padding">
                                    <div class="selector">
                                        <select class="full-width" id="select-month">
                                            <option value="2015-7">Juillet 2019</option>
                                            <option value="2015-8">Août 201ç</option>
                                            <option value="2015-9">Septembre 2019</option>
                                            <option value="2015-10">Octobre 2019</option>
                                            <option value="2015-11">Novembre 2019</option>
                                            <option value="2015-12">Decembre 2019</option>
                                            <option value="2016-1">Janvier 2019</option>
                                            <option value="2016-2">Fevrier 2019</option>
                                        </select><span class="custom-select full-width">Juillet 2019</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="calendar"><table><thead><tr><td>sunday</td><td>monday</td><td>tuesday</td><td>wednesday</td><td>thursday</td><td>friday</td><td>saturday</td></tr></thead><tbody><tr><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class=" date-passed"><span>1</span></td><td class=" date-passed"><span>2</span></td></tr><tr><td class=" date-passed"><span>3</span></td><td class=" date-passed"><span>4</span></td><td class=" date-passed"><span>5</span></td><td class=" date-passed"><span>6</span></td><td class=" date-passed"><span>7</span></td><td class=" date-passed"><span>8</span></td><td class=" date-passed"><span>9</span></td></tr><tr><td class=" date-passed"><span>10</span></td><td class=" date-passed"><span>11</span></td><td class=" date-passed"><span>12</span></td><td class=" date-passed"><span>13</span></td><td class=" date-passed"><span>14</span></td><td class=" date-passed"><span>15</span></td><td class=" date-passed"><span>16</span></td></tr><tr><td class=" date-passed"><span>17</span></td><td class=" date-passed"><span>18</span></td><td class=" date-passed"><span>19</span></td><td class=" date-passed"><span>20</span></td><td class=" date-passed"><span>21</span></td><td class=" date-passed"><span>22</span></td><td class=" date-passed"><span>23</span></td></tr><tr><td class=" date-passed"><span>24</span></td><td class=" date-passed"><span>25</span></td><td class=" date-passed"><span>26</span></td><td class=" today unavailable"><span>27</span></td><td class=" unavailable"><span>28</span></td><td class=" unavailable"><span>29</span></td><td class=" unavailable"><span>30</span></td></tr><tr><td class=" unavailable"><span>31</span></td></tr></tbody></table></div>
                                        <div class="calendar-legend">
                                            <label class="available">available</label>
                                            <label class="unavailable">unavailable</label>
                                            <label class="past">past</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="description">
                                            The calendar is updated every five minutes and is only an approximation of availability.
                                            <br><br>
                                            Some hosts set custom pricing for certain days on their calendar, like weekends or holidays. The rates listed are per day and do not include any cleaning fee or rates for extra people the host may have for this listing. Please refer to the listing's Description tab for more details.
                                            <br><br>
                                            We suggest that you contact the host to confirm availability and rates before submitting a reservation request.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cruise-features" class="tab-container">
                        <ul class="tabs">
                            <li class="active"><a href="#cruise-description" data-toggle="tab" aria-expanded="true">Description</a></li>
                            <li class=""><a href="#cruise-availability" data-toggle="tab" aria-expanded="false">Disponibilité</a></li>
                            <li class=""><a href="#cruise-amenities" data-toggle="tab" aria-expanded="false">Equipements</a></li>
                            <li class=""><a href="#cruise-food-dinning" data-toggle="tab" aria-expanded="false">Repas &amp; Diner</a></li>
                            <li class=""><a href="#cruise-reviews" data-toggle="tab" aria-expanded="false">Avis</a></li>
                            <li class=""><a href="#cruise-write-review" data-toggle="tab" aria-expanded="false">Écrire un Avis</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="cruise-description">
                                <div class="intro table-wrapper full-width hidden-table-sms">
                                    <div class="col-sm-5 col-lg-4 features table-cell">
                                        <ul>
                                            <li><label>Nom de la croisière :</label>Carnival</li>
                                            <li><label>Durére Croisière:</label>4 Nuits</li>
                                            <li><label>Nom du Bateau:</label>Imagination</li>
                                            <li><label>Chambre Interieur</label>$279</li>
                                            <li><label>Vue Océan:</label>$269</li>
                                            <li><label>Balcon:</label>Not Offered</li>
                                            <li><label>Suite:</label>$529</li>
                                            <li><label>Économie :</label>20%</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7 col-lg-8 table-cell cruise-itinerary">
                                        <div class="travelo-box">
                                            <h4 class="box-title">Itinéraire de la croisière </h4>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Ports of Call</th>
                                                    <th>Arrival</th>
                                                    <th>Departure</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Long Beach (Los Angeles), California</td>
                                                    <td>---</td>
                                                    <td>5:30 p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>At Sea</td>
                                                    <td>---</td>
                                                    <td>---</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Catalina Island, California</td>
                                                    <td>7:30 a.m</td>
                                                    <td>4:30 p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Ensenada, Mexico</td>
                                                    <td>9:00 a.m</td>
                                                    <td>8:00 p.m</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="long-description">
                                    <h2>A propos de la croisière Carnival </h2>
                                    <p>
                                        Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
                                        <br><br>
                                        Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
                                        <br><br>
                                        Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cruise-availability">
                                <div class="border-box travelo-box clearfix">
                                    <h4 class="title col-xs-12">Sélectionnez une catégorie de cabines </h4>
                                    <form class="update-search-form">
                                        <div class="form-group col-xs-6 col-md-3">
                                            <label>Date</label>
                                            <div class="datepicker-wrap">
                                                <input type="text" class="input-text full-width hasDatepicker" placeholder="Lun, 26 Jan, 2019" id="dp1553661117006"><img class="ui-datepicker-trigger" src="assets/images/icon/blank.png" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="form-group col-xs-6 col-md-3">
                                            <label>Catégorie Chambre </label>
                                            <div class="selector">
                                                <select>
                                                    <option value="">Suite</option>
                                                </select><span class="custom-select">Suite</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xs-8 col-md-4">
                                            <label>Price</label>
                                            <div class="selector">
                                                <select>
                                                    <option value="">Jusqu'à 300 $ </option>
                                                </select><span class="custom-select">Jusqu'à 300 $ </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xs-4 col-md-2">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="icon-check full-width">PROCÉDER</button>
                                        </div>
                                    </form>
                                </div>
                                <h2>Chambres disponibles </h2>
                                <div class="room-list listing-style3 hotel">
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/cruise-slideshow-popup.html"><img width="230" height="161" src="assets/images/cruise/room/1.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Grand Suite</h4>
                                                        <dl class="description">
                                                            <dt>Pont:</dt>
                                                            <dd>Superieur</dd>
                                                            <dt>Taille:</dt>
                                                            <dd>330 sq ft Balcon: 70 sq ft.</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="amenities">
                                                        <i class="fa fa-wifi circle"></i>
                                                        <i class="fa fa-swimmer circle"></i>
                                                        <i class="fa fa-utensils circle"></i>
                                                        <i class="fa fa-tv circle"></i>
                                                    </div>
                                                </div>
                                                <div class="price-section">
                                                    <span class="price"><small>PAR/NUIT</small>$121</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="cruise-booking.html" class="button btn-small full-width text-center">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/cruise-slideshow-popup.html"><img width="230" height="161" src="assets/images/cruise/room/2.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Junior Suite</h4>
                                                        <dl class="description">
                                                            <dt>Pont:</dt>
                                                            <dd>Veranda</dd>
                                                            <dt>Taille:</dt>
                                                            <dd>220 sq ft Balcon: 30 sq ft.</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="amenities">
                                                        <i class="fa fa-wifi circle"></i>
                                                        <i class="fa fa-swimmer circle"></i>
                                                        <i class="fa fa-utensils circle"></i>
                                                        <i class="fa fa-tv circle"></i>
                                                    </div>
                                                </div>
                                                <div class="price-section">
                                                    <span class="price"><small>PAR / NUIT</small>$325</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="cruise-booking.html" class="button btn-small full-width text-center">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/cruise-slideshow-popup.html"><img width="230" height="161" src="assets/images/cruise/room/3.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Junior Suite (vue obstruée)</h4>
                                                        <dl class="description">
                                                            <dt>Pont:</dt>
                                                            <dd>Superieur</dd>
                                                            <dt>Taille:</dt>
                                                            <dd>220 sq ft Balcon: 30 sq ft.</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="amenities">
                                                        <i class="fa fa-wifi circle"></i>
                                                        <i class="fa fa-swimmer circle"></i>
                                                        <i class="fa fa-utensils circle"></i>
                                                        <i class="fa fa-tv circle"></i>
                                                    </div>
                                                </div>
                                                <div class="price-section">
                                                    <span class="price"><small>PAR/</small>$248</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="cruise-booking.html" class="button btn-small full-width text-center">BOOK NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <a href="#" class="load-more full-width button btn-large fourty-space">LOAD MORE ROOMS</a>

                            </div>
                            <div class="tab-pane fade" id="cruise-amenities">
                                <h2>Amenities Style 01</h2>

                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <ul class="amenities clearfix style1">
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-wifi"></i>WI_FI</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-swimming-pool"></i>swimming pool</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-tv"></i>television</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-coffee"></i>coffee</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-snowflake"></i>air conditioning</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="fa fa-running"></i>fitness facility</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-fridge"></i>fridge</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-winebar"></i>wine bar</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-smoking"></i>smoking allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-entertainment"></i>entertainment</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-securevault"></i>secure vault</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-pickanddrop"></i>pick and drop</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-phone"></i>room service</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-pets"></i>pets allowed</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-playplace"></i>play place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-breakfast"></i>complimentary breakfast</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-parking"></i>Free parking</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-conference"></i>conference room</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-fireplace"></i>fire place</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-handicapaccessiable"></i>Handicap Accessible</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-doorman"></i>Doorman</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-tub"></i>Hot Tub</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-elevator"></i>Elevator in Building</div>
                                    </li>
                                    <li class="col-md-4 col-sm-6">
                                        <div class="icon-box style1"><i class="soap-icon-star"></i>Suitable for Events</div>
                                    </li>
                                </ul>

                            </div>
                            <div class="tab-pane fade" id="cruise-food-dinning">
                                <div class="box">
                                    <h2>Food and Dinning on Ship</h2>
                                    <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                </div>
                                <div class="food-dinning-list image-box style2">
                                    <div class="box">
                                        <figure>
                                            <a href="#"><img src="assets/images/cruise/food-dinning/1.png" alt=""></a>
                                        </figure>
                                        <div class="details">
                                            <div class="review-score">
                                                <div class="five-stars-container" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">27 reviews</span>
                                            </div>
                                            <div class="box-title">
                                                <h4 class="title">Sushi Bar</h4>
                                                <dl>
                                                    <dt>Horaires des places assises:</dt>
                                                    <dd>Open nightly prior to dinner.</dd>
                                                </dl>
                                            </div>
                                            <hr class="hidden-xs">
                                            <p>Watch the sushi chef prepare fresh Nigiri salmon, California rolls, Nigiri Toro, and other delicious Japanese delicacies for your enjoyment. Then grab some chopsticks and sample these colorful creations.</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <figure>
                                            <a href="#"><img src="assets/images/cruise/food-dinning/2.png" alt=""></a>
                                        </figure>
                                        <div class="details">
                                            <div class="review-score">
                                                <div class="five-stars-container" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">27 reviews</span>
                                            </div>
                                            <div class="box-title">
                                                <h4 class="title">My Time Dining</h4>
                                                <dl>
                                                    <dt>Horaires des places assises:</dt>
                                                    <dd>5:45 - 9:30 PM.</dd>
                                                </dl>
                                            </div>
                                            <hr class="hidden-xs">
                                            <p>Watch the sushi chef prepare fresh Nigiri salmon, California rolls, Nigiri Toro, and other delicious Japanese delicacies for your enjoyment. Then grab some chopsticks and sample these colorful creations.</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <figure>
                                            <a href="#"><img src="assets/images/cruise/food-dinning/3.png" alt=""></a>
                                        </figure>
                                        <div class="details">
                                            <div class="review-score">
                                                <div class="five-stars-container" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">27 Avis</span>
                                            </div>
                                            <div class="box-title">
                                                <h4 class="title">Carnivale &amp; Mardi Gras Dining Rooms</h4>
                                                <dl>
                                                    <dt>Horaires des places assises:</dt>
                                                    <dd>Lunch: Noon to 1:30 PM; Dinner: 5:45-6:15 PM</dd>
                                                </dl>
                                            </div>
                                            <hr class="hidden-xs">
                                            <p>Watch the sushi chef prepare fresh Nigiri salmon, California rolls, Nigiri Toro, and other delicious Japanese delicacies for your enjoyment. Then grab some chopsticks and sample these colorful creations.</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <figure>
                                            <a href="#"><img src="assets/images/cruise/food-dinning/4.png" alt=""></a>
                                        </figure>
                                        <div class="details">
                                            <div class="review-score">
                                                <div class="five-stars-container" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">27 Avis</span>
                                            </div>
                                            <div class="box-title">
                                                <h4 class="title">Brasserie Bar &amp; Grill</h4>
                                                <dl>
                                                    <dt>Horaires des places assises:</dt>
                                                    <dd>De 7H à Midi.</dd>
                                                </dl>
                                            </div>
                                            <hr class="hidden-xs">
                                            <p>Watch the sushi chef prepare fresh Nigiri salmon, California rolls, Nigiri Toro, and other delicious Japanese delicacies for your enjoyment. Then grab some chopsticks and sample these colorful creations.</p>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <figure>
                                            <a href="#"><img src="assets/images/cruise/food-dinning/5.png" alt=""></a>
                                        </figure>
                                        <div class="details">
                                            <div class="review-score">
                                                <div class="five-stars-container" data-placement="bottom" data-toggle="tooltip" title="" data-original-title="3 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" ></i><i class="fa fa-star"></i></div>
                                                <span class="review">27 Avis</span>
                                            </div>
                                            <div class="box-title">
                                                <h4 class="title">Service de chambre </h4>
                                                <dl>
                                                    <dt>Horaires des places assises:</dt>
                                                    <dd>Disponible 24 heures.</dd>
                                                </dl>
                                            </div>
                                            <hr class="hidden-xs">
                                            <p>Watch the sushi chef prepare fresh Nigiri salmon, California rolls, Nigiri Toro, and other delicious Japanese delicacies for your enjoyment. Then grab some chopsticks and sample these colorful creations.</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="button btn-large full-width uppercase">Afficher plus food &amp; Liste de restaurants </a>
                            </div>
                            <div class="tab-pane fade" id="cruise-reviews">
                                <div class="intro table-wrapper full-width hidden-table-sms">
                                    <div class="rating table-cell col-sm-4">
                                        <span class="score">3.9/5.0</span>
                                        <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                        <a href="#review-comments" class="goto-writereview-pane button green btn-full full-width">ECRIVEZ UN AVIS:</a>
                                    </div>
                                    <div class="table-cell col-sm-8">
                                        <div class="detailed-rating">
                                            <ul class="clearfix">
                                                <li class="col-md-6"><div class="each-rating"><label>Qualité du Bateau</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="3" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Qualité du Staff</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Qualité de Sommeil</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Propreté</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Lieu</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Chambre</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Piscine</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i> <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Centre de Fitness</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-reviews">
                                    <h2>Guest Reviews</h2>
                                    <div class="guest-review table-wrapper">
                                        <div class="col-xs-3 col-md-2 author table-cell">
                                            <a href="#"><img src="assets/images/shortcodes/team/jessica.png" alt="" width="270" height="263"></a>
                                            <p class="name">Jessica Brown</p>
                                            <p class="date">12 NOV 2019</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">Assez bon pour un week-end </h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                    <span class="score">4.0/5.0</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-review table-wrapper">
                                        <div class="col-xs-3 col-md-2 author table-cell">
                                            <a href="#"><img src="assets/images/shortcodes/team/david.png" alt="" width="270" height="263"></a>
                                            <p class="name">David Jhon</p>
                                            <p class="date">12 NOV 2019</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">Première croisière - FANTASTIC </h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                    <span class="score">3.2/5.0</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="guest-review table-wrapper">
                                        <div class="col-xs-3 col-md-2 author table-cell">
                                            <a href="#"><img src="assets/images/shortcodes/team/kyle.png" alt="" width="270" height="263"></a>
                                            <p class="name">Kyle Martin</p>
                                            <p class="date">12 NOV 2019</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">5 jours d'Inspiration Carnaval à Tampa </h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                    <span class="score">3.8/5.0</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stand dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="button full-width btn-large">CHARGER PLUS</a>
                            </div>
                            <div class="tab-pane fade" id="cruise-write-review">
                                <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                    <article class="image-box box cruise listing-style1 photo table-cell col-sm-4">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="270" height="160" alt="" src="assets/images/cruise/7.png"></a>
                                        </figure>
                                        <div class="details">
                                            <h4 class="box-title">Carnival Cruise Lines<small>Carnival inspiration</small></h4>
                                            <div class="feedback">
                                                <div title="" class="five-stars-container" data-toggle="tooltip" data-placement="bottom" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">270 AVIS</span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="table-cell col-sm-8">
                                        <div class="overall-rating">
                                            <h4>Your overall Rating of this property</h4>
                                            <div class="star-rating clearfix">
                                                <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="status">VERY GOOD</span>
                                            </div>
                                            <div class="detailed-rating">
                                                <ul class="clearfix">
                                                    <li class="col-md-6"><div class="each-rating"><label>Ship Quality</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Ship Staff Quality</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Dining/Food</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Activities</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>rooms Quality</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Play areas</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Cleanliness</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>fitness facility</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget  ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="review-form" id="review-comments">
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">Titre de votre revue </h4>
                                        <input type="text" name="review-title" class="input-text full-width" value="" placeholder="entrer un titre de critique ">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Votre Avis</h4>
                                        <textarea class="input-text full-width" placeholder="entrez votre avis (minimum 200 caractères) " rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Quel genre de voyage était-ce? </h4>
                                        <ul class="sort-trip clearfix">
                                            <li><a href="#"><i class="fa fa-suitcase circle"></i></a><span>Affaires</span></li>
                                            <li><a href="#"><i class="fa fa-kiss-wink-heart circle"></i></a><span>En Couples</span></li>
                                            <li><a href="#"><i class="fa fa-users circle"></i></a><span>En Famille</span></li>
                                            <li><a href="#"><i class="fa fa-user-friends circle"></i></a><span>Entre Amis</span></li>
                                            <li><a href="#"><i class="fa fa-user-tie circle"></i></a><span>En Solo</span></li>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">Quand avez-vous voyagé? </h4>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="2014-6">Juin 2019</option>
                                                <option value="2014-7">Juillet 2019</option>
                                                <option value="2014-8">Août 2019</option>
                                                <option value="2014-9">Septembre 2019</option>
                                                <option value="2014-10">Octobre 2019</option>
                                                <option value="2014-11">Novembre 2019</option>
                                                <option value="2014-12">Decembre 2019</option>
                                            </select><span class="custom-select full-width">Juin 2019</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Ajouter un conseil pour aider les voyageurs à choisir un bon navire </h4>
                                        <textarea class="input-text full-width" rows="3" placeholder="write something here"></textarea>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">Avez-vous des photos à partager?  <small>(Optionnel)</small> </h4>
                                        <div class="fileinput full-width" style="line-height: 34px;">
                                            <input type="file" class="input-text" data-placeholder="selectionnerl'image"><input type="text" class="custom-fileinput input-text" placeholder="selection image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Partager avec des amis  <small>(Optionnel)</small></h4>
                                        <p>Partagez votre avis avec vos amis sur différents réseaux de médias sociaux. </p>
                                        <ul class="social-icons icon-circle clearfix">
                                            <li class="twitter"><a title="" href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="facebook"><a title="" href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="googleplus"><a title="" href="#" data-toggle="tooltip" data-original-title="GooglePlus"><i class="fab fa-google-plus"></i></a></li>
                                            <li class="pinterest"><a title="" href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding no-margin">
                                        <button type="submit" class="btn-large full-width">SOUMETTRE AVIS</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <article class="detailed-logo">
                        <figure>
                            <img width="320" height="81" src="{{ asset("/uploads/profile/$cruise->image") }}" alt="">
                        </figure>
                        <div class="details">
                            <h2 class="box-title">4 Nuit {{ $cruise->from }} {{ $cruise->to }}<small>Lun, 26 Jan, 2018</small></h2>
                            <span class="price clearfix">
                                        <small class="pull-left">À partir de</small>
                                        <span class="pull-right">${{ $cruise->price }}</span>
                                    </span>
                            <div class="feedback clearfix">
                                <div title="" class="five-stars-container" data-toggle="tooltip" data-placement="bottom" data-original-title="4 stars"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                <span class="review pull-right">270 avis</span>
                            </div>
                            <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                            <a class="button green full-width uppercase btn-full">Booking</a>
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
