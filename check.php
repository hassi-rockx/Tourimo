<?php 

if(isset($_POST['action']) && $_POST['action']== "login"){

    $useremail = $_POST['useremail'];                 // variables from outside are imported
    $userpass = $_POST['userpass'];               // variables from outside are imported

    include ('dbconnection.php');
    $emailsearch="SELECT * from signup where semail='$useremail' ";
    $srch_query=mysqli_query($conn,$emailsearch);
    if($srch_query){
        $verify_pass=mysqli_fetch_assoc($srch_query);
         $db_pass = $verify_pass['spassword'];
         if($db_pass == $userpass){
            echo json_encode("oky");
         } else{
            echo json_encode("failed");
         }
    }else{
        echo json_encode("failed");
    }
}
















?>