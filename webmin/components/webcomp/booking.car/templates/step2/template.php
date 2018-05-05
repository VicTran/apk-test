<div class="col-md-8 customer_frame">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading headingOne" role="tab">
                <div class="panel-title">
                    <div data-toggle="collapse" data-parent="#accordion" class="collapsed"> <span class="addition_text bold">Thông tin khách hàng</span> </div>
                </div>
            </div>
            <form action="" method="post" id="frmCustomer">
                <div class="panel-collapse collapseOneBody" role="tabpanel" aria-labelledby="headingOne">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12" style="color: red;font-weight: bold" id="box_error">

                            </div>
                            <div class="col-md-4 padding_top">
                                <div class="has-error">
                                    <label class="control-label" for="fullname">Họ Tên*:</label>
                                    <input type="text" placeholder="Bạn hãy nhập họ và tên" class="form-control" name="fullname" id="fullname" value="<?=$_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME']?>"> </div>
                            </div>
                            <div class="col-md-4 padding_top">
                                <div class="has-error">
                                    <label class="control-label" for="phone">Điện thoại liên hệ*:</label>
                                    <input type="text" placeholder="Nhập số điện thoại" class="form-control" name="phone" id="phone" value="<?=$_SESSION["BOOKING"]['CUSTOMER']['PHONE']?>"> </div>
                            </div>
                            <div class="col-md-4 padding_top">
                                <label for="email">Email:</label>
                                <input class="form-control" name="email" id="email" value="<?=$_SESSION["BOOKING"]['CUSTOMER']['EMAIL']?>"> </div>
                            <div class="col-md-12 padding_top has-error">
                                <label for="address">Mô tả chi tiết địa chỉ trả cho lái xe:</label>
                                <input type="" class="form-control" name="address" placeholder="Ví dụ: ngõ 165 Thái Hà, Đống Đa, Hà Nội" id="address" value="<?=$_SESSION["BOOKING"]['CUSTOMER']['DIA_CHI_TRA']?>"> </div>


                            <div class="col-md-12 padding_top">
                                <label>Ghi chú:</label>
                                <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Bạn muốn lái xe chú ý điều gì?"><?=$_SESSION["BOOKING"]['CUSTOMER']['GHI_CHU']?></textarea>
                            </div>
	                        <?
	                        global $USER;
	                        if (!$USER->IsAuthorized()){
	                        ?>
                            <div class="col-md-12 padding_top">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 padding_top">
                                                <label>
                                                    <input <?if($_SESSION["BOOKING"]['CUSTOMER']['DANG_KY_THANH_VIEN']=="1"){?> checked="" <?}?> type="checkbox" name="khtx" id="khtx" value="1" onchange="registerToggle()"> Tôi muốn tạo tài khoản để được nhận ưu đãi của chương trình <a target="_blank" href="/thong-tin/khach-hang-thuong-xuyen-218">Khách hàng thường xuyên</a> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="register" style="display:<?=$_SESSION["BOOKING"]['CUSTOMER']['DANG_KY_THANH_VIEN']=="1"?"block":"none"?>">
                                <div class="col-md-4 padding_top">
                                    <div class="has-error">
                                        <label class="control-label" for="fullname">Tài khoản*:</label>
                                        <input type="text" placeholder="Nhập tên tài khoản" class="form-control" name="username" id="username" value="<?=$_SESSION["BOOKING"]['CUSTOMER']['USERNAME']?>" min="3"> </div>
                                </div>
                                <div class="col-md-4 padding_top">
                                    <div class="has-error">
                                        <label class="control-label" for="fullname">Mật khẩu*:</label>
                                        <input type="password" placeholder="Nhập mật khẩu" class="form-control" name="password" id="password" value="" min="6"> </div>
                                </div>
                                <div class="col-md-4 padding_top">
                                    <div class="has-error">
                                        <label class="control-label" for="fullname">Nhập lại mật khẩu*:</label>
                                        <input type="password" placeholder="Nhập lại mật khẩu" class="form-control" name="password_confirm" id="password_confirm" value="" min="6"> </div>
                                </div>
                            </div>
                            <?}?>
                        </div>
                        <div class="row padding_top"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <button onclick="saveCustomer()" class="btn btn_orange btn_lg booking_button">Đặt xe</button>
        </div>
        <div class="col-md-12 text-center padding_top">
            <p>Bấm <strong>Đặt xe</strong> đồng nghĩa với việc bạn đã đồng ý với <a href="/thong-tin/van-chuyen-hanh-khach-233" target="_blank">Chính sách Vận Chuyển</a> của dithatthich.vn </p>
        </div>
    </div>
</div>
<script>
    function saveCustomer(){
        $.ajax({
            type: "POST",
            url: "/ajax/save.customer.php",
            data: $("#frmCustomer").serialize(),
            dataType: "json",
            cache:false,
            async:false,
            success: function(data){
                if(data.success){
                    window.location.href = "/dat-xe/thanh-toan/"
                }else{
                    $("#box_error").html(data.error_text)
                }
            },
            error: function(){}
        });
    }
    function registerToggle(){
        if($('#khtx').is(":checked")){
            $('#register').show();
        }else{
            $('#register').hide();
        }
    }
</script>