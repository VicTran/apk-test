<div class="white_bg box_sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align: center;margin-top:0px">Đặt xe thành công</h3> </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title bold">Thông tin khách hàng</h4> </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="row">
                                <h5 class="bold">Người đặt</h5></div>
                            <div class="row">Họ Tên: <span class=" bold"><?=$arResult["BOOKING_INFO"]["CUSTOMER"]["FULL_NAME"]?></span></div>
                            <div class="row">Thời gian đặt: <span class=" bold"><?=$arResult["BOOKING_INFO"]["INFO"]["NGAY_DAT"]?> </span></div>
                            <div class="row">Số điện thoại: <span class=" bold"><?=$arResult["BOOKING_INFO"]["CUSTOMER"]["PHONE"]?></span></div>
                            <div class="row">Địa chỉ: <span class=" bold"><?=$arResult["BOOKING_INFO"]["INFO"]["DIA_CHI_TRA"]?></span></div>
                            <div class="row">Ghi chú: <span class=" bold"><?=$arResult["BOOKING_INFO"]["INFO"]["GHI_CHU"]?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">THÔNG TIN VÉ</h3> </div>
                        <div class="panel-body">
                            <div>

                                <p style="font-size: 18px">Mã vé: <?=$arResult["BOOKING_INFO"]["INFO"]["MA_VE"]?></p>
                                <p>Tình trạng: <span class=" bold"><?=$arResult["BOOKING_INFO"]["INFO"]["TRANG_THAI"]?></span> </p>
                                <p>Khởi hành: <span class="w50 ilbl"> <span class="view bold">
                                            <?=$arResult["BOOKING_INFO"]["BOOKING"]["THOI_GIAN"]?></span> <span class="edit hide">
                                            </span>
                                    </span>
                                </p>
                                <p>Đón khách: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_DON"]?></span></p>
                                <p>Trả khách: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_TRA"]?></span></p>
                                <p>Số lượng: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["SO_LUONG"]?> Khách</span></p>
                                <p>Hình thức thanh toán: <span class=" bold"><?=$arResult["BOOKING_INFO"]["INFO"]["HINH_THUC_TT"]["NAME"]?></span> </p>
                                <div style="clear: both"></div>
                            </div>
                            <div class="ticket total_price">
                                <h4>Giá vé:</h4>
                                <h3 class="bold"> <?=$arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"]["FORMATED"]?> đ</h3> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">THÔNG TIN LÁI XE</h3> </div>
                        <div class="panel-body">
                            <p>Tình trạng: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["TRANG_THAI"]?></span> </p>
                            <p>Tên lái xe: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["TAI_XE"]["NAME"]?></span></p>
                            <p>Điện thoại: <span class=" bold"></span></p>
                            <p>Biển số xe: <span class=" bold"></span></p>
                            <p>Số chỗ ngồi: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["SO_CHO_NGOI"]?> chỗ</span></p>
                            <p>Loại xe: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["HANG_XE"]?> <?=$arResult["BOOKING_INFO"]["BOOKING"]["LOAI_XE"]?>
                                (<?=$arResult["BOOKING_INFO"]["BOOKING"]["KIEU_XE"]?>)
                                </span></p>
                            <p>Màu: <span class=" bold"><?=$arResult["BOOKING_INFO"]["BOOKING"]["MAU_XE"]?></span></p>


                            <hr> <i><div> Lưu ý: Quý khách sẽ nhận được thông tin số điện thoại tài xế và biển số xe sau khi điều hành điều xe,
                                    thông thường trước chuyến đi 30-60p.</div> </i> </div>
                    </div>

                </div>
            </div>
            <style>
                .why_us {
                    line-height: 27px;
                    margin-top: 10px;
                    font-style: italic;
                    font-weight: 200;
                    border: solid 1px #ccc;
                    clear: both;
                }

                .why_us .title {
                    font-size: 18px;
                    color: #0288d1;
                }
            </style>
            <div class="col-md-12">
                <div class="check_datxe why_us">
                    <p class="bold title"> <i class="fa fa-info-circle"> </i> Lưu ý: </p>
                    - Trong trường hợp bất khả kháng, nếu tài xế không có mặt đúng giờ, quý khách có thể chủ động bắt xe khác để đảm bảo chuyến đi của mình. Apka.vn cam kết chịu trách nhiệm phần giá chênh lệch.
                    <br>- Nếu quý khách cung câp đầy đủ thông tin chuyến bay, chúng tôi đảm bảo vẫn sẽ đón quý khách nếu quý khách bị chậm chuyến.
                    <br>- Apka.vn cam kết chất lượng dịch vụ, chất lượng lái xe cho những chuyến đi đặt tại Apka.vn. Chúng tôi không cam kết chất lượng dịch vụ, các điều khoản bồi thường nếu quý khách đặt xe trực tiếp với lái xe. </div>
            </div>
            <div class="col-md-12 box_md">
                <h3 style="text-align: center">Cảm ơn quý khách đã sử dụng dịch vụ của apka.vn</h3>
                <div style="text-align: center;">

                    <div class="col-md-3 padding_top" style="float: none; display: inline-block;"> <a class="btn btn_blue" href="/">Đặt chuyến khác</a> </div>
                    <div style="float: none; display: inline-block; color:#fff" class="col-md-3 padding_top"> <a href="#" style="color: #fff" class="btn btn-danger cancel_booking">Huỷ đặt xe</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>