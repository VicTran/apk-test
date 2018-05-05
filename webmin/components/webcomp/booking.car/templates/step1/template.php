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
//    $(document).ready(function() {
//        $('#show_cost').click(function(){
//            $("#frmDatXe").submit();
//        });
//    });
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
                                                <input class="datxe_form-control" autocomplete="off"
                                                       id="searchInputGo" required name="depart_pick" placeholder="Điểm đến, sân bay hoặc khách sạn" value="<?=$_REQUEST["depart_pick"]?>"> </div>
                                        </div>
                                        <div class="col-md-12 padding_top pd_edit">
                                            <div class="col-md-4 col-sm-4 padding_top">
                                                <strong>Địa chỉ trả khách</strong>
                                            </div>
                                            <div class="col-md-8 col-sm-8 padding_top ">
                                                <input title="" class="datxe_form-control" autocomplete="off" id="searchInputTo" name="depart_drop" required value="<?=$_REQUEST["depart_drop"]?>"  placeholder="Điểm đến, sân bay hoặc khách sạn">
                                            </div>
                                        </div>
                                        <div class="col-md-12 padding_top">
                                            <div class="col-md-4 col-sm-4 padding_top">
                                                <strong>Thời gian đón</strong>
                                            </div>
                                            <div class="col-md-8 col-sm-8 padding_top ride_date_time">
                                                <input autocomplete="off" type="text" class="datxe_form-control datepicker" required
                                                       value="<?=$_REQUEST["depart_time"]?>" placeholder="Thời gian đón"
                                                       name="depart_time" > </div>
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
                                            <button type="submit" id="show_cost" class="btn btn_sm btn_blue">XEM GIÁ</button>
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
                                                $("#searchKM,#quangduong").val(searchKM);
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

<div class="modal fade in" id="box_book" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Gửi yêu cầu đặt xe</h4>
            </div>
            <div class="modal-body">
                <div style="padding-left: 15px" id="box_error"></div>
                <div style="margin-bottom: 0px">
                    <form role="form" onsubmit="return book()" id="frmBook2">
	                    <?=bitrix_sessid_post()?>
                        <input type="hidden" class="form-control" name="quangduong" id="quangduong" placeholder="Quãng đường dự tính">
                        <input type="hidden" class="form-control" name="toado_di" id="toado_di" placeholder="Tọa độ điểm đi" value="<?=$_REQUEST['depart_pick_pos']?>">
                        <input type="hidden" class="form-control" name="toado_den" id="toado_den" placeholder="Tọa độ điểm đến" value="<?=$_REQUEST['depart_drop_pos']?>">
                        <div class="box-body">
                            <div style="padding-left: 15px" id="box_error_request"></div>
                            <div class="form-group">
                                <label>Điểm đón</label>
                                <input class="form-control" readonly name="depart_pick" value="<?=$_REQUEST['depart_pick']?>"  id="exampleInputEmail1" placeholder="Điểm đón">
                            </div>
                            <div class="form-group">
                                <label>Điểm trả</label>
                                <input class="form-control" readonly name="depart_drop" value="<?=$_REQUEST['depart_drop']?>"  id="exampleInputEmail1" placeholder="Điểm đón">
                            </div>
                            <div class="form-group">
                                <label>Thời gian đón</label>
                                <input class="form-control" readonly name="depart_time" value="<?=$_REQUEST['depart_time']?>"  id="exampleInputEmail1" placeholder="Điểm đón">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Số lượng khách</label>
                                        <select class="form-control" name="chair_seat" class="chair_id">
			                                <?for($i=1;$i<=32;$i++){?>
                                                <option value="<?=$i?>"><?=$i?></option>
			                                <?}?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Nhập giá yêu cầu *</label>
                                        <input required class="form-control"  name="price" value=""  id="exampleInputEmail1" placeholder="Nhập giá yêu cầu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Số chỗ ngồi</label>
                                        <select class="form-control" name="seat" id="vehicle_control">
                                            <option value="Bất kỳ">Bất kỳ</option>
                                            <?foreach($arDataXe->CHO_NGOI as $item){
                                                if(($item->ID==$_REQUEST["seat"])){
                                                    $ck = 'selected';
                                                }else{
                                                    $ck = '';
                                                }
                                                ?>
                                                <option <?=$ck?> value="<?=$item->VALUE?>">Xe <?=$item->VALUE?> chỗ</option>
                                            <?}?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Hãng xe</label>
                                        <select class="form-control" name="type" id="vehicle_control">
                                            <option value="Bất kỳ">Bất kỳ</option>
                                            <?
                                            foreach($arDataXe->HANG_XE as $item){
                                                if(in_array($item->ID,$_REQUEST["type"])){
                                                    $ck = 'checked';
                                                }else{
                                                    $ck = '';
                                                }
                                                ?>
                                                <option <?=$ck?> value="<?=$item->VALUE?>"><?=$item->VALUE?></option>
                                            <?}?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" required name="ho_ten"  id="exampleInputEmail1" placeholder="Họ tên *">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required name="dien_thoai"  id="exampleInputEmail1" placeholder="Số điện thoại *">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"  id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="noi_dung"  id="exampleInputEmail1" placeholder="Nội dung"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Mô tả chi tiết địa chỉ trả cho lái xe *</label>
                                <input required class="form-control" name="diachitra" placeholder="Ví dụ: ngõ 165 Thái Hà, Đống Đa, Hà Nội"/>
                            </div>
                            <div class="form-group">
                                <label>Lựa chọn hình thức thanh toán</label>
                                <?
                                global $HinhThuc_ThanhToan;
                                ?>
                                <div>
                                <input class="" checked="checked" type="radio" id="payment_method_id3" name="payment_method_id" value="<?=$HinhThuc_ThanhToan["Tra_sau"]?>"> <b>Trả sau</b> (Thanh toán trực tiếp cho lái xe ngay sau khi kết thúc chuyến đi.)
                                </div>
                            </div>
                        </div>
                        <button type="submit" style="border-radius: 0px;background: #ce171f;color:#fff;width: auto" class="btn btn-flat" >Gửi yêu cầu</button>
                        <button type="button" data-dismiss="modal"  style="border-radius: 0px;color:#fff;width: auto" class="btn btn-flat btn-primary" >Đóng</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function book(){
        $.ajax({
            type: "POST",
            url: "/ajax/save.request.php",
            data: $("#frmBook2").serialize(),
            dataType: "json",
            cache:false,
            async:false,
            success: function(data){
                if(data.success){
                    $('#box_book .modal-body').html('<div class="alert bg-success text-center">Chúc mừng bạn đã gửi thông tin thành công. <br>Chúng tôi sẽ xem và trả lời cho bạn sớm nhất có thể!</div>');
                }else{
                    $("#box_error_request").html(data.error_text)
                }
            },
            error: function(){}
        });
        return false;
    }
</script>