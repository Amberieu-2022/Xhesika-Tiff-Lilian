//Liste des gites

//On récupère les valeurs du formulaire

//On récupère l'ID des input contenant nos valeurs

//Couchages et SdB
let sleep = document.getElementById('nb_sleep');
let bathroom = document.getElementById('nb_bathroom');

//Catégories
let cat1 = document.getElementById('cat1');
let cat2 = document.getElementById('cat2');
let cat3 = document.getElementById('cat3');
let cat4 = document.getElementById('cat4');

//Options
let opt1 = document.getElementById('option1');
let opt2 = document.getElementById('option2');
let opt3 = document.getElementById('option3');
let opt4 = document.getElementById('option4');

//On récupère les valeurs dans les inputs

//Couchages et SdB
let nbSleep = sleep.value;
let nbBathroom = bathroom.value;

//Catégories
categorie1 = cat1.value;
categorie2 = cat2.value;
categorie3 = cat3.value;
categorie4 = cat4.value;

//Options
option1 = opt1.value;
option2 = opt2.value;
option3 = opt3.value;
option4 = opt4.value;

// On récupère la recherche par nom
let searchByCity = document.getElementById('search');
let search = searchByCity.value;
console.log(search);

//Affichage des gîtes
giteDisplay();

function giteDisplay() {
    const listGites = document.getElementById('list-gites-user')
    console.log('list-gites-user')
    const xhr = new XMLHttpRequest();

    xhr.open('GET', './select-form-user.php?nbSleep=' + nbSleep + '&nbBathroom=' + nbBathroom + '&cat1=' + categorie1 + '&cat2=' + categorie2 + '&cat3=' + categorie3 + '&cat4=' + categorie4 + '&opt1=' + option1 + '&opt2=' + option2 + '&opt3=' + option3 + '&opt4=' + option4 + '&search=' + search, true);

    xhr.onreadystatechange = function () {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            let datas = JSON.parse(this.responseText)
            let listDom = ''
            

            for (let data of datas) {
<<<<<<< HEAD
                listDom += '<li class="gites"><h2>' + data.name_gite + '</h2><p>' + data.location_gite + '</p><img src="../img/pdp/' + data.profil_gite + '" alt=""><p>' + data.desc_gite + '</p><a href="./resa-user-form.php?id=' + data.id_gite + '" class="btn-resa" data-id="' + data.id_gite + '">Reserver</a></li>'
=======
                listDom += '<li class="gites"><h2 class="titre-page-user">' + data.name_gite + '</h2><h3 class="titre-lieu-p-user">' + data.location_gite + '</h3><div class="img-para-user"><img src=".img/pdp/' + data.profil_gite + '" alt="photo du gite" class="img-div-gite"><p class="description-main-page">' + data.desc_gite + '</p></div><div class="button-index-user"><p class="user-gite-prix">Prix / nuit : 54€</p><button class="btn-reserver-user"><a href="./resa-user.php?id=' + data.id_gite + '">RESERVER</a></button></div></li>'
>>>>>>> 65eea8906df9655dd96b9100c61e3e468608d849
            }

            listGites.innerHTML = listDom;

        }
    }
    xhr.send();
}

//Comptage des gîtes correspondant à la recherche
function countGite() {
    return document.getElementsByClassName('gites').length;
}

//Affichage des filtres
// const menu = document.getElementById('categories');
// const btn = document.getElementById("btn-summary");

//     btn.addEventListener('click', function(){
//         menu.classList.toggle('show');
//     });

// const menuR = document.getElementById('categoriesR')
// const btnR = document.getElementById('btn-summaryR')
//     btnR.addEventListener('click', function(){
//         menuR.classList.toggle('show');
//     });

// const menuP = document.getElementById('categoriesP')
// const btnP = document.getElementById('btn-summaryP')
//     btnP.addEventListener('click', function(){
//         menuP.classList.toggle('show');
//     });

// const menuO = document.getElementById('categoriesO')
// const btnO = document.getElementById('btn-summaryO')
//     btnO.addEventListener('click', function(){
//         menuO.classList.toggle('show');
//     });

// const menuN = document.getElementById('categoriesN')
// const btnN = document.getElementById('btn-summaryN')
//     btnN.addEventListener('click', function(){
//         menuN.classList.toggle('show');
//     });
