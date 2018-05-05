<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Tìm xe giá tốt");


?>


        <div>
        <div id="googlemaps"></div>
        <div id="form_input">


            
            <form id="frmDatXe" action="/app.book/app/book/" method="GET">
            <div class="row"> <input type="hidden" id="depart_pick_pos" name="depart_pick_pos" />
                <input type="hidden" id="depart_drop_pos" name="depart_drop_pos" />
                <input type="hidden" id="book_type" name="book_type" />
                <div class="col-md-12 col pick-group padding_top">
                    <div class="input-group append_pick_address_here"> <span class="input-group-addon"><i class="fa fa-map-marker mpick" style="color: #3c8dbc" aria-hidden="true"></i> </span> <select name="data[pick_address_raw]" id="data_pick_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đ&oacute;n, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputGo" name="depart_pick" placeholder="Điểm đón" /><span onclick="$('#searchInputGo').val('')" id="coner_right_mpick" class="coner-right-container" style="position:relative;margin-left: -63px;background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-remove my-location" style="font-size: 16px;color:#F92E2A"></i><span class="ui-corner-right reset_selected hide">&times;</span></span> <span onclick="getPositionAirplane('go')" id="coner_right_mpick" class="coner-right-container" style="position:relative;margin-left: -10px; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-plane my-location" style="font-size: 15px;color:#3c8dbc "></i><span class="ui-corner-right reset_selected hide">&times;</span></span> </span></div>
                </div>
                <div class="col-md-12 col drop-group padding_top homepage-input-search-container">
                    <div class="input-group append_drop_address_here"> <span class="input-group-addon"><i class="fa fa-map-marker mdrop" aria-hidden="true"></i></span> <select name="" id="data_drop_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputTo" name="depart_drop" placeholder="Điểm đến" /><span onclick="$('#searchInputTo').val('')" id="coner_right_mpick" class="coner-right-container" style="position:relative;margin-left: -63px;background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-remove my-location" style="font-size: 16px;color:#F92E2A"></i><span class="ui-corner-right reset_selected hide">&times;</span></span> <span onclick="getPositionAirplane('to')" id="coner_right_mpick" class="coner-right-container" style="position:relative;margin-left: -10px; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-plane my-location" style="font-size: 15px;color:#3c8dbc "></i><span class="ui-corner-right reset_selected hide">&times;</span></span> </span></div>
                </div>
                <div class="col-md-12 col drop-group padding_top homepage-input-search-container">
                    <div class="input-group append_drop_address_here"> <span class="input-group-addon"><i class="fa fa-calendar mdrop" style="font-size: 9px" aria-hidden="true"></i></span> <select name="" id="data_drop_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" readonly title="" class="datepicker custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title=""    value="<?=date("d/m/Y H:i")?>" placeholder="Thời gian đón" name="depart_time" /></span></div>

                </div>
                <div class="col-md-12 col drop-group padding_top">
                    <button type="submit" class="btn btn_blue" id="show_cost"><i class="fa fa-search"></i> TÌM XE</button>

                </div>
            </div>
            </form>
        </div>

        <script type="text/javascript">
            function searchXe() {
                jQuery('#btnSearch').click();
            }
            // The latitude and longitude of your business / place
            var position = [21.032894, 105.783288];

            function showGoogleMaps() {
                initMap()
                var latLng = new google.maps.LatLng(position[0], position[1]);

                var mapOptions = {
                    zoom: 16, // initialize zoom level - the max value is 21
                    streetViewControl: false, // hide the yellow Street View pegman
                    scaleControl: true, // allow users to zoom the Google Map
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: latLng
                };

                map = new google.maps.Map(document.getElementById('googlemaps'),
                    mapOptions);

                // Show the default red marker at the location
                marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    draggable: false,
                    animation: google.maps.Animation.DROP
                });
            }

            function initMap() {
                var inputGo = document.getElementById('searchInputGo');
                var inputTo = document.getElementById('searchInputTo');
                var depart_pick_pos = document.getElementById('depart_pick_pos');
                var depart_drop_pos = document.getElementById('depart_drop_pos');


                var autocompleteGo = new google.maps.places.Autocomplete(inputGo);
                var autocompleteTo = new google.maps.places.Autocomplete(inputTo);

                google.maps.event.addListener(autocompleteGo, 'place_changed', function() {
                    var place = autocompleteGo.getPlace();
                    depart_pick_pos.value = place.geometry.location.lat()+","+place.geometry.location.lng();
                    for (var i = 0; i < place.types.length; i++) {
                        if(place.types[i]=='airport'){
                            $('#book_type').val('airport_down');
                        }
                    }
                });
                google.maps.event.addListener(autocompleteTo, 'place_changed', function() {
                    var place = autocompleteTo.getPlace();
                    depart_drop_pos.value = place.geometry.location.lat()+","+place.geometry.location.lng();
                    for (var i = 0; i < place.types.length; i++) {
                        if(place.types[i]=='airport'){
                            $('#book_type').val('airport_up');
                        }
                    }
                });
            }
            google.maps.event.addDomListener(window, 'load', showGoogleMaps);
            function getPositionAirplane(type) {
                $.ajax({
                    url: "https://maps.googleapis.com/maps/api/geocode/json",
                    type: "GET",
                    data: {
                        sensor: true,
                        latlng: '<?=LATLNG_NOI_BAI?>',
                        key: 'AIzaSyBDe5fHSzXb_tgo_2l5Y8kO2OY1537-Tuc'
                    },
                    success: function(data) {
                        if(type=='go') {
                            $('#searchInputGo').val(data['results'][0]['formatted_address']);
                            $('#depart_pick_pos').val('<?=LATLNG_NOI_BAI?>');
                            $('#book_type').val('airport_down');
                        }else if(type=='to'){
                            $('#searchInputTo').val(data['results'][0]['formatted_address']);
                            $('#depart_drop_pos').val('<?=LATLNG_NOI_BAI?>');
                            $('#book_type').val('airport_up');
                        }

                    }
                });

            }

        </script>

    </div>

<style>

    #googlemaps {
        height: 100%;
        width: 100%;
        position:absolute;
        top: 0;
        left: 0;
        z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
    }

    #form_input {
        position: relative;
        z-index: 1; /* The z-index should be higher than Google Maps */

    }
</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>