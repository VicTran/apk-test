<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>
<div class="white_bg box_md booking_step">
    <div class="container">
        <div class="row"> <div class="col-md-12">
                <table class="progress_bar"> <tbody><tr>
                        <td class="active">1. Đặt xe </td>
                        <td class="active">2. Điền thông tin cá nhân</td>
                        <td class="active">3. Hoàn tất</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="white_bg box_md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 payment_frame">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading headingOne" role="tab">
                            <div class="panel-title">
                                <div data-toggle="collapse" data-parent="#accordion" class="collapsed"> <span class="addition_text bold">Lựa chọn hình thức thanh toán</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-collapse collapseOneBody" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <style type="text/css">
                                    .online_domestic_payment {
                                        border-style: solid;
                                        border-width: thin;
                                        border-color: #eeeeee;
                                        width: 31%;
                                        margin-right: 10px;
                                        float: left;
                                        text-align: center;
                                        padding: 2px 5px;
                                        margin-bottom: 15px;
                                        margin-top: 15px;
                                    }

                                    .online_domestic_payment img {
                                        width: 100%;
                                        height: 85px;
                                    }
                                </style>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row box_xs payment_rows">
                                            <div class="row col-md-12 col-ms-12 col-xs-12">
                                                <label for="payment_method_id3" class="payment_method_radio_select ">
                                                    <input class="" checked="" type="radio" id="payment_method_id3" name="payment_method_id" value="3"> Trả sau </label>
                                                <div class="col-md-12 pay_desc" data-id="3">
                                                    <p>Thanh toán trực tiếp cho lái xe ngay sau khi kết thúc chuyến đi.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4" style="text-align: center;">
                        <button class="btn btn_blue btn_lg" id="payment_button">Hoàn thành đặt xe</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?
                $APPLICATION->IncludeComponent("webcomp:static", "trip.info", array(),
                    false
                );
                ?>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>

<!--<div class="popup_border">
    <div id="popup_title" style="cursor: move;">Thông tin chuyến bay</div>
    <div id="popup_content" class="form">
        <div id="popup_message" style="height: 230px;">
            <form method="post" action="/prepare/save_airport_info" id="popup_airport_form">
                <style>
                    .padding0 {
                        padding: 0
                    }

                    .flight_info input,
                    .flight_info select {
                        width: 100% !important;
                    }
                </style>
                <div class=" col-md-12"> Bạn nên để lại thông tin về chuyến bay để đảm bảo được điều chỉnh giờ đón trong trường hợp chuyến bay của bạn thay đổi giờ cất và hạ cánh <a class="booking_step1 tracuu" href="/en/home/flight" target="_blank">(Tra cứu chuyến bay)</a>
                    <div class="col-md-12 flight_info padding0">
                        <div class="col-md-12 divider"></div>
                        <div class="col-md-12 padding0">
                            <div class="row">
                                <div class="col-md-12 padding_top"> Chuyến bay: </div>
                                <div class="col-md-12">
                                    <select class="datxe_form-control" name="depart_plane_type" id="depart_plane_type">
                                        <option value="1">Nội Địa</option>
                                        <option value="2">Quốc tế</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding0">
                            <div class="row padding_top">
                                <div class="col-md-12"> Bay từ đâu </div>
                                <div class="col-md-12">
                                    <select name="to_airport_id" id="to_airport_id" class="datxe_form-control warn-must-input">
                                        <option value="0" style="font-weight: bold;">Chọn sân bay</option>
                                        <option value="1" data-position="21.213018,105.802752">Nội bài</option>
                                        <option value="8" data-position="10.818484, 106.658825">Tân Sơn Nhất</option>
                                        <option value="4" data-position="16.043929, 108.199432">Đà Nẵng</option>
                                        <option value="5" data-position="12.007485, 109.215866">Cam Ranh</option>
                                        <option value="6" data-position="10.168403, 103.995202">Phú Quốc</option>
                                        <option value="7" data-position="12.668309,108.119931">Buôn Ma Thuột</option>
                                        <option value="10" data-position="20.823560, 106.727362">Cát Bi</option>
                                        <option value="11" data-position="18.736745, 105.670927">Vinh</option>
                                        <option value="12" data-position="21.397179, 103.005692">Điện Biên Phủ</option>
                                        <option value="13" data-position="19.902794, 105.469181">Thọ Xuân</option>
                                        <option value="14" data-position="16.397523, 107.700530">Phú Bài</option>
                                        <option value="15" data-position="15.414077, 108.704828">Chu Lai</option>
                                        <option value="16" data-position="14.004507, 108.016743">Pleiku</option>
                                        <option value="17" data-position="13.953083, 109.049136">Phù cát</option>
                                        <option value="18" data-position="13.044141, 109.339731">Tuy Hòa</option>
                                        <option value="19" data-position="17.514995, 106.590550">Đồng Hới</option>
                                        <option value="20" data-position="10.083023, 105.712588">Cần Thơ</option>
                                        <option value="21" data-position="11.752091, 108.372577">Liên Khương</option>
                                        <option value="22" data-position="9.961179, 105.1335811">Rạch Giá</option>
                                        <option value="24" data-position="9.176669, 105.175931">Cà Mau</option>
                                        <option value="26" data-position="8.732582, 106.628920">Côn Sơn</option>
                                        <option value="27" data-position="0, 0">Khac</option>
                                        <option value="25" data-position="">Khác</option>
                                    </select>
                                    <input type="text" class="datxe_form-control hide warn-must-input" value="" id="to_airport_input" name="to_airport_input" placeholder="Nhập tên sân bay"> </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding0">
                            <div class="row padding_top">
                                <div class="col-md-12"> Số hiệu chuyến bay <span class="red">(*)</span> </div>
                                <div class="col-md-12">
                                    <input type="text" class="datxe_form-control" value="" id="depart_plane_number" name="depart_plane_number" placeholder="VD: VN562, VN6022...hoặc VJ198, JS245.."> </div>
                            </div>
                        </div>
                        <div class="col-md-12 padding0">
                            <div class="row padding_top">
                                <div class="col-md-12"> Thời gian hạ cánh </div>
                                <div class="col-md-12 gender_date_time">
                                    <input name="depart_plane_date" id="depart_plane_date" class="form-control flatpickr-input" type="text" placeholder="Thời gian đón" readonly="readonly">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="popup_error" style="display: block;">Bạn chưa nhập số hiệu chuyến bay</div>
        </div>
    </div>
    <div id="popup_panel">
        <input type="button" value="&nbsp;OK&nbsp;" id="popup_ok" style="display: block;"> <img src="/images/loading.gif" class="loading" style="display: none;"></div>
</div>
-->