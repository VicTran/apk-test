<div id="trip_info" class="col-md-4">
<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading headingOne" role="tab">
            <div class="panel-title">
                <div data-toggle="collapse" data-parent="#accordion" class="collapsed">
                    <div>Thông tin chuyến đi</div>
                </div>
            </div>
        </div>
        <div class="panel-collapse collapseOneBody" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="check_datxe white_bg">

                    <div class="row">
                        <div class="col-md-12">
                            <p><strong>Điểm đi</strong>: <?=$_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON']?></p>
                            <p><strong>Điểm đến</strong>: <?=$_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA']?></p>
                            <p><strong>Thời gian</strong>: <?=$_SESSION["BOOKING"]['INFO']['THOI_GIAN']?></p>
                        </div>
                        <div class="col-md-12">
                            <p><strong>Số chỗ ngồi</strong>: <?=$_SESSION["BOOKING"]['INFO']['SO_CHO_NGOI']?> chỗ</p>
                            <p><strong>Đời xe</strong>: <?=$_SESSION["BOOKING"]['INFO']['HANG_XE']?> <?=$_SESSION["BOOKING"]['INFO']['LOAI_XE']?> (<?=$_SESSION["BOOKING"]['INFO']['KIEU_XE']?>) </p>
                            <p><strong>Màu xe</strong>: <?=$_SESSION["BOOKING"]['INFO']['MAU_XE']?></p>
                            <p><strong>Số lượng</strong>: <?=$_SESSION["BOOKING"]['INFO']['SO_LUONG']?> Khách</p>
                        </div>
                        <div class="col-md-12">

                            <p><strong>Tài xế</strong>: <?=$_SESSION["BOOKING"]['INFO']['TAI_XE_NAME']?></p>
                        </div>
                    </div>
                    <hr>
                    <h3 class="text-right log_total_cost"><?=number_format($_SESSION["BOOKING"]['INFO']['GIA_CHUAN']) ?>đ</h3>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>