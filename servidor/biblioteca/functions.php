
<script>
    //func mostrar hora
    function showTime() {
        var time = new Date();

        var hour = time.getHours();
        var minute = time.getMinutes();
        var second = time.getSeconds();

        if(hour < 10) hour = "0" + hour;
        if(minute < 10) minute = "0" + minute;
        if(second < 10) second = "0" + second;

        var currentTime = hour + ":" + minute + ":" + second;

        document.getElementById('timer').innerHTML = currentTime;
    }

    //func iniciar hora
    function initTime() {
        setInterval (showTime, 1000);
    }
</script>