<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="/webmin/templates/main/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="/webmin/templates/main/plugins/jQuery/jquery-2.2.3.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<div style="margin: auto;padding: 20px">
<input style="display: none" type="text"  onchange="$('#text-selected').text(this.value)" id="calendar">
    <div class="flatpickr-close bg_blue_gradient"><span id="text-selected"></span> <i class="fa fa-check"></i></div>
</div>
<style>
    .flatpickr-calendar.inline{margin: auto}
    .flatpickr-time{height: 40px;border-top: 1px solid #e6e6e6;}
    .bg_blue_gradient {
        background-image: -moz-linear-gradient(left, #00C8FE, #4B57EB);
        background-image: -webkit-gradient(linear, 0 0, 100% 100%, from(#00C8FE), to(#4B57EB));
        background-image: -webkit-linear-gradient(left, #00C8FE, #4B57EB);
        background-image: -o-linear-gradient(left, #00C8FE, #4B57EB);
        background-image: linear-gradient(to right, #00C8FE, #4B57EB);
    }
    .flatpickr-close {
        padding: 7px;
        cursor: pointer;
        color: #fff;
        font-size: 20px;
        margin: 5px;
        border-radius: 5px;
        margin-top: 20px;
        text-align: center;
    }
</style>
<script>
    var dt = new Date();

    // commonjs
    //const flatpickr = require("flatpickr");

    // es modules are recommended, if available, especially for typescript
    //import flatpickr from "flatpickr";
    $("#calendar").flatpickr({
        inline: true,
        enableTime: true,
        minDate: "today",
        minTime: dt.getHours()+":"+dt.getMinutes(),
        dateFormat: "d/m/Y H:i",
        time_24hr: true,
        defaultDate: dt.getDate()+"/"+ (dt.getMonth()+ 1) + "/"+dt.getFullYear()+" "+dt.getHours()+":"+dt.getMinutes()

    });

    $('#calendar').val(dt.getDate()+"/"+ (dt.getMonth()+ 1) + "/"+dt.getFullYear()+" "+dt.getHours()+":"+dt.getMinutes());
    $('#text-selected').text($('#calendar').val());
</script>