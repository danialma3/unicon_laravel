(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        birthday = "03/3/2023";

    today = mm + "/" + dd + "/" + yyyy;

    //end

    const countDown = new Date(birthday).getTime(),
        x = setInterval(function () {

            const now = new Date().getTime(),
                distance = countDown - now;

            //do something later when date is reached

            //seconds
            document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
                if (distance < 0) {
                    document.getElementById("days").innerText = "00",
                        document.getElementById("hours").innerText = "00",
                        document.getElementById("minutes").innerText = "00";
                    clearInterval(x);
                }
        }, 0)
}());

