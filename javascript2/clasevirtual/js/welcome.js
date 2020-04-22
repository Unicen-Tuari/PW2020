"use strict";


let name = document.getElementById("name");
name.innerHTML = "Nacho";

let btnChangeName = document.getElementById("btn-change-name");
btnChangeName.addEventListener("click", changeName);

function changeName(){
    let newName = document.getElementById("change-name");
    let name = document.getElementById("name");
    name.innerHTML = newName.value;
}

let btnChangeH1 = document.getElementById("btn-change-h1");
btnChangeH1.addEventListener("click", changeH1);

function changeH1(){
    let h1s = document.getElementsByClassName("new-class");
    for (const h1 of h1s) {
        h1.innerHTML = "Hola Mundo!";
    }
}