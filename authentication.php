<?php
session_start();
include("./config/connect.php");
if(isset($_POST['register'])){
	$errors = array();

	$fname = $_POST['fname'];
	$uname = $_POST['uname'];
	$matric_no = $_POST['matric_no'];
	$pword = $_POST['pword'];
	$hash = md5($pword);
	$cpword = $_POST['cpword'];

	if(empty($fname) || empty($uname) || empty($matric_no) || empty($pword) || empty($cpword)){
		$errors['empty'] = '**All fields are required';
		header("Location: register.php");
	}

	elseif(!($pword === $cpword)){
		$errors['password'] = '**Passwords do not match';
		header("Location: register.php");
	}
	elseif(strlen($pword) < 6){
    $errors['pass_leng'] = "Password must be 6 characters or more ";
    header("Location: register.php");
	}

    else{
    	$query = mysqli_query($con, "SELECT * FROM students WHERE matric_no = '$matric_no'") or die(mysqli_error($con));

	if(mysqli_num_rows($query) > 0){
		$errors['matric_no'] = '**Matric no already exists';
		header("Location: register.php");
	}
    else{
    	$sql = "INSERT INTO students (fname, uname, matric_no, pword) VALUES('$fname', '$uname', '$matric_no', '$hash')";
    	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
    	if($result){
    		echo "<div class ='alert alert-success'>You have successfully signed up, please kindly login</div>";
    		header("Location: login.php");
    	}
    }
    }
    if(count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    exit;
	} else {
    // clean up previous validation errors, everything's fine
    unset($_SESSION['errors']);
	}
}


if(isset($_POST['login'])){
	$errors = array();
	$uname = $_POST['uname'];
	$pword = md5($_POST['pword']);
	if(!empty($uname) && !empty($pword)){
		$query = "SELECT * FROM students WHERE uname = '$uname'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		if(mysqli_num_rows($result) < 1){
			$errors['no_user'] = '**User does not exist';
			header("Location: index.php");
		}
		else{
			$row = mysqli_fetch_assoc($result);
			if(!($row['pword'] === $pword)){
				$errors['password'] = '**Password is incorrect';
				header("Location: login.php");
			}
			else{
				$_SESSION['user'] = $row['fname'];
				$_SESSION['matric_no'] = $row['matric_no'];
				header("Location: welcome.php");
			}
		}
		
	}
	 if(count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    exit;
	} else {
    // clean up previous validation errors, everything's fine
    unset($_SESSION['errors']);
	}
}

?>