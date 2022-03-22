<?php

require_once '../templates/header-admin.php';

?>
<h1>Ajouter un nouveau gîte</h1>
<form action="#" method="POST" enctype='multipart/form-data'>

    <label for="name_gite">
        Nom du gîte :
    </label>
    <input type="text" name="name_gite" id="name_gite" required>

    <br><br>

    <label for="location_gite">
        Adresse du gîte :
    </label>
    <input type="text" name="location_gite" id="location_gite" required>

    <br><br>

    <label for="profil_gite">
        Image de profil :
    </label>
    <input type="file" name="profil_gite" multiple accept="image/png, image/jpeg, image/jpg" required>

    <br><br>

    <label for="image_gite">
        Image du gîte :
    </label>
    <input type="file" name="myimg[]" multiple accept="image/png, image/jpeg, image/jpg" required>

    <br><br>

    <label for="desc_gite">
        Description du gîte :
    </label>
    <textarea name="desc_gite" id="desc_gite" cols="30" rows="10" placeholder="Veuillez entrer une description de l'artcile" required></textarea>

    <br><br>

    <label for="nbr_sleeping">
        Nombre de couchage :
    </label>
    <input type="number" name="nbr_sleeping" id="nbr_sleeping" min="1" required>

    <br><br>

    <label for="nbr_bedroom">
        Nombre de chambre :
    </label>
    <input type="number" name="nbr_bedroom" id="nbr_bedroom" min="1" required>

    <br><br>

    <label for="nbr_bedroom">
        Nombre de salle de bain :
    </label>
    <input type="number" name="nbr_bathroom" id="nbr_bathroom" min="1" required>

    <br><br>
    <button type="submit" name="submit">Valider la création
    </button>



</form>
<?php

// Photo Profil Gite
if (isset($_POST['submit'])) {
    $finalString;
    $ref;
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

                //On récupère date et heure 

                $date = date('dmyhis');

                //On créer le nouveau nom du fichier

                $ref = $finalString . '_' . $date . '_pdp';
                //On déplace le fichier dans le dossier de destination

                move_uploaded_file($_FILES['profil_gite']['tmp_name'], '../img/pdp/' . $ref . '.' . $extensionUpload);
            }
        }
    }
    // $id_gite = $_POST['id_gite'];
    $name_gite = $_POST['name_gite'];
    $name_simple_gite = $finalString;
    $location_gite = $_POST['location_gite'];
    $profil_gite  = $ref . '.' . $extensionUpload;
    $desc_gite = $_POST['desc_gite'];
    $nbr_sleeping = $_POST['nbr_sleeping'];
    $nbr_bedroom = $_POST['nbr_bedroom'];
    $nbr_bathroom = $_POST['nbr_bathroom'];

    echo 'Les données ont bien été récup';

    //Connexion à la BDD
    require_once 'create-gite.php';
    // header('Location: gite.php');
    var_dump($idGite);
    for ($i = 0; $i < count($_FILES['myimg']['name']); $i++) {
        if (isset($_FILES['myimg']['name'][$i]) && $_FILES['myimg']['error'][$i] == 0) {
            if (isset($_FILES['myimg']['size'][$i]) <= 1000000) {
                $infosFichier = pathinfo($_FILES['myimg']['name'][$i]);
                $extensionUpload = $infosFichier['extension'];
                $extensionsAutorisees = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
                if (in_array($extensionUpload, $extensionsAutorisees)) {
                    $date = date('dmyhis');
                    $minuscule = strtolower($_POST['name_gite']);
                    $searchString = " ";
                    $replaceString = "";
                    $finalString = str_replace($searchString, $replaceString, $minuscule);
                    $ref = $finalString . "_" . $date . "_" . $i;
                    move_uploaded_file($_FILES['myimg']['tmp_name'][$i], "../img/gite/" . $ref . "." . $extensionUpload);

                    
                    $name_image =  $ref . "." . $extensionUpload;
                    
                    var_dump($name_image);
                    var_dump($idGite);
                    require_once 'ajout-image.php';
                }
            }
        }
    }
}

?>

<?php

require_once '../templates/footer-admin.php';

?>