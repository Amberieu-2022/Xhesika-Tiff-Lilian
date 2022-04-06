<?php

require_once 'connect.php';



require_once './templates/header.php';
?>
<section class="row-limit-size section-padding">
    <form action="#" method="GET" class="form-envoie-resa">
        <?php
        if (isset($_GET['id'])) {
        ?>
            <input type="hidden" name="id_gite" value="<?= $_GET['id'] ?>">
        <?php } ?>
        <div class="flex-btw">
            <label for="firstname_client" class="label-form-filter">PRENOM</label>
            <input type="text" class="input-resa" name="firstname_client" id="firstname_client">
        </div>
        <br>
        <div class="flex-btw">
            <label for="lastname_client" class="label-form-filter">NOM</label>
            <input type="text" name="lastname_client" id="lastname_client" class="input-resa">
        </div>
        <br>
        <div class="flex-btw">
            <label for="mail_client" class="label-form-filter">E-MAIL</label>
            <input type="email" size="30" placeholder="xxxxx@gmail.com" name="mail_client" id="mail_client" class="input-resa">
        </div>
        <br>
        <div class="flex-btw">
            <label for="phone_client" class="label-form-filter">TÉLÉPHONE</label>
            <input type="tel" name="phone_client" id="phone_client" class="input-resa" placeholder="06 00 00 00 00">
        </div>
        <br>
        <div class="flex-btw">
            <label for="nbr_traveller" class="label-form-filter">NOMBRE DE VOYAGEUR</label>
            <input type="number" min="1" name="nbr_traveller" id="nbr_traveller" class="input-resa nb-resa">
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">DATE DE RESERVATION</label> <br>
        </div>
        <div class="flex-btw around">
            <label for="start_date_reserv" class=" label-form-filter">ARRIVÉE</label>
            <input type="date" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" class="date-input-resa" name="start_date_reserv" id="start_date_reserv">

            <label for="end_date_reserv" class="label-form-filter">DÉPART</label>
            <input type="date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" max="<?= date('Y-m-d', strtotime('+3 months')) ?>" class="date-input-resa" name="end_date_reserv" id="end_date_reserv">
        </div>
        <br><br>
        <button class="btn-util btn-filtrer" type="submit" name="submit">Valider</button>

    </form>
</section>
<?php


