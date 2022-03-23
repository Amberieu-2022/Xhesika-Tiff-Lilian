<?php

require_once './templates/header.php';
?>
<!-- PAGE RESERVER GITE UTILISATEUR -->
<main class="reservation-utilisateur">
    <header class="reservation-user">
        <h1 class="titre-resa-user">RESERVER LE GÎTE DE VOS ENVIES</h1>
        <!-- SLIDER -->

    </header>
    <div id="slider">
        <img src="./templates/img/slider/background.jpg" alt="image du slider" id="slide">
        <div id="left"><img src="./templates/img/icon/left.png" alt="Bouton fleche gauche"></div>
        <div id="right"><img src="./templates/img/icon/right.png" alt="Bouton fleche droite"></div>
    </div>
    <!-- MAIN / LE CONTENU DU PAGE[GITE] -->
    <h2 class="titre-logement">LOGEMENT ENTIER</h2>
    <p class="description-resa-user">1 chambre 2 couchages 1 salle de bain</p>

    <p class="row-limit-size description-gite">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nisi dignissimos numquam
        dolorum magni? Reprehenderit sunt iusto magni assumenda labore, explicabo dignissimos quod perferendis harum officia 
        perspiciatis rerum at pariatur. Fuga laudantium sunt deleniti officia rerum dicta reprehenderit earum error
        assumenda delectus ea nulla atque, explicabo nihil alias quibusdam doloremque eveniet suscipit quis adipisci 
        saepe dolorum non dignissimos! Asperiores recusandae consectetur pariatur porro voluptates possimus expedita 
        esse eveniet itaque iure ipsam, quis error veniam, iste laudantium laboriosam assumenda. Incidunt commodi
        expedita eum blanditiis, qui dolor. Incidunt asperiores necessitatibus, quae, vero, quis veritatis explicabo ullam
        harum nesciunt consectetur nemo tempore reiciendis.
        <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eaque voluptate iusto, tempore consectetur quisquam praesentium temporibus eum quibusdam nobis vel, soluta ea voluptas illo numquam, neque aspernatur esse accusantium architecto quidem excepturi delectus. Libero sequi rerum eligendi. Libero, pariatur! Saepe voluptatem perspiciatis fugit iste sequi amet voluptates beatae veritatis!
    </p>
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
    <!-- FORMULAIRE INFO POUR RESERVER -->
    <section class="row-limit-size section-padding">
        <form action="#" method="GET" class="form-envoie-resa">
            <div class="flex-btw">
                <label for="" class="label-form-filter">PRENOM</label>
                <input type="text" class="input-resa" required>
            </div>
            <br>
            <div class="flex-btw">
                <label for="" class="label-form-filter">NOM</label>
                <input type="text" class="input-resa" required>
            </div>
            <br>
            <div class="flex-btw">
                <label for="email" class="label-form-filter">E-MAIL</label>
                <input type="email" size="30" placeholder="xxxxx@gmail.com" class="input-resa" required>
            </div>
            <br>
            <div class="flex-btw">
                <label for="" class="label-form-filter">TÉLÉPHONE</label>
                <input type="tel" class="input-resa" placeholder="06 00 00 00 00" required>
            </div>
            <br>
            <div class="flex-btw">
                <label for="" class="label-form-filter">NOMBRE DE VOYAGEUR</label>
                <input type="number" min="1" class="input-resa nb-resa" required>
            </div>
            <br>

            <label for="" class="label-form-filter">DATE DE RESERVATION</label> <br>
            <div class="flex-btw around">
                <label for="" class="label-form-filter">ARRIVÉE</label>
                <input type="date" class="date-input-resa" required>
                <label for="" class="label-form-filter">DÉPART</label>
                <input type="date" class="date-input-resa" required>

            </div>
            <br><br><input type="submit" class="btn-btn">

        </form>
    </section>
</main>

<?php
require_once './templates/footer.php';
?>