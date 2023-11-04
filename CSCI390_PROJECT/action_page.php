<?php
include "send_action.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['msg'];


$query = "INSERT INTO send_msg(fname, lname, email,msg) VALUES ('$fname','$lname','$email','$msg')";

mysqli_query($conn, $query) or die(mysqli_error($conn));

