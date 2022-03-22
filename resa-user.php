<?php

require_once './templates/header.php';
?>
    <main class="reservation-utilisateur">
        <header class="reservation-user">
            <h1 class="titre-resa-user">RESERVER LE GÎTE DE VOS ENVIES</h1>


            <h2 class="titre-logement">LOGEMENT ENTIER</h2>
            <p class="description-resa-user">1 chambre 2 couchages 1 salle de bain</p>
        </header>
        <h2 class="titre-logement">ÉQUIPEMENTS</h2>
        <div class="row-limit-size equipements">
            
            <div class="equip-flex">
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/wifi.png" alt="wifi logo">
                    <h3 class="equip-figcap">WIFI</h3>
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/clima.png" alt="clima logo">
                    <h3 class="equip-figcap">CLIMATISATION</h3>
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/cuisine.png" alt="assiette logo">
                    <h3 class="equip-figcap">CUISINE</h3>
                </figcaption>
            </div>
            <div class="equip-flex">
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/frigo.png" alt="refrigerateur logo">
                    <h3 class="equip-figcap">RÉFRIGÉRATEUR</h3>
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/four.png" alt="micro-ondes logo">
                    <h3 class="equip-figcap">FOUR MICRO-ONDES</h3>
                    
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/baignoire.png" alt="abaignoire logo">
                    <h3 class="equip-figcap">BAIGNOIRE</h3>
                </figcaption>
            </div>
            <div class="equip-flex">
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/tv.png" alt="tv logo">
                    <h3 class="equip-figcap">TV</h3>
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/lave-linge.png" alt="lave-linge logo">
                    <h3 class="equip-figcap">LAVE-LINGE</h3>
                </figcaption>
                <figcaption class="flex-btw">
                    <img src="./templates/img/icon/seche.png" alt="seche-cheveux logo">
                    <h3 class="equip-figcap">SÈCHE-CHEVEUX</h3>
                </figcaption>
            </div>

        </div>
        <h2 class="titre-logement">OPTIONS</h2>
        <div class="row-limit-size equipements">
            <figcaption class="flex-btw padd-option">
                <img src="./templates/img/icon/btn-delete.png" alt="piscine logo">
                <h3 class="equip-figcap">PISCINE</h3>
            </figcaption>
            <figcaption class="flex-btw padd-option">
                <img src="./templates/img/icon/jardin.png" alt="jardin logo">
                <h3 class="equip-figcap">JARDIN</h3>
            </figcaption>
            <figcaption class="flex-btw padd-option">
                <img src="./templates/img/icon/parking.png" alt="parking logo">
                <h3 class="equip-figcap">PARKING</h3>
            </figcaption>
            <figcaption class="flex-btw padd-option">
                <img src="./templates/img/icon/animaux.png" alt="animaux logo">
                <h3 class="equip-figcap">ANIMAUX</h3>
            </figcaption>
        </div>
        <section class="row-limit-size">
            <form action="#" method="GET" class="form-envoie-resa">
                <label for="">PRENOM</label>
                <input type="text">
                <br><br>
                <label for="">NOM</label>
                <input type="text">
                <br><br>
                <label for="">E-MAIL</label>
                <input type="email">
                <br><br>
                <label for="">TÉLÉPHONE</label>
                <input type="tel">
                <br><br>
                <label for="">NOMBRE DE VOYAGEUR</label>
                <input type="number" min="1">
                <br><br>
                <label for="">DATE DE RESERVATION</label> <br>
                <label for="">ARRIVÉE</label>
                <input type="date" >
                <label for="">DÉPART</label>
                <input type="date">
                <br><br><input type="submit">

            </form>
        </section>
    </main>

<?php
require_once './templates/footer.php';
?>