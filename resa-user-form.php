<?php

require_once 'connect.php';

$idGite = $_GET['id'];

//Requête SQL SELECT price_night
$reqGite = $db->prepare('SELECT `id_categ`, `name_gite`, `name_simple_gite`, `location_gite`, `profil_gite`, `desc_gite`, `nbr_sleeping`, `nbr_bathroom`, `price_night` FROM `cottages` WHERE `id_gite` = :id_gite');
$reqGite->bindParam('id_gite', $idGite, PDO::PARAM_INT);
$reqGite->execute();

$value = $reqGite->fetch(PDO::FETCH_ASSOC);

$redgGiteOpt = $db->prepare('SELECT `id_gite_suppl`, `id_gite`, `id_suppl` FROM `gite_option` WHERE `id_gite` = :id_gite ORDER BY `id_suppl` ASC');
$redgGiteOpt->bindParam('id_gite', $idGite, PDO::PARAM_STR);
$redgGiteOpt->execute();

$valuegGiteOpt = $redgGiteOpt->fetchAll(PDO::FETCH_ASSOC);

$reqImage = $db->prepare('SELECT `name_image` FROM `image` WHERE `id_gite` = :id_gite');
$reqImage->bindParam('id_gite', $idGite, PDO::PARAM_INT);
$reqImage->execute();

$valueImage = $reqImage->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vous trouverez sur notre site des gîtes où vous allez passer des moments inoubliable.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Montserrat:wght@100;200;300;400&family=Roboto+Slab:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <title>GUEST HOUSE | LA VRAIE AVENTURE</title>
    <link rel="icon" size="16x16" type="image/png" href="./templates/img/icon/icon.png">
    <link rel="stylesheet" href="./templates/css/style.css">
</head>

<body class="body-resa">
    <input type="hidden" value="<?=$idGite?>" id="id-gite-resa">
<header>
    <figure class="justify-header">
        <a href="#"><img src="./templates/img/icon/logo.png" alt="Logo du Site"></a>
    </figure>
</header>
</div>
<!-- PAGE RESERVER GITE UTILISATEUR -->
<main class="reservation-utilisateur">
<header class="reservation-user">
    <h1 class="titre-resa-user">RESERVER LE GÎTE DE VOS ENVIES</h1>
    <!-- SLIDER -->

</header>
<div id="slider">
    <img src="./img/gite/<?=$valueImage[0]['name_image']?>" alt="image du slider" id="slide">
    <div id="left"><img src="./templates/img/icon/left.png" alt="Bouton fleche gauche"></div>
    <div id="right"><img src="./templates/img/icon/right.png" alt="Bouton fleche droite"></div>
</div>
<!-- MAIN / LE CONTENU DU PAGE[GITE] -->
<h2 class="titre-logement"><?= $value['name_gite']?></h2>
<p class="description-resa-user"><?= $value['nbr_sleeping']?> couchage(s) et <?= $value['nbr_bathroom']?> salle de bain</p>

<p class="row-limit-size description-gite"><?= $value['desc_gite']?></p>
<h2 class="titre-logement">ÉQUIPEMENTS</h2>
<div class="row-limit-size equipements">

    <div class="equip-flex">
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/wifi.png" alt="wifi logo">
            <p class="equip-figcap">WIFI</p>
        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/clima.png" alt="clima logo">
            <p class="equip-figcap">CLIMATISATION</p>
        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/cuisine.png" alt="assiette logo">
            <p class="equip-figcap">CUISINE</p>
        </figcaption>
    </div>
    <div class="equip-flex">
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/frigo.png" alt="refrigerateur logo">
            <p class="equip-figcap">RÉFRIGÉRATEUR</p>
        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/four.png" alt="micro-ondes logo">
            <p class="equip-figcap">FOUR MICRO-ONDES</p>

        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/baignoire.png" alt="abaignoire logo">
            <p class="equip-figcap">BAIGNOIRE</p>
        </figcaption>
    </div>
    <div class="equip-flex">
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/tv.png" alt="tv logo">
            <p class="equip-figcap">TV</p>
        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/lave-linge.png" alt="lave-linge logo">
            <p class="equip-figcap">LAVE-LINGE</p>
        </figcaption>
        <figcaption class="flex-btw">
            <img src="./templates/img/icon/seche.png" alt="seche-cheveux logo">
            <p class="equip-figcap">SÈCHE-CHEVEUX</p>
        </figcaption>
    </div>

