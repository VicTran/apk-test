<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php" );
$APPLICATION->SetTitle( "An phat khanh" );
$APPLICATION->AddChainItem( 'Đăng ký tài khoản' );

?>
<div class="form-bg">
    <div class="container">
        <div id="login-form" class="register">
            <header class="section-header">
                <div class="heading-wrap">
                    <h2 class="heading"><span>Đăng Ký</span></h2>
                </div>
            </header>
			<? if ( $_GET['ok'] == 'yes' ) { ?>
                <br><br><br><br>
                <h3 class="text-center text-bold">Chúc mừng bạn đã đăng ký tài khoản thành công!</h3>
                <br><br><br>
			<? } else { ?>
				<? $APPLICATION->IncludeComponent(
					"webmin:main.register",
					"",
					Array(
						"SEF_MODE"        => "N",
						"SHOW_FIELDS"     => array(
							"NAME",
//					"LAST_NAME",
//					"PERSONAL_PROFESSION",
//					"PERSONAL_GENDER",
//					"PERSONAL_BIRTHDAY",
//					"PERSONAL_PHOTO",
//					"PERSONAL_MOBILE",
//					"PERSONAL_COUNTRY",
//					"PERSONAL_STREET",
						),
						"REQUIRED_FIELDS" => array(
							"NAME",
//					"LAST_NAME",
//					"PERSONAL_GENDER",
//					"PERSONAL_BIRTHDAY",
//					"PERSONAL_MOBILE",
						),
						"AUTH"            => "Y",
						"USE_BACKURL"     => "Y",
						"SUCCESS_PAGE"    => "/tai-khoan/register.html?ok=yes",
						"SET_TITLE"       => "Y",
						"USER_PROPERTY"   => array()
					)
				); ?>
			<? } ?>
        </div>
    </div>
</div>
<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php" );
?>
