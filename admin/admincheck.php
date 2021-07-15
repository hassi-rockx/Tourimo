<?php
session_start();
?>
<?php
if (isset($_POST['action']) && $_POST['action']== "adlogin") {
    include 'dbconnection.php';
    $adminname = $_POST['adminname'];
    $adminpass = $_POST['adminpass'];
    $sql = "SELECT * FROM admin where username = '$adminname' and pass='$adminpass'";

    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    if($row){
        $_SESSION['user'] = $adminname;
        echo json_encode('yes'); 
    }else{
        echo json_encode("no");
    }
}
?>