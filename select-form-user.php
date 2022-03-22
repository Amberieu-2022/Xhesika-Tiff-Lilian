<?php

    require_once 'connect.php';

        // Recherche user index.php

    $resultatSearch = "";

    if(isset($_GET['search']) && !empty($_GET['search'])){
        require_once 'connect.php';

        $query = $_GET['search'];
        $req = $db->prepare('SELECT * FROM gite LIMIT 4');
        $req->execute(array('%' .$query. '%'));

        $count = $req->rowCount();

        if($count >=1){
            $resultatSearch .= "$count resultats trouvés pour <strong> '$query' </strong> <br />";
            while($data = $req->fetch(PDO::FETCH_OBJ)){ 
                $resultatSearch .=  
                "<li>";
                    "<h2>" .$data->name_gite. "</h2>";
                    "<h3>" .$data->location_gite. "</h3>";
                    '<img src='.$data->profil_gite.'>';
                    "<p>" .$data->desc_gite. "</p>";
                    "<button>Reserver</button>";
                    "<hr>";
                "</li>";
            }
        }else{
            $resultatSearch .= "\n Aucun résultat trouvé pour <strong> '$query' </strong>";
        }
    }




    if(isset($_GET['submit'])){
        $location_gite = $_GET['location_gite'];
        $start_date_reserv = $_GET['start_date_reserv'];
        $end_date_reserv = $_GET['end_date_reserv'];
        $nbr_sleeping = $_GET['nbr_sleeping'];
        $nbr_bathroom = $_GET['nbr_bathroom'];
        $nbr_bedroom = $_GET['nbr_bedroom'];
        $lodging = $_GET['lodging'];
        $option = $_GET['option'];
        // $price_reserv = $_GET['price_reserv'];

        echo ' Les données ont bien été récupéré';

        $req = $db->query('SELECT * FROM gite LIMIT 4');
    
    }

