<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
  <section class="content">
    <div class="box">  
    <div class="box-header with-border">
      <h3 class="box-title">Thêm mới lái xe</h3>
      <div class="box-tools pull-right">
                                
              </div>
    </div><!-- /.box-header -->

<div class="box-body">
                  <?
                 
                  if (count($arResult["ERRORS"]) > 0)
                    {
                    	unset($arResult["ERRORS"]['PASSWORD']);
                        unset($arResult["ERRORS"]['CONFIRM_PASSWORD']);
                        unset($arResult["ERRORS"]['LOGIN']);    
                    	foreach ($arResult["ERRORS"] as $key => $error)
                    	{
                    	   $arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);        
                    	}
                    
                    	ShowError(implode("<br />", $arResult["ERRORS"]));
                    }
                                      ?>                    
                    <form method="post" action="<?=POST_FORM_ACTION_URI?>" class="form-horizontal" name="regform" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="email"  onchange="jQuery('#inputLogin').val(this.value);" name="REGISTER[EMAIL]" value="<?=$arResult["VALUES"]['EMAIL']?>" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Tài khoản <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="email" readonly=""  name="REGISTER[LOGIN]" value="<?=$arResult["VALUES"]['EMAIL']?>" class="form-control" id="inputLogin" >
                        </div>
                      </div>
                       <!--<div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Mật khẩu <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="REGISTER[PASSWORD]" id="inputNewPass">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassConfirm" class="col-sm-3 control-label">Nhập lại mật khẩu <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="password" class="form-control" name="REGISTER[CONFIRM_PASSWORD]" id="inputNewPass">
                          
                        </div>
                      </div>--!>                      
                      
                       <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ tên <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[NAME]" class="form-control" value="<?=$arResult["VALUES"]['NAME']?>" id="inputName" placeholder="Name">
                        </div>
                      </div>            
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Số điện thoại <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[PERSONAL_PHONE]" onchange="jQuery('#password_').val(this.value);jQuery('#password_confirm').val(this.value);" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" class="form-control" id="inputPhone" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Biển số xe <span class="starrequired"> * </span></label>
                        <div class="col-sm-6">
                          <input type="text" name="REGISTER[UF_BIEN_KIEM_SOAT]" value="<?=$arResult["VALUES"]['UF_BIEN_KIEM_SOAT']?>" class="form-control" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Loại đối tác</label>
                        <div class="col-sm-6">
                            <?
                            $arLoaiDoiTac = CCommon::getLoaiDoiTac_UserField();
                            ?>
                            <select class="form-control"  name="REGISTER[UF_LOAI_DOI_TAC]">
                            <?foreach($arLoaiDoiTac as $item){?>
                                <option <?if($arResult["VALUES"]["UF_LOAI_DOI_TAC"]==$item['ID']){echo 'selected';}?> value="<?=$item['ID']?>"><?=$item['VALUE']?></option>
                            <?}?>
                          </select>
                        </div>
                      </div>                          
                       
                       <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tình trạng</label>
                        <div class="col-sm-6">
                          <?
                            $arTinhTrangUser = CCommon::getTinhTrang_UserField();
                            ?>
                            <select class="form-control"  name="REGISTER[UF_TINH_TRANG]">
                            <?foreach($arTinhTrangUser as $item){?>
                                <option <?if($arResult["VALUES"]["UF_TINH_TRANG"]==$item['ID']){echo 'selected';}?> value="<?=$item['ID']?>"><?=$item['VALUE']?></option>
                            <?}?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Nhóm lái xe</label>
                        <div class="col-sm-6">                          
                            <select class="form-control"  name="REGISTER[GROUP_ID][]">
                            <?
                            $res = CGroup::GetList(($by="id"), ($order="asc"),array("ID"=>"4 | 6 | 8"));
                            while($ar_fields = $res->NavNext())
                            {
                               $hung[] = $ar_fields['ID'];
                                if($ar_fields['ID']==4 || $ar_fields['ID']==6){
                            ?>
                                <option <?if($arResult["VALUES"]["GROUP_ID"]==$ar_fields['ID']){echo 'selected';}?> value="<?=$ar_fields['ID']?>"><?=$ar_fields['NAME']?></option>
                                
                            <?}else{
                                $otherGroup[] = $ar_fields;
                            }}?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Nhóm khác</label>
                        <div class="col-sm-6">                          
                            <select class="form-control select2" multiple=""   name="REGISTER[GROUP_ID][]">
                            <?
                            foreach($otherGroup as $ar_fields_Other)
                            {?>
                                <option <?if($arResult["VALUES"]["GROUP_ID"]==$ar_fields_Other['ID']){echo 'selected';}?> value="<?=$ar_fields_Other['ID']?>"><?=$ar_fields_Other['NAME']?></option>
                            <?}?>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Ghi chú</label>
                        <div class="col-sm-6">
                          <textarea name="REGISTER[PERSONAL_NOTES]" class="form-control"><?=$arResult["VALUES"]["PERSONAL_NOTES"]?></textarea>
                        </div>
                      </div>
                      <input type="hidden" value="<?=$GLOBALS['USER']->GetID()?>" name="REGISTER[UF_CREATED_BY]" />
                      <input style="display: none;" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" type="password" class="form-control" id="password_" name="REGISTER[PASSWORD]" placeholder="Password">
                      <input style="display: none;" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" type="password" class="form-control" id="password_confirm" name="REGISTER[CONFIRM_PASSWORD]"  placeholder="Retype password">
                      
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