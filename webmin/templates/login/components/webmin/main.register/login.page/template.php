<?
if (isset($_POST["register_submit_button"]) && !empty($_POST["register_submit_button"]))
    {
        
 ?>
       <script type="text/javascript"> 
       $(document).ready(function(){
           $('#myModal').modal('show');
       });
      </script>
<?}?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  
aria-labelledby="myModalLabel" 
aria-hidden="true">
<div class="modal-dialog">
 <div class="modal-content">
    <div class="modal-header">
    
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Đăng ký</h4>
   </div>
 <div class="modal-body">
<div class="register-box" style="width:100%;margin-top: 0px;margin-bottom: 0px;">
  <div class="register-logo" style="margin-bottom: 0px !important;">
      <img style="width: 220px" src="<?=SITE_TEMPLATE_PATH?>/images/logo-vietgo.png" />
  </div>
  <div class="register-box-body">
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
    if(!$arResult['REGISTER_DONE']){
?>    
    <form method="post" id="frmRegister" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" value="<?=$arResult["VALUES"]['NAME']?>" name="REGISTER[NAME]" placeholder="Họ tên">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text"  class="form-control" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" onchange="jQuery('#password_').val(this.value);jQuery('#password_confirm').val(this.value);jQuery('#inputLogin').val(this.value);" name="REGISTER[PERSONAL_PHONE]" placeholder="Số điện thoại">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" value="<?=$arResult["VALUES"]['EMAIL']?>"  name="REGISTER[EMAIL]" placeholder="Email">
        <input type="hidden"  name="REGISTER[LOGIN]" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" id="inputLogin" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

        
      <div class="row">        
        <!-- /.col -->
        <div class="col-xs-12">
          <button id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Đang tạo tài khoản"
           type="submit" value="1" name="register_submit_button" class="btn btn-primary btn-block btn-flat btn_register">
          <i class="glyphicon glyphicon-send"></i>&nbsp;
          Đăng ký</button>
        </div>
        <!-- /.col -->
      </div>
        <input style="display: none;" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" type="password" class="form-control" id="password_" name="REGISTER[PASSWORD]" placeholder="Password">
        <input style="display: none;" value="<?=$arResult["VALUES"]['PERSONAL_PHONE']?>" type="password" class="form-control" id="password_confirm" name="REGISTER[CONFIRM_PASSWORD]"  placeholder="Retype password">
        <input type="hidden" value="500000" name="UF_VI_TAI_KHOAN"  /> <!--Dang ky qua phan mem-->
        
    </form> 
    <script>    
        $('.btn_register').on('click', function() {
            var $this = $(this);
          $this.button('loading');
        });
    </script>
    <?}else{?>
        <?echo ShowNote("Chúc mừng bạn đã đăng ký thành công. Mật khẩu đăng nhập là Số điện thoại đã đăng ký ");?>
    <?}?>   
    <br />

  </div>
  <!-- /.form-box -->
</div>

    </div>
         <div class="modal-footer">
            
           
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            
         </div>
        </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->