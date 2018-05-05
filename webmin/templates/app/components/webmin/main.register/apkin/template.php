<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
  <section class="content">
    <div class="box">  
    <div class="box-header with-border">
      <h3 class="box-title">Chỉnh sửa/thêm mới lái xe</h3>
      <div class="box-tools pull-right">
                                
              </div>
    </div><!-- /.box-header -->

<div class="box-body">
                  <?
                  if (count($arResult["ERRORS"]) > 0)
                    {
                    	foreach ($arResult["ERRORS"] as $key => $error)
                    	{
                    		if (intval($key) <= 0) 
                    			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);
                    	}
                    
                    	ShowError(implode("<br />", $arResult["ERRORS"]));
                    }
                                      ?>                    
                    <form method="post" action="<?=POST_FORM_ACTION_URI?>" class="form-horizontal" name="regform" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-6">
                          <input type="email"  onchange="jQuery('#inputLogin').val(this.value);" name="REGISTER[EMAIL]" value="" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Tài khoản</label>
                        <div class="col-sm-6">
                          <input type="email" readonly=""  name="REGISTER[LOGIN]" value="" class="form-control" id="inputLogin" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="REGISTER[PASSWORD]" id="inputNewPass">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassConfirm" class="col-sm-3 control-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="REGISTER[CONFIRM_PASSWORD]" id="inputNewPass">
                          
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[NAME]" class="form-control" value="" id="inputName" placeholder="Name">
                        </div>
                      </div>            
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[PERSONAL_PHONE]" value="" class="form-control" id="inputPhone" >
                        </div>
                      </div>   
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Ngày sinh</label>
                        <div class="col-sm-6">                            
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" name="REGISTER[PERSONAL_BIRTHDAY]" value="" class="form-control pull-right active" id="birthday">
                            </div>
                            <!-- /.input group -->
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[PERSONAL_STREET]" value="" class="form-control" id="inputPhone" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Vị trí</label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[PERSONAL_PROFESSION]" value="" class="form-control" id="inputPhone" >
                        </div>
                      </div>               
                     <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">ID Grab</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_ID_GRAB" value="" class="form-control" >
                        </div>
                      </div>  
                           <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Biển số xe</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_BIEN_KIEM_SOAT" value="" class="form-control" >
                        </div>
                      </div>                                
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Hệ số VAT</label>
                        <div class="col-sm-6">
                            <select class="form-control"  name="UF_HE_SO_VAT">
                            <option <?if($arResult["arUser"]["UF_HE_SO_VAT"]==0){echo 'selected';}?> value="0">0</option>
                            <option <?if($arResult["arUser"]["UF_HE_SO_VAT"]==1 || $arResult["arUser"]["UF_HE_SO_VAT"]==''){echo 'selected';}?> value="1">1</option>
                          </select>
                        </div>
                      </div>  
                      
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Loại đối tác</label>
                        <div class="col-sm-6">
                            <?
                            $arLoaiDoiTac = CCommon::getLoaiDoiTac_UserField();
                            ?>
                            <select class="form-control"  name="UF_LOAI_DOI_TAC">
                            <?foreach($arLoaiDoiTac as $item){?>
                                <option <?if($arResult["arUser"]["UF_LOAI_DOI_TAC"]==$item['ID']){echo 'selected';}?> value="<?=$item['ID']?>"><?=$item['VALUE']?></option>
                            <?}?>
                          </select>
                        </div>
                      </div> 
                      
                       <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">Ngày bắt đầu hợp tác</label>
                            <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" name="UF_NGAY_HOP_TAC" value="<?=$arResult["arUser"]["UF_NGAY_HOP_TAC"]?>" class="form-control pull-right active" id="uf_ngay_hop_tac">
                            </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          
                            <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">Ngày dừng hợp tác</label>
                            <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" name="UF_NGAY_KT_HOP_TAC" value="<?=$arResult["arUser"]["UF_NGAY_KT_HOP_TAC"]?>" class="form-control pull-right active" id="uf_dung_hop_tac">
                            </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                       
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tài khoản thụ hưởng</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TAI_KHOAN_BANK" value="" class="form-control" >
                        </div>
                      </div>  
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tiền tệ</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TIEN_TE" value="" class="form-control" >
                        </div>
                      </div>  
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tên người thụ hưởng</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TEN_THU_HUONG" value="" class="form-control" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Mã ngân hàng thụ hưởng</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_MA_NGAN_HANG" value="" class="form-control" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tên ngân hàng thụ hưởng</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TEN_NGAN_HANG" value="" class="form-control" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tên chi nhánh thụ hưởng</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TEN_CHI_NHANH" value="" class="form-control" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Tỉnh thành phố</label>
                        <div class="col-sm-6">
                          <input type="text" name="UF_TINH_THANH" value="" class="form-control" >
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tình trạng</label>
                        <div class="col-sm-6">
                          <?
                            $arTinhTrangUser = CCommon::getTinhTrang_UserField();
                            ?>
                            <select class="form-control"  name="UF_TINH_TRANG">
                            <?foreach($arTinhTrangUser as $item){?>
                                <option <?if($arResult["arUser"]["UF_TINH_TRANG"]==$item['ID']){echo 'selected';}?> value="<?=$item['ID']?>"><?=$item['VALUE']?></option>
                            <?}?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Ghi chú</label>
                        <div class="col-sm-6">
                          <textarea name="PERSONAL_NOTES" class="form-control"><?=$arResult["arUser"]["PERSONAL_NOTES"]?></textarea>
                        </div>
                      </div>
                      
</div>

<div class="box-footer">
<div class="form-group">

            <button value="ok" type="submit" name="register_submit_button" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp; Cập nhật</button>
            &nbsp;
            <button type="button" onclick="window.location.href='<?=$arParams['SUCCESS_PAGE']?>'" class="btn btn-default"><i class="fa fa-mail-reply"></i>&nbsp; Trở lại</button>
</div>     
      </div>
      
      </div></form>
      </section>
      </div>