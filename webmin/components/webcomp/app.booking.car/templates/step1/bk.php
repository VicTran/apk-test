<div style="display: none"  id="form_input" class="box box-default collapsed-box">
    <div class="box-header" style="background: #FFFFFF;padding:0px;">
        <h3 class="box-title" ><button style="outline: none;color:#4469B0;font-weight: bold" type="button" class="btn btn-box-tool"  data-widget="collapse"> <i class="fa fa-plus" style="font-weight: normal"></i>&nbsp;&nbsp; Thay đổi tìm kiếm </button></h3>
    </div>
    <div class="box-body">

        <form id="frmDatXe" method="GET">
            <?
            $arDataXe = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/data/data-xe.php'));
            ?>
            <div class="tabbable">
                <div class="tab-content">
                    <div id="pane1" class="tab-pane active">
                        <div class="datxe2 info_step1" style="background: #f5f5f5;">
                            <div class=" pd_edit">
                                <div class="col-md-4 col-sm-4 padding_top bold">
                                    <strong><i class="fa fa-map-marker" style="font-size: 17px;"></i>&nbsp; Điểm đón</strong>
                                </div>
                                <div class="col-md-8 col-sm-8 padding_top ">
                                    <input class="datxe_form-control" autocomplete="off"
                                           id="searchInputGo" required name="depart_pick" placeholder="Điểm đến, sân bay hoặc khách sạn" value="<?=$_REQUEST["depart_pick"]?>"> </div>
                            </div>
                            <div class=" padding_top pd_edit">
                                <div class="col-md-4 col-sm-4 padding_top">
                                    <strong><i class="fa fa-map-marker" style="font-size: 17px;"></i>&nbsp; Điểm đến</strong>
                                </div>
                                <div class="col-md-8 col-sm-8 padding_top ">
                                    <input title="" class="datxe_form-control" autocomplete="off" id="searchInputTo" name="depart_drop" required value="<?=$_REQUEST["depart_drop"]?>"  placeholder="Điểm đến, sân bay hoặc khách sạn">
                                </div>
                            </div>
                            <div class="padding_top">
                                <div class="col-md-4 col-sm-4 padding_top">
                                    <strong><i class="fa fa-calendar"></i> Thời gian đón</strong>
                                </div>
                                <div class="col-md-8 col-sm-8 padding_top ride_date_time">
                                    <input autocomplete="off" type="text" class="datxe_form-control datepicker" required
                                           value="<?=$_REQUEST["depart_time"]?>" placeholder="Thời gian đón"
                                           name="depart_time" > </div>
                            </div>
                            <div class="padding_top">
                                <div class="col-md-4 col-sm-4 padding_top">
                                    <strong><i class="fa fa-car"></i> Loại xe</strong>
                                </div>
                                <div class="col-md-4 col-sm-4 padding_top">
                                    <select class="form-control" name="seat" id="vehicle_control">
                                        <option value="0">Số chỗ</option>
                                        <?foreach($arDataXe->CHO_NGOI as $item){
                                            if(($item->ID==$_REQUEST["seat"])){
                                                $ck = 'selected';
                                            }else{
                                                $ck = '';
                                            }
                                            ?>
                                            <option <?=$ck?> value="<?=$item->ID?>">Xe <?=$item->VALUE?> chỗ</option>
                                        <?}?>
                                    </select>
                                </div>
                            </div>

                            <div style="clear:both"></div>

                            <div class="padding_top col-md-12 col-sm-12">
                                <button type="submit" id="show_cost" class="btn btn_sm btn_blue">
                                    <i class="fa fa-search"></i>
                                    TÌM XE</button>
                            </div>
                            <div style="clear: both"></div>
                        </div>

                    </div>
                </div>
                <input type="hidden" id="depart_pick_pos" value="<?=$_REQUEST['depart_pick_pos']?>" name="depart_pick_pos">
                <input type="hidden" id="depart_drop_pos" value="<?=$_REQUEST['depart_drop_pos']?>" name="depart_drop_pos">

                <input type="hidden" id="book_type" value="<?=$_REQUEST['book_type']?>" name="book_type">
                <input type="hidden" value="25/04/2018 17:01<?//=$_REQUEST["depart_time"]?>" id="searchTime" name="searchTime">
                <input type="hidden" id="searchKeyword" name="searchKeyword">
                <input type="hidden" id="searchKM" name="searchKM">

            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>