<?php include 'admininclude/head.php' ?>
<?php include '../../Tourimo/dbconnection.php' ?>

<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../Tourimo/admin/login.php');
}
?>

<section class="JobSection">

    <h2>Users Applied for Tour Guide</h2>
    <?php
        $sql = "SELECT * FROM guide ";
        $result = mysqli_query($conn, $sql) or die("Connection Failed");
        if (mysqli_num_rows($result) > 0) {


    ?>
        <table class="job-table">
            <thead class="job-table-head">
            <tr>
                <th>ID </th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>City</th>
                <th>ZipCode</th>
                <th>Contact</th>
                <th>Date</th>
                <th>CV</th>
            </tr>
            </thead>
            <?php

             while ($rows = mysqli_fetch_assoc($result)) {

            ?>
                <tr class="job-table-row">
                    <td><?php echo $rows['id'];?></td>
                    <td><?php echo $rows['fname'];?></td>
                    <td><?php echo $rows['email'];?></td>
                    <td><?php echo $rows['address'];?></td>
                    <td><?php echo $rows['city'];?></td>
                    <td><?php echo $rows['zip'];?></td>
                    <td><?php echo $rows['mobileno'];?></td>
                    <td><?php echo $rows['date'];?></td>
                    <td></td>
                </tr>
            <?php }
            ?>
        </table>
    <?php }else echo("<h2>No Record Found</h2>"); mysqli_close($conn);
?>


</section>








<?php include 'admininclude/footer.php' ?>