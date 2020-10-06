<?php
$host = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($host, $username, $password) or die(mysqli_error($con));
$db = mysqli_select_db($con, "asc") or die(mysqli_error($db));
?>