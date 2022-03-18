<?php

require_once '../connect.php';

$req = $db->prepare('INSERT INTO gite (`name_gite`,`name_simple_gite`, `location_gite`, `profil_gite`, `desc_gite`, `nbr_sleeping`, `nbr_bedroom`, `nbr_bathroom`) VALUES (:name_gite, :name_simple_gite, :location_gite, :profil_gite, :desc_gite, :nbr_sleeping, :nbr_bedroom, :nbr_bathroom)');
        
$req->bindParam(':name_gite', $name_gite, PDO::PARAM_STR);
$req->bindParam(':name_simple_gite', $name_simple_gite, PDO::PARAM_STR);
$req->bindParam(':location_gite', $location_gite, PDO::PARAM_STR);
$req->bindParam(':profil_gite', $profil_gite, PDO::PARAM_STR);
$req->bindParam(':desc_gite', $desc_gite, PDO::PARAM_STR);
$req->bindParam(':nbr_sleeping', $nbr_sleeping, PDO::PARAM_INT);
$req->bindParam(':nbr_bedroom', $nbr_bedroom, PDO::PARAM_INT);
$req->bindParam(':nbr_bathroom', $nbr_bathroom, PDO::PARAM_INT);

$req->execute();
echo 'Les données ont bien été récup';