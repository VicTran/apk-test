<div style="padding: 10px">
<div class="box box-primary">


    <div class="box-body">
<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show"
     id="coccoc-alo-phoneIcon" data-toggle="modal"
     href='#modal-phone'>
    <div class="coccoc-alo-ph-circle"></div>
    <div class="coccoc-alo-ph-circle-fill"></div>
    <div class="coccoc-alo-ph-img-circle coccoc-alo-ph-circle-shake"></div>
    <div class="coccoc-alo-ph-circle-close"></div>
</div>

</div>
    <div class="box-footer" style="text-align: center;">
        <p class="lead"  style="padding-bottom: 0;margin-bottom: 0;color:#00a65a;">Tổng đài viên đang liên hệ quý khách...</p>
        <p style="color: #777;" >Vui lòng chờ trong giây lát</p>
        <p style="font-style: italic">hoặc</p>
        <a href="tel:0945998684" class="btn btn-block btn-success" style="color: #FFF"><i class="fa fa-phone"> </i> &nbsp;&nbsp;&nbsp;GỌI NGAY CHO CHÚNG TÔI <br> ( Hotline: 0945.998.684)</a>
    </div>
</div>
    <div class="modal-content">
        <div class="modal-body">
                <div class="box-body box-profile">
                    <h3 class="profile-username"><i class="fa fa-ticket"></i> Thông tin chuyến đi</h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Mã đặt chỗ</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['MA_DAT_CHUYEN']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Giá trọn gói</b> <div class="pull-right"><span style="font-size: 20px" class="text-green" ><?=number_format($_SESSION["BOOKING"]['INFO']['GIA_CHUAN'])?> đ</span></div>
                        </li>
                        <li class="list-group-item">
                            <b>Điểm đón</b> <br> <div><?=$_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Điểm trả</b> <br> <div><?=$_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Ngày đón</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['THOI_GIAN']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Khách hàng</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Số điện thoại</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['CUSTOMER']['PHONE']?></div>
                        </li>
                    </ul>

                    <h3 class="profile-username"><i class="fa fa-car"></i> Thông tin xe</h3>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Lái xe</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['TAI_XE_NAME']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Biển số</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['BIEN_SO_XE']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Loại xe</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['HANG_XE']?> <?=$_SESSION["BOOKING"]['INFO']['LOAI_XE']?> (<?=$_SESSION["BOOKING"]['INFO']['KIEU_XE']?>) </div>
                        </li>
                        <li class="list-group-item">
                            <b>Số chỗ </b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['SO_CHO_NGOI']?></div>
                        </li>
                        <li class="list-group-item">
                            <b>Màu</b> <div class="pull-right"><?=$_SESSION["BOOKING"]['INFO']['MAU_XE']?></div>
                        </li>
                    </ul>
                </div>
        </div>
    </div>


    <div class="" style="margin-top: 10px;display: none">
        <button onclick="" class="btn btn_orange"><i class="fa fa-remove"></i> HỦY CHUYẾN</button>
    </div>
