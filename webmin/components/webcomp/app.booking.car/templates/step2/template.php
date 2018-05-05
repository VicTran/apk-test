<div class="customer_frame" style="padding: 10px">
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
                            <div class="col-md-12 padding_top">
                                <div class="has-error">
                                    <label class="control-label" for="fullname">Họ Tên*:</label>
                                    <input type="text" placeholder="Bạn hãy nhập họ và tên" class="form-control" name="fullname" id="fullname" value=""> </div>
                            </div>
                            <div class="col-md-12 padding_top">
                                <div class="has-error">
                                    <label class="control-label" for="phone">Điện thoại liên hệ*:</label>
                                    <input type="text" placeholder="Nhập số điện thoại" class="form-control" name="phone" id="phone" value=""> </div>
                            </div>

                            <div class="col-md-12 padding_top">
                                <label>Ghi chú:</label>
                                <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Bạn muốn lái xe chú ý điều gì?"></textarea>
                            </div>

                        </div>
                        <div class="row padding_top"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <button onclick="saveCustomer()" class="btn btn_lg btn_blue"><i class="fa fa-phone"></i> &nbsp;&nbsp;LIÊN HỆ LÁI XE</button>
        </div>

        <div class="col-md-offset-4 col-md-4" style="display:none;padding-top: 10px">
            <button onclick="" class="btn btn_lg btn_orange"><i class="fa fa-cancel"></i> HỦY CHUYẾN</button>
        </div>
    </div>
</div>
<script>
    function saveCustomer(){
        $.ajax({
            type: "POST",
            url: "/ajax/app.save.customer.php",
            data: $("#frmCustomer").serialize(),
            dataType: "json",
            cache:false,
            async:false,
            success: function(data){
                if(data.success){
                    window.location.href = "/app.book/app/book/step3/"
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