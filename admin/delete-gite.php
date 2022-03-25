<!-- DELETE ? -->
<?php

    require_once '../connect.php';

    $id = $_POST['id_gite'];
 
    $req = $db->prepare('DELETE FROM `cottages` WHERE id_gite = :id');

    $req->bindParam(':id', $id, PDO::PARAM_STR);

    $req->execute();

    // la même requête que sur le ajout.php sauf que sa sera un select
