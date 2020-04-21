"use strict";

let products = [];
let prices = [];
showCart();

function showCart(){
    let productsTable = document.getElementById("products");
    productsTable.innerHTML = "";
    for (let index = 0; index < products.length; index++) {
        let newRow = productsTable.insertRow(-1);
        let productCell = newRow.insertCell(0);
        let product = document.createTextNode(products[index]);
        productCell.appendChild(product);
        let priceCell = newRow.insertCell(1);
        let price = document.createTextNode(prices[index]);
        priceCell.appendChild(price);
    }
}

function totalPrice(){
    let total = 0;
    for (const price of prices) {
        total += price
    }
    return total;
}

function showTotalPrice(){
    let total =  document.getElementById("total");
    total.innerHTML = totalPrice();
}

function reset() {
    products = [];
    prices = [];
    showCart();
    showTotalPrice();
}

function deleteLastItem(){
    products.pop();
    prices.pop();
    showCart();
    showTotalPrice();
}

function addProduct(){
    let name =  document.getElementById("item");
    let price =  document.getElementById("price");
    products.push(name.value);
    prices.push(parseInt(price.value));
    name.value='';
    price.value='';
    showCart();
}

let btnAdd = document.getElementById("btn-add");
btnAdd.addEventListener("click", addProduct);

let btnSum = document.getElementById("btn-sum");
btnSum.addEventListener("click", showTotalPrice);

let btnReset = document.getElementById("btn-reset");
btnReset.addEventListener("click", reset);

let btnDeleteLast = document.getElementById("btn-delete-last");
btnDeleteLast.addEventListener("click", deleteLastItem);

