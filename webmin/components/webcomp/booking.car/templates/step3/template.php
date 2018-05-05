
<div class="col-md-8 payment_frame">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading headingOne" role="tab">
                <div class="panel-title">
                    <div data-toggle="collapse" data-parent="#accordion" class="collapsed">
                        <span class=" bold">Lựa chọn hình thức thanh toán</span>
                    </div>
                </div>
            </div>
            <div class="panel-collapse collapseOneBody" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="col-md-12" style="color: red;font-weight: bold" id="box_error">

                    </div>

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
                    <script>
                        function savePayment(){
                            $.ajax({
                                type: "POST",
                                url: "/ajax/save.payment.php",
                                data: $("#frmPayment").serialize(),
                                dataType: "json",
                                cache:false,
                                async:false,
                                success: function(data){
                                    if(data.success && data.Booking_id > 0){
                                        window.location.href = "/dat-xe/thanh-cong/?booking_id="+data.Booking_id
                                    }else{
                                        $("#box_error").html(data.error_text)
                                    }
                                },
                                error: function(){}
                            });
                        }
                    </script>
                    <div class="row">
                        <div class="col-md-12">
                            <?
                            global $HinhThuc_ThanhToan;
                            ?>
                            <form action="" method="POST" id="frmPayment">
                            <div class="row box_xs payment_rows">
                                <div class="row col-md-12 col-ms-12 col-xs-12">
                                    <label for="payment_method_id3" class="payment_method_radio_select ">
                                        <input class="" checked="" type="radio" id="payment_method_id3" name="payment_method_id" value="<?=$HinhThuc_ThanhToan["Tra_sau"]?>"> Trả sau </label>
                                    <div class="col-md-12 pay_desc" data-id="3">
                                        <p>Thanh toán trực tiếp cho lái xe ngay sau khi kết thúc chuyến đi.</p>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row" id="btnBook">
        <div class="col-md-offset-4 col-md-4" style="text-align: center;">
            <button onclick="savePayment()" class="btn btn_blue btn_lg" id="payment_button">Hoàn thành đặt xe</button>
        </div>
    </div>
</div>
