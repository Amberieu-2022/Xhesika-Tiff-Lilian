<?php

session_start();
if (!isset($_SESSION['adminId'])) {
    header('Location: index.php');
}

require_once '../templates/header-admin.php';

?>

<main>
    <h2 class="titre-page-gestion">VOS GÎTES</h2>

    <!-- FORMULAIRE DU PAGE GESTION GITES -->
    <form action="#" method="GET" class="form-add-search">
        <button type="submit" class="btn-ajout-gite">Ajouter un gîte</button>
        <input type="text" name="nom" id="nom" placeholder=" Recherche par nom" class="input-p-ajout" required>
        <button type="submit" class="btn-ajout-gite">Rechercher</button>

    </form>

    <!-- FORMULAIRE RECHERCHE AVANCEE  -->
    <section class="form-connexion form-search">
        <h2 class="titre-form-search">RECHERCHE AVANCÉE</h2>
        <form action="#" method="GET" class="first-form">
            <div class="first-flex">
                <label class="label-no"> NOMBRE DE COUCHAGES </label>
                <select name="nb-personnes" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
                <label class="label-no"> NOMBRE DE SALLE DE BAIN </label>
                <select name="nb-bathroom" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <label class="label-no"> NOMBRE DE CHAMBRES </label>
                <select name="nb-room" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <br>

            <label for="type" class="label-no1">Type de logement</label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Chambre </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Appartement </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Maison </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Villa </label>
            </div>
            <br>
            <label for="option" class="label-no1"> Option(s) </label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Piscine </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Jardin </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Parking </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-no"> Animaux acceptée </label>
            </div>
            <br>

            <button class="btn-connect search-btn">Rechercher </button>
        </form>

    </section>

    <!-- Modal de confirmation d'effacement des gîtes -->

    <div class="confirm">
        <p class="font-modal verif">Voulez-vous vraiment supprimer ce gîte ?</p>
        <div class="flex-around">
            <button id="yes">OUI !</button>
            <button id="no">NON !</button>
        </div>
    </div>

    <!-- Liste des gites -->

    <h1>
        Liste de vos gites
    </h1>

    <button>
        <a href="ajout.php">Ajouter un nouveau gîte</a>
    </button>

    <p>Vous avez actuellement <kbd id="nb-posts">X</kbd> gîtes en base</p>

    <ul id="list-gites">

    </ul>

    <script src="main-admin.js"></script>
</main>

<?php
require_once '../templates/footer-admin.php';
?>