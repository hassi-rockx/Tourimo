<?php

session_start();
session_destroy();
header('location: ../../Tourimo/admin/login.php');
?>