</div>
<h2 class="titre-logement">OPTIONS</h2>
<div class="row-limit-size equipements">
        <!-- <img src="./templates/img/icon/btn-delete.png" alt="piscine logo"> -->
        <?php
        if(!empty($valuegGiteOpt[0]['id_suppl'])){ 
            $reqOpt = $db->prepare('SELECT `id_suppl`, `name_suppl` FROM `options` WHERE `id_suppl` = :opt');
            $reqOpt->bindParam('opt', $valuegGiteOpt[0]['id_suppl'], PDO::PARAM_INT);
            $reqOpt->execute();

            $valueOpt = $reqOpt->fetch(PDO::FETCH_ASSOC);
        
        ?>
    <figcaption class="flex-btw padd-option">
        <p class="equip-figcap"><?=$valueOpt['name_suppl']?></p>
    </figcaption>
        <?php
        }
        ?>
        <!-- <img src="./templates/img/icon/jardin.png" alt="jardin logo"> -->
        <?php
        if(!empty($valuegGiteOpt[1]['id_suppl'])){ 
            $reqOpt = $db->prepare('SELECT `id_suppl`, `name_suppl` FROM `options` WHERE `id_suppl` = :opt');
            $reqOpt->bindParam('opt', $valuegGiteOpt[1]['id_suppl'], PDO::PARAM_INT);
            $reqOpt->execute();

            $valueOpt = $reqOpt->fetch(PDO::FETCH_ASSOC);
        
        ?>
    <figcaption class="flex-btw padd-option">
        <p class="equip-figcap"><?=$valueOpt['name_suppl']?></p>
    </figcaption>
        <?php
        }
        ?>
        <!-- <img src="./templates/img/icon/parking.png" alt="parking logo"> -->
        <?php
        if(!empty($valuegGiteOpt[2]['id_suppl'])){ 
            $reqOpt = $db->prepare('SELECT `id_suppl`, `name_suppl` FROM `options` WHERE `id_suppl` = :opt');
            $reqOpt->bindParam('opt', $valuegGiteOpt[2]['id_suppl'], PDO::PARAM_INT);
            $reqOpt->execute();

            $valueOpt = $reqOpt->fetch(PDO::FETCH_ASSOC);
        
        ?>
    <figcaption class="flex-btw padd-option">
        <p class="equip-figcap"><?=$valueOpt['name_suppl']?></p>
    </figcaption>
        <?php
        }
        ?>
        <!-- <img src="./templates/img/icon/animaux.png" alt="animaux logo"> -->
        <?php
        if(!empty($valuegGiteOpt[3]['id_suppl'])){ 
            $reqOpt = $db->prepare('SELECT `id_suppl`, `name_suppl` FROM `options` WHERE `id_suppl` = :opt');
            $reqOpt->bindParam('opt', $valuegGiteOpt[3]['id_suppl'], PDO::PARAM_INT);
            $reqOpt->execute();

            $valueOpt = $reqOpt->fetch(PDO::FETCH_ASSOC);
        
        ?>
    <figcaption class="flex-btw padd-option">
        <p class="equip-figcap"><?=$valueOpt['name_suppl']?></p>
    </figcaption>
        <?php
        }
        ?>
    
