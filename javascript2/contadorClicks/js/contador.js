"use strict";
{
    let btn = document.getElementById("btn-click");
    btn.addEventListener("click", clickear);

    let contador = 0;

    function clickear() {
        //incrementa el valor de contador
        contador++;
        //es lo mismo que contador = contador + 1
        let valor = document.getElementById("spanContador");
        valor.innerHTML = contador;
    }
}