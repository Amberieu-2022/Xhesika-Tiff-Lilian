<?php
    require_once '../connect.php';


    $req = $db->query('SELECT `id_gite`, `name_gite`, `name_simple_gite`, `location_gite`, `profil_gite`, `desc_gite`, `nbr_sleeping`, `nbr_bedroom`, `nbr_bathroom` FROM `gite` ORDER BY `id_gite` DESC');

    echo json_encode($req->fetchAll(PDO::FETCH_ASSOC));
?>