<?php

require_once '../templates/header-admin.php';

?>
<h1 class="nb-gite-modal">AJOUTER UN NOUVEAU GÎTE</h1>
<form action="#" method="POST" enctype='multipart/form-data' class="form-ajout-new-gite">

    <label class="label-ajout" for="name_gite">
        Nom du gîte :
    </label>
    <input class="input-ajout" type="text" name="name_gite" id="name_gite" required>

    <br><br>

    <label class="label-ajout" for="location_gite">
        Adresse du gîte :
    </label>
    <input class="input-ajout" type="text" name="location_gite" id="location_gite" required>

    <br><br>

    <label class="label-ajout" for="profil_gite">
        Ajouter un image :
    </label>
    <input class="label-ajout" type="file" name="profil_gite" multiple accept="image/png, image/jpeg, image/jpg" required>
    <br><br>
    
    <label class="label-ajout" for="nbr_sleeping">
        Nombre de couchage :
    </label>
    <input class="input-ajout input-nb-add" type="number" name="nbr_sleeping" id="nbr_sleeping" min="1" required>

    <br> <br>
    <label class="label-ajout" for="nbr_bedroom">
        Nombre de chambre :
    </label>
    <input class="input-ajout input-nb-add" type="number" name="nbr_bedroom" id="nbr_bedroom" min="1" required>
    <br> <br>
    <label class="label-ajout" for="nbr_bedroom">
        Nombre de salle de bain :
    </label>
    <input class="input-ajout input-nb-add" type="number" name="nbr_bathroom" id="nbr_bathroom" min="1" required>

    <br><br>
    <label for="type" class="label-ajout">Categorie</label> <br>
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
    </label>
    <textarea class="input-ajout descript-in" name="desc_gite" id="desc_gite" cols="30" rows="10" placeholder="Veuillez entrer une description de l'artcile" required></textarea>

    

    <br><br>
    <button class="btn-valid-ajout" type="submit" name="submit">Valider la création
    </button>



</form>
<?php

if (isset($_POST['submit'])) {
    $finalString;
    //On vérifie que le fichier a été envoyé

    if (isset($_FILES['profil_gite']) and $_FILES['profil_gite']['error'] == 0) {

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

                //On crée le nouveau dossier s'il n'existe pas

                $newDir = '../img/' . $finalString;

                if (!file_exists($newDir)) {
                    mkdir($newDir, 0777, true);
                }

                //On récupère date et heure 

                $date = date('dmyhis');

                //On créer le nouveau nom du fichier

                $ref = $finalString . '_' . $date;
                var_dump($finalString);
                var_dump($ref);
                //On déplace le fichier dans le dossier de destination

                move_uploaded_file($_FILES['profil_gite']['tmp_name'], '../img/' . $finalString . '/' . $ref . '.' . $extensionUpload);
            }
        }
    }
    // $id_gite = $_POST['id_gite'];
    $name_gite = $_POST['name_gite'];
    $name_simple_gite = $finalString;
    $location_gite = $_POST['location_gite'];
    $profil_gite  = $finalString . '_' . date('dmyhis') . '.' . $extensionUpload;
    $desc_gite = $_POST['desc_gite'];
    $nbr_sleeping = $_POST['nbr_sleeping'];
    $nbr_bedroom = $_POST['nbr_bedroom'];
    $nbr_bathroom = $_POST['nbr_bathroom'];

    echo 'Les données ont bien été récup';

    //Connexion à la BDD
    require_once 'create-gite.php';
    header('Location: gite.php');
    var_dump($name_gite);
}


?>

<?php

require_once '../templates/footer-admin.php';

?>