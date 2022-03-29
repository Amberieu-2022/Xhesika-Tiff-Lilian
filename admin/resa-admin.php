<?php

require_once '../templates/header-admin.php';


require_once '../connect.php';



if(isset($_POST['submit'])){
    $start_date_reserv = ['start_date_reserv'];
    // $heure_debut = ['heure_debut'];
    $end_date_reserv = ['end_date_reserv'];
    // $heure_fin = ['heure_fin'];

    echo'les données ont bien été récupérer';
    
}
?>
<!-- HTML -->
<main id="main-resa-admin">
    <h2 class="titre-reservation-ad">Reservations</h2>
    <!-- TABLEAUX DE RESERVATION ADMIN -->
    <div id="resa-admin-list" class="row-limit-size">
        
       <table id="table-resa">
            <tr>
                <td id="td">Gîte</td>
                <td id="td">Nom / Prénom</td>
                <td id="td">Nb de voyageurs</td>
                <td id="td">Nb de nuits</td>
                <td id="td">Date arrivée</td>
                <td id="td">Date départ</td>
                <td id="td">E-mail</td>
                <td id="td">Téléphone</td>
                <td id="td">Prix</td>
            </tr>
            <tr>
                <td id="td">Maison de Prairie</td>
                <td id="td">Eduard Veronique</td>
                <td id="td">2</td>
                <td id="td">7</td>
                <td id="td">22/07/2022</td>
                <td id="td">30/07/2022</td>
                <td id="td">vero@gmail.com</td>
                <td id="td">0656987412</td>
                <td id="td">365€</td>
            </tr>
            <tr>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
                <td id="td"> </td>
            </tr>
       </table>
       <table id="table-resa-responsive">
           <tr>
            <td id="td-responsive">Gîte</td> 
            <td id="td-responsive">Maison de prairie </td>  
           </tr>
           <tr> 
               <td id="td-responsive">Nom / Prenom  </td>
               <td id="td-responsive">Eduard Veronique</td>
               
            </tr>
            <tr>
                <td id="td-responsive">Nb de voyageurs  </td>
                <td id="td-responsive"> 2</td>
            </tr>
            <tr>
                <td id="td-responsive"> Nb de nuits </td>
                <td id="td-responsive"> 7</td>
            </tr>
            <tr>
                <td id="td-responsive"> Date arrivée </td>
                <td id="td-responsive"> 22/07/2022</td>
            </tr>
            <tr>
                <td id="td-responsive">Date départ </td>
                <td id="td-responsive"> 30/07/2022</td>
            </tr>
            <tr>
                <td id="td-responsive"> E-mail  </td>
                <td id="td-responsive"> vero@gmail.com</td>
            </tr>
            <tr>
                <td id="td-responsive"> Téléphone  </td>
                <td id="td-responsive"> 0656987412</td>
            </tr>
            <tr>
                <td id="td-responsive">Prix  </td>
                <td id="td-responsive">  365€</td>
            </tr>
            <tr>
                <td id="td-responsive"> </td>
                <td id="td-responsive"> </td>
            </tr>
       </table>
    </div>

</main>
 

<script src="./resa_calendar.js"></script>

<?php
    require_once '../templates/footer-admin.php';
?>
<!-- onfocus 
?php  echo date("Y-m-d",strtotime("+1 years")); ?>
?php  echo date("Y-m-d",strtotime("+1 years")); ?>
-->
 <!-- <?php echo date("Y-m-d"); ?> -->
<!-- <?php echo date("Y-m-d"); ?>  -->





