<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>
    <div class="white_bg box_md booking_step">
        <div class="container">
            <div class="row"> <div class="col-md-12">
                    <table class="progress_bar"> <tbody><tr>
                            <td class="active">1. Đặt xe </td> <td class="">2. Điền thông tin cá nhân</td>
                            <td class="">3. Hoàn tất</td> </tr> </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
                        $('#book_type').val('airport');
                    }else{
                        $('#book_type').val('tinh');
                    }
                }
            });
            google.maps.event.addListener(autocompleteTo, 'place_changed', function() {
                var place = autocompleteTo.getPlace();
                depart_drop_pos.value = place.geometry.location.lat()+","+place.geometry.location.lng();

            });
        }
        $(document).ready(function() {
            $('#show_cost').click(function(){
                $("#frmDatXe").submit();
            });
        });
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
    <div class="white_bg box_md">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="datxe2 booking_from_frame">
                        <form id="frmDatXe" method="GET">
                            <?
                            $arDataXe = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/data/data-xe.php'));

                            ?>
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div id="pane1" class="tab-pane active">
                                        <div class="datxe2 info_step1">
                                            <div class="col-md-12 col-sm-12 pd_edit">
                                                <div class="col-md-4 col-sm-4 padding_top bold">
                                                    <strong>Địa chỉ đón khách</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8 padding_top ">
                                                    <input class="datxe_form-control" utocomplete="off"
                                                           id="searchInputGo" name="depart_pick" placeholder="Điểm đến, sân bay hoặc khách sạn" value="<?=$_REQUEST["depart_pick"]?>"> </div>
                                            </div>
                                            <div class="col-md-12 padding_top pd_edit">
                                                <div class="col-md-4 col-sm-4 padding_top">
                                                    <strong>Địa chỉ trả khách</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8 padding_top ">
                                                    <input title="" class="datxe_form-control" autocomplete="off"
                                                           id="searchInputTo" name="depart_drop"
                                                           value="<?=$_REQUEST["depart_drop"]?>"  placeholder="Điểm đến, sân bay hoặc khách sạn">
                                                </div>
                                            </div>
                                            <div class="col-md-12 padding_top">
                                                <div class="col-md-4 col-sm-4 padding_top">
                                                    <strong>Thời gian đón</strong>
                                                </div>
                                                <div class="col-md-8 col-sm-8 padding_top ride_date_time">
                                                    <input autocomplete="off" type="text" class="datxe_form-control datepicker"
                                                           value="<?=$_REQUEST["depart_time"]?>" placeholder="Thời gian đón"
                                                           name="depart_time" readonly="readonly"> </div>
                                            </div>
                                            <div class="col-md-12 padding_top">
                                                <div class="col-md-4 col-sm-4 padding_top">
                                                    <strong>Loại xe</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 padding_top">
                                                    <select class="form-control" name="seat" id="vehicle_control">
                                                        <option value="0">Số chỗ</option>
                                                        <?foreach($arDataXe->CHO_NGOI as $item){
                                                            if(($item->ID==$_REQUEST["seat"])){
                                                                $ck = 'selected';
                                                            }else{
                                                                $ck = '';
                                                            }
                                                         ?>
                                                        <option <?=$ck?> value="<?=$item->ID?>">Xe <?=$item->VALUE?> chỗ</option>
                                                        <?}?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-4 padding_top">
                                                    <div class="dropdown"><a href="javascript:void(0)" class="dropbtn"><i class="fa fa-filter"></i> Tiêu chí khác </a>
                                                        <div style="width: 390px" class="dropdown-content">
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <a href="javascript:void(0)" style="padding-left:16px;background-color: #f1f1f1"><b><i class="fa fa-car"></i> Hãng xe</b></a>
                                                                <?
                                                                foreach($arDataXe->HANG_XE as $item){
                                                                    if(in_array($item->ID,$_REQUEST["type"])){
                                                                        $ck = 'checked';
                                                                    }else{
                                                                        $ck = '';
                                                                    }
                                                                 ?>
                                                                <div class="col-md-3">
                                                                <a href="javascript:void(0)"><input value="<?=$item->ID?>" <?=$ck?> name="type[]" class="list_view_1" type="checkbox">
                                                                    <?=$item->VALUE?></a>
                                                                </div>
                                                            <?}?>

                                                            </div>
                                                            <div class="col-md-12">
                                                                <a href="javascript:void(0)" style="padding-left:16px;background-color: #f1f1f1" ><b><i class="fa fa-paint-brush"></i> Màu xe</b></a>
                                                                <?foreach($arDataXe->MAU_XE as $item){
                                                                    if(in_array($item->ID,$_REQUEST["color"])){
                                                                        $ck = 'checked';
                                                                    }else{
                                                                        $ck = '';
                                                                    }
                                                                    ?>
                                                                <div class="col-md-3">
                                                                    <a href="javascript:void(0)"><input value="<?=$item->ID?>" <?=$ck?> name="color[]" class="list_view_1" type="checkbox">
                                                                        <?=$item->VALUE?>
                                                                    </a>
                                                                </div>
                                                                <?}?>
                                                            </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div style="clear:both"></div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>
                                            <div class=" col-md-4 col-sm-4 padding_top">
                                                <button type="button" id="show_cost" class="btn btn_sm btn_blue">XEM GIÁ</button>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div>

                                    </div>
                                </div>
                                <input type="hidden" id="depart_pick_pos" value="<?=$_REQUEST['depart_pick_pos']?>" name="depart_pick_pos">
                                <input type="hidden" id="depart_drop_pos" value="<?=$_REQUEST['depart_drop_pos']?>" name="depart_drop_pos">
                                <input type="hidden" id="book_type" value="<?=$_REQUEST['book_type']?>" name="book_type">
                                <input type="hidden" value="<?=$_REQUEST["depart_time"]?>" id="searchTime" name="searchTime">
                                <input type="hidden" id="searchKeyword" name="searchKeyword">
                                <input type="hidden" id="searchKM" name="searchKM">

                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
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
                        <p class="loading_text">Đang tìm giá tốt nhất..</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <?
                    $pickupPos = explode(",",$_REQUEST['depart_pick_pos']);
                    $dropPos = explode(",",$_REQUEST['depart_drop_pos']);
                    if(count($pickupPos)==2 && count($dropPos)==2 && $_REQUEST['depart_time']!=""){
                        ?>
                        <script>
                            $("#myModal").show();
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
                                                    $("#searchKM").val(searchKM);
                                                    if(status=="OK"){ //Search

                                                        $.ajax({
                                                            type: "POST",
                                                            url: "http://doitac.apkin.vn/wsdl/dat-xe/search.php",
                                                            data: $("#frmDatXe").serialize(),
                                                            dataType: 'json',
                                                            cache:false,
                                                            async:false,
                                                            success: function(data){
                                                                if(data.success) {
                                                                    if(data.html!=''){
                                                                        $("#result_search").html(data.html);
                                                                    }
                                                                    $("#myModal").hide();
                                                                }
                                                            },
                                                            error: function(){}
                                                        });
                                                        console.log(searchKM);
                                                        console.log(searchKeyword);
                                                    }

                                                }
                                            }
                                        });








                                });

                                //$("#myModal").show();

                            }
                            //End Build

                        </script>
                        <div class="map" id="map" style="height: 326px; position: relative; overflow: hidden;">
                                
                        </div>
                        <div class="map_info">
                            <p style="float:left;">Khoảng cách:
                                <span class="km"></span>
                            </p>
                            <p style="float:right;">Thời gian dự tính:
                                <span class="minute"></span></p>
                        </div>

                    <?}else{?>
                        <div>
                            <div class="modal-content" style="border:1px solid #ddd">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="false"></span></button>
                                    <h4 class="modal-title"><i class="fa fa-bullhorn"></i> Không tìm thấy thông tin đặt xe</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-danger">Vui lòng nhập đầy đủ các thông tin cần thiết để tìm chuyến xe giá rẻ </p>
                                </div>
                            </div>

                        </div>
                    <?}?>
                </div>
            </div>
            <div id="result_search">

            </div>

        </div>
    </div>

    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/starrr.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>