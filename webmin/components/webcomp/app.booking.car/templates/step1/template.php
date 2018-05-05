<?
unset($_SESSION["BOOKING"]);
?>
<script>
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

    google.maps.event.addDomListener(window, 'load', initMap);
</script>
<div class="">
    <div class="">
        <div class="">

            <div id="map"></div>
            <div id="form_input" style="margin-bottom: 10px;padding:10px;background: #f5f5f5;border-radius: 5px;border:1px solid #DDD">

                <form id="frmDatXe"  method="GET">
                    <?
                    $arDataXe = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/data/data-xe.php'));
                    ?>
                    <div class="row">
                        <input type="hidden" id="book_type" name="book_type" />
                        <div class="col-md-12 col pick-group padding_top">
                            <div class="input-group append_pick_address_here"> <span class="input-group-addon"><i class="fa fa-map-marker mpick" style="color: #3c8dbc" aria-hidden="true"></i> </span> <select name="data[pick_address_raw]" id="data_pick_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đ&oacute;n, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputGo" value="<?=$_REQUEST["depart_pick"]?>" name="depart_pick" placeholder="Điểm đón" /><span onclick="$('#searchInputGo').val('')" id="coner_right_mpick" class="coner-right-container" style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-remove my-location"></i><span class="ui-corner-right reset_selected hide">&times;</span></span></span></div>
                        </div>
                        <div class="col-md-12 col drop-group padding_top homepage-input-search-container">
                            <div class="input-group append_drop_address_here"> <span class="input-group-addon"><i class="fa fa-map-marker mdrop" aria-hidden="true"></i></span> <select name="" id="data_drop_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputTo"  value="<?=$_REQUEST["depart_drop"]?>"name="depart_drop" placeholder="Điểm đến" /><span id="coner_right_mdrop" onclick="$('#searchInputTo').val('')" class="coner-right-container" style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-remove my-location"></i><span class="ui-corner-right reset_selected hide">×</span></span></span></div>
                        </div>
                        <div class="col-md-12 col drop-group padding_top homepage-input-search-container">
                            <div class="input-group append_drop_address_here"> <span class="input-group-addon"><i class="fa fa-calendar mdrop" style="font-size: 9px" aria-hidden="true"></i></span> <select name="" id="data_drop_address_raw" class="MyCombobox select2 form-control" style="display: none;" placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input style="outline: none" required="" title="" class="datepicker custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title=""   value="<?=$_REQUEST["depart_time"]?>" placeholder="Thời gian đón" name="depart_time" /></span></div>
                        </div>

                        <div class="col-md-12 col drop-group padding_top">
                            <button type="submit" class="btn btn_blue" id="show_cost"><i class="fa fa-search"></i> TÌM XE</button>
                            <input type="hidden" id="depart_pick_pos" value="<?=$_REQUEST['depart_pick_pos']?>" name="depart_pick_pos">
                            <input type="hidden" id="depart_drop_pos" value="<?=$_REQUEST['depart_drop_pos']?>" name="depart_drop_pos">

                            <input type="hidden" id="book_type" value="<?=$_REQUEST['book_type']?>" name="book_type">
                            <input type="hidden" value="<?=$_REQUEST["depart_time"]?>" id="searchTime" name="searchTime">
                            <input type="hidden" id="searchKeyword" name="searchKeyword">
                            <input type="hidden" id="searchKM" name="searchKM">
                            <input type="hidden" id="pushed" name="pushed" value="N">
                            <input type="hidden" id="callajax" name="callajax" value="Y">
                            <input type="hidden" id="endDauGia" name="endDauGia" value="">
                            <input type="hidden" id="dieuPhoiID" name="dieuPhoiID" value="">
                            <input type="hidden" id="datePush" name="datePush" value="">
                            <input type="hidden" id="count_call" name="count_call" value="0">
                            <input type="hidden" id="customerID" name="customerID" value="<?=intval($GLOBALS["USER"]->GetID())?>">
                            <input type="hidden" id="customerName" name="customerName" value="<?=($GLOBALS["USER"]->GetID() > 0 ? $GLOBALS["USER"]->GetFullName() : "_Chưa xác định_")?>">
                            <input type="hidden" id="customerPhone" name="customerPhone" value="<?=($GLOBALS["USER"]->GetID() > 0 ? $GLOBALS["USER"]->GetLogin() : "_Chưa xác định_")?>">
                        </div>
                        <div class="col-md-12 col drop-group padding_top" style="text-align: center;font-style: italic;color: #444444;font-size: 13px">
                            <p style="float:left;">Khoảng cách:
                                <b><span class="km"></span></b>
                            </p>
                            <p style="float:right;">Thời gian:
                                <b><span class="minute"></span></b></p>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="loading_price_container">
                    <div class="clear-loading loading-effect-4"> <div>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <p class="loading_text">Các lái xe đang đấu giá - tìm giá tốt nhất..</p>
                </div>
            </div>

            <div class="col-md-12">
                <?
                $pickupPos = explode(",",$_REQUEST['depart_pick_pos']);
                $dropPos = explode(",",$_REQUEST['depart_drop_pos']);
                if(count($pickupPos)==2 && count($dropPos)==2){
                    ?>
                    <script>
                        $("#myModal").hide();
                        //Lay thong tin tim kiem
                        var searchKeyword = '';
                        var searchKM = 0;


                        //Build ra ban do map
                        var markers = [
                            {
                                "title": '<?=$_REQUEST['depart_pick']?>',
                                "lat": '<?=$pickupPos[0]?>',
                                "lng": '<?=$pickupPos[1]?>',
                                "description": '',
                                "label" : 'A'
                            }
                            ,
                            {
                                "title": '<?=$_REQUEST['depart_drop']?>',
                                "lat": '<?=$dropPos[0]?>',
                                "lng": '<?=$dropPos[1]?>',
                                "description": '',
                                "label" : 'B'
                            }

                        ];
                        var p1 = new google.maps.LatLng(markers[0]['lat'], markers[0]['lng']);
                        var p2 = new google.maps.LatLng(markers[1]['lat'], markers[1]['lng']);

                        window.onload = function () {
                            var mapOptions = {
                                center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
                                zoom: 10,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                            //Bind map
                            var infoWindow = new google.maps.InfoWindow();
                            var lat_lng = new Array();
                            var latlngbounds = new google.maps.LatLngBounds();

                            for (i = 0; i < markers.length; i++) {
                                var data = markers[i]
                                var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                                lat_lng.push(myLatlng);
                                var marker = new google.maps.Marker({
                                    position: myLatlng,
                                    map: map,
                                    label:data.label,
                                    title: data.title

                                });
                                latlngbounds.extend(marker.position);
                                (function (marker, data) {
                                    google.maps.event.addListener(marker, "click", function (e) {
                                        infoWindow.setContent(data.description);
                                        infoWindow.open(map, marker);
                                    });
                                })(marker, data);
                            }
                            map.setCenter(latlngbounds.getCenter());
                            map.fitBounds(latlngbounds);

                            //***********ROUTING****************//

                            //Initialize the Path Array
                            var path = new google.maps.MVCArray();

                            //Initialize the Direction Service
                            var service = new google.maps.DirectionsService();

                            //Set the Path Stroke Color
                            var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });

                            //Loop and Draw Path Route between the Points on MAP
                            for (var i = 0; i < lat_lng.length; i++) {
                                if ((i + 1) < lat_lng.length) {
                                    var src = lat_lng[i];
                                    var des = lat_lng[i + 1];
                                    path.push(src);
                                    poly.setPath(path);
                                    service.route({
                                        origin: src,
                                        destination: des,
                                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                                    }, function (result, status) {
                                        if (status == google.maps.DirectionsStatus.OK) {
                                            for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                                                path.push(result.routes[0].overview_path[i]);
                                            }
                                        }
                                    });
                                }
                            }
                            var geocoder = new google.maps.Geocoder();
                            geocoder.geocode({'location': p1}, function(results, status) {
                                searchKeyword = results[0]['formatted_address'];
                                //Bind distance
                                var serviceDistance = new google.maps.DistanceMatrixService();
                                serviceDistance.getDistanceMatrix(
                                    {
                                        origins: [p1],
                                        destinations: [p2],
                                        travelMode: 'DRIVING',
                                        unitSystem: google.maps.UnitSystem.METRIC,
                                        avoidHighways: false,
                                        avoidTolls: false

                                    }, function(response, status){
                                        var originList = response.originAddresses;
                                        for (var i = 0; i < originList.length; i++) {
                                            var results = response.rows[i].elements;
                                            for (var j = 0; j < results.length; j++) {
                                                $('.km').text((results[j].distance.text));
                                                $('.minute').text((results[j].duration.text));
                                                searchKM = results[j].distance.value/1000;
                                                $("#searchKeyword").val(searchKeyword);
                                                $("#searchKM,#quangduong").val(searchKM);

                                                if(status=="OK"){ //Search
                                                    pushToBidding();
                                                }

                                            }
                                        }
                                    });
                            });

                        }
                        function pushToBidding(){
                                $.ajax({
                                    type: "POST",
                                    url: "http://doitac.apkin.vn/wsdl/dat-xe/push.php",
                                    data: $("#frmDatXe").serialize(),
                                    dataType: 'json',
                                    cache: false,
                                    async: false,
                                    success: function (data) {
                                        if (data.success) {
                                            $("#pushed").val(data.pushed);
                                            $("#endDauGia").val(data.endDauGia);
                                            $("#dieuPhoiID").val(data.dieuPhoiID);
                                            $("#datePush").val(data.datePush);
                                        }
                                    },
                                    error: function () {
                                    }
                                });

                        }
                        function refreshGrid_() {
                            $("#count_call").val(0);
                            bidding();
                        }
                        function bidding(){
                            if($('#callajax').val()=="Y"){
                                $.ajax({
                                    type: "POST",
                                    url: "http://doitac.apkin.vn/wsdl/dat-xe/bidding.php",
                                    data: $("#frmDatXe").serialize(),
                                    dataType: 'json',
                                    cache: false,
                                    async: false,
                                    success: function (data) {
                                        if (data.success) {
                                            $("#callajax").val(data.callajax);
                                            if (data.bidding > 0 && data.count_call == 0) { //Lan goi dau tien
                                                $("#result_update").css('display','none');
                                                $("#result_search").html(data.html);
                                                $("#count_call").val(data.bidding);
                                                $("#myModal").hide();
                                            }else if(data.bidding > 0 && $("#count_call").val() != data.bidding) {
                                                $("#result_update").css('display','block');
                                            }

                                        }
                                    },
                                    error: function () {
                                    }
                                });
                            }
                        }
                        //End Build
                        setInterval(function(){bidding();}, <?=$arDataXe->CONFIG->PROPERTY_SECOND_CALL_DAU_GIA_VALUE*1000?>);

                        
                    </script>



                <?}?>

            </div>
        </div>

        <div id="result_search">

        </div>
    </div>
</div>
<div id="result_update" style="position: fixed;bottom:0px;height: 50px;left: -5px;right:-5px;display: none">

    <div class="alert alert-success alert-dismissible">
        <a href="#" style="text-decoration: none" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <div style="text-align: center"><strong><a href="javascript:void(0)" style="color: #fff;text-decoration: none" onclick="refreshGrid_()"> <i class="fa fa-refresh"></i> Làm mới dữ liệu</a></strong>
        </div>
    </div>
</div>
<style>
    
    
    #form_input {
        position: relative;
        z-index: 1; /* The z-index should be higher than Google Maps */

    }
</style>
