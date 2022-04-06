<?php

require_once '../templates/header-admin.php';
require_once '../connect.php';

session_start();
if (!isset($_SESSION['adminId'])) {
    header('Location: index.php');
}

if(isset($_POST['submit'])){
    $start_date_reserv = ['start_date_reserv'];
    // $heure_debut = ['heure_debut'];
    $end_date_reserv = ['end_date_reserv'];
    // $heure_fin = ['heure_fin'];

    echo'les données ont bien été récupérer';
    
}
?> 




<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
        html, body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
        }

        #calendar {
        max-width: 1100px;
        margin: 40px auto;
        }
    </style>
    <body>
        <form action="#" method="POST">
            
            <label for="start_date_reserv" class="calendar-for-style">Date et heure d'arrivé</label>

            <input type="date"  name="start_date_reserv" id="start_date_reserv" value="2022-03-18"
            min="2022-03-18" max="2025-03-18">

            <!-- <input type="time" name="heure_debut" id="heure_debut"> -->

            <br><br><br><br>

            <label class="calendar-for-style" for="end_date_reserv">Date et heure de départ </label>

            <input type="date" name="end_date_reserv" id="end_date_reserv" value="2022-03-18"
            min="2022-03-18" max="2025-03-18">

            <!-- <input type="time" name="heure_fin" id="heure_fin"> -->


            <input type="submit" name="submit">


        </form>
        <script src="./resa_calendar.js"></script>
    </body>
</html>

<!-- onfocus 
?php  echo date("Y-m-d",strtotime("+1 years")); ?>
?php  echo date("Y-m-d",strtotime("+1 years")); ?>
-->
 <!-- <?php echo date("Y-m-d"); ?> -->
<!-- <?php echo date("Y-m-d"); ?>  -->

<?php 
require_once '../templates/footer-admin.php';
?>





