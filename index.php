<?php

require_once './templates/header.php';

?>

<h1 class="titre-h1">Bienvenue</h1>
<section class="form-page-client">
    <h2 class="titre-form-client">TROUVEZ VOTRE GÎTE</h2>
    <form action="#" method="GET">
        <label class="">DESTINATION</label>
        <input type="text" class=""> <br>
        <label for="">ARRIVÉE</label> <input type="text" value="">
        <label for=""> DEPART</label> <input type="text" value="">

        <div class="first-flex">
                <label class="label-no"> Nombre de couchages </label>
                <select name="nb-personnes" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option> 
                </select>
                <label class="label-no"> Nombre de salle de bain </label>
                <select name="nb-bathroom" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <label class="label-no"> Nombre de chambres </label>
                <select name="nb-room" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

        </div>
        


        
    </form>
</section>

<?php

require_once './templates/footer.php';
?>