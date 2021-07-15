<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../../Tourimo/css/fonts/fonts.css">
    <title>Admin Portal</title>
</head>
<?php 
// session_start();
// if(isset($_SESSION["username"]))
// {
//     header("location: ../../tourimo/admin/index.php");
// }
?>


<section class="admin">
    <div class="admin_box">
        <div class="admin_profile">
            <img src="../../Tourimo/admin/img/admin4.png" alt="">
        </div>
        <div class="admin_content">
            <h2>Please Login</h2>
            <form action="admincheck.php" method="POST">
                <input type="text" id="adminname" name="adminname" placeholder="Username" required autocomplete="off">
                <input type="password" id="adminpass" name="adminpass" required placeholder="Password">
                <div class="buttons">
                    <btn class="btn-admin" name="adminlogin" onclick="adminlog()" type="submit">Log In</btn>
                    <a class="org-btn" href="../../Tourimo/">Back To HomePage</a>

                </div>

            </form>
        </div>
    </div>
</section>


















<?php include_once '../../Tourimo/admin/admininclude/footer.php' ?>