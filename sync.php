<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
$giaTieuChuan = round( (30 - 26 ) * 8000 + $gia_km_dau , - 3);

$searchTimeFormat =  CIBlockFormatProperties::DateFormat("m/d/Y H:i", MakeTimeStamp('04/05/2018 23:35', CSite::GetDateFormat()));
$giodem = 22; //co the cau hinh
$phutdem = 30; //co the cau hinh
$giosang = 5; //co the cau hinh
$phutsang = 30; //co the cau hinh
$date = new DateTime($searchTimeFormat);
$hours = $date->format('H');
$minutes = $date->format('i');

if($hours >= $giodem && $minutes >= $phutdem || $hours <= $giosang && $minutes <= $phutsang)
{
    $giaTieuChuan = $giaTieuChuan + 30000;
}
for($i=1;$i<=5;$i++){
    $arGiaDau[] = ($giaTieuChuan) - ($i * 10000 );
}
Cdebug::Dump($giaTieuChuan);
Cdebug::Dump($arGiaDau);
?>
