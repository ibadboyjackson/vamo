<form class="content-widget typeahead" role="search" method="post" action="{{ route('recherche.hotel') }}">
    @csrf
    <div class="text-input small-margin-top">

        <div class="place text-box-wrapper">
            <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Pays ou Ville:</label>
            <div class="input-group">
                <input type="search" name="q" placeholder="Write the place" id="input-search-3" class="tb-input" autocomplete="off">
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
        <div class="count adult-count text-box-wrapper" style=" left: 100px; position: relative;">
            <label class="tb-label"><i class="tb-icon fa fa-user input-group-addon"></i>Adulte</label>
            <div class="select-wrapper">
                <!--i.fa.fa-chevron-down-->
                <select class="form-control custom-select selectbox">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
            </div>
        </div>
        <div class="count child-count text-box-wrapper" style=" position: relative; left: 100px;">
            <label class="tb-label" style="">"<i class="tb-icon fa fa-child input-group-addon"></i>Bébé</label>
            <div class="select-wrapper">
                <!--i.fa.fa-chevron-down-->
                <select class="form-control custom-select selectbox">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
            </div>
        </div>
        <button class="btn-slide style_btn2">CHERCHER</button>
        <!-- <div class="btn-slide style_btn2" style="">
            <a href="hotel-details.html">
                <span class="icons left_ico">
                    <i class="fa fa-long-arrow-right"></i>
                </span>
            </a>
        </div> -->
    </div>
</form>
