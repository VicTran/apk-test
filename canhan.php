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
                        <td class="">3. Hoàn tất</td>
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
            <div class="col-md-8 customer_frame">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading headingOne" role="tab">
                            <div class="panel-title">
                                <div data-toggle="collapse" data-parent="#accordion" class="collapsed"> <span class="addition_text bold">Thông tin khách hàng</span> </div>
                            </div>
                        </div>
                        <div class="panel-collapse collapseOneBody" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-4 padding_top">
                                        <div class="has-error">
                                            <label class="control-label" for="fullname">Họ Tên*:</label>
                                            <input type="text" placeholder="Bạn hãy nhập họ và tên" class="form-control" name="fullname" id="fullname" value=""> </div>
                                    </div>
                                    <div class="col-md-4 padding_top">
                                        <div class="has-error">
                                            <label class="control-label" for="phone">Điện thoại liên hệ*:</label>
                                            <input type="text" placeholder="Nhập số điện thoại" class="form-control" name="phone" id="phone" value=""> </div>
                                    </div>
                                    <div class="col-md-4 padding_top">
                                        <label for="email">Email:</label>
                                        <input class="form-control" name="email" id="email" value=""> </div>
                                    <div class="col-md-12 padding_top has-error">
                                        <label for="address">Mô tả chi tiết địa chỉ trả cho lái xe:</label>
                                        <input type="" class="form-control" name="address" placeholder="Ví dụ: ngõ 165 Thái Hà, Đống Đa, Hà Nội" id="address" value=""> </div>


                                    <div class="col-md-12 padding_top">
                                        <label>Ghi chú:</label>
                                        <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Bạn muốn lái xe chú ý điều gì?"></textarea>
                                    </div>

                                    <div class="col-md-12 padding_top">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 padding_top">
                                                        <label>
                                                            <input checked="" type="checkbox" id="khtx" value="1"> Tôi muốn tạo tài khoản để được nhận ưu đãi của chương trình <a target="_blank" href="/thong-tin/khach-hang-thuong-xuyen-218">Khách hàng thường xuyên</a> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row padding_top"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <button class="btn btn_orange btn_lg booking_button">Đặt xe</button>
                    </div>
                    <div class="col-md-12 text-center padding_top">
                        <p>Bấm <strong>Đặt xe</strong> đồng nghĩa với việc bạn đã đồng ý với <a href="/thong-tin/van-chuyen-hanh-khach-233" target="_blank">Chính sách Vận Chuyển</a> của dithatthich.vn </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?
                $APPLICATION->IncludeComponent("webcomp:static", "trip.info", array(
                    
                ),
                    false
                );
                ?>

            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>