if (isset($_GET['submit'])) {
    $idGite = $_GET['id_gite'];
    $firstname_client = $_GET['firstname_client'];
    $lastname_client = $_GET['lastname_client'];
    $phone_client = $_GET['phone_client'];
    $mail_client = $_GET['mail_client'];
    $nbr_traveller = $_GET['nbr_traveller'];
    $msg;
    // Date Réservation
    $start_date_reserv = $_GET['start_date_reserv'];
    $end_date_reserv = $_GET['end_date_reserv'];
    var_dump($start_date_reserv);
    var_dump($end_date_reserv);
    preg_match('~^[a-zA-Z]{3,15}$~', $firstname_client);
    preg_match('~^[a-zA-Z]{3,15}$~', $lastname_client);
    preg_match('~(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}~', $phone_client);
    preg_match('~[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})~', $mail_client);


//     $debut_jour = 31;
//     $debut_mois = 03;
//     $debut_annee = 2022;

//     $fin_jour = 30;
//     $fin_mois = 06;
//     $fin_annee = 2022;

//    $debut_date = mktime(0, 0, 0, $debut_mois, $debut_jour, $debut_annee);
//    $fin_date = mktime(0, 0, 0, $fin_mois, $fin_jour, $fin_annee);

//     for($dt = $debut_date; $dt <= $fin_date; $dt+=86400)
//     {
//     echo date("d m Y.",$dt)."<br />" ;


//     }
echo $today = date('Y-m-d');
$today1 = getdate();
print_r($today1);

foreach($today1 as $dt){
    echo $dt++;
}

// Envoie du mail de confirmation de la réservation

// $destinataire = 'particulier.flore@hotmail.com';
// $expediteur = 'contact@guesthouse.com';
// $copie = 'contact@guesthouse.com';
// $copie_cachee = 'contact@guesthouse.com';
// $objet = 'Confirmation de reservation';
// $headers = 'MIME-Version: 1.0' . "\n"; //Version du standard MIME utilisée dans le message
// $headers .= 'Reply-To: ' .$expediteur. "\n"; //Mail de réponse
// $headers .= 'From: "Nom_de_expediteur"<' .$expediteur. '>'."\n"; //Expediteur
// $headers .= 'Delivered-to: ' .$destinataire."\n"; //Destinataire
// $headers .= 'Cc: ' .$copie. "\n"; 
// $headers .= 'Bcc: ' .$copie_cachee. "\n\n";
// $message = "Bonjour " .$firstname_client. ", \n\n Nous sommes ravi de vous confirmer votre réservation sur le site de GUESTHOUSE. Vos dates de réservation sont les suivantes : " .$start_date_reserv. "au" .$end_date_reserv. ".\n\n GUESTHOUSE vous remercie de votre confiance !";

// if(mail($destinataire, $objet, $message, $headers)) //Envoi du messgae
// {
//     echo 'Votre message à bien été envoyé.';
// }else{
//     echo 'Votre message n\'as pas pu être envoyé.';
// }

$dest = "particulier.flore@gmail.com";
$sujet = "Ceci est un test";
$message = "Ceci est un test de la fonction mail()";
$header = "From: $dest";

/* test 1 */
$envoi = mail($dest, $sujet, $message, $header);

if ($envoi == true)
  echo "<p>Test 1 : la fonction mail() fonctionne. Un e-mail a ete envoye a l'adresse $dest.
  <br />S'il ne vous parvient pas, il y a probablement un blocage au niveau du serveur SMTP de l'hebergeur</p>";
else
  echo "<p>Test 1 : l'envoi par la fonction PHP mail() ne fonctionne pas ou est desactivee</p>";

/* test 2 */
echo "<p>Test 2 : Si bool(false) le mail ne part pas
<br />Si bool(true) l'e mail a bien ete envoye (donc il est bloque apres)</p>";
var_dump(mail($dest, $sujet, $message, $header));






$req = $db->prepare('INSERT INTO bookings (`id_gite`, `id_client`, `dt`,`,`nbr_nuit`, `price_reserv`) VALUES (:id_gite, :id_client, :dt, :nbr_nuit, :price_reserv)');

    $req->bindParam('id_gite', $idGite, PDO::PARAM_STR);
    $req->bindParam('id_client', $idClient, PDO::PARAM_STR);
    $req->bindParam('dt', $dt);
    $req->bindParam('nbr_nuit', $nbr_nuit, PDO::PARAM_STR);
    $req->bindParam('price_reserv', $price_reserv, PDO::PARAM_INT);
    $req->execute();
    

    var_dump($idGite);



   



    // Création de la connection à la base de données
    try {
        $db = new PDO('mysql:host=localhost;dbname=cottage;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }

    echo 'COUCOU !!!!';


    $req = $db->prepare('INSERT INTO `customer` (`firstname_client`, `lastname_client`, `phone_client`, `mail_client`, `nbr_traveller`) VALUES (:firstname_client, :lastname_client, :phone_client, :mail_client, :nbr_traveller)');

    $req->bindParam('firstname_client', $firstname_client, PDO::PARAM_STR);
    $req->bindParam('lastname_client', $lastname_client, PDO::PARAM_STR);
    $req->bindParam('phone_client', $phone_client, PDO::PARAM_STR);
    $req->bindParam('mail_client', $mail_client, PDO::PARAM_STR);
    $req->bindParam('nbr_traveller', $nbr_traveller, PDO::PARAM_INT);
    $req->execute();
    $idClient = $db->lastInsertId();
    var_dump($idClient);


    
}
require_once './templates/footer.php';
?>