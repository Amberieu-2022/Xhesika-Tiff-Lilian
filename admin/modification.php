<?php

require_once '../templates/header-admin.php';

?>
<h1 class="nb-gite-modal">MODIFIER VOTRE GÎTE</h1>
<form action="#" method="POST" enctype='multipart/form-data' class="form-ajout-new-gite">
    <div class="head-form-ajout">
        <label class="label-ajout" for="name_gite">
            Nom du gîte :
        </label>
        <input class="input-ajout" type="text" name="name_gite" id="name_gite">
    </div>
    <br><br>
    <div class="head-form-ajout">
        <label class="label-ajout" for="location_gite">
            Adresse du gîte :
        </label>
        <input class="input-ajout" type="text" name="location_gite" id="location_gite">
    </div>

    <br><br>
    <div class="head-form-ajout">
        <label  class="label-ajout"for="profil_gite">
            Modifier l'image du profil :
        </label>
        <input class="label-ajout" type="file" name="profil_gite" accept="image/png, image/jpeg, image/jpg"> 
    </div>
    <br> <br>
    <div class="head-form-ajout">
        <label  class="label-ajout"for="profil_gite">
            Modifier le(s) image(s) du gîte :
        </label>
        <input class="label-ajout" type="file" name="profil_gite" accept="image/png, image/jpeg, image/jpg">
    </div>
    <div class="modif-nb-gite">
        <br><br>
        <div id="modif-nb-ch">
            <label class="label-ajout" for="nbr_sleeping">
                Nombre de couchage :
            </label>
            <select name="nbr_sleeping" id="nbr_sleeping" type="number" class="input-ajout input-nb-add">
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

            <br><br>

            <label class="label-ajout" for="nbr_bedroom">
                Nombre de salle de bain :
            </label>
            <select name="nbr_bathroom" id="nbr_bathroom" type="number" class="input-ajout input-nb-add">
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
            <input type="hidden" name="id_gite" id="id_gite" value="">
        </div>    
        <br><br>
    </div>    
    <label for="type" class="label-ajout">Categorie</label>
    <br>
    <div class="first-flex flex-2">
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Chambre </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Appartement </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Maison </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Villa </label></div>
    </div>
    <br>
    <label for="option" class="label-ajout"> Option(s) </label> <br>
    <div class="first-flex flex-2">
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Piscine </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Jardin </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Parking </label></div>
        <div class="ajout-lab-in"><input type="checkbox" name="gite[]" value="" class="input-option"><label class="label-ajout"> Animaux acceptée </label></div>
    </div>
    <br>
    <label class="label-ajout" for="desc_gite">
        Description du gîte :
    </label> <br> <br>
    <textarea class="input-ajout descript-in" name="desc_gite" id="desc_gite" cols="30" rows="10" placeholder="Veuillez entrer une description de l'article"></textarea>

    <br> <br>
    <input class="btn-valid-ajout" type="submit" name="submit" value="Valider la modification">

</form>


<?php
if(isset($_POST['submit'])){
$finalString;
$extensionUpload;

// On vérifie que le fichier a été envoyé
if(isset($_FILES['profil_gite']) && $_FILES['profil_gite']['error'] == 0){

//On vérifie le poids du fichier envoyé

if (isset($_FILES['profil_gite']['size']) <= 1000000) {
    
    //on récupère les infos du fichier

    $infosFichier = pathinfo($_FILES['profil_gite']['name']);

    //On récupère l'extension du fichier

    $extensionUpload = $infosFichier['extension'];

    //On définit les extensions autorisées

    $extensionsAutorisees = ['jpg', 'jpeg', 'png'];

    //On test l'extension du fichier

    if (in_array($extensionUpload, $extensionsAutorisees)) {

        //On transforme le nom du gîte en minuscule
        
        $minuscule = strtolower($_POST['name_gite']);

        //On supprime les espaces du nom du gîte

        $searchString = " ";

        $replaceString = "";

        $finalString = str_replace($searchString, $replaceString, $minuscule);
        var_dump($finalString);

        //On crée le nouveau dossier s'il n'existe pas

        $newDir = '../img/' . $finalString;

        if (!file_exists($newDir)){
            mkdir($newDir, 0777, true);
        }
        
        //On récupère date et heure 

        $date = date('dmyhis');

        //On créer le nouveau nom du fichier

        $ref = $finalString. '_' . $date;

        var_dump($finalString);
        var_dump($ref);
        //On déplace le fichier dans le dossier de destination

        move_uploaded_file($_FILES['profil_gite']['tmp_name'], '../img/' . $finalString . '/' . $ref . '.' . $extensionUpload);
        
    }
}
}

$name_gite = $_POST['name_gite'];
$location_gite = $_POST['location_gite'];
$profil_gite = $finalString . '_' . date('dmyhis') . '.' . $extensionUpload;
$desc_gite = $_POST['desc_gite'];
$nbr_sleeping = $_POST['nbr_sleeping'];
$nbr_bedroom = $_POST['nbr_bedroom'];
$nbr_bathroom = $_POST['nbr_bathroom']; 

var_dump($name_gite);

require_once 'update-gite.php';

header('Location: http://localhost/php/Xhesika-Tiff-Lilian-main/admin/gite.php?id='.$id_gite);
}else{
$message = 'Veuillez remplir tous les champs';
}


require_once '../templates/footer-admin.php';

?>