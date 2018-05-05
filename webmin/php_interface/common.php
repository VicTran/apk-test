<?php
define("IB_DAT_XE",5);
define("IB_KHACH_HANG",6);
define("IB_THONG_TIN_CHUYEN",7);
define("USER_ID_GUEST",2);
global $HinhThuc_ThanhToan;
global $TrangThai_DonHang;
global $TrangThai_LaiXe;
$HinhThuc_ThanhToan = array("Tra_sau"=>4);
$TrangThai_DonHang = array("Confirm"=>6,"Confirmed" => 7, "Cancel"=>8);
$TrangThai_LaiXe = array("chua_bat_dau"=>9,"dang_chay" => 10, "huy_chay"=>11 , "ket_thuc" => 12);
define("LATLNG_NOI_BAI","21.2187149,105.80417090000003");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/core/CUtilities.php");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/core/CDebug.php");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/class/CBooking.php");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/class/CCustomers.php");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/class/CSMS.php");
require($_SERVER["DOCUMENT_ROOT"]."/webmin/php_interface/class/lib/nusoap.php");
?>