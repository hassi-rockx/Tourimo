<?php

// Contact Us Insert

    if(isset($_POST['action']) && $_POST['action'] == 'check-insert'){
        
        $name = $_POST['name'];
        $email = $_POST['email'];         // variables from outside are imported
        $subject = $_POST['subject'];
        $message = $_POST['msg'];
        include('dbconnection.php'); //server added here
        $sql = "INSERT INTO `contactus`(`name`, `email`, `subject`, `msg`) VALUES ('$name ','$email','$subject','$message')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo json_encode("ok");
        }else{
            echo json_encode("failed");
        }
    }
    // if(empty($_POST['name'] && $_POST['msg'] && $_POST['email'] && $_POST['subject'])){
    //         echo("Please fill Name field");
    //     }
    //     else{

    // Tour Guide Insert 

    if(isset($_POST['action']) && $_POST['action'] == 'tourist'){
        if($_POST['fname'] == '' && $_POST['email'] == '' && $_POST['address'] == '' && $_POST['city'] == '' && $_POST['zip'] == ''
        && $_POST['phone'] == '' && $_POST['date'] == ''){
            echo("Please Fill your all fields");
        }else{
            $hname = $_POST['hname'];
            $hemail = $_POST['hemail'];
            $haddress = $_POST['haddress'];
            $hcity = $_POST['hcity'];
            $hzip = $_POST['hzip'];
            $hphone= $_POST['hphone'];
            $hdate = $_POST['hdate'];
            include('dbconnection.php');
            $sql = "INSERT INTO `guide`(`fname`, `email`, `address`, `city`, `zip`, `mobileno`, `date`) VALUES ('$hname','$hemail','$haddress','$hcity','$hzip','$hphone','$hdate')";
            $query = mysqli_query($conn, $sql);
            if($query){
               echo json_encode("Submitted Successfully");
           }else{
               echo json_encode("Submission Failed");
           }
        }
    }

    if(isset($_POST['action']) && $_POST['action']== "signup"){
        include('dbconnection.php');

        $sname = $_POST['sname'];                 // variables from outside are imported
        $semail = $_POST['semail'];               // variables from outside are imported
        $spassword = $_POST['spassword'];        // variables from outside are imported
        $scpassword = $_POST['scpassword'];      // variables from outside are imported
        $sdob = $_POST['sdob'];                  // variables from outside are imported
        $scontact = $_POST['scontact'];          // variables from outside are imported

        // $passhash=password_hash($spassword,PASSWORD_BCRYPT);
        // $scpasshash=password_hash($spassword,PASSWORD_BCRYPT);

        // $emailquery="SELECT * FROM signup where semail='$semail' ";
        // $equery=mysqli_query($conn,$emailquery);
        // $emailcount= mysqli_num_rows($equery);
        // if($emailcount > 0){
        //     echo "email already exists";
        // }else {
        //     if($passhash === $scpasshash){
        //         $sql_signup="INSERT INTO `signup`(`sname`, `semail`, `spassword`, `scpassword`, `sdob`, `scontact`) VALUES ('$sname','$semail','$passhash','$scpasshash','$sdob','$scontact')";
        //         $squery=mysqli_query($conn,$sql_signup);
        //         if($squery){
        //             echo json_encode("oky");
        //         }else{
        //             echo json_encode("failed");
        //         }
        //     }else{
        //         echo "Passwords doesn't Match";
        //     }
        // }


        $sql_signup="INSERT INTO `signup`(`sname`, `semail`, `spassword`, `scpassword`, `sdob`, `scontact`) VALUES ('$sname','$semail','$spassword','$scpassword','$sdob','$scontact')";
        $squery=mysqli_query($conn,$sql_signup);
        if($squery){
            echo json_encode("oky");
        }else{
            echo json_encode("failed");
        }
    
    }
