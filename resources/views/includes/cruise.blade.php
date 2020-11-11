<form class="content-widget typeahead" role="search" method="post" action="{{ route('recherche') }}">
    @csrf
<div class="text-input small-margin-top">
        <div class="place text-box-wrapper mb-5">
            <label class="tb-label"><i class="tb-icon fa fa-map-marker input-group-addon"></i>Départ:</label>
            <div class="input-group">
                <input type="search" id="input-search-8" name="q" placeholder="ex: casablanca" class="tb-input" autocomplete="off">
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
    </div>
</form>
