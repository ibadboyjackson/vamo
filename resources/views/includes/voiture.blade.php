<form class="content-widget typeahead" role="search" method="post" action="{{ route('recherche.cars') }}">
    @csrf
    <div class="text-input small-margin-top">
        <div class="place text-box-wrapper">
            <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Départ:</label>
            <div class="input-group">
                <input type="search" name="q" placeholder="Write the place" class="tb-input" autocomplete="off" id="input-search-4">
            </div>
        </div>
        <div class="place text-box-wrapper">
            <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Arrivé:</label>
            <div class="input-group">
                <input type="search" id="input-search-5" name="p" placeholder="ex: aeroport orly" class="tb-input" autocomplete="off">
            </div>
        </div>
        <div class="input-daterange">
            <div class="text-box-wrapper half">
                <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de départ</label>
                <div class="input-group">
                    <input type="date" value="MM/DD/YY" class="tb-input">
                </div>
            </div>
            <div class="text-box-wrapper half">
                <label class="tb-label"><i class="tb-icon fa fa-calendar input-group-addon"></i> Date de retour</label>
                <div class="input-group">
                    <input type="date" value="MM/DD/YY" class="tb-input">
                </div>
            </div>
        </div>

        <button class="btn-slide style_btn2">CHERCHER</button>
       <!-- <div class="btn-slide style_btn2" style="">
            <h5>CHERCHER</h5>
            <a href="hotel-details.html"><span class="icons left_ico">
                                                                                                                                                            <i class="fa fa-long-arrow-right"></i>
                                                                                                                                                        </span></a>
        </div> -->
    </div>
</form>
