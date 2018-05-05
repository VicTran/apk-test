<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>

<div class="white_bg box_sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align: center">Đặt xe thành công</h3> </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title bold">Thông tin khách hàng</h4> </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="row">
                            <h5 class="bold">Người đặt</h5></div>
                            <div class="row">Họ Tên: <span class=" bold">ghf</span></div>
                            <div class="row">Thời gian đặt: <span class=" bold">14:19 12/12/2017 </span></div>
                            <div class="row">Số điện thoại: <span class=" bold">0999999999</span></div>
                            <div class="row">Địa chỉ: <span class=" bold">fsdfs</span></div>
                            <div class="row">Ghi chú: <span class=" bold"></span></div>
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
                                <p style="font-size: 18px">Mã vé: 280022</p>
                                <p class="hightlight">Nội Bài - Hà Nội</p>
                                <p>Giờ đi: <span class="w50 ilbl"> <span class="view bold">2:30 chiều</span> <span class="edit hide"> <select id="depart_time" name="depart_time" tic="280022"> <option value="1">0:00 sáng</option> <option value="2">0:15 sáng</option> <option value="3">0:30 sáng</option> <option value="4">0:45 sáng</option> <option value="5">1:00 sáng</option> <option value="6">1:15 sáng</option> <option value="7">1:30 sáng</option> <option value="8">1:45 sáng</option> <option value="9">2:00 sáng</option> <option value="10">2:15 sáng</option> <option value="11">2:30 sáng</option> <option value="12">2:45 sáng</option> <option value="13">3:00 sáng</option> <option value="14">3:15 sáng</option> <option value="15">3:30 sáng</option> <option value="16">3:45 sáng</option> <option value="17">4:00 sáng</option> <option value="18">4:15 sáng</option> <option value="19">4:30 sáng</option> <option value="20">4:45 sáng</option> <option value="21">5:00 sáng</option> <option value="22">5:15 sáng</option> <option value="23">5:30 sáng</option> <option value="24">5:45 sáng</option> <option value="25">6:00 sáng</option> <option value="26">6:15 sáng</option> <option value="27">6:30 sáng</option> <option value="28">6:45 sáng</option> <option value="29">7:00 sáng</option> <option value="30">7:15 sáng</option> <option value="31">7:30 sáng</option> <option value="32">7:45 sáng</option> <option value="33">8:00 sáng</option> <option value="34">8:15 sáng</option> <option value="35">8:30 sáng</option> <option value="36">8:45 sáng</option> <option value="37">9:00 sáng</option> <option value="38">9:15 sáng</option> <option value="39">9:30 sáng</option> <option value="40">9:45 sáng</option> <option value="41">10:00 sáng</option> <option value="42">10:15 sáng</option> <option value="43">10:30 sáng</option> <option value="44">10:45 sáng</option> <option value="45">11:00 sáng</option> <option value="46">11:15 sáng</option> <option value="47">11:30 sáng</option> <option value="48">11:45 sáng</option> <option value="49">12:00 sáng</option> <option value="50">12:15 chiều</option> <option value="51">12:30 chiều</option> <option value="52">12:45 chiều</option> <option value="53">1:00 chiều</option> <option value="54">1:15 chiều</option> <option value="55">1:30 chiều</option> <option value="56">1:45 chiều</option> <option value="57">2:00 chiều</option> <option value="58">2:15 chiều</option> <option value="59" selected="selected">2:30 chiều</option> <option value="60">2:45 chiều</option> <option value="61">3:00 chiều</option> <option value="62">3:15 chiều</option> <option value="63">3:30 chiều</option> <option value="64">3:45 chiều</option> <option value="65">4:00 chiều</option> <option value="66">4:15 chiều</option> <option value="67">4:30 chiều</option> <option value="68">4:45 chiều</option> <option value="69">5:00 chiều</option> <option value="70">5:15 chiều</option> <option value="71">5:30 chiều</option> <option value="72">5:45 chiều</option> <option value="73">6:00 chiều</option> <option value="74">6:15 chiều</option> <option value="75">6:30 chiều</option> <option value="76">6:45 chiều</option> <option value="77">7:00 Tối</option> <option value="78">7:15 Tối</option> <option value="79">7:30 Tối</option> <option value="80">7:45 Tối</option> <option value="81">8:00 Tối</option> <option value="82">8:15 Tối</option> <option value="83">8:30 Tối</option> <option value="84">8:45 Tối</option> <option value="85">9:00 Tối</option> <option value="86">9:15 Tối</option> <option value="87">9:30 Tối</option> <option value="88">9:45 Tối</option> <option value="89">10:00 Tối</option> <option value="90">10:15 Tối</option> <option value="91">10:30 Tối</option> <option value="92">10:45 Tối</option> <option value="93">11:00 Tối</option> <option value="94">11:15 Tối</option> <option value="95">11:30 Tối</option> <option value="96">11:45 Tối</option> </select> </span> </span>
                                </p>
                                <p>Ngày đi: <span class="w50 ilbl"> <span class="view bold">12/12/2017</span> <span class="edit hide"><input style="width: 88px;padding: 3px;" name="depart_date" tic="280022" id="depart_date_" value="2017-12-12" class="hasDatepicker"></span>

                                    </span>
                                </p>
                                <p>Phương tiện: <span class=" bold">4 chỗ xe nhỏ</span></p>
                                <p>Hình thức: <span class=" bold">Đi chung</span></p>
                                <p>Đón khách: <span class=" bold">Sân bay Nội bài</span></p>
                                <p>Trả khách: <span class=" bold">Phường Láng Hạ, Quận Đống Đa, Hà Nội</span></p>
                                <p>Số lượng: <span class=" bold">1 Khách</span></p>
                                <p>Hình thức thanh toán: <span class=" bold">Trả sau</span> </p>
                                <div style="clear: both"></div>
                            </div>
                            <div class="ticket total_price">
                                <h4>Giá vé:</h4>
                                <h3 class="bold"> 160.000đ</h3> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title bold">THÔNG TIN LÁI XE</h3> </div>
                        <div class="panel-body">
                            <p>Tuyến: <span class=" bold">Nội Bài - Hà Nội</span> </p>
                            <p>Tình trạng: <span class=" bold">Chưa xuất phát</span> </p>
                            <p>Tên lái xe: <span class=" bold"></span></p>
                            <p>Điện thoại: <span class=" bold"></span></p>
                            <p>Biển số xe: <span class=" bold"></span></p>
                            <hr> <i><div> Lưu ý Quý khách sẽ nhận được thông tin số điện thoại tài xế sau khi điều hành điều xe,
                                    thông thường trước chuyến đi 30-60p.</div> </i> </div>
                    </div>
                    <div class="rating_frame w50 flL">
                        <table class="ticket_table w100" cellpadding="1" cellspacing="1"> </table>
                    </div>
                    <form method="post" class="hide" id="formShowRating" action="//dichungtaxi.com/prepare/web_feedback?id=280022">
                        <div class="">
                            <div style="text-align:justify;padding-bottom: 10px;padding-top: 10px">
                                <p>Để giúp Dichungtaxi hoàn thiện chất lượng dịch vụ. Bạn hãy đánh giá và phản hồi về chuyến đi của mình. Chân thành cám ơn!</p>
                            </div>
                            <div style="text-align: center">
                                <input type="hidden" id="input-2-ltr-star-md rating-customer" name="rating[all]" class="kv-ltr-theme-fa-star rating-loading rating-customer" value="" dir="ltr" data-size="md"> </div>
                        </div>
                        <textarea name="rating[comment]" style="height: 60px;width: 100% !important;margin-top: 25px;border-radius: 3px" placeholder="Chia sẻ phản hồi của bạn"></textarea>
                        <div class="ride_info" style="padding: 10px;"> <a href="#ride_info_collapse_tmp" data-toggle="collapse">Thông tin chuyến đi</a>
                            <div id="ride_info_collapse_tmp" class="collapse" style="background: rgb(246, 247, 248); color: rgb(72, 72, 72); padding: 10px; border-radius: 10px; height: 20px;">
                                <p>Thông tin chuyến đi Thứ Ba, 12/12/2017 </p>
                                <p>Mã vé:280022</p>
                                <p>Đón khách:Sân bay Nội bài</p>
                                <p>Trả khách:Phường Láng Hạ, Quận Đống Đa, Hà Nội</p>
                                <p>Đơn vị vận chuyển: vietgocar.com</p>
                            </div>
                        </div>
                    </form>

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
                    <p class="bold title"> <i class="fa fa-info-circle"> </i> Lưu ý: </p> - Miễn phí thay đổi thông tin chuyến đi
                    <br>- Trong trường hợp bất khả kháng, nếu tài xế không có mặt đúng giờ, quý khách có thể chủ động bắt xe khác để đảm bảo chuyến đi của mình. Dichungtaxi cam kết chịu trách nhiệm phần giá chênh lệch.
                    <br>- Nếu quý khách cung câp đầy đủ thông tin chuyến bay, chúng tôi đảm bảo vẫn sẽ đón quý khách nếu quý khách bị chậm chuyến.
                    <br>- Dichungtaxi.com cam kết chất lượng dịch vụ, chất lượng lái xe cho những chuyến đi đặt tại Dichungtaxi.com. Chúng tôi không cam kết chất lượng dịch vụ, các điều khoản bồi thường nếu quý khách đặt xe trực tiếp với lái xe. </div>
            </div>
            <div class="col-md-12 box_md">
                <h3 style="text-align: center">Cảm ơn quý khách đã sử dụng dịch vụ của vietgocar.com</h3>
                <div style="text-align: center;">
                    <div class="col-md-3 padding_top" style="float: none; display: inline-block;">
                        <!-- href="https://dichungtaxi.com/dat-xe?dimension=1&amp;chunk=1&amp;city_id=24&amp;depart_district=0,3118,227&amp;utm_campaign=homepage&amp;ride_date=14:30%2012/12/2017" --><a class="btn btn_blue" id="booking_return_trip" title="https://dichungtaxi.com/dat-xe?dimension=1&amp;chunk=1&amp;city_id=24&amp;depart_district=0,3118,227&amp;utm_campaign=homepage&amp;ride_date=14:30%2012/12/2017" readonly="readonly" style="cursor: pointer;">Đặt xe chiều về</a> </div>
                    <div class="col-md-3 padding_top" style="float: none; display: inline-block;"> <a class="btn btn_orange" href="https://dichungtaxi.com">Đặt xe tại sân bay đến</a> </div>
                    <div style="float: none; display: inline-block; color:#fff" class="col-md-3 padding_top"> <a href="#" style="color: #fff" class="btn btn-danger cancel_booking">Huỷ đặt xe</a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");
?>