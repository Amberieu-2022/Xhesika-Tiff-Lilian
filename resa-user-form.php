<?php

require_once 'connect.php';

session_start();
if (!isset($_SESSION['adminId'])) {
    header('Location: index.php');
}
require_once './templates/header.php';
?>
<section class="row-limit-size section-padding">
    <form action="#" method="GET" class="form-envoie-resa">
        <div class="flex-btw">
            <label for="" class="label-form-filter">PRENOM</label>
            <input type="text" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">NOM</label>
            <input type="text" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="email" class="label-form-filter">E-MAIL</label>
            <input type="email" size="30" placeholder="xxxxx@gmail.com" class="input-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">TÉLÉPHONE</label>
            <input type="tel" class="input-resa" placeholder="06 00 00 00 00" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">NOMBRE DE VOYAGEUR</label>
            <input type="number" min="1" class="input-resa nb-resa" required>
        </div>
        <br>
        <div class="flex-btw">
            <label for="" class="label-form-filter">DATE DE RESERVATION</label> <br>
        </div>
        <div class="flex-btw around">
            <label for="" class="label-form-filter">ARRIVÉE</label>
            <input type="date" class="date-input-resa" required>
            <label for="" class="label-form-filter">DÉPART</label>
            <input type="date" class="date-input-resa" required>

        </div>
        <br><br><input type="submit" class="btn-btn">

    </form>
</section>
<?php


if (isset($_GE['submit'])) {
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

    if ($start_date_reserv === $end_date_reserv) {
        echo "<script>alert(\"Veuillez entrer une date de départ supérieur à celle d'arriver.\")
            return false</script>";
    } else {
        "<script> return true; </script>";
    }

    $start_date_reserv = new DateTime($_GET['start_date_reserv']);
    $end_date_reserv = new DateTime($_GET['end_date_reserv']);

    $intvl = $start_date_reserv->diff($end_date_reserv);

    echo $intvl->days . " Nuits. <br>";
    var_dump($intvl);

    $start_date_reserv = date_create($_GET['start_date_reserv']);

    $end_date_reserv   = date_create($_GET['end_date_reserv']);
    date_modify($end_date_reserv, '+1 day');

    $interval = DateInterval::createFromDateString('1 day');
    $daterange = new DatePeriod($start_date_reserv, $interval, $end_date_reserv);


    $req = $db->query('SELECT `id_gite`, `price_night` FROM `cottages`', PDO::FETCH_ASSOC);

    foreach ($daterange as $date1) {

        $req = $dby->prepare('INSERT INTO bookings (`id_gite`, `id_client`, `start_date_reserv`, `end_date_reserv`, `nbr_nuit`, `price_reserv`) VALUES (:id_gite, :id_client, :start_date_reserv, :end_date_reserv, :nbr_nuit, :price_reserv)');

        $req->bindParam('id_gite', $idGite, PDO::PARAM_STR);
        $req->bindParam('id_client', $idClient, PDO::PARAM_STR);
        $req->bindParam('start_date_reserv', $start_date_reserv, PDO::PARAM_STR);
        $req->bindParam('end_date_reserv', $end_date_reserv, PDO::PARAM_STR);
        $req->bindParam('nbr_nuit', $nbr_nuit, PDO::PARAM_INT);
        $req->bindParam('price_reserv', $price_reserv, PDO::PARAM_STR);

        $idGite = $db->lastInsertId();
    }
    
    $req = $db->prepare('INSERT INTO customer (`firstname_client`, `lastname_client`, `phone_client`, `mail_client`, `nbr_traveller`) VALUES (:firstname_client, :lastname_client, :phone_client, :mail_client, :nbr_traveller)');

    $req->bindParam('firstname_client', $firstname_client, PDO::PARAM_STR);
    $req->bindParam('lastname_client', $lastname_client, PDO::PARAM_STR);
    $req->bindParam('phone_client', $phone_client, PDO::PARAM_STR);
    $req->bindParam('mail_client', $mail_client, PDO::PARAM_STR);
    $req->bindParam('nbr_traveller', $nbr_traveller, PDO::PARAM_INT);
    $req->execute();
}
?>







<?php
require_once './templates/footer.php';
?>