</div>
<style>
    /*COCO PHONE*/
    body,html,.content-wrapper{background:  #ecf0f5;}
    .content {background: #ecf0f5;}

    .coccoc-alo-phone {
        margin: auto;
        visibility: hidden;
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 100 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        right: 20px;
        top: 70%;
    }
    .coccoc-alo-move-cursor {
        cursor: move
    }
    .coccoc-alo-phone.coccoc-alo-show {
        visibility: visible
    }
    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }
    @-webkit-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }
    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }
    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        animation-name: fadeOutRight
    }
    .coccoc-alo-phone.coccoc-alo-static {
        opacity: .6
    }
    .coccoc-alo-phone.coccoc-alo-hover,
    .coccoc-alo-phone:hover {
        opacity: 1
    }
    .coccoc-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        border: 2px solid #bfebfc 9;
        opacity: .1;
        -webkit-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }
    .coccoc-alo-mobile .coccoc-alo-ph-circle {
        width: 140px;
        height: 140px;
        top: 30px;
        left: 30px
    }
    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-circle {
        -webkit-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important;
        animation: coccoc-alo-circle-anim 1.1s infinite ease-in-out !important
    }
    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-circle {
        -webkit-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important;
        animation: coccoc-alo-circle-anim 2.2s infinite ease-in-out !important
    }
    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone:hover .coccoc-alo-ph-circle {
        border-color: #00aff2;
        opacity: .5
    }
    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle {
        border-color: #75eb50;
        border-color: #baf5a7 9;
        opacity: .5
    }
    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle {
        border-color: #00aff2;
        border-color: #bfebfc 9;
        opacity: .5
    }
    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-circle {
        border-color: #ccc;
        opacity: .5
    }
    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-circle {
        border-color: #75eb50;
        opacity: .5
    }
    .coccoc-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .1;
        -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }
    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-circle-fill {
        -webkit-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        animation: coccoc-alo-circle-fill-anim 1.7s infinite ease-in-out !important
    }
    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-circle-fill {
        -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        opacity: 0 !important
    }
    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #00aff2 9;
        opacity: .75 !important
    }
    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        background-color: #baf5a7 9;
        opacity: .75 !important
    }
    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #a6e3fa 9;
        opacity: .75 !important
    }
    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-circle-fill {
        background-color: rgba(204, 204, 204, 0.5);
        background-color: #ccc 9;
        opacity: .75 !important
    }
    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        opacity: .75 !important
    }
    .coccoc-alo-ph-img-circle {
        width: 60px;
        height: 60px;
        top: 70px;
        left: 70px;
        position: absolute;
        background: rgba(30, 30, 30, 0.1) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==") no-repeat center center;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .7
    }
    .coccoc-alo-ph-circle-shake {
        -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }
    .coccoc-alo-phone.coccoc-alo-active .coccoc-alo-ph-img-circle {
        -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important;
        animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out !important
    }
    .coccoc-alo-phone.coccoc-alo-static .coccoc-alo-ph-img-circle {
        -webkit-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -moz-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -ms-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        -o-animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important;
        animation: coccoc-alo-circle-img-anim 0s infinite ease-in-out !important
    }
    .coccoc-alo-phone.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone:hover .coccoc-alo-ph-img-circle {
        background-color: #00aff2
    }
    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-img-circle {
        background-color: #75eb50;
        background-color: #75eb50 9
    }
    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-img-circle {
        background-color: #00aff2;
        background-color: #00aff2 9
    }
    .coccoc-alo-phone.coccoc-alo-gray.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone.coccoc-alo-gray:hover .coccoc-alo-ph-img-circle {
        background-color: #ccc
    }
    .coccoc-alo-phone.coccoc-alo-gray .coccoc-alo-ph-img-circle {
        background-color: #75eb50
    }
    @-moz-keyframes coccoc-alo-circle-anim {
        0% {
            -moz-transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1;
            -moz-opacity: .1;
            -webkit-opacity: .1;
            -o-opacity: .1
        }
        30% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5;
            -moz-opacity: .5;
            -webkit-opacity: .5;
            -o-opacity: .5
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: .6;
            -moz-opacity: .6;
            -webkit-opacity: .6;
            -o-opacity: .1
        }
    }
    @-webkit-keyframes coccoc-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }
        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }
    }
    @-o-keyframes coccoc-alo-circle-anim {
        0% {
            -o-transform: rotate(0) kscale(.5) skew(1deg);
            -o-opacity: .1
        }
        30% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            -o-opacity: .5
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: .1
        }
    }
    @-moz-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-webkit-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-o-keyframes coccoc-alo-circle-fill-anim {
        0% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-moz-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @-webkit-keyframes coccoc-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @-o-keyframes coccoc-alo-circle-img-anim {
        0% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @-moz-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }
    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }
    @-o-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }
    @keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }
    }
    @-moz-keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }
    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }
    @-o-keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }
    @keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }
    @-moz-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }
        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }
    @-webkit-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }
        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }
    @-o-keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }
        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }
    @keyframes coccoc-alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }
        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }
    @-moz-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-webkit-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-o-keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @keyframes coccoc-alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }
    @-moz-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @-webkit-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @-o-keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }
    @keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }
</style>