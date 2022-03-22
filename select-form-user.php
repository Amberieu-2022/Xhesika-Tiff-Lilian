<?php

    require_once 'connect.php';

    if(isset($_GET['submit'])){
        $location_gite = $_GET['location_gite'];
        $start_date_reserv = $_GET['start_date_reserv'];
        $end_date_reserv = $_GET['end_date_reserv'];
        $nbr_sleeping = $_GET['nbr_sleeping'];
        $nbr_bathroom = $_GET['nbr_bathroom'];
        $nbr_bedroom = $_GET['nbr_bedroom'];
        // $name_categ;
        // $name_suppl;
        // $price_reserv = $_GET['price_reserv'];

        echo ' Les données ont bien été récupéré';

        $req = $db->query('SELECT `name_gite`, `location_gite`, `profil_gite`, `desc_gite`, `nbr_sleeping`, `nbr_bedroom`, `nbr_bathroom` FROM gite LIMIT 4');

        echo json_encode($req->fetchAll(PDO::FETCH_ASSOC));
    
    }

