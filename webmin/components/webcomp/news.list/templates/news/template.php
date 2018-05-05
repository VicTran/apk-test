<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
} ?>
<div class="row">
    <div class="col-md-12 text-center"><h3><?= $arResult['NAME'] ?></h3></div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="ic_description">
			<? foreach ( $arResult["ITEMS"] as $arItem ): ?>
                <div class="infopanel ">
                    <div class="news_img_list flL">
                        <a class="previewimg nyroModal left" href="<?= $arItem['DETAIL_PAGE_URL'] ?>" title="<?= $arItem['NAME'] ?>"> </a>
                    </div>
                    <h3><a title="<?= $arItem['NAME'] ?>" href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></h3>
                    <div class="address">
                        <?= $arItem['DISPLAY_ACTIVE_FROM'] ? $arItem['DISPLAY_ACTIVE_FROM'] : $arItem['DISPLAY_DATE_CREATE'] ?>
                    </div>
                    <p class="justify"><?= $arItem['PREVIEW_TEXT'] ?></p>
                    <p><a title="<?= $arItem['NAME'] ?>"
                          href="<?= $arItem['DETAIL_PAGE_URL'] ?>">xem tiếp»</a>
                        <br>
                    </p>
                </div>
                <hr class="thins">
			<? endforeach; ?>
			<? if ( $arParams["DISPLAY_BOTTOM_PAGER"] ): ?>
				<?= $arResult["NAV_STRING"] ?>
			<? endif; ?>
        </div>
    </div>
</div>