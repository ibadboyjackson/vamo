@extends('templates')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@stop
@section('scripts')
@stop
@section('content')
    <!-- menu end here -->
    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Hotel Detailed</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="#">HOME</a></li>
                <li class="active">Hotel Detailed</li>
            </ul>
        </div>
    </div>
    <section id="content" jstcache="0">
        <div class="container" jstcache="0">
            <div class="row" jstcache="0">
                <div id="main" class="col-md-9" jstcache="0">
                    <div class="tab-container style1" id="hotel-main-content" jstcache="0">
                        <ul class="tabs">
                            <li class="active"><a data-toggle="tab" href="hotel-results-details.html#photos-tab" aria-expanded="true">photos</a></li>
                            <li><a data-toggle="tab" href="hotel-results-details.html#map-tab">map</a></li>
                            <li><a data-toggle="tab" href="hotel-results-details.html#steet-view-tab">street view</a></li>
                            <li ><a data-toggle="tab" href="hotel-results-details.html#calendar-tab" aria-expanded="true">calendar</a></li>
                            <li class="pull-right"><a class="button btn-full green-bg white-color" href="hotel-results-details.html#">TRAVEL GUIDE</a></li>
                        </ul>
                        <div class="tab-content" jstcache="0">
                            <div id="photos-tab" class="tab-pane fade active in">
                                <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 3000%; transition-duration: 0.6s; transform: translate3d(-9570px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 870px; float: left; display: block;"><img src="assets/images/shortcodes/gallery-popup/13.jpg" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/1.jpg') }}" alt="" draggable="false"></li>
                                            <li class="" style="width: 870px; float: left; display: block;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/2.jpg') }}" alt="" draggable="false"></li>
                                            <li class="" style="width: 870px; float: left; display: block;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/3.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/4.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/5.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/6.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/7.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/8.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/9.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/10.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class="flex-active-slide"><img src="{{ asset('assets/images/shortcodes/gallery-popup/11.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/12.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class=""><img src="{{ asset('assets/images/shortcodes/gallery-popup/13.jpg') }}" alt="" draggable="false"></li>
                                            <li style="width: 870px; float: left; display: block;" class="clone" aria-hidden="true"><img src="{{ asset('images/shortcodes/gallery-popup/1.jpg') }}" alt="" draggable="false"></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li><li><a class="">5</a></li><li><a class="">6</a></li><li><a class="">7</a></li><li><a class="">8</a></li><li><a class="">9</a></li><li><a class="">10</a></li><li><a class="flex-active">11</a></li><li><a class="">12</a></li><li><a class="">13</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                                <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2600%; transition-duration: 0.6s; transform: translate3d(-250px, 0px, 0px);">
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/1.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/2.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/3.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/4.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/5.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/6.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/7.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/8.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/9.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/10.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li style="width: 70px; float: left; display: block; height: 70px; position: relative;" class="flex-active-slide"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/11.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/12.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                            <li class="" style="width: 70px; float: left; display: block; height: 70px; position: relative;"><img src="{{ asset('assets/images/shortcodes/gallery-popup/thumbnail/13.jpg') }}" alt="" draggable="false" style="position: absolute; top: 50%; margin-top: -35px; left: 50%; margin-left: -35px;"></li>
                                        </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                            </div>
                            <div id="map-tab" class="tab-pane fade" style="height: 522px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -195, -36);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; transition-duration: 0ms; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" src="about:blank" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.117647); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; -webkit-user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.870588); font-size: 14px;">Impossible de charger Google&nbsp;Maps correctement sur cette page.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.541176); font-size: 12px;">Ce site Web vous appartient&nbsp;?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.117647); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; -webkit-user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.870588); font-size: 14px;">Impossible de charger Google&nbsp;Maps correctement sur cette page.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.541176); font-size: 12px;">Ce site Web vous appartient&nbsp;?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                            <div id="steet-view-tab" class="tab-pane fade" style="height: 500px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;" jstcache="0">

                                <div style="position: absolute; z-index: 1; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style" jstcache="0"><div tabindex="-1" jstcache="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; background-color: rgb(229, 227, 223);"><div jstcache="0" style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"><div style="position: absolute; pointer-events: none; transform: translate(-50%, -50%); z-index: 1000; top: 50%; color: white; font-size: 20px; left: 50%; background-color: rgba(0, 0, 0, 0.298039); padding: 5px; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; text-align: center;">For development purposes only</div><div style="position: absolute; pointer-events: none; transform: translate(-50%, -50%); z-index: 1000; top: 50%; color: white; font-size: 20px; left: 50%; background-color: rgba(0, 0, 0, 0.298039); padding: 5px; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; text-align: center;">For development purposes only</div><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div><div class="gmnoprint" style="position: absolute; left: 0px; top: 0px; z-index: 2; font-family: Roboto, Arial, sans-serif;"><svg version="1.1" width="0px" height="0px" viewBox="0 0 0 0" style="position: absolute; left: 0px; top: 0px; pointer-events: none;"></svg></div><div jstcache="0" style="width: 100%; height: 100%;"><div jstcache="5" aria-label="Street View" tabindex="0" jsaction="click: scene.viewport;dblclick: scene.viewport;mousedown: scene.viewport;mousemove: scene.viewport;mouseup: scene.viewport;mouseover: scene.viewport;mouseout: scene.viewport;touchstart: scene.viewport;touchmove: scene.viewport;touchend: scene.viewport;pointerdown: scene.viewport;pointermove: scene.viewport;pointerup: scene.viewport;pointercancel: scene.viewport;MSPointerDown: scene.viewport;MSPointerMove: scene.viewport;MSPointerUp: scene.viewport;MSPointerCancel: scene.viewport;contextmenu: scene.viewport;keydown: scene.viewport;keyup: scene.viewport;wheel: scene.viewport;mousewheel: scene.viewport;DOMMouseScroll: scene.viewport;" class="widget-scene" style="cursor: auto;"> <canvas width="1" height="1" id="" class="widget-scene-canvas" style="width: 0px; height: 0px; filter: invert(1);"></canvas> <div id="" class="widget-scene-imagery-render" style="width: 0px; height: 0px; display: none;"></div> <div class="widget-scene-effects noprint"></div> </div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps/@48.858853,2.3470053,0a,73.7y,34h,100t/data=!3m4!1e1!3m2!1sAF1QipP6Zu3l9SM45lSC3YzBG5mZiYYrWSH89-necBK3!2e10?source=apiv3" title="Ouvrir cette zone dans Google&nbsp;Maps (dans une nouvelle fenêtre)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Données cartographiques</div><div style="font-size: 13px;">© Jean-Marc Perfetti</div><button draggable="false" title="Fermer" aria-label="Fermer" type="button" class="gm-ui-hover-effect" style="background-image: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; -webkit-user-select: none; top: 0px; right: 0px; width: 37px; height: 37px; background-position: initial initial; background-repeat: initial initial;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(0, 0, 0); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(255, 255, 255); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer;">Données cartographiques</a><span style="display: none;">© Jean-Marc Perfetti</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">© Jean-Marc Perfetti</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(0, 0, 0); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(255, 255, 255); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/fr-FR_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(255, 255, 255);">Conditions d'utilisation</a></div></div><button draggable="false" title="Passer en plein écran" aria-label="Passer en plein écran" type="button" class="gm-control-active gm-fullscreen-control" style="background-image: none; background-color: rgb(34, 34, 34); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; -webkit-user-select: none; border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-right-radius: 2px; border-bottom-left-radius: 2px; height: 40px; width: 40px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px; background-position: initial initial; background-repeat: initial initial;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23B1B1B1%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23E4E4E4%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; -webkit-user-select: none; position: absolute; display: none; bottom: 0px; right: 0px;"><div class="gmnoprint" style="display: none; position: absolute;"><div draggable="false" style="-webkit-user-select: none; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-right-radius: 2px; border-bottom-left-radius: 2px; cursor: pointer; background-color: rgb(34, 34, 34);"><button draggable="false" title="Zoom avant" aria-label="Zoom avant" type="button" class="gm-control-active" style="background-image: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; -webkit-user-select: none; overflow: hidden; background-position: initial initial; background-repeat: initial initial;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23B1B1B1%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23E4E4E4%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(26, 26, 26);"></div><button draggable="false" title="Zoom arrière" aria-label="Zoom arrière" type="button" class="gm-control-active" style="background-image: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; -webkit-user-select: none; overflow: hidden; background-position: initial initial; background-repeat: initial initial;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23B1B1B1%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23E4E4E4%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div><div dir="ltr" controlwidth="48" controlheight="48" style="transform: scale(1); transform-origin: left center; visibility: hidden; position: absolute;" jstcache="0"><div jstcache="18" class="gm-compass"> <img height="48" width="48" jstcache="2" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22100px%22%20height%3D%22100px%22%20viewBox%3D%220%200%20100%20100%22%20%3E%0A%20%20%3Ccircle%20fill%3D%22%23222222%22%20cx%3D%2250%22%20cy%3D%2250%22%20r%3D%2250%22%2F%3E%0A%20%20%3Ccircle%20fill%3D%22%23595959%22%20cx%3D%2250%22%20cy%3D%2250%22%20r%3D%2222%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <button type="button" jstcache="3" jsaction="compass.north" class="gm-control-active gm-compass-needle" style="-webkit-transform: rotate(326deg);-ms-transform: rotate(326deg);-moz-transform: rotate(326deg);transform: rotate(326deg)" jsan="7.gm-control-active,7.gm-compass-needle,4.style,0.type,22.jsaction"> <img draggable="false" height="48" width="20" jstcache="4" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2240px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2040%20100%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23C1272D%22%20points%3D%2210%2C50%2020%2C18%2030%2C50%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23D1D1D1%22%20points%3D%2230%2C50%2020%2C82%2010%2C50%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="20" jstcache="5" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2240px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2040%20100%22%3E%0A%20%20%3Cimage%20overflow%3D%22visible%22%20opacity%3D%220.75%22%20width%3D%2265%22%20height%3D%22109%22%20xlink%3Ahref%3D%22data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAEEAAABtCAYAAAD%2BmQwIAAAACXBIWXMAAAsSAAALEgHS3X78AAAA%0AGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAB4dJREFUeNrsnItu4zoMRPVK%2F%2F97%0A17Z0b4B4wXI5JPWwi11YgJG2SZPoaDikJNshPO1pT3va0572NKHFuz6otdbzeS3G%2BG9A6Oz4jwGJ%0AP9B56zPb3TDiTZ33%2FK05gSyHES8GEJXPsiA07bmVIOJFAKSfRyEgGMtAxAsBRAVCdPhBMx6XgYg3%0AAIiGIoKhAPp4CYiyECICEAEMDwRklpE8F%2F8fjCkQZVIFwRj595GcikAj34BffAOhpNZLleAZeQ2E%0ABEECUBXF%2FO78e1BG1VAmVWABSAKEaECQFIBgUBDDaigLvSAIAJIAIgkq4p3lKqif%2F6taRhlVQ1mg%0AggAUgI7zeQ1CJaMbAIjGPn9YDWWBCiwA%2BXMk9jwKh0oO%2FpoKjPU3gBE1lAUqCMroZwYhC%2F4gGeH7%0AOJR0WpXs0q2GslgFEQAoDAQNCdqx9un82clDMUPY2V41lEUqsAAUQRVRiPkz7g%2FheZ41JBBD3lAu%0A9oLCDgohAQg7eL4pIKy1iHkIrDoMDhhZgPAif9MgpA%2BIaNQPDYx6t0GWThXEzoxAAbzI7wjCITxH%0ADTORNIkKr26DnC2bLRVkAoCCyEJHTwi70KnKlCKBuG7uoBhiECZKWVHCF4OQAQQJTgUgkEl2hURZ%0AYIjREQpf5JGHRCCp0QuhGmHRFRJlQShofkDD4ItByGwED5IZpFA4Pv9zgILr8vWE2OEFUlagEF4C%0AhLOjmamDAjgEEJo3uEOidC6cRKNUzooSaFi8BE%2FgoUABlI9KsjAZi7MhUToU0FMuF0ENXywksuAJ%0AmXxpWjwVBkJSw23La976QDNGbo68RpBSJgdhqaErJIozNUZlzpCMKvElKOEFlKBB2IX5RwJq6AqJ%0AckEoaMbI6wWuhMh%2Bf3d8AxMwzRMunUpbKvAYowWBq%2BBFQPTAmDNGEAre5TMtJF6saNIg7KzzXgBi%0ASGi%2BUAZ2pnpDoTA%2F%2BFIgBEEF0nQcDUBVQgIqokxkBs%2FskYKQJlKJFEs7M8ldmHQhY4wzFeRMikyG%0AL1ggzo7xNcMqpEVpUSYrALp8oQz4wUidUJQpNYVwquA0wxfwgwyW8od8oXT6AYKTwcJqUYyShwM3%0AxQLeayZVioooC%2F0ggUWVAo4XM8bA5goFAEjK7tbtnqCtJXhAZBYOHEJ2KCCBlet4FYSoFEvRqBlQ%0AMZWYTK2lek8IdBdNZXD0PaGRjYoyCxD4TDE5j2jMcVRzLI6Oj9YLCaw78jQXWGbIYB%2Bzp%2FPRWBNt%0AEIKyv%2BDZfUL1QzKUcjbP6HtU6aoSNSVYK8qhIywieER5vQKviWBHG50CdHl2QBsyHpUk8LfgHN2o%0AbAZNtRSuadqXj05lhYmR7oKTLgLQW4X2Km2JAq6EYJ2E2Rx%2FQ%2B8ThPdE36Hd4QnWlwxKRy0Qnue7%0AO%2BtVQnOQ9X75Ch6l10in6%2FCfLUjDUL5BcGxeSpKUOlCNfcTZQwPiGVRXODTF1JoxonTniP9Mt9Ok%0AcxMO8P8SgDoYJkNT6eY8pC98KAc9v0h7LQKiwYAm6V1U6Q0FS7oWBLquSDdbDkEdkmJQZkHZZjo7%0AWGFwKJ2hO0mJzBf4uuIuvA8CUp3esCRFWmFwgC%2B%2BgwOtKEmvlYAuBVFAh6MDiCV%2FBGIjoUD3Hs%2Fn%0A6ONuAPCYZD%2BEt3F8ptTNmRW02Kcd39jiahP2HTgsKTwOpy8Eb8qc8YTKwqGC%2BN%2FYlloylLApijgM%0ARahFVe82XA%2BIqvjCJuwpShDO%2F%2F%2F1OTYjNKwCaokxtuC%2FMoWDkGRNt9fpIoqmhM0Iid7qsQ%2BC4QvB%0AoQQJBD9FB0H4JQCQVIDCAs0kl9UJSBGH4gcoFKoQDpsAYhv0hG%2BdHzpdxxESVnWIVGBB%2BOUMh2O2%0ASDIhkJAIbAMDwdAAoDNY%2Be8bMUcJxuGYWHXPJr0TKM9p91XIDOXzmBmE%2BnmOn8e4KwBQ0TScGq9I%0AkdUAwU%2FUpFe38BO1aFggAEtCwQOBq8AbEjvZUtvYfgHfaeJK2O4MBRMCS5VRmUkiJWRBBfwCDg5h%0AV9Lk8lCYWWhFfpAYhMQ6S0NBut5hB75gFUvhynDwhEQN389UlwCga52kiz42wxS1%2BmDpGmNvSHA1%0ApCBf1WZd4XKAWaRUKC0JhRX7Dh4Q0vVMKeDLf3iW8FaKl4YDCgk%2Bhzg3WKWRlkJBuy4SrSl41hW7%0AQsENAYQEMkia98MghKNjVal7rjC72uxRQwz4Ym9uihIEtFi7bGF1GIJTDRxEEPyAhg4H1NgqlZYa%0Arc2XS5TgUYN1D5Qa%2FrxwKwBzraOGeOn9Exxq0ACgq9coUDQX8W7MhnDTnTSQGqz7njTFD7gvWDtb%0ASwxxGIJSPPERDaA%2BqAYEa4dbG%2Flb767DASBl8NdLoeBZ0vfsQt97nyVBDWgEKplrWDebsla0PSdo%0AhDuVwAFYILw3ovOcASOmwpl7r83ehc86t9BzWl4wUq4E5o%2FX%2F8gN6BRvaMbreiBI6lgKYFoJHzXw%0A97nzppTvMJgum3%2Fq9qQ9EDTz%2B%2Fk7cxogPGC8EJaHwCUQFBAWnODs%2BCUAlkNwwPB85t998%2BpOGO63%0A%2BStvY74AyK03tH%2Fa0572tKc97WlPQ%2B0%2FAQYALf6OfNkZY7AAAAAASUVORK5CYII%3D%22%20transform%3D%22matrix(0.9846%200%200%200.9908%20-11.6%20-3.6)%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23FFFFFF%22%20points%3D%2220%2C18%2010%2C50%2020%2C82%2030%2C50%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23C1272D%22%20points%3D%2210%2C50%2020%2C18%2030%2C50%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23D1D1D1%22%20points%3D%2230%2C50%2020%2C82%2010%2C50%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="20" jstcache="6" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2240px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2040%20100%22%3E%0A%20%20%3Cimage%20overflow%3D%22visible%22%20opacity%3D%220.75%22%20width%3D%2265%22%20height%3D%22109%22%20xlink%3Ahref%3D%22data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAAEEAAABtCAYAAAD%2BmQwIAAAACXBIWXMAAAsSAAALEgHS3X78AAAA%0AGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAB4dJREFUeNrsnItu4zoMRPVK%2F%2F97%0A17Z0b4B4wXI5JPWwi11YgJG2SZPoaDikJNshPO1pT3va0572NKHFuz6otdbzeS3G%2BG9A6Oz4jwGJ%0AP9B56zPb3TDiTZ33%2FK05gSyHES8GEJXPsiA07bmVIOJFAKSfRyEgGMtAxAsBRAVCdPhBMx6XgYg3%0AAIiGIoKhAPp4CYiyECICEAEMDwRklpE8F%2F8fjCkQZVIFwRj595GcikAj34BffAOhpNZLleAZeQ2E%0ABEECUBXF%2FO78e1BG1VAmVWABSAKEaECQFIBgUBDDaigLvSAIAJIAIgkq4p3lKqif%2F6taRhlVQ1mg%0AggAUgI7zeQ1CJaMbAIjGPn9YDWWBCiwA%2BXMk9jwKh0oO%2FpoKjPU3gBE1lAUqCMroZwYhC%2F4gGeH7%0AOJR0WpXs0q2GslgFEQAoDAQNCdqx9un82clDMUPY2V41lEUqsAAUQRVRiPkz7g%2FheZ41JBBD3lAu%0A9oLCDgohAQg7eL4pIKy1iHkIrDoMDhhZgPAif9MgpA%2BIaNQPDYx6t0GWThXEzoxAAbzI7wjCITxH%0ADTORNIkKr26DnC2bLRVkAoCCyEJHTwi70KnKlCKBuG7uoBhiECZKWVHCF4OQAQQJTgUgkEl2hURZ%0AYIjREQpf5JGHRCCp0QuhGmHRFRJlQShofkDD4ItByGwED5IZpFA4Pv9zgILr8vWE2OEFUlagEF4C%0AhLOjmamDAjgEEJo3uEOidC6cRKNUzooSaFi8BE%2FgoUABlI9KsjAZi7MhUToU0FMuF0ENXywksuAJ%0AmXxpWjwVBkJSw23La976QDNGbo68RpBSJgdhqaErJIozNUZlzpCMKvElKOEFlKBB2IX5RwJq6AqJ%0AckEoaMbI6wWuhMh%2Bf3d8AxMwzRMunUpbKvAYowWBq%2BBFQPTAmDNGEAre5TMtJF6saNIg7KzzXgBi%0ASGi%2BUAZ2pnpDoTA%2F%2BFIgBEEF0nQcDUBVQgIqokxkBs%2FskYKQJlKJFEs7M8ldmHQhY4wzFeRMikyG%0AL1ggzo7xNcMqpEVpUSYrALp8oQz4wUidUJQpNYVwquA0wxfwgwyW8od8oXT6AYKTwcJqUYyShwM3%0AxQLeayZVioooC%2F0ggUWVAo4XM8bA5goFAEjK7tbtnqCtJXhAZBYOHEJ2KCCBlet4FYSoFEvRqBlQ%0AMZWYTK2lek8IdBdNZXD0PaGRjYoyCxD4TDE5j2jMcVRzLI6Oj9YLCaw78jQXWGbIYB%2Bzp%2FPRWBNt%0AEIKyv%2BDZfUL1QzKUcjbP6HtU6aoSNSVYK8qhIywieER5vQKviWBHG50CdHl2QBsyHpUk8LfgHN2o%0AbAZNtRSuadqXj05lhYmR7oKTLgLQW4X2Km2JAq6EYJ2E2Rx%2FQ%2B8ThPdE36Hd4QnWlwxKRy0Qnue7%0AO%2BtVQnOQ9X75Ch6l10in6%2FCfLUjDUL5BcGxeSpKUOlCNfcTZQwPiGVRXODTF1JoxonTniP9Mt9Ok%0AcxMO8P8SgDoYJkNT6eY8pC98KAc9v0h7LQKiwYAm6V1U6Q0FS7oWBLquSDdbDkEdkmJQZkHZZjo7%0AWGFwKJ2hO0mJzBf4uuIuvA8CUp3esCRFWmFwgC%2B%2BgwOtKEmvlYAuBVFAh6MDiCV%2FBGIjoUD3Hs%2Fn%0A6ONuAPCYZD%2BEt3F8ptTNmRW02Kcd39jiahP2HTgsKTwOpy8Eb8qc8YTKwqGC%2BN%2FYlloylLApijgM%0ARahFVe82XA%2BIqvjCJuwpShDO%2F%2F%2F1OTYjNKwCaokxtuC%2FMoWDkGRNt9fpIoqmhM0Iid7qsQ%2BC4QvB%0AoQQJBD9FB0H4JQCQVIDCAs0kl9UJSBGH4gcoFKoQDpsAYhv0hG%2BdHzpdxxESVnWIVGBB%2BOUMh2O2%0ASDIhkJAIbAMDwdAAoDNY%2Be8bMUcJxuGYWHXPJr0TKM9p91XIDOXzmBmE%2BnmOn8e4KwBQ0TScGq9I%0AkdUAwU%2FUpFe38BO1aFggAEtCwQOBq8AbEjvZUtvYfgHfaeJK2O4MBRMCS5VRmUkiJWRBBfwCDg5h%0AV9Lk8lCYWWhFfpAYhMQ6S0NBut5hB75gFUvhynDwhEQN389UlwCga52kiz42wxS1%2BmDpGmNvSHA1%0ApCBf1WZd4XKAWaRUKC0JhRX7Dh4Q0vVMKeDLf3iW8FaKl4YDCgk%2Bhzg3WKWRlkJBuy4SrSl41hW7%0AQsENAYQEMkia98MghKNjVal7rjC72uxRQwz4Ym9uihIEtFi7bGF1GIJTDRxEEPyAhg4H1NgqlZYa%0Arc2XS5TgUYN1D5Qa%2FrxwKwBzraOGeOn9Exxq0ACgq9coUDQX8W7MhnDTnTSQGqz7njTFD7gvWDtb%0ASwxxGIJSPPERDaA%2BqAYEa4dbG%2Flb767DASBl8NdLoeBZ0vfsQt97nyVBDWgEKplrWDebsla0PSdo%0AhDuVwAFYILw3ovOcASOmwpl7r83ehc86t9BzWl4wUq4E5o%2FX%2F8gN6BRvaMbreiBI6lgKYFoJHzXw%0A97nzppTvMJgum3%2Fq9qQ9EDTz%2B%2Fk7cxogPGC8EJaHwCUQFBAWnODs%2BCUAlkNwwPB85t998%2BpOGO63%0A%2BStvY74AyK03tH%2Fa0572tKc97WlPQ%2B0%2FAQYALf6OfNkZY7AAAAAASUVORK5CYII%3D%22%20transform%3D%22matrix(0.9846%200%200%200.9908%20-11.6%20-3.6)%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23FFFFFF%22%20points%3D%2220%2C18%2010%2C50%2020%2C82%2030%2C50%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23E53935%22%20points%3D%2210%2C50%2020%2C18%2030%2C50%22%2F%3E%0A%20%20%3Cpolygon%20fill%3D%22%23D1D1D1%22%20points%3D%2230%2C50%2020%2C82%2010%2C50%22%2F%3E%0A%3C%2Fsvg%3E%0A"> </button> <button type="button" jsaction="compass.counterclockwise" class="gm-control-active gm-compass-turn"> <img draggable="false" height="48" width="14" jstcache="7" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="14" jstcache="8" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23B1B1B1%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="14" jstcache="9" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23E4E4E4%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> </button> <button type="button" jsaction="compass.clockwise" class="gm-control-active gm-compass-turn gm-compass-turn-opposite"> <img draggable="false" height="48" width="14" jstcache="10" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="14" jstcache="11" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23B1B1B1%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> <img draggable="false" height="48" width="14" jstcache="12" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2230px%22%20height%3D%22100px%22%20viewBox%3D%220%200%2030%20100%22%3E%0A%20%20%3Cpath%20fill%3D%22%23E4E4E4%22%20d%3D%22M24.84%2C69.76L24%2C58l-4.28%2C2.34C18.61%2C57.09%2C18%2C53.62%2C18%2C50c0-6.17%2C1.75-11.93%2C4.78-16.82l-2.5-1.66C16.94%2C36.88%2C15%2C43.21%2C15%2C50c0%2C4.14%2C0.72%2C8.11%2C2.04%2C11.79L13%2C64l7.7%2C5.13L25%2C72L24.84%2C69.76z%22%2F%3E%0A%3C%2Fsvg%3E%0A"> </button> <div> <div class="gm-compass-tooltip-text">Faire pivoter la vue</div> <div class="gm-compass-arrow-right gm-compass-arrow-right-outer"></div> <div class="gm-compass-arrow-right gm-compass-arrow-right-inner"></div> </div> </div></div><div draggable="false" controlwidth="25px" style="-webkit-user-select: none; font-family: Roboto, Arial, sans-serif; font-size: 11px; text-align: center; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; position: absolute;"></div></div><div dir="ltr" jstcache="0" style="z-index: 24601; position: absolute; display: none; left: 0px; top: 0px;"><div jstcache="23" class="gm-iv-container gm-iv-small-container" jsan="t-_EPk2VOG1I0,7.gm-iv-container,7.gm-iv-small-container"> <div jsaction="closeControl.click" class="gm-iv-close"> <div class="gm-iv-back"> <div jstcache="20" class="gm-iv-back-icon-background gm-iv-back-icon" jsan="7.gm-iv-back-icon-background,7.gm-iv-back-icon"> </div> </div> </div> </div></div><div dir="ltr" jstcache="0" style="position: absolute; left: 0px; top: 0px;"><div jstcache="83" class="gm-iv-address" jsan="t-bDow0pNywiw,7.gm-iv-address"> <div class="gm-iv-address-description"> <div jstcache="25" class="" style="display: none;"></div> <div jstcache="26" class="" style="display: none;"></div> <div jstcache="27" class="gm-iv-profile-url" style=""> <a target="_blank" jstcache="28" href="//maps.google.com/maps/contrib/113533282417785809398/photos"> <div jstcache="29" class="gm-iv-profile-link" jsan="7.gm-iv-profile-link">Paris</div> </a> </div> </div> <div jstcache="30" class="gm-iv-address-link"> <a target="_blank" jstcache="31" href="https://www.google.com/maps/@48.858853,2.3470053,0a,73.7y,34h,100t/data=!3m4!1e1!3m2!1sAF1QipP6Zu3l9SM45lSC3YzBG5mZiYYrWSH89-necBK3!2e10?source=apiv3">Afficher dans Google&nbsp;Maps</a> </div> <div jstcache="32" class="gm-iv-address-custom" style="display:none"> <p>Custom Imagery</p> </div> <div jstcache="33" class="gm-iv-vertical-separator" style=""></div> <div jstcache="34" class="gm-iv-marker" style=""> <a target="_blank" jstcache="35" href="https://www.google.com/maps/@48.858853,2.347005299999978,13z?hl=fr-FR&amp;gl=US"> <div class="gm-iv-marker-icon gm-iv-marker-icon-background"></div> </a> </div> <div jstcache="36" class="gm-iv-timeline" style="display:none"> <div class="gm-iv-horizontal-separator"></div> <div jstcache="37" jsaction="timeline.show" class="gm-iv-timeline-wrapper" style="display:none"> <div jstcache="38" class="gm-iv-timeline-icon-wrapper" style="display:none"> <div class="gm-iv-timeline-icon gm-iv-timeline-icon-background"></div> </div> <div jstcache="39" class="gm-iv-timeline-description" style="display:none"> <div jstcache="40" class="gm-iv-timeline-description-details" jsan="7.gm-iv-timeline-description-details"></div> <div class="gm-iv-timeline-description-separator">-</div> <div jstcache="41" class="gm-iv-timeline-description-details" jsan="7.gm-iv-timeline-description-details"></div> </div> </div> <div jstcache="42" class="gm-iv-timeline-description" style="display:none"> <div jstcache="43" class="gm-iv-timeline-description-details" jsan="7.gm-iv-timeline-description-details"></div> <div class="gm-iv-timeline-description-separator">-</div> <div jstcache="44" class="gm-iv-timeline-description-details" jsan="7.gm-iv-timeline-description-details"></div> </div> </div> </div><div style="position: absolute; left: 0px; margin-top: -29px; width: 351px; height: 248px; display: none;"></div></div><div style="position: absolute; background-color: rgb(34, 34, 34); border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-right-radius: 2px; border-bottom-left-radius: 2px; margin-right: 0px; z-index: 1; display: none; bottom: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2240px%22%20height%3D%2240px%22%20viewBox%3D%220%200%2040%2040%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M27.42%2C0H12.58C10.61%2C0%2C9%2C1.61%2C9%2C3.58v32.83C9%2C38.39%2C10.61%2C40%2C12.58%2C40h14.83c1.97%2C0%2C3.58-1.61%2C3.58-3.58%0A%09V3.58C31%2C1.61%2C29.39%2C0%2C27.42%2C0z%20M29%2C32c0%2C0.55-0.45%2C1-1%2C1H12c-0.55%2C0-1-0.45-1-1V8c0-0.55%2C0.45-1%2C1-1h16c0.55%2C0%2C1%2C0.45%2C1%2C1V32z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></div><div draggable="false" style="color: white; font-family: Roboto, Arial, sans-serif; background-color: black; padding: 4px; border: 2px solid white; -webkit-user-select: none; display: none; position: absolute; left: 0px; top: 0px;">Cette image n'est plus disponible.</div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(0, 0, 0); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(255, 255, 255); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Signaler un problème avec des images Street View sur Google" href="https://www.google.com/cbk?cb_client=apiv3&amp;output=report&amp;image_key=!1e10!2sAF1QipP6Zu3l9SM45lSC3YzBG5mZiYYrWSH89-necBK3&amp;cbp=1,34,,0,-10&amp;hl=fr-FR" style="text-decoration: none; color: rgb(255, 255, 255);">Signaler un problème</a></div></div></div></div>
                            <div id="calendar-tab" class="tab-pane fade  in">
                                <label>SELECT MONTH</label>
                                <div class="col-sm-6 col-md-4 no-float no-padding">
                                    <div class="selector">
                                        <select class="full-width" id="select-month">
                                            <option value="2014-6">June 2014</option>
                                            <option value="2014-7">July 2014</option>
                                            <option value="2014-8">August 2014</option>
                                            <option value="2014-9">September 2014</option>
                                            <option value="2014-10">October 2014</option>
                                            <option value="2014-11">November 2014</option>
                                            <option value="2014-12">December 2014</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="calendar"><table><thead><tr><td>sunday</td><td>monday</td><td>tuesday</td><td>wednesday</td><td>thursday</td><td>friday</td><td>saturday</td></tr></thead><tbody><tr><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class="prev-month"></td><td class=" date-passed"><span>1</span></td><td class=" date-passed"><span>2</span></td></tr><tr><td class=" date-passed"><span>3</span></td><td class=" date-passed"><span>4</span></td><td class=" date-passed"><span>5</span></td><td class=" date-passed"><span>6</span></td><td class=" date-passed"><span>7</span></td><td class=" date-passed"><span>8</span></td><td class=" date-passed"><span>9</span></td></tr><tr><td class=" date-passed"><span>10</span></td><td class=" date-passed"><span>11</span></td><td class=" date-passed"><span>12</span></td><td class=" date-passed"><span>13</span></td><td class=" date-passed"><span>14</span></td><td class=" date-passed"><span>15</span></td><td class=" date-passed"><span>16</span></td></tr><tr><td class=" date-passed"><span>17</span></td><td class=" date-passed"><span>18</span></td><td class=" date-passed"><span>19</span></td><td class=" date-passed"><span>20</span></td><td class=" date-passed"><span>21</span></td><td class=" date-passed"><span>22</span></td><td class=" date-passed"><span>23</span></td></tr><tr><td class=" date-passed"><span>24</span></td><td class=" date-passed"><span>25</span></td><td class=" today unavailable"><span>26</span></td><td class=" unavailable"><span>27</span></td><td class=" unavailable"><span>28</span></td><td class=" unavailable"><span>29</span></td><td class=" unavailable"><span>30</span></td></tr><tr><td class=" unavailable"><span>31</span></td></tr></tbody></table></div>
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

                    <div id="hotel-features" class="tab-container">
                        <ul class="tabs">
                            <li class="active"><a href="#hotel-description" data-toggle="tab">Description</a></li>
                            <li><a href="#hotel-availability" data-toggle="tab">Disponibilité</a></li>
                            <li><a href="#hotel-amenities" data-toggle="tab">Équipements</a></li>
                            <li><a href="#hotel-reviews" data-toggle="tab">Avis</a></li>
                            <li><a href="#hotel-faqs" data-toggle="tab">FAQs</a></li>
                            <li><a href="#hotel-things-todo" data-toggle="tab">Choses à faire</a></li>
                            <li><a href="#hotel-write-review" data-toggle="tab">Écrire un avis</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="hotel-description">
                                <div class="intro table-wrapper full-width hidden-table-sms">
                                    <div class="col-sm-5 col-lg-4 features table-cell">
                                        <ul>
                                            <li><label>Type d'hôtel:</label>4 star</li>
                                            <li><label>Personnes suppl. :</label>No Charge</li>
                                            <li><label>Séjour minimum:</label>2 nights</li>
                                            <li><label>Dépôt de garantie:</label>$279</li>
                                            <li><label>Pays:</label>France</li>
                                            <li><label>Ville:</label>Paris</li>
                                            <li><label>Quartier:</label>République</li>
                                            <li><label>Annulation:</label>strict</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-7 col-lg-8 table-cell testimonials">
                                        <div class="testimonial style1">

                                            <div class="testimonial-viewport" style="overflow: hidden; position: relative;"><ul class="slides " style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                    <li class="testimonial-active-slide" style="width: 473px; float: left; display: block; height: 173px;">
                                                        <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                        <div class="author clearfix">
                                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/author1.png') }}" alt="" width="74" height="74" draggable="false"></a>
                                                            <h5 class="name">Jessica Brown<small>guest</small></h5>
                                                        </div>
                                                    </li>
                                                    <li style="width: 473px; float: left; display: block; height: 173px;">
                                                        <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                        <div class="author clearfix">
                                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/author2.png') }}" alt="" width="74" height="74" draggable="false"></a>
                                                            <h5 class="name">Lisa Kimberly<small>guest</small></h5>
                                                        </div>
                                                    </li>
                                                    <li style="width: 473px; float: left; display: block; height: 173px;">
                                                        <p class="description">Always enjoyed my stay with Hilton Hotel and Resorts, top class room service and rooms have great outside views and luxury assessories. Thanks for great experience.</p>
                                                        <div class="author clearfix">
                                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/author1.png') }}" alt="" width="74" height="74" draggable="false"></a>
                                                            <h5 class="name">Jessica Brown<small>guest</small></h5>
                                                        </div>
                                                    </li>
                                                </ul></div><ol class="testimonial-control-nav testimonial-control-paging"><li><a class="testimonial-active">1</a></li><li><a>2</a></li><li><a>3</a></li></ol></div>
                                    </div>
                                </div>
                                <div class="long-description">
                                    <h2>About Hilton Hotel and Resorts</h2>
                                    <p>
                                        Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
                                        <br><br>
                                        Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
                                        <br><br>
                                        Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hotel-availability">
                                <form>
                                    <div class="update-search clearfix">
                                        <div class="col-md-5">
                                            <h4 class="title">Quand</h4>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label>ENREGISTREMENT</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_from" placeholder="mm/dd/yy" class="input-text full-width">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <label>DÉPART</label>
                                                    <div class="datepicker-wrap">
                                                        <input type="text" name="date_to" placeholder="mm/dd/yy" class="input-text full-width">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4 class="title">Qui</h4>
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <label>Chambres</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Adultes</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Enfants</label>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <h4 class="visible-md visible-lg">&nbsp;</h4>
                                            <label class="visible-md visible-lg">&nbsp;</label>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button data-animation-duration="1" data-animation-type="bounce" class="full-width icon-check animated" type="submit">RECHERCHER MAINTENANT </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <h2>Chambres disponibles </h2>
                                <div class="room-list listing-style3 hotel">
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="161" src="assets/images/hotels/room/1.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Chambre Familiale Standard </h4>
                                                        <dl class="description">
                                                            <dt>Max invités:</dt>
                                                            <dd>3 personnes</dd>
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
                                                    <a href="hotel-booking.html" title="" class="button btn-full full-width text-center">RESERVEZ MAINTENANT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="161" src="assets/images/hotels/room/2.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Chambre Double Supérieure </h4>
                                                        <dl class="description">
                                                            <dt>Max invités :</dt>
                                                            <dd>5 personnes</dd>
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
                                                    <span class="price"><small>PAR/NIGHT</small>$241</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="hotel-booking.html" title="" class="button btn-full full-width text-center">RESERVEZ MAINTENANT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="161" src="assets/images/hotels/room/3.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Chambre Simple Deluxe </h4>
                                                        <dl class="description">
                                                            <dt>Max Invités:</dt>
                                                            <dd>4 personnes</dd>
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
                                                    <span class="price"><small>PAR/NIGHT</small>$137</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="hotel-booking.html" title="" class="button btn-full full-width text-center">RESERVEZ MAINTENANT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="col-sm-4 col-md-3">
                                            <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="230" height="161" src="assets/images/hotels/room/4.png" alt=""></a>
                                        </figure>
                                        <div class="details col-xs-12 col-sm-8 col-md-9">
                                            <div>
                                                <div>
                                                    <div class="box-title">
                                                        <h4 class="title">Chambre individuelle </h4>
                                                        <dl class="description">
                                                            <dt>Max Invités:</dt>
                                                            <dd>2 personnes</dd>
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
                                                    <span class="price"><small>PAR/NIGHT</small>$55</span>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                                <div class="action-section">
                                                    <a href="hotel-booking.html" title="" class="button btn-full full-width text-center">RESERVEZ MAINTENANT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <a href="#" class="load-more button full-width btn-large fourty-space">CHARGER PLUS</a>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="hotel-amenities">
                                <h2>Équipements de cette hôtel</h2>

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
                            <div class="tab-pane fade" id="hotel-reviews">
                                <div class="intro table-wrapper full-width hidden-table-sms">
                                    <div class="rating table-cell col-sm-4">
                                        <span class="score">3.9/5.0</span>
                                        <div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div>
                                        <a href="#" class="goto-writereview-pane button green btn-small full-width">Écrivez un avis</a>
                                    </div>
                                    <div class="table-cell col-sm-8">
                                        <div class="detailed-rating">
                                            <ul class="clearfix">
                                                <li class="col-md-6"><div class="each-rating"><label>service</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Value</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Sleep Quality</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>Cleanliness</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>location</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>rooms</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>swimming pool</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                                <li class="col-md-6"><div class="each-rating"><label>fitness facility</label><div class="five-stars-container"><div class="five-stars" style="width: 78%;"></div></div></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="guest-reviews">
                                    <h2>Guest Reviews</h2>
                                    <div class="guest-review table-wrapper">
                                        <div class="col-xs-3 col-md-2 author table-cell">
                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/team/jessica.png') }}" alt="" width="270" height="263"></a>
                                            <p class="name">Jessica Brown</p>
                                            <p class="date">NOV, 12, 2013</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">Nous avons passé un excellent séjour pendant notre séjour et les hôtels Hilton! </h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><div class="five-stars" style="width: 80%;"></div></div>
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
                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/team/david.png') }}" alt="" width="270" height="263"></a>
                                            <p class="name">David Jhon</p>
                                            <p class="date">NOV, 12, 2013</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">J'aime la rapidité de leurs services. </h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><div class="five-stars" style="width: 64%;"></div></div>
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
                                            <a href="#"><img src="{{ asset('assets/images/shortcodes/team/kyle.png') }}" alt="" width="270" height="263"></a>
                                            <p class="name">Kyle Martin</p>
                                            <p class="date">NOV, 12, 2013</p>
                                        </div>
                                        <div class="col-xs-9 col-md-10 table-cell comment-container">
                                            <div class="comment-header clearfix">
                                                <h4 class="comment-title">Quand vous regardez dehors depuis les fenêtres, son souffle .</h4>
                                                <div class="review-score">
                                                    <div class="five-stars-container"><div class="five-stars" style="width: 76%;"></div></div>
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
                            <div class="tab-pane fade" id="hotel-faqs">
                                <h2>Foire Aux Questions</h2>
                                <div class="topics">
                                    <ul class="check-square clearfix">
                                        <li class="col-sm-6 col-md-4"><a href="#">address &amp; map</a></li>
                                        <li class="col-sm-6 col-md-4"><a href="#">messaging</a></li>
                                        <li class="col-sm-6 col-md-4"><a href="#">refunds</a></li>
                                        <li class="col-sm-6 col-md-4"><a href="#">pricing</a></li>
                                        <li class="col-sm-6 col-md-4 active"><a href="#">reservation requests</a></li>
                                        <li class="col-sm-6 col-md-4"><a href="#">your reservation</a></li>
                                    </ul>
                                </div>
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <div class="toggle-container">
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question1" data-toggle="collapse">How do I know a reservation is accepted or confirmed?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question1">
                                            <div class="panel-content">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question2" data-toggle="collapse">What do I do after I receive a reservation request from a guest?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question2">
                                            <div class="panel-content">
                                                <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class="skin-color">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class="skin-color">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="" href="#question3" data-toggle="collapse">How much time do I have to respond to a reservation request?</a>
                                        </h4>
                                        <div class="panel-collapse collapse in" id="question3">
                                            <div class="panel-content">
                                                <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class="skin-color">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class="skin-color">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question4" data-toggle="collapse">Why can’t I call or email hotel or host before booking?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question4">
                                            <div class="panel-content">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question5" data-toggle="collapse">Am I allowed to decline reservation requests?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question5">
                                            <div class="panel-content">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question6" data-toggle="collapse">What happens if I let a reservation request expire?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question6">
                                            <div class="panel-content">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel style1 arrow-right">
                                        <h4 class="panel-title">
                                            <a class="collapsed" href="#question7" data-toggle="collapse">How do I set reservation requirements?</a>
                                        </h4>
                                        <div class="panel-collapse collapse" id="question7">
                                            <div class="panel-content">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="hotel-things-todo">
                                <h2>Choses à faire</h2>
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <div class="activities image-box style2 innerstyle">
                                    <article class="box">
                                        <figure>
                                            <a title="" href="#"><img width="250" height="161" alt="" src="{{ asset('assets/images/hotels/activities/1.png') }}"></a>
                                        </figure>
                                        <div class="details">
                                            <div class="details-header">
                                                <div class="review-score">
                                                    <div class="five-stars-container"><div style="width: 60%;" class="five-stars"></div></div>
                                                    <span class="reviews">25 reviews</span>
                                                </div>
                                                <h4 class="box-title">Central Park Walking Tour</h4>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                            <a class="button" title="" href="#">MORE</a>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure>
                                            <a title="" href="#"><img width="250" height="161" alt="" src="{{ asset('assets/assets/images/hotels/activities/2.png') }}"></a>
                                        </figure>
                                        <div class="details">
                                            <div class="details-header">
                                                <div class="review-score">
                                                    <div class="five-stars-container"><div style="width: 60%;" class="five-stars"></div></div>
                                                    <span class="reviews">25 reviews</span>
                                                </div>
                                                <h4 class="box-title">Museum of Modern Art</h4>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                            <a class="button" title="" href="#">MORE</a>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure>
                                            <a title="" href="#"><img width="250" height="161" alt="" src="{{ asset('assets/assets/images/hotels/activities/3.png') }}"></a>
                                        </figure>
                                        <div class="details">
                                            <div class="details-header">
                                                <div class="review-score">
                                                    <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                    <span class="reviews">25 reviews</span>
                                                </div>
                                                <h4 class="box-title">Crazy Horse Cabaret Show</h4>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat wisi enim don't look even slightly believable.</p>
                                            <a class="button" title="" href="#">MORE</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hotel-write-review">
                                <div class="main-rating table-wrapper full-width hidden-table-sms intro">
                                    <article class="image-box box hotel listing-style1 photo table-cell col-sm-4">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="270" height="160" alt="" src="{{ asset('assets/images/destinations03.jpg') }}"></a>
                                        </figure>
                                        <div class="details">
                                            <h4 class="box-title">Hilton Hotel and Resorts<small><i class="fa fa-map-marker-alt"></i> Paris, france</small></h4>
                                            <div class="feedback">
                                                <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="review">270 AVIS</span>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="table-cell col-sm-8">
                                        <div class="overall-rating">
                                            <h4>Votre note globale de cette hôtel </h4>
                                            <div class="star-rating clearfix">
                                                <div class="five-stars-container"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i></div>
                                                <span class="status">VERY GOOD</span>
                                            </div>
                                            <div class="detailed-rating">
                                                <ul class="clearfix">
                                                    <li class="col-md-6"><div class="each-rating"><label>service</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="3" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 60%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Value</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Sleep Quality</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>Cleanliness</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>location</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>rooms</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>swimming pool</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i> <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                    <li class="col-md-6"><div class="each-rating"><label>fitness facility</label><div class="five-stars-container editable-rating ui-slider ui-slider-horizontal ui-widget ui-corner-all" data-original-stars="4" aria-disabled="false"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 80%;"></a></div></div></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="review-form">
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">Title of your review</h4>
                                        <input type="text" name="review-title" class="input-text full-width" value="" placeholder="enter a review title">
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Your review</h4>
                                        <textarea class="input-text full-width" placeholder="enter your review (minimum 200 characters)" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">What sort of Trip was this?</h4>
                                        <ul class="sort-trip clearfix">
                                            <li><a href="#"><i class="soap-icon-businessbag circle"></i></a><span>Business</span></li>
                                            <li><a href="#"><i class="soap-icon-couples circle"></i></a><span>Couples</span></li>
                                            <li><a href="#"><i class="soap-icon-family circle"></i></a><span>Family</span></li>
                                            <li><a href="#"><i class="soap-icon-friends circle"></i></a><span>Friends</span></li>
                                            <li><a href="#"><i class="soap-icon-user circle"></i></a><span>Solo</span></li>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">When did you travel?</h4>
                                        <div class="selector">
                                            <select class="full-width">
                                                <option value="2014-6">June 2014</option>
                                                <option value="2014-7">July 2014</option>
                                                <option value="2014-8">August 2014</option>
                                                <option value="2014-9">September 2014</option>
                                                <option value="2014-10">October 2014</option>
                                                <option value="2014-11">November 2014</option>
                                                <option value="2014-12">December 2014</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Add a tip to help travelers choose a good room</h4>
                                        <textarea class="input-text full-width" rows="3" placeholder="write something here"></textarea>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding">
                                        <h4 class="title">Do you have photos to share? <small>(Optional)</small> </h4>
                                        <div class="fileinput full-width">
                                            <input type="file" class="input-text" data-placeholder="select image/s">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4 class="title">Share with friends <small>(Optional)</small></h4>
                                        <p>Share your review with your friends on different social media networks.</p>
                                        <ul class="social-icons icon-circle clearfix">
                                            <li class="twitter"><a title="Twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                            <li class="facebook"><a title="Facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                            <li class="googleplus"><a title="GooglePlus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                            <li class="pinterest"><a title="Pinterest" href="#" data-toggle="tooltip"><i class="soap-icon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="form-group col-md-5 no-float no-padding no-margin">
                                        <button type="submit" class="btn-large full-width">SUBMIT REVIEW</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <article class="detailed-logo">
                        <figure>
                            <img width="114" height="85" src="{{ asset('assets/images/hotels/logo/1.png') }}" alt="">
                        </figure>
                        <div class="details">
                            <h2 class="box-title">Hilton Hotel and Resorts<small><i class="fa fa-map-marker-alt green-color"></i><span class="fourty-space">Bastille, Paris france</span></small></h2>
                            <span class="price clearfix">
                                        <small class="pull-left">Par pers. / Par Nuit</small>
                                        <span class="pull-right">$620</span>
                                    </span>
                            <div class="feedback clearfix">
                                <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star" style="color:yellow"></i><i class="fa fa-star"></i> </div>
                                <span class="review pull-right">270 reviews</span>
                            </div>
                            <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                            <a class="button green full-width uppercase btn-full" href="{{ route('recherche.hotel.select') }}">Reservez</a>
                        </div>
                    </article>
                    <div class="travelo-box contact-box">
                        <h4>Need Travelo Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="fa fa-phone"></i> 1-800-123-HELLO</span>
                            <br>
                            <a class="contact-email" href="#">help@travelo.com</a>
                        </address>
                    </div>
                    <div class="travelo-box">
                        <h4>Similar Listings</h4>
                        <div class="image-box style14">
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="{{ asset('assets/images/shortcodes/buttons-sample1.png') }}" alt=""></a>
                                </figure>
                                <div class="details">
                                    <h5 class="box-title"><a href="#">Plaza Tour Eiffel</a></h5>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$170</span>Par pers. / Par Nuit
                                    </label>
                                </div>
                            </article>
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="{{ asset('assets/images/shortcodes/buttons-sample2.png') }}" alt=""></a>
                                </figure>
                                <div class="details">
                                    <h5 class="box-title"><a href="#">Sultan Gardens</a></h5>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$620</span>Par pers. / Par Nuitt
                                    </label>
                                </div>
                            </article>
                            <article class="box">
                                <figure>
                                    <a href="#"><img src="{{ asset('assets/images/shortcodes/buttons-sample3.png') }}" alt=""></a>
                                </figure>
                                <div class="details">
                                    <h5 class="box-title"><a href="#">Park Central</a></h5>
                                    <label class="price-wrapper">
                                        <span class="price-per-unit">$322</span>Par pers. / Par Nuit
                                    </label>
                                </div>
                            </article>
                        </div>
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
