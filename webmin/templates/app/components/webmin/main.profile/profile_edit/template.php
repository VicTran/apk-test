<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hồ sơ cá nhân
        <small>Chỉnh sửa thông tin người dùng</small>
      </h1>     
    </section>
    <!-- Main content -->
    <section class="content">         
          <div class="row">
      
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">               
                  <li <?if($_REQUEST['active']=='' || $_REQUEST['active']=='info'){?> class="active"<?}?>><a href="#settings" data-toggle="tab">
                  <i class="fa fa-info-circle" style="font-size: 20px;"></i> Thông tin
                  </a></li>
                  <li <?if($_REQUEST['active']=='bank'){?> class="active" <?}?>><a href="#bank" data-toggle="tab"><i style="font-size: 20px;" class="fa fa-bank"></i> Ngân hàng</a></li>                  
                </ul>
                <div class="tab-content">
                  <?=ShowError($arResult["strProfileError"]);?>                 
                  <?
                        if ($arResult['DATA_SAVED'] == 'Y')
                        	echo ShowNote("Đã cập nhật thành công!");
                  ?>
                  <div class="<?if($_REQUEST['active']=='' || $_REQUEST['active']=='info'){?>active<?}?> tab-pane" id="settings">                    
                    <form method="post" class="form-horizontal" name="form1" action="<?=$arResult["FORM_TARGET"]?>?" enctype="multipart/form-data">
                    <?=$arResult["BX_SESSION_CHECK"]?>
                    <input type="hidden" name="lang" value="<?=LANG?>"/>
                    <input type="hidden" name="ID" value="<?=$arResult["ID"]?>"/>  
                    <input type="hidden" name="active" value="<?=$_REQUEST['active']?>"/>                  
                       <!--
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-9">
                          <input type="text" name="NAME" class="form-control" value="<?=$arResult["arUser"]["NAME"]?>" id="inputName" placeholder="Name">
                        </div>
                      </div>--!>
                      <div class="form-group" style="display: none;">
                        <label for="inputEmail" class="col-sm-3 control-label">Tài khoản</label>
                        <div class="col-sm-9">
                          <input type="email" readonly="" name="LOGIN" value="<? echo $arResult["arUser"]["LOGIN"]?>" class="form-control" id="inputLogin" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group" style="display: none;">
                        <label for="inputEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" readonly=""  onchange="jQuery('#inputLogin').val(this.value);" name="EMAIL" value="<? echo $arResult["arUser"]["EMAIL"]?>" class="form-control" id="inputEmail" placeholder="Email">
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
                           <!--
                       <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Số điện thoại</label>
                        <div class="col-sm-9">
                          <input type="text" name="PERSONAL_PHONE" value="<? echo $arResult["arUser"]["PERSONAL_PHONE"]?>" class="form-control" id="inputPhone" >
                        </div>
                      </div>--!>
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
                        <label for="inputBienKiemSoat" class="col-sm-3 control-label">Ngày hợp tác</label>
                        <div class="col-sm-9">
                          <input type="text" readonly="" name="UF_NGAY_HOP_TAC" value="<?=$arResult["arUser"]["UF_NGAY_HOP_TAC"]?>" class="form-control" id="inputBienKiemSoat" >
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
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" value="Cập nhật" name="save" class="btn btn-success btn-lg">
                          <i class="fa fa-save"></i>
                          Cập nhật</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                  
                  <div class="<?if($_REQUEST['active']=='bank'){?>active<?}?> tab-pane" id="bank">
                        <form method="post" class="form-horizontal" name="form1" action="<?=$arResult["FORM_TARGET"]?>?" enctype="multipart/form-data">
                        <?=$arResult["BX_SESSION_CHECK"]?>
                        <input type="hidden" name="lang" value="<?=LANG?>"/>
                        <input type="hidden" name="active" value="<?=$_REQUEST['active']?>"/>
                        <input type="hidden" name="ID" value="<?=$arResult["ID"]?>"/>                    
                        <input type="email" style="display: none;" readonly="" name="LOGIN" value="<? echo $arResult["arUser"]["LOGIN"]?>" class="form-control" id="inputLogin" placeholder="Email">
                        <input type="email" readonly=""  style="display: none;"  name="EMAIL" value="<? echo $arResult["arUser"]["EMAIL"]?>" class="form-control" id="inputEmail" placeholder="Email">
                        
                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Số tài khoản</label>
                            <div class="col-sm-9">
                              <input type="text" name="UF_TAI_KHOAN_BANK" value="<? echo $arResult["arUser"]["UF_TAI_KHOAN_BANK"]?>" class="form-control" id="inputAddress" >
                            </div>
                          </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Tên ngân hàng</label>
                            <div class="col-sm-9">
                              <input type="text" name="UF_TEN_NGAN_HANG" value="<? echo $arResult["arUser"]["UF_TEN_NGAN_HANG"]?>" class="form-control" id="inputAddress" >
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Tên người thụ hưởng</label>
                            <div class="col-sm-9">
                              <input type="text" name="UF_TEN_THU_HUONG" value="<? echo $arResult["arUser"]["UF_TEN_THU_HUONG"]?>" class="form-control" id="inputAddress" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Tên chi nhánh thụ hưởng</label>
                            <div class="col-sm-9">
                              <input type="text" name="UF_TEN_CHI_NHANH" value="<? echo $arResult["arUser"]["UF_TEN_CHI_NHANH"]?>" class="form-control" id="inputAddress" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label">Tỉnh thành</label>
                            <div class="col-sm-9">
                              <input type="text" name="UF_TINH_THANH" value="<? echo $arResult["arUser"]["UF_TINH_THANH"]?>" class="form-control" id="inputAddress" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress" class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                              <input type="hidden" value="0" name="UF_TAI_KHOAN_DUNG">
                              <div class="checkbox">
                              <label>
                                      <input type="checkbox" value="1"
                              <?if($arResult["arUser"]["UF_TAI_KHOAN_DUNG"]==1){?> checked="" <?}?>
                               name="UF_TAI_KHOAN_DUNG"> Tôi xác nhận với APKIN thông tin tài khoản trên là đúng 
                              </label>
                              </div>                           
                              <small class="text-red">(lưu ý: sau khi đã xác nhận thì không thể chỉnh sửa, nếu có thay đổi vui lòng liên hệ với APKIN)</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button 
                              <?if($arResult["arUser"]["UF_TAI_KHOAN_DUNG"]==1){?> disabled="" <?}?> 
                              type="submit"  value="Chỉnh sửa" name="save" class="btn btn-success btn-lg">
                              <i class="fa fa-save"></i>
                              Lưu</button>
                            </div>
                          </div>
                          </form>
                  </div>
                  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->