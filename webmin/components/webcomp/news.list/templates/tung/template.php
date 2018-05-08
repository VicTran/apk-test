<div class="tab-pane active">
    <form id="result">
        <input type="hidden" name="Km" id="Km" value="">
        <input type="hidden" name="select" id="select" value="">

        <? foreach ( $arResult["ITEMS"] as $arItem ): ?>
            <!--        --><?//Cdebug::dump($arItem); ?>
            <input type="hidden" name="GIA[<?=$arItem['ID']?>]" value="<?=$arItem['PROPERTIES']['GIA']['VALUE']?>">
            <input type="hidden" name="PROPERTY[<?=$arItem['ID']?>][MAU_SAC]" value="<?= $arItem['NAME'];?>">
            <input type="hidden" name="PROPERTY[<?=$arItem['ID']?>][SO_CHO]" value="456">
            <div class="table-responsive" id="ride_container" style="overflow-y: hidden; max-height: 476px;">
                <!-- </tbody></table> -->
                <div class="showxe_box" partner_id="85" pm_id="31624" server_class="CalcPriceByKm" merged_cost="12467000"
                     priority="2" hide="0" online_booking="1" use_range_time="0" style="">
                    <div class="row">
                        <div class="col-md-2 padding_top" style="margin-top: 17.5px;"><p class="h4 text-uppercase"> Xe hợp
                                đồng </p>
                            <p class="rate">
                            <div class="rating-container theme-krajee-fa rating-md rating-animate rating-disabled">
                                <div class="rating-stars" style="position: relative;
    display: inline-block;"><span class="empty-stars" style="position: absolute;"><span class="star"><i
                                                class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star-empty"></i></span>
                            </span>
                                    <span
                                        class="filled-stars" style="width: 95.7818%;"><span class="star"><i
                                                class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                class="glyphicon glyphicon-star"></i></span></span>
                                    <input type="hidden"
                                           value="4.78909"
                                           class="rating-partner rating-input"
                                           readonly="readonly">
                                </div>
                                <div class="caption" style="display: inline-block;
    color: #fff;"><span class="label label-default">4.8</span></div>
                            </div>
                            </p> <p hidden><a href="/thong-tin-hang-taxi/xe-hop-dong" target="_blank">Thông tin hãng xe</a></p>
                        </div>
                        <div class="col-md-2 text-center img-col" style="margin-top: 22px;"><img width="150" alt="4 chỗ xe nhỏ"
                                                                                                 title="4 chỗ xe nhỏ"
                                                                                                 src="https://taxiairport.vn/uploads/partner_vehicle/2c2953012d35315353cefe1cb305a323.png">
                        </div>
                        <div class="col-md-3" style="margin-top: 1px;"><p class="h6 partner_note"><i
                                    class="fa fa-share-square-o"></i> <span style="font-weight:bold;color:red;">Giá chưa bao gồm phí cầu đường</span>
                            </p>
                            <p class="h6"><i class="fa fa-car"></i> <span
                                    class="vehicle_name">Loại xe: <b><?= $arItem['NAME'];?></b></span></p>
                            <p class="h6 luggage hide"><i class="glyphicon glyphicon-briefcase"></i> 1 Vali nhỏ + 1 Túi xách
                            </p>
                            <p class="secure" style="color: #3f9952;"><span class="help_icon secure"
                                                                            style="color: #3f9952;"></span> <span
                                    class="use_count">3</span> người đang
                                chọn xe này</p>
                            <p class="h6 vehicle_frame"><label class=""> <span class="vehicle_unit">Số xe</span>: <span
                                        class="vehicle_count_text">1</span> <i class="fa fa-caret-down"
                                                                               aria-hidden="true"></i> <select
                                        class="chair_id">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select> </label></p>
                        </div>
                        <div class="col-md-5 price_button_column">
                            <div class="col-md-6 text-center price_column" style="margin-top: 1.5px;">
                                <div class="gia" style="margin-top: 30px;
    margin-bottom: 30px;"><p class="total_price h3 margin_bottom_0x"></p>
                                    <p class="price unmerge_cost">
                                        <span id="gia_<?=$arItem['ID']?>"></span></p>
                                    <p class="h6 margin_bottom_0x price_type bold">Giá 150.000đ <i></i>tối đa 10Km<br>Từ Km 11,
                                        <i></i>giá 11.000đ/Km</p> <a class="h6 margin_bottom_0x promotion_description"
                                                                     style="display: none;"></a></div>
                            </div>
                            <div class="col-md-6 booking_button_column" style="margin-top: 18.5px;">
                                <div class="gia text-right padding_top">
                                    <div class="radio book"><label class="radio_label" for="depart_book_select_85_3"
                                                                   style="width: 100%;"> <input
                                                type="radio" class="hide" name="depart_book_select"
                                                id="depart_book_select_85_3">
                                            <div class="btn btn_blue book_tung"  data-id="<?=$arItem['ID']?>">Đặt
                                                ngay</div>
                                        </label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="partner_id" value="85"> <input type="hidden" class="vehicle_service_id"
                                                                               value="3"> <input type="hidden"
                                                                                                 class="vehicle_id"
                                                                                                 data-seat-count="3" value="17"
                                                                                                 data-vehicle-service-id="3">
                    <select class="ride_method_id hide">
                        <option data-vehicle-id="17" value="2">Đi chung</option>
                        <option data-vehicle-id="17" value="1">ĐI RIÊNG</option>
                    </select></div>
            </div>

        <? endforeach; ?>
        <div class="row" id="show_more" style="display: none;">
            <div class="col-md-12"><a class="btn gray_bg"> Xem thêm </a></div>
        </div>
</div>
</form>

<script>
    function calutagia(){
f
        $.ajax({
            type: "POST",
            url: "/ajax/tinh.gia.php",
            data: $("#result").serialize(),
            dataType: "json",
            cache:false,
            async:false,
            success: function(data){
                for (i in data)
                {
                    $("#gia_"+i).text(data[i]);
                }
            },
            error: function(){}
        });
    }

    $(".book_tung").click(function () {
        var id = $(this).attr('data-id');
        $("#select").val(id);
        $.ajax({
            type: "POST",
            url: "/ajax/luu.session.php",
            data:$("#result").serialize(),
            dataType: "json",
            cache:false,
            async:false,
            success: function(data){
                window.location.href = "http://apka.local/dat-xe/thong-tin-khach-hang/";
            },
            error: function(){}
        });
    });


</script>

