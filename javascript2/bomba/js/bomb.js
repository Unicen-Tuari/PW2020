"use strict";
{
    let btnStart = document.getElementById("btn-start");
    btnStart.addEventListener("click", countdown);

    let btnDeactivate = document.getElementById("btn-deactivate");
    btnDeactivate.addEventListener("click", deactivate);
    let interval;

    function countdown(){
        let secondsToExplode = document.getElementById("timer").value;
        let status = document.getElementById("status");
        status.innerHTML = "Active";
        interval = setInterval(function() {
            if (secondsToExplode === 0) {
                clearInterval(interval); // limpio intervalo
                status.innerHTML = "Exploded - Your are death";
            }
            else {
                secondsToExplode--;
            }
        }, 1000);
    }

    function deactivate(){
        clearInterval(interval);
        let status = document.getElementById("status");
        status.innerHTML = "Inactive"; 
    }
}
