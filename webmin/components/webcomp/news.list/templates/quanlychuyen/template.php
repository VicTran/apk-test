<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
} ?>
<div class="row">
	<div class="col-md-12 text-center"><h3>Các chuyến xe đã đặt</h3></div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="ic_description">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Ngày đặt</th>
						<th>Mã code</th>
						<th>Điểm đi</th>
						<th>Điểm đến</th>
						<th>Thời gian đi</th>
						<th>Trạng thái</th>
						<th></th>
					</tr>
				</thead>
			<tbody>
			<? foreach ( $arResult["ITEMS"] as $key=>$arItem ): ?>
				<tr>
					<td><?=$key+1?></td>
					<td><?= $arItem['DISPLAY_ACTIVE_FROM'] ? $arItem['DISPLAY_ACTIVE_FROM'] : $arItem['DISPLAY_DATE_CREATE'] ?></td>
					<td><?= $arItem['NAME'] ?></td>
					<td><?= $arResult["CHUYEN_DI"][$arItem['ID']]['PROPERTIES']['DIA_DIEM_DON']["VALUE"] ?></td>
					<td><?= $arResult["CHUYEN_DI"][$arItem['ID']]['PROPERTIES']['DIA_DIEM_TRA']["VALUE"] ?></td>
					<td><?= $arResult["CHUYEN_DI"][$arItem['ID']]['PROPERTIES']['THOI_GIAN']["VALUE"] ?></td>
					<td><?= $arResult["DAT_XE"][$arItem['ID']]['PROPERTIES']['TRANG_THAI']["VALUE"] ?></td>
					<td><a href="/dat-xe/thanh-cong/?booking_id=<?= $arResult["DAT_XE"][$arItem['ID']]['ID'] ?>">Chi tiết >></a></td>
				</tr>
			<? endforeach; ?>
			</tbody>
			</table>
			<? if ( $arParams["DISPLAY_BOTTOM_PAGER"] ): ?>
				<?= $arResult["NAV_STRING"] ?>
			<? endif; ?>
		</div>
	</div>
</div>