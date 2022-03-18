<?php

require_once '../templates/header-admin.php';

?>

<form action="#" method="POST" enctype='multipart/form-data'>

<label for="name_gite">
    Nom du gîte :
</label>
<input type="text" name="name_gite" id="name_gite">

<br><br>

<label for="location_gite">
    Adresse du gîte :
</label>
<input type="text" name="location_gite" id="location_gite">

<br><br>

<label for="profil_gite">
    Image du gîte :
</label>
<input type="file" name="profil_gite" accept="image/png, image/jpeg, image/jpg">

<br><br>

<label for="desc_gite">
    Description du gîte :
</label>
<textarea name="desc_gite" id="desc_gite" cols="30" rows="10" placeholder="Veuillez entrer une description de l'artcile"></textarea>

<br><br>

<label for="nbr_sleeping">
    Nombre de couchage :
</label>
<input type="number" name="nbr_sleeping" id="nbr_sleeping" min="1">

<br><br>

<label for="nbr_bedroom">
    Nombre de chambre :
</label>
<input type="number" name="nbr_bedroom" id="nbr_bedroom" min="1">

<br><br>

<label for="nbr_bedroom">
    Nombre de salle de bain :
</label>
<input type="number" name="nbr_bathroom" id="nbr_bathroom" min="1">
<input type="hidden" name="id_gite" id="id_gite" value="">
<input type="submit" name="submit" value="Valider la modification">

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