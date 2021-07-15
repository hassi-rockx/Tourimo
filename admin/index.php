<?php include 'admininclude/head.php' ?>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../Tourimo/admin/login.php');
}
?>
<section class="home-content">
    
</section>








<?php include 'admininclude/footer.php' ?>


