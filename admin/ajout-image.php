<?php   
require_once '../connect.php';

$req = $db->prepare('INSERT INTO `image` (`id_gite`,`name_image`) VALUES (:id_gite, :name_image)');

$req->bindParam('id_gite', $idGite, PDO::PARAM_STR);
$req->bindParam('name_image', $name_image, PDO::PARAM_STR);
$req->execute();