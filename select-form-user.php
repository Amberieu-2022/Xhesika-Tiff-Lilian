
    
 <?php
 require_once './connect.php';



 $req = $db->query('SELECT `id_gite`, `name_gite`, `location_gite`, `profil_gite`, `desc_gite`, `nbr_sleeping`, `nbr_bedroom`, `nbr_bathroom`, `price_night` FROM `cottages` ORDER BY `id_gite`  LIMIT 4');

 echo json_encode($req->fetchAll(PDO::FETCH_ASSOC));


 
?>