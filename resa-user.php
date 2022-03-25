<?php
session_start();
if (!isset($_SESSION['adminId'])) {
    header('Location: index.php');
}
require_once './templates/header.php';
?>
<?php
    if(isset($_POST['submit'])){
        $firstname_client = $_POST['firstname_client'];
        $lastname_client = $_POST['lastname_client'];
        $phone_client = $_POST['phone_client'];
        $mail_client = $_POST['mail_client'];
        $nbr_traveller = $_POST['nbr_traveller'];
    }
?>







<?php
require_once './templates/footer.php';
?>