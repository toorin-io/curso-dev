<script>
    function startTimer(duration) {
        var timer = duration, days, hours, minutes, seconds;
        setInterval(function () {
            days = Math.floor(timer / 86400);
            hours = Math.floor(timer / 3600) % 24;
            minutes = Math.floor(timer / 60) % 60;
            seconds = timer % 60;

            days = days < 10 ? "0" + days : days;
            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    window.onload = function () {
        var end = new Date(2021, 07, 11, 23, 59, 59);
        // sempre preencher o mês -1 (janeiro é zero)
        var now = new Date()
        var timeDiff = Math.round(Math.abs(end - now) / 1000);

        startTimer(timeDiff);
    };
</script>
