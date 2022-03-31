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
                <label class="label-client" for="destination">DESTINATION</label>
                <input type="search" placeholder="Choisissez votre destination" class="input-local" name="destination">
                <input type="submit" name="submit-city">
            </div>
        </form>
        <p class="titre-form-client">OU</p>
        <form action="#" method="GET">

            <div class="location">
                <label for="start_date_reserv" class="label-client">ARRIVÉE</label>
                <input type="date" value="" class="date-placeholder" name="start_date_reserv" id="start_date_reserv">
                <label for="end_date_reserv" class="label-client"> DEPART</label>
                <input type="date" value="" class="date-placeholder" name="end_date_reserv" id="end_date_reserv">
            </div>


            <div class="first-flex">
                <label class="label-client" for="nbr_sleeping"> Nombre de couchages </label>
                <select name="nbr_sleeping" id="nbr_sleeping" class="nb-personnes">
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
                <label class="label-client" for="nbr_bathroom"> Nombre de salle de bain </label>
                <select name="nbr_bathroom" id="nbr_bathroom" class="nb-personnes">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

            </div>
            <br>
            <label for="type" class="label-client">Type de logement</label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="gite-type[]" value="1" class="input-option">
                <label class="label-client"> Chambre </label>

                <input type="checkbox" name="gite-type[]" value="2" class="input-option">
                <label class="label-client"> Appartement </label>

                <input type="checkbox" name="gite-type[]" value="3" class="input-option">
                <label class="label-client"> Maison </label>

                <input type="checkbox" name="gite-type[]" value="4" class="input-option">
                <label class="label-client"> Villa </label>
            </div>
            <br>
            <label for="option" class="label-client"> Option(s) </label> <br>
            <div class="first-flex flex-2">
                <input type="checkbox" name="option[]" value="1" class="input-option">
                <label class="label-client"> Piscine </label>

                <input type="checkbox" name="option[]" value="2" class="input-option">
                <label class="label-client"> Jardin </label>

                <input type="checkbox" name="option[]" value="3" class="input-option">
                <label class="label-client"> Parking </label>

                <input type="checkbox" name="option[]" value="4" class="input-option">
                <label class="label-client"> Animaux acceptée </label>
            </div>
            <br>

            <button type="submit" name="submit" class="btn-util">Rechercher </button>


        </form>
    </section>

    <h2 class="titre-past-form">NOUS AVONS TROUVÉ LES GÎTES SUIVANTS POUR VOUS</h2>
    <ul id="list-gites-user"></ul>

    <!-- <div>
        <aside class="form-filter">
            <form action="#" method="GET">
                <label for="" class="label-category">Filtrer par </label> <br> <br>

                <label for="" class="label-category">Categorie(s)<img src="./templates/img/icon/button.png" alt="button" id="btn-summary"></label>
                <div id="categories">
                    <div class="category-room">
                        <label for="lodging" class="label-form-filter">Chambre</label> <input type="checkbox" name="lodging">
                    </div>
                    <div class="category-room">
                        <label for="lodging" class="label-form-filter">Appartement</label> <input type="checkbox" name="lodging">
                    </div>
                    <div class="category-room">
                        <label for="lodging" class="label-form-filter">Maison</label>
                        <input type="checkbox" name="lodging">
                    </div>
                    <div class="category-room">
                        <label for="lodging" class="label-form-filter">Villa</label>
                        <input type="checkbox" name="lodging">
                    </div> <br>
                </div>

                <label for="" class="label-category">Couchage(s)<img src="./templates/img/icon/button.png" alt="button" id="btn-summary"></label>
                <div id="categories">
                    <div class="category-room">
                        <label for="nbr_sleeping" class="label-form-filter">1-2</label>
                        <input type="checkbox" name="nbr_sleeping">
                    </div>
                    <div class="category-room">
                        <label for="nbr_sleeping" class="label-form-filter">3-4</label>
                        <input type="checkbox" name="nbr_sleeping">
                    </div>
                    <div class="category-room">
                        <label for="nbr_sleeping" class="label-form-filter">5-6</label>
                        <input type="checkbox" name="nbr_sleeping">
                    </div>
                    <div class="category-room">
                        <label for="nbr_sleeping" class="label-form-filter">7+</label>
                        <input type="checkbox" name="nbr_sleeping">
                    </div><br>
                </div>

                <label for="" class="label-category">Option(s)<img src="./templates/img/icon/button.png" alt="button" id="btn-summary"></label>

                <div id="categories">
                    <div class="category-room">
                        <label for="option" class="label-form-filter">Piscine</label>
                        <input type="checkbox" name="option-aside">
                    </div>
                    <div class="category-room">
                        <label for="option" class="label-form-filter">Jardin</label>
                        <input type="checkbox" name="option-aside">
                    </div>
                    <div class="category-room">
                        <label for="option" class="label-form-filter">Parking</label>
                        <input type="checkbox" name="option-aside">
                    </div>
                    <div class="category-room">
                        <label for="option" class="label-form-filter">Animaux</label>
                        <input type="checkbox" name="option-aside">
                    </div> 

                    <br>

                </div>
                <label for="" class="label-category"> Prix / nuit <img src="./templates/img/icon/button.png" alt="button" id="btn-summary">
            </label>
                <div id="categories">
                    <div class="category-room">
                        <label for="price_reserv" class="label-form-filter">0 - 50€</label><input type="checkbox" name="price_reserv">
                    </div>
                    <div class="category-room">
                        <label for="price_reserv" class="label-form-filter">51 - 150€</label><input type="checkbox" name="price_reserv">
                    </div>
                    <div class="category-room">
                        <label for="price_reserv" class="label-form-filter">151 - 300€</label><input type="checkbox" name="price_reserv">
                    </div>
                    <div class="category-room">
                        <label for="price_reserv" class="label-form-filter">301€ +</label><input type="checkbox" name="price_reserv">
                    </div>
                </div>
                <button class="btn-util btn-filtrer" type="submit" name="submit">Valider</button>
            </form>
        </aside>
    </div> -->



    <?php

    if (isset($_GET['submit'])) {

        $nbSleep = $_GET['nbr_sleeping'];
        $nbBath = $_GET['nbr_bathroom'];

        if (!empty($_GET['gite-type'])) {

            foreach ($_GET['gite-type'] as $value) {
                $type[] = $value;
            }
        }

        if (!empty($_GET['option'])) {
            var_dump($_GET['option']);
            foreach ($_GET['option'] as $value) {
                $option[] = $value;
            }
        }
    } else {

        $nbSleep = null;
        $nbBath = null;
    }

    if (isset($_GET['destination'])) {
        $searchByCity = $_GET['destination'];
    } else {
        $searchByCity = null;
    }


    ?>

    <form action="#" method="GET">

        <input type="hidden" id="nb_sleep" value="<?= $nbSleep ?>">
        <input type="hidden" id="nb_bathroom" value="<?= $nbBath ?>">

        <input type="hidden" id="cat1" value="<?= (isset($type[0])) ? $type[0] : null ?>">
        <input type="hidden" id="cat2" value="<?= (isset($type[1])) ? $type[1] : null ?>">
        <input type="hidden" id="cat3" value="<?= (isset($type[2])) ? $type[2] : null ?>">
        <input type="hidden" id="cat4" value="<?= (isset($type[3])) ? $type[3] : null ?>">

        <input type="hidden" id="option1" value="<?= (isset($option[0])) ? $option[0] : null ?>">
        <input type="hidden" id="option2" value="<?= (isset($option[1])) ? $option[1] : null ?>">
        <input type="hidden" id="option3" value="<?= (isset($option[2])) ? $option[2] : null ?>">
        <input type="hidden" id="option4" value="<?= (isset($option[3])) ? $option[3] : null ?>">

        <input type="hidden" id="search" value="<?=$searchByCity?>">

        <?php var_dump($searchByCity); ?>

    </form>

</main>
<?php

require_once './templates/footer.php';
?>