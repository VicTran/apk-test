<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php" );
$APPLICATION->SetTitle( "An phat khanh" );
$APPLICATION->AddChainItem( 'Đăng nhập' );
?>
<div class="form-bg">
    <div class="container">
        <div id="login-form">
            <header class="section-header">
                <div class="heading-wrap">
                    <h2 class="heading"><span>Đăng nhập</span></h2>
                </div>
            </header>
			<? $APPLICATION->IncludeComponent(
				"webmin:system.auth.form",
				"",
				Array(
					"REGISTER_URL" => "/tai-khoan/register.php",
					"PROFILE_URL"  => "/tai-khoan/",
					"SHOW_ERRORS"  => "Y"
				)
			); ?>
        </div>
    </div>
</div>
<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php" );
?>
