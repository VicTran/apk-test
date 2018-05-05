<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
//đăng ký tài khoản
global $USER;
$arResult = $USER->Register("adb", "", "", "a", "b", "admin@mysite.com");
Cdebug::dump($arResult);
ShowMessage($arResult); // display result as a message
echo $USER->GetID(); // ID of a new user
exit();
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
                        $('#book_type').val('airport');
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

    <div class="content-wrapper">
        <section>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div style="background:url('https://taxiairport.vn/uploads/popular_place_type/d727dc5917a96500e280059ee1f28a1c.png');" class="item active">
                        <div class="carousel-caption">
                            <h2>Thoải mái như xe nhà. Giá rẻ như xe khách</h2>
                        </div>
                    </div>
                </div>
                <form id="frmDatXe" action="/datxe.php" method="GET">
                <div class="datxe">
                    <ul class="nav-tabs nav"> <li class="active">
                            <a href="/">
                                <i class="fa fa-plane fa-lg"></i> <span>Sân bay</span> </a>
                        </li> <li> <a href="/duong-dai-gia-re/">
                                <i class="fa fa-road fa-lg"></i> <span>Đường dài</span> </a> </li>
                        <li> <a data-chunk-type-ids="5" href="/xe-gia-re-noi-thanh/"> <i class="fa fa-building fa-lg"></i>
                                <span>Trong thành phố</span> </a> </li>
                    </ul>
                    <div class="tab-content">
                        <div id="pane1" class="tab-pane active">
                            <div class="row ">
                                <div class="col-md-8">
                                    <div class="row">
                                        <input type="hidden" id="depart_pick_pos" name="depart_pick_pos">
                                        <input type="hidden" id="depart_drop_pos" name="depart_drop_pos">
                                        <input type="hidden" id="book_type" name="book_type">

                                        <div class="col-md-6 col pick-group padding_top">
                                            <div class="input-group append_pick_address_here">
                                                <span class="input-group-addon"><i class="fa fa-map-marker mpick" aria-hidden="true"></i>
                                                </span>
                                                <select name="data[pick_address_raw]" id="data_pick_address_raw" class="MyCombobox select2 form-control" style="display: none" placeholder="Điểm đón, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputGo" name="depart_pick" placeholder="Điểm đón, sân bay hoặc khách sạn"><span id="coner_right_mpick" class="coner-right-container" style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-location-arrow my-location"></i><span class="ui-corner-right reset_selected hide">×</span></span></span></div> </div>
                                        <div class="col-md-2 col exchange-col padding_top hide">
                                            <span class="exchange-icon" data-toggle="tooltip" data-placement="bottom" title="Chuyển đổi địa chỉ đón và trả"></span></div>
                                        <div class="col-md-6 col drop-group padding_top homepage-input-search-container">
                                            <div class="input-group append_drop_address_here">
                                                <span class="input-group-addon"><i class="fa fa-map-marker mdrop" aria-hidden="true"></i></span>
                                                <select name="data[drop_address_raw]" id="data_drop_address_raw" class="MyCombobox select2 form-control" style="display: none" placeholder="Điểm đến, sân bay hoặc khách sạn"></select><span class="custom-combobox"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input title="" class="custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left ui-autocomplete-input" autocomplete="off" data-original-title="" id="searchInputTo" name="depart_drop" placeholder="Điểm đến, sân bay hoặc khách sạn"><span id="coner_right_mdrop" class="coner-right-container" style="background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><i class="ui-corner-right fa fa-location-arrow my-location"></i><span class="ui-corner-right reset_selected hide">×</span></span></span></div> </div> </div> </div>
                                <div class="col-md-4"> <div class="row"> <div class="col-md-7 padding_top "> <div class="input-group"><span style="display: block" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input style="outline: none;position: static" name="depart_time" id="data_depart_time" class="form-control  datepicker"
                                                       type="text" placeholder="Thời gian đón" readonly="readonly"></div> </div>
                                        <div class="col-md-5 padding_top" style="overflow: hidden">
                                            <button type="button" class="btn btn_blue" id="show_cost">XEM GIÁ</button>
                                            </div> </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <div class="white_bg">
            <div class="container box_sm">
                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Đảm bảo Giá tốt nhất" alt="Đảm bảo Giá tốt nhất" src="<?=SITE_TEMPLATE_PATH?>/images/86c2e55bd0b771bb97504ca73b052439.png" width="100%"></p>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Đảm bảo Giá tốt nhất</h4>
                            <p class="chunk_name">So sánh hãng để chọn giá tốt nhất</p>
                            <p>Bù giá nếu tìm được giá tốt hơn</p>
                            <p>Đặt sớm tiết kiệm thêm 30%</p>
                            <p class="chunk_name"></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Cam kết chất lượng" alt="Cam kết chất lượng" src="<?=SITE_TEMPLATE_PATH?>/images/9d8791331ab81f0247b339f994df33d6.png" width="100%"></p>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Cam kết chất lượng</h4>
                            <p class="chunk_name">Luôn có xe nếu đặt trước</p>
                            <p>Bồi thường nếu đón muộn</p>
                            <p>Hoàn tiền nếu không hài lòng</p>
                            <p class="chunk_name"></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 benefit">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <p class="box_sm"><img title="Tiện ích đặc biệt" alt="Tiện ích đặc biệt" src="<?=SITE_TEMPLATE_PATH?>/images/4c4c38742106ce88b20e483801cf53cd.png" width="100%"></p>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <h4 style="color: rgb(238, 94, 23);">Tiện ích đặc biệt</h4>
                            <p class="chunk_name">Dịch vụ đi ghép giá siêu rẻ</p>
                            <p>Thể hiện phong cách sống xanh</p>
                            <p>Đi lại thân thiện với môi trường</p>
                            <p class="chunk_name"></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>