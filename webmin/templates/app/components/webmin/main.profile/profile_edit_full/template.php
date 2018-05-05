<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hồ sơ cá nhân
        <small>Chỉnh sửa thông tin người dùng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Màn hình điều khiển</a></li>
        <li class="active">Hồ sơ cá nhân</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">         
          <div class="row">
            <div class="col-md-3">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?=SITE_TEMPLATE_PATH?>/images/noavatar.png" alt="User profile picture">
                  <h3 class="profile-username text-center"><?=$arResult["arUser"]["NAME"]?></h3>
                  <p class="text-muted text-center"><?=$arResult["arUser"]["PERSONAL_PROFESSION"]?>
                   <small>
          <?if($arResult["arUser"]["UF_ID_GRAB"]!=''){?>
          [<?=$arResult["arUser"]["UF_ID_GRAB"]?>]
          <?}?>
          </small>
                  </p>  
                                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- About Me Box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">               
                  <li class="active"><a href="#settings" data-toggle="tab">Thông tin cá nhân</a></li>
                                    
                </ul>
                <div class="tab-content">
                  <?=ShowError($arResult["strProfileError"]);?>                 
                  <?
                        if ($arResult['DATA_SAVED'] == 'Y')
                        	echo ShowNote("Đã cập nhật thành công!");
                        ?>
                  <div class="active tab-pane" id="settings">
                    
                    <form method="post" class="form-horizontal" name="form1" action="<?=$arResult["FORM_TARGET"]?>?" enctype="multipart/form-data">
                    <?=$arResult["BX_SESSION_CHECK"]?>
                    <input type="hidden" name="lang" value="<?=LANG?>"/>
                    <input type="hidden" name="ID" value="<?=$arResult["ID"]?>"/>                    
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email"  onchange="jQuery('#inputLogin').val(this.value);" name="EMAIL" value="<? echo $arResult["arUser"]["EMAIL"]?>" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Tài khoản</label>
                        <div class="col-sm-9">
                          <input type="email" readonly="" name="LOGIN" value="<? echo $arResult["arUser"]["LOGIN"]?>" class="form-control" id="inputLogin" placeholder="Email">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Mật khẩu mới</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="NEW_PASSWORD" id="inputNewPass">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassConfirm" class="col-sm-3 control-label">Nhập lại mật khẩu mới</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="NEW_PASSWORD_CONFIRM" id="inputNewPass">
                          
                        </div>
                      </div>
                         <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-9">
                          <input type="text" name="NAME" class="form-control" value="<?=$arResult["arUser"]["NAME"]?>" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      
                   
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-9">
                          <input type="text" name="PERSONAL_PHONE" value="<? echo $arResult["arUser"]["PERSONAL_PHONE"]?>" class="form-control" id="inputPhone" >
                        </div>
                      </div>
                         <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">Ngày sinh</label>
                            <div class="col-sm-9">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" name="PERSONAL_BIRTHDAY" value="<?=$arResult["arUser"]["PERSONAL_BIRTHDAY"]?>" class="form-control pull-right active" id="birthday">
                            </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                            <div class="form-group">
                        <label for="inputAddress" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                          <input type="text" name="PERSONAL_STREET" value="<? echo $arResult["arUser"]["PERSONAL_STREET"]?>" class="form-control" id="inputAddress" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputJobTitle" class="col-sm-3 control-label">Vị trí</label>
                        <div class="col-sm-9">
                          <input type="text" name="PERSONAL_PROFESSION" value="<?=$arResult["arUser"]["PERSONAL_PROFESSION"]?>" class="form-control" id="inputJobTitle" >
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="inputAddress" class="col-sm-3 control-label">ID Grab</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_ID_GRAB" value="<? echo $arResult["arUser"]["UF_ID_GRAB"]?>" class="form-control" id="inputAddress" >
                        </div>
                      </div>
                         <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Biển số xe</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_BIEN_KIEM_SOAT" value="<?=$arResult["arUser"]["UF_BIEN_KIEM_SOAT"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div>    
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Hệ số VAT</label>
                        <div class="col-sm-9">
                            <select class="form-control"  name="UF_HE_SO_VAT">
                            <option <?if($arResult["arUser"]["UF_HE_SO_VAT"]==0){echo 'selected';}?> value="0">0</option>
                            <option <?if($arResult["arUser"]["UF_HE_SO_VAT"]==1 || $arResult["arUser"]["UF_HE_SO_VAT"]==''){echo 'selected';}?> value="1">1</option>
                          </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Loại đối tác</label>
                        <div class="col-sm-9">
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
                            <div class="col-sm-9">
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
                            <div class="col-sm-9">
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
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tài khoản thụ hưởng</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TAI_KHOAN_BANK" value="<?=$arResult["arUser"]["UF_TAI_KHOAN_BANK"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div>   
                      
                       <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tiền tệ</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TIEN_TE" value="<?=$arResult["arUser"]["UF_TIEN_TE"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div>   
                      
                        <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tên người thụ hưởng</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TEN_THU_HUONG" value="<?=$arResult["arUser"]["UF_TEN_THU_HUONG"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div>   
                       <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Mã ngân hàng thụ hưởng</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_MA_NGAN_HANG" value="<?=$arResult["arUser"]["UF_MA_NGAN_HANG"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tên ngân hàng thụ hưởng</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TEN_NGAN_HANG" value="<?=$arResult["arUser"]["UF_TEN_NGAN_HANG"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tên chi nhánh thụ hưởng</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TEN_CHI_NHANH" value="<?=$arResult["arUser"]["UF_TEN_CHI_NHANH"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tỉnh thành phố</label>
                        <div class="col-sm-9">
                          <input type="text" name="UF_TINH_THANH" value="<?=$arResult["arUser"]["UF_TINH_THANH"]?>" class="form-control" id="inputBienKiemSoat" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                          <input type="hidden" value="0" name="UF_TAI_KHOAN_DUNG">
                          <div class="checkbox">
                              <label>
                                <input type="checkbox" value="1"
                              <?if($arResult["arUser"]["UF_TAI_KHOAN_DUNG"]==1){?> checked="" <?}?>
                               name="UF_TAI_KHOAN_DUNG"/> Đã xác nhận đúng tài khoản
                              </label>
                            </div>
                              
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Tình trạng</label>
                        <div class="col-sm-9">
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
                        <div class="col-sm-9">
                          <textarea name="PERSONAL_NOTES" class="form-control"><?=$arResult["arUser"]["PERSONAL_NOTES"]?></textarea>
                        </div>
                      </div>                                                       
                      <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" value="Cập nhật" name="save" class="btn btn-primary">
                          <i class="fa fa-save"></i>
                          Cập nhật</button>
                          &nbsp;
                       <button type="button" onclick="window.location.href='<?=$arParams['REDIRECT_URL']?>'" class="btn btn-default"><i class="fa fa-mail-reply"></i>&nbsp; Trở lại</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->