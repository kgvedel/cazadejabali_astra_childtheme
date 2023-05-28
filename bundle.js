(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){

"use strict";
window.addEventListener("DOMContentLoaded", start);

let bookingInfo = {
    jagtperiode: "",
    jaegere: "",
    ledsagere: "",
    fuldenavn: "",
    email: "",
    telefon: "",
    besked: "",
    total_pris: ""
}
let nyBookingInfo;
let customerForm;

function start() {

    customerForm = document.querySelector("#booking_jagt_form");


    //creating new booking object
    nyBookingInfo = Object.create(bookingInfo);
    //calling my eventhandler
    eventhandler();

    function eventhandler() {
        //calling function for showing the cart
        showCart();

        //eventlisteners for input fields that effect the cart display
        const jagtperiodeselect = customerForm.elements.valgjagt;
        const jaegereinput = customerForm.elements.jaegere;
        const ledsagerinput = customerForm.elements.ledsagere;

        jagtperiodeselect.addEventListener('input', updateCustomerOrder);
        jaegereinput.addEventListener('input', updateCustomerOrder);
        ledsagerinput.addEventListener('input', updateCustomerOrder);

        //here i add click eventlistener, if form is valid it prevents default submit, and calls proceed to cart
        //its to make sure that form is still checked for validity, and only prevents default (refresh) once everything IS valid
        document.querySelector(".send_btn").addEventListener("click", function (event) {
            console.log("submit clicked");
            if (customerForm.checkValidity()) {

                event.preventDefault();
                saveCustomerOrder();

            } else {
                console.log("not valid yet");
            }
        });
    }
}



//updating the booking object based on the latest input from the user
function updateCustomerOrder() {
    console.log("updating the order");


    //only saving the values into the booking object if the input is valid
    if (customerForm.elements.jaegere.checkValidity()) {
        nyBookingInfo.antalJaegere = customerForm.elements.jaegere.value;

    }
    if (customerForm.elements.valgjagt.checkValidity()) {
        nyBookingInfo.jagtperiode = customerForm.elements.valgjagt.value;

    }
    if (customerForm.elements.ledsagere.checkValidity()) {
        nyBookingInfo.antalLedsagere = customerForm.elements.ledsagere.value;

    }


//calling update cart
    updateCart();

}

//calculating the base prise of the jagt
function jagtPrisen() {
    const prisJagtTo = 1890;
    const prisJagtTre = 2380;
    let jagtpris;


    //udregner jagtpris 
    if (nyBookingInfo.jagtperiode == 4) {
        jagtpris = prisJagtTo;
    } else {
        jagtpris = prisJagtTre;

    }

    return (jagtpris);

}

//showing the cart, this happens before input, so it only shows the initial base price.
function showCart() {

    const template = document.getElementById('cart');
    const clone = template.content.cloneNode(true);

    console.log("show cart");

    //udregner jagtpris
    const prisJagtTo = 1890;
    const prisJagtTre = 2380;
    let jagtpris = jagtPrisen();

    const jagtPeriode = nyBookingInfo.jagtperiode;

    if (jagtPeriode == 4) {
        jagtpris = prisJagtTo;
    } else {
        jagtpris = prisJagtTre;
    }

    //displaying the basis jagtpris

    clone.querySelector("[data-field=cart_jagt_periode_pris]").textContent = "€" + jagtpris + " pr. Jæger";

    document.querySelector("#cart_table").appendChild(clone);

}


//updating the cart display based on the updated information
function updateCart() {

    const antalJaegere = nyBookingInfo.antalJaegere;
    const antalLedsagere = nyBookingInfo.antalLedsagere;
    const jagtPeriode = nyBookingInfo.jagtperiode;
    let jagtpris = jagtPrisen();
    let jagt_total_pris = jagtpris * antalJaegere;

    nyBookingInfo.total_pris = jagt_total_pris;

    console.log(nyBookingInfo);

    // Update the cart with the latest information
    const cart = document.querySelector("#cart_table");
    cart.querySelector("[data-field=cart_jagt_periode_pris]").textContent = "€" + jagtpris + " pr. Jæger";
    cart.querySelector("[data-field=cart_total_pris]").textContent = "€" + nyBookingInfo.total_pris;
    cart.querySelector("[data-field=cart_jaegere_antal]").textContent = antalJaegere;
    cart.querySelector("[data-field=cart_ledsagere_antal]").textContent = antalLedsagere;
}

//saves all the information form the forms inputs (that has not already been saved at ) into the booking object
//this function can only be called when the form is valid
// the first 3 elements (jagtperiode, jægere, ledsagere) have already been saved earlier at updateCustomerOrder
function saveCustomerOrder() {
    console.log("save_customer_order function");
    customerForm = document.querySelector("#booking_jagt_form");

    let fuldeNavn = customerForm.elements.fornavn.value + "  " + customerForm.elements.efternavn.value;
    let email = customerForm.elements.mail.value;
    let telefon = customerForm.elements.phone.value;
    let dinBesked = customerForm.elements.besked.value;




    //combining all of the new the information into the new booking object
    nyBookingInfo.fuldeNavn = fuldeNavn;
    nyBookingInfo.email = email;
    nyBookingInfo.telefon = telefon;
    nyBookingInfo.dinBesked = dinBesked;



    console.log(customerForm.checkValidity());
    if (customerForm.checkValidity()) {
        console.log("woohoo order confirmed yo");
        console.log(nyBookingInfo);

    } else {
        console.log("naaah");
    }

}


},{}]},{},[1]);