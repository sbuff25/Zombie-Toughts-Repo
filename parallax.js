let bg = document.getElementById("bg");
let boy = document.getElementById("boy");
let pig = document.getElementById("pig");
let brain = document.getElementById("brain");
let ledge = document.getElementById("ledge");
let ztText = document.getElementById("zt_text");
let authorText = document.getElementById("author_text");
let mtRepLogo = document.getElementById("mt_rep_logo");

window.addEventListener('scroll', function(params) {
    var value = window.scrollY;

    bg.style.top = value * 0.5 + "px";
    boy.style.left = value * 0.5 + "px";
    pig.style.left = value * 0.4 + "px";
    brain.style.left = value * 0.1 + "px";
    ledge.style.top = value * 0.9 + "px";
    ztText.style.top = value * 0.25 + "px";
    authorText.style.top = value * 0.15 + "px";

    



});