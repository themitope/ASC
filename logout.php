<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['matric_no']);
session_destroy();
header("Location:index.php");
?>