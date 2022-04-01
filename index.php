<?php

require_once './templates/header.php';

?>
<main class="main-index">
    <figure class="background-main-user">
        <img src="./templates/img/slider/background.jpg" alt="background">
    </figure>
    <h1 class="titre-h1">Bienvenue</h1>
    <!-- FORMULAIRE UTILISATEUR : TROUVER VOTRE GITE  -->
    <section class="form-page-client">
        <h2 class="titre-form-client">TROUVEZ VOTRE GÎTE</h2>
        <form action="#" method="GET">

            <div class="location">
                <label class="label-client">DESTINATION</label>
                <input type="text" class="input-local">
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

            </div>
            <br>
            <div class="formulaire-type">
                <label for="type" class="label-client upper-style-label">Type de logement</label> <br>
                <div class="formulaire-type-option">
                      
                    <div class="type-option"> <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Chambre </label></div>
                    <div class="type-option"> <input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Appartement </label></div>
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Maison </label></div>
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Villa </label></div>
                
                </div>
                <br>
                <label for="option" class="label-client upper-style-label"> Option(s) </label> <br>
                <div class="formulaire-type-option">
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Piscine </label></div>
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Jardin </label></div>
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Parking </label></div>
                    <div class="type-option"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-client label-nb-op"> Animaux acceptée </label></div>
                    
                </div>
                <br>
            </div>
            <button class="btn-util">Rechercher </button>
        </form>
    </section>

    <h2 class="titre-past-form">NOUS AVONS TROUVÉ LES GÎTES SUIVANTS POUR VOUS</h2>
    <div id="main-user-gite">
        <!-- <aside class="form-filter">
            <form action="./index.php" method="POST">
                <label for="" class="label-category">Filtrer par </label> <br> <br>

                <label for="" class="label-category">Categorie(s)<img src="./templates/img/icon/button.png" alt="button" id="btn-summary"></label> 
                <div id="categories">
                    <div class="category-room">
                        <label for="" class="label-form-filter">Chambre</label> <input type="checkbox">
                    </div>
                    <div class="category-room">
                        <label for=""  class="label-form-filter">Appartement</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">Maison</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">Villa</label> <input type="checkbox">
                    </div> <br>
                </div>

                <label for="" class="label-category">Salle de bain <img src="./templates/img/icon/button.png" alt="button" id="btn-summaryR"> </label>
                <div id="categoriesR">
                    <div class="category-room">
                        <label for="" class="label-form-filter">0</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">1</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">2</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">3+</label> <input type="checkbox">
                    </div><br>
                </div>

                <label for="" class="label-category">Couchage(s)<img src="./templates/img/icon/button.png" alt="button" id="btn-summaryP"></label>
                <div id="categoriesP">
                    <div class="category-room">
                        <label for="" class="label-form-filter">1-2</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">3-4</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">5-6</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">7+</label> <input type="checkbox">
                    </div><br>
                </div>     

                <label for="" class="label-category">Option(s)  <img src="./templates/img/icon/button.png" alt="button" id="btn-summaryO"></label>
                <div id="categoriesO">
                    <div class="category-room">
                        <label for="" class="label-form-filter">Piscine</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">Jardin</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">Parking</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">Animaux</label> <input type="checkbox">
                    </div> <br>
                </div>
                <label for="" class="label-category"> Prix  /  nuit   <img src="./templates/img/icon/button.png" alt="button" id="btn-summaryN"></label>
                <div id="categoriesN">
                    <div class="category-room">
                        <label for="" class="label-form-filter">0 - 50€</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">51 - 150€</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">151 - 300€</label> <input type="checkbox"> 
                    </div>
                    <div class="category-room">
                        <label for="" class="label-form-filter">301€ +</label> <input type="checkbox">
                    </div>
                </div>
                <button class="btn-util btn-filtrer">Valider</button>
            </form>
        </aside> -->
        <li class="gites">
            <h2 class="titre-page-user">LA PETITE MAISON DANS LA PRAIRIE</h2>
            <h3 class="titre-lieu-p-user">Amberieu-en-bugey</h3>
            <div class="img-para-user">
                <img src="./templates/img/slider/room-gite.jpg" alt="photo de la gite" class="img-div-gite">
                <p class="description-main-page">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam aspernatur obcaecati ad
                    voluptatum quidem,iure ipsa minima ullam recusandae omnis corporis architecto sit, quasi 
                    vero libero voluptatem explicabo laboriosambr debitis commodi? 
                </p>
                
            </div>
            
            <div class="button-index-user">
                <p class="user-gite-prix">Prix / nuit : 54€</p>
                <button class="btn-reserver-user"><a href="./resa-user.php">RESERVER</a></button>
            </div>
        </li>
    </div>

</main>
<?php

require_once './templates/footer.php';
?>