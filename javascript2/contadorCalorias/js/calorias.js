"use strict";

let calorias = 0;
SumarCantidad(0); //fuerzo actualización inical sumando 0 calorias

function SumarInput() {
    //lee el nombre
    let nodoInput =  document.getElementById("calorias");
    let nuevasCalorias = parseInt(nodoInput.value);
    SumarCantidad(nuevasCalorias);
}

function SumarCantidad(nuevas){
    calorias += nuevas;
    let nodoTotal = document.getElementById("txtTotal");
    nodoTotal.innerHTML = calorias;
}

let btnSumar = document.getElementById("btn-sumar");
btnSumar.addEventListener("click", function () {SumarCantidad(+1) });

let btnRestar = document.getElementById("btn-restar");
btnRestar.addEventListener("click", function () { SumarCantidad(-1) });

let btn = document.getElementById("btn-sumar-input");
btn.addEventListener("click", SumarInput);

