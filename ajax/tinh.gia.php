<?
$rsResult = $_POST['GIA'];
$arr = array();
foreach ($rsResult as $key => $value)
{
    $arr[$key] = $value * $_POST['Km'];
}

$json = json_encode($arr);
echo $json;
exit();
?>