</div>
<section class="row-limit-size section-padding">
    <form action="#" method="POST" class="form-envoie-resa">
        <div class="flex-btw">
            <label for="firstname_client" class="label-form-filter">PRENOM</label>
            <input type="text" class="input-resa" name="firstname_client" id="firstname_client" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="lastname_client" class="label-form-filter">NOM</label>
            <input type="text" name="lastname_client" id="lastname_client" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="mail_client" class="label-form-filter">E-MAIL</label>
            <input type="email" size="30" name="mail_client" id="mail_client" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="phone_client" class="label-form-filter">TÉLÉPHONE</label>
            <input type="tel" name="phone_client" id="phone_client" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="nbr_traveller" class="label-form-filter">NOMBRE DE VOYAGEUR (Maximum <?=$value['nbr_sleeping']?>): </label>
            <input type="number" min="1" name="nbr_traveller" id="nbr_traveller" class="input-resa nb-resa" max="<?=$value['nbr_sleeping']?>" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">DATE DE RESERVATION</label> <br>
        </div>
        <div class="flex-btw around">
            <label for="start_date_reserv" class=" label-form-filter">ARRIVÉE</label>
            <input type="date" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" class="date-input-resa" name="start_date_reserv" id="start_date_reserv" required>

            <label for="end_date_reserv" class="label-form-filter">DÉPART</label>
            <input type="date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" max="<?= date('Y-m-d', strtotime('+3 months')) ?>" class="date-input-resa" name="end_date_reserv" id="end_date_reserv" required>
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
    
    // Date Réservation
    $start_date_reserv = $_GET['start_date_reserv'];
    $end_date_reserv = $_GET['end_date_reserv'];
    var_dump($start_date_reserv);
    var_dump($end_date_reserv);
    preg_match('~^[a-zA-Z]{3,15}$~', $firstname_client);
    preg_match('~^[a-zA-Z]{3,15}$~', $lastname_client);
    preg_match('~(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}~', $phone_client);
    preg_match('~[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})~', $mail_client);

    //Calcul du nombre de nuit de la réservation
    $start_date = date_create($start_date_reserv);
    $end_date = date_create($end_date_reserv);
    $diff = date_diff($start_date, $end_date);
    $nights = $diff->format('%a') - 1;

    //On récupère tous les jours de la réservation
    function parseDate($date){
        $parse = date_parse($date);
        $day = $parse['day'];
        $month = $parse['month'];
        $year = $parse['year'];

        $mktime = mktime(0, 0, 0, $month, $day, $year);

        return $mktime;
    }

    $first_date = parseDate($start_date_reserv);
    $last_date = parseDate($end_date_reserv);

    for($i = $first_date; $i <= $last_date; $i += 86400){
        $stay[] = date("Y-m-d ", $i);
    }

    //Calcul prix du séjour
    $price_reserv = $nights * $value['price_night'];

    //Requête SQL table customer
    $reqCustomer = $db->prepare('INSERT INTO `customer` (`firstname_client`, `lastname_client`, `phone_client`, `mail_client`) VALUES (:firstname, :lastname, :phone, :mail)');

    $reqCustomer->bindParam('firstname', $firstname_client, PDO::PARAM_STR);
    $reqCustomer->bindParam('lastname', $lastname_client, PDO::PARAM_STR);
    $reqCustomer->bindParam('phone', $phone_client, PDO::PARAM_INT);
    $reqCustomer->bindParam('mail', $mail_client, PDO::PARAM_STR);

    $reqCustomer->execute();

    //Requête SQL table bookings
    $idCustomer = $db->lastInsertId();

    $reqBookings = $db->prepare('INSERT INTO `bookings`(`id_gite`, `id_client`, `date_reserv`, `end_date_reserv`, `nbr_nuit`, `nbr_people`, `price_reserv`) VALUES (:id_gite, :id_client, :date_reserv, :end_date_reserv, :nbr_nuit, :nbr_people, :price_reserv)');

    $reqBookings->bindParam('id_gite', $idGite, PDO::PARAM_INT);
    $reqBookings->bindParam('id_client', $idCustomer, PDO::PARAM_INT);
    $reqBookings->bindParam('date_reserv', $start_date_reserv, PDO::PARAM_STR);
    $reqBookings->bindParam('end_date_reserv', $end_date_reserv, PDO::PARAM_STR);
    $reqBookings->bindParam('nbr_nuit', $nights, PDO::PARAM_INT);
    $reqBookings->bindParam('nbr_people', $nbr_traveller, PDO::PARAM_INT);
    $reqBookings->bindParam('price_reserv', $price_reserv, PDO::PARAM_INT);

    $reqBookings->execute();
    
    //Requête SQL table detail_booking
    $idResa = $db->lastInsertId();

    foreach($stay as $day){
        $reqDetail = $db->prepare('INSERT INTO `detail_booking` (`id_gite`, `id_client`, `id_reserv`, `day_booked`) VALUES (:id_gite, :id_client, :id_reserv, :day_booked)');

        $reqDetail->bindParam('id_gite', $idGite, PDO::PARAM_INT);
        $reqDetail->bindParam('id_client', $idCustomer, PDO::PARAM_INT);
        $reqDetail->bindParam('id_reserv', $idResa, PDO::PARAM_INT);
        $reqDetail->bindParam('day_booked', $day, PDO::PARAM_STR);

        $reqDetail->execute();
    }
    
}

?>
    <footer>
        <figure class="row-limit-size"><a href="#"><img class="footer-logo" src="./templates/img/icon/logo.png" alt="Logo du site"></a></figure>
        <div class="row-limit-size justify-footer absolut">
            <figure class="reseaux-s"><a href="#"><img class="reseaux-sociaux" src="./templates/img/icon/instagram1.png" alt="Logo d'instagram"></a></figure>
            <figure class="reseaux-s"><a href="#"><img class="reseaux-sociaux" src="./templates/img/icon/facebook1.png" alt="Logo du facebook"></a></figure>

            <figure class="reseaux-s"><a href="#"><img class="reseaux-sociaux" src="./templates/img/icon/snap1.png" alt="Logo du snapchat"></a></figure>
            <figure class="reseaux-s"><a href="#"><img class="reseaux-sociaux" src="./templates/img/icon/twitter.png" alt="Logo du twitter"></a></figure>
        </div>
        <div class="row-limit-size">
            <nav class="menu-footer justify-footer block">
                <ul>
                    <li><a href="#">Plan du Site</a></li>
                    <li><a href="#">Mention Légales</a></li>
                    <li><a href="#">Service Client</a></li>
                    <li><a href="#">Covid-19 FAQs</a></li>
                    <li><a href="#">A Propos de Nous</a></li>
                    <li><a href="#">Partenaires</a></li>
                </ul>
            </nav>
            <p class="copyright">Copyright Guest House Inc 2022</p>
        </div>

    </footer>

    <script src="./main-user.js"></script>
    </body>

    </html>