// MENU FORMULAIRE ASIDE PAGE RESERVATION USER

const menu = document.getElementById('categories');
const btn = document.getElementById("btn-summary");
    btn.addEventListener('click', function(){
        menu.classList.toggle('show');
    });

const menuR = document.getElementById('categoriesR')
const btnR = document.getElementById('btn-summaryR')
    btnR.addEventListener('click', function(){
        menuR.classList.toggle('show');
    });

const menuP = document.getElementById('categoriesP')
const btnP = document.getElementById('btn-summaryP')
    btnP.addEventListener('click', function(){
        menuP.classList.toggle('show');
    });

const menuO = document.getElementById('categoriesO')
const btnO = document.getElementById('btn-summaryO')
    btnO.addEventListener('click', function(){
        menuO.classList.toggle('show');
    });

const menuN = document.getElementById('categoriesN')
const btnN = document.getElementById('btn-summaryN')
    btnN.addEventListener('click', function(){
        menuN.classList.toggle('show');
    });

