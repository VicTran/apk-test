<?
$aMenuLinks[] = Array(

    "Tìm xe giá rẻ",
    "/app.book/app/",
    Array(),
    Array("ICON"=>"search","FONT_STYLE"=>'font-size:14px;'),
    ""

);



if($GLOBALS["USER"]->GetID() > 0) {
/*
    $aMenuLinks[] = Array(
        "Ví tài khoản",
        "/app.book/app/vi-tai-khoan/",
        Array(),
        Array("ICON" => "money", "FONT_STYLE" => 'font-size:14px;'),
        ""
    );*/
}
$aMenuLinks[] =
    Array(
        "Danh bạ phòng vé",
        "/app.book/app/phong-ve/",
        Array(),
        Array("ICON"=>"book","FONT_STYLE"=>'font-size:14px;'),
        ""
    );
$aMenuLinks[] =
    Array(
        "Tin khuyến mãi",
        "/app.book/app/tin-khuyen-mai/",
        Array(),
        Array("ICON"=>'bullhorn',"FONT_STYLE"=>'font-size:14px;'),
        ""
    );
if($GLOBALS["USER"]->GetID() > 0) {
    /*
    $aMenuLinks[] =
        Array(
            "Lịch sử chuyến đi",
            "/lien-he/",
            Array(),
            Array("ICON" => 'history',"FONT_STYLE"=>'font-size:14px;'),
            ""
        );*/
}
/*
$aMenuLinks[] =
    Array(
        "Chuyến đi miễn phí",
        "/blog/",
        Array(),
        Array("ICON"=>"gift","FONT_STYLE"=>'font-size:14px;'),
        ""
    );*/
$aMenuLinks[] =
    Array(
        "Trợ giúp",
        "/app.book/app/tro-giup/",
        Array(),
        Array("ICON"=>"book","FONT_STYLE"=>'font-size:14px;'),
        ""
    );
/*
$aMenuLinks[] =
    Array(
        "Pháp lý",
        "/tong-dai/",
        Array(),
        Array("ICON"=>"user-secret","FONT_STYLE"=>'font-size:14px;'),
        ""


);*/
?>
