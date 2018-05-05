<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?if($_POST["searchKeyword"]!="" && $_POST["searchKM"]!="" && $_POST["searchTime"]!="") {
    $arResult =  json_decode(file_get_contents("http://doitac.apkin.vn/wsdl/dat-xe/search.php"));
?>
    <? for ($i = 0; $i <= count($arResult); $i++) {
        $result .= '<div class="showxe_box"><div style="padding: 20px 0px;"><div class="row">
                <div class="col-md-3">
                    <p class="h4 text-uppercase"> SATSCO Miền Bắc </p>
                    <p><div class="starrr" data-value="4" id="star2"></div></p>
                </div>
                <div class="col-md-2 text-center img-col">
                    <img width="150" alt="4 Chỗ" title="4 Chỗ" src="https://taxiairport.vn/uploads/partner_vehicle/2c2953012d35315353cefe1cb305a323.png"> </div>
                <div class="col-md-3">
                    <p class="h6 partner_note hide"></p>
                    <p class="h6"> <i class="fa fa-car"></i> <span class="vehicle_name">Loại xe: <b>4 chỗ</b></span> </p>
                    <p class="h6"> <i class="fa fa-paint-brush"></i> <span class="vehicle_name">Màu: <b>Vàng</b></span> </p>
                    <p class="h6 luggage"><i class="glyphicon glyphicon-briefcase"></i> 1 Vali vừa + 1 Túi xách </p>
                </div>
                <div class="col-md-2 text-center">
                    <div class="gia">
                        <p class="h6 vehicle_frame"> <label> <span class="vehicle_unit">Số khách</span>:
                                <span class="vehicle_count_text">1</span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                <select  class="chair_id">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </label>
                        </p>
                        <p class="total_price h3 margin_bottom_0x">230.000đ</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="gia text-right padding_top">
                        <div class="radio book">
                            <label class="radio_label" for="depart_book_select_153_1">
                                <input type="radio" class="hide" name="depart_book_select" id="depart_book_select_153_1">
                                <a class="btn btn_blue book_noncheck">Chọn Xe</a> <span class="btn book_noncheck_disabled hide dis">Chọn Xe</span> </label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="partner_id" value="153">
            <input type="hidden" class="vehicle_service_id" value="1">
            <input type="hidden" class="vehicle_id" data-seat-count="4" value="1" data-vehicle-service-id="1">
        </div>
    </div>
    <script>
     $(\'.chair_id\').change(function() {
            $(this).parent().find(\'.vehicle_count_text\').text($(this).val());
        });
    $(function() {
            $(".starrr").each(function(){
                $(this).starrr({
                    readOnly: true,
                    rating: $(this).attr(\'data-value\')
                });
            });

        });
</script>
    ';
    }
    $rsResult['success'] = true;
    $rsResult['html'] = $result;
    $json = json_encode($rsResult);
    echo $json;
    exit();

}
?>
