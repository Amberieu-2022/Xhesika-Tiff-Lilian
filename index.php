<?php

require_once './templates/header.php';

?>
<main>
    <h1 class="titre-h1">Bienvenue</h1>
    <!-- FORMULAIRE UTILISATEUR : TROUVER VOTRE GITE  -->
    <section class="form-page-client">
        <h2 class="titre-form-client">TROUVEZ VOTRE GÎTE</h2>
        <form action="#" method="GET">

            <div class="location">
                <label class="label-client">DESTINATION</label>
                <input type="text" placeholder=" Ecrivez votre destination" class="input-local">
            </div>

            <div class="location">
                <label for="" class="label-client">ARRIVÉE</label>
                <input type="date" value="" class="date-placeholder">
                <label for="" class="label-client"> DEPART</label>
                <input type="date" value="" class="date-placeholder">
            </div>


            <div class="first-flex">
                <label class="label-client"> Nombre de couchages </label>
                <select name="nb-personnes" id="" class="nb-personnes">
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
                <label class="label-client"> Nombre de salle de bain </label>
                <select name="nb-bathroom" id="" class="nb-personnes">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <label class="label-client"> Nombre de chambres </label>

                <select name="nb-room" id="" class="nb-personnes">
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
            <label for="type" class="label-client">Type de logement</label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Chambre </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Appartement </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Maison </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Villa </label>
            </div>
            <br>
            <label for="option" class="label-client"> Option(s) </label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Piscine </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Jardin </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Parking </label>
                <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client"> Animaux acceptée </label>
            </div>
            <br>

            <button class="btn-util">Rechercher </button>


        </form>
    </section>

    <h2 class="titre-past-form">NOUS AVONS TROUVÉ LES GÎTES SUIVANTS POUR VOUS</h2>
    <aside class="form-filter">
        <form action="#" method="GET">
            <label for="">Filtrer par </label> <br>
            <label for="">Categorie(s)</label>
            <div class="categorie">
                
            </div>
        </form>
    </aside>
    
</main>
<?php

require_once './templates/footer.php';
?>