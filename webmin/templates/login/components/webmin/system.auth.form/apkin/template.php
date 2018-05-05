<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="login-box">      
      <div class="login-box-body">
      <div class="login-logo">
        <img style="width: 220px" src="<?=SITE_TEMPLATE_PATH?>/images/logo-vietgo.png" />
      </div><!-- /.login-logo -->
       <!--
        <p class="login-box-msg">Đăng nhập vào phần mềm</p>--!>
        <?
        if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        {
        	ShowMessage($arResult['ERROR_MESSAGE']);
        }
        ?>        
        <form method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
        <?
    	if (strlen($arResult["BACKURL"]) > 0)
    	{
    	?>
    		<input type='hidden' name='backurl' value='<?=$arResult["BACKURL"]?>' />
    	<?
    	}
    	?>
        <?
    	foreach ($arResult["POST"] as $key => $value)
    	{
    	?>
    	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    	<?
    	}
    	?>
    	<input type="hidden" name="AUTH_FORM" value="Y" />
    	<input type="hidden" name="TYPE" value="AUTH" />
        <input type="hidden" name="GROUP" value="4"/> <!--GRAB--!>
          <div class="form-group has-feedback">
            <input autocomplete="off"  name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="USER_PASSWORD" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6" style="display:none">
              <div class="checkbox icheck">
                <label>
                  <input id="USER_REMEMBER" checked="" name="USER_REMEMBER" value="Y" type="checkbox"> Ghi nhớ mật khẩu
                </label>
              </div>
            </div><!-- /.col -->

             
          
          
          <div class="col-xs-12">
              <button type="submit" class="btn btn-success btn-block" >
              <i class="fa fa-sign-in"></i>
              Đăng nhập</button>
            </div><!-- /.col -->

          <div class="col-xs-12">
              <a class="modalButton btn btn-block btn-default" style="margin-top: 10px;"  data-toggle="modal" data-target="#myModal"
                 href='javascript:void()'
              >
                  <i class="fa fa-send-o"></i> Đăng ký
              </a>
          </div>
          <div class="col-xs-12">
              <a class="btn btn-block btn-lg btn-primary" style="margin-top: 10px;"
                 href='/app.book/app/'
              >
                  <i class="fa fa-search"></i> Tìm xe ngay không cần đăng ký
              </a>
          </div>
            </div>


        </form>       
        
      </div><!-- /.login-box-body -->
      
      
    </div><!-- /.login-box -->
