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
                  
                  
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->