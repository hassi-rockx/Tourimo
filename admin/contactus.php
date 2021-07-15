<?php include '../../Tourimo/admin/admininclude/head.php' ?>
<?php include '../../Tourimo/dbconnection.php' ?>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../Tourimo/admin/login.php');
}
?>

<section class="db-body">
<section class="contactbody">

<h2>Messages sent by Users</h2>
<?php
$sql = "SELECT * FROM contactus";
$result = mysqli_query($conn, $sql) or die("Connection Died.!");
if (mysqli_num_rows($result) > 0) {


?>
    <table class="contact-table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
        </thead>
        <?php
        while ($data = mysqli_fetch_assoc($result)) {


        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['subject']; ?></td>
                <td><?php echo $data['msg']; ?></td>
                <td><a href="#" class="btn-uni" type="submit">Respond</a>
                <a href="#" class="btn-del" type="submit">Delete</a></td>
            </tr>
        <?php } ?>


    </table>
<?php
}else die("Some Error Ocurred");
mysqli_close($conn);
?>





</section>
</section>



















<?php include '../../Tourimo/admin/admininclude/footer.php' ?>