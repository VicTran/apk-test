<h2 class="title-bl">
	<?=$arResult['NAME']?>
</h2>
<div>
    <small class="info">
		<?= $arResult['DISPLAY_ACTIVE_FROM'] ? $arResult['DISPLAY_ACTIVE_FROM'] : $arResult['DISPLAY_DATE_CREATE'] ?>
    </small>
</div>
<div class="content-news">
<?=$arResult['DETAIL_TEXT']?>
</div>