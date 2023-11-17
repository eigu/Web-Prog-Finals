<?php
session_start();

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobile']) && isset($_POST['address'])) {
	if (registerUser($_POST['email'], $_POST['username'],$_POST['password'], $_POST['firstname'],  $_POST['lastname'], $_POST['mobile'], $_POST['address'])) {
		$_SESSION['login'] = "1";
		$_SESSION['username'] = $_POST['username'];

		echo '<script>
			alert("Registration successful!");
			window.location.href = "index.php";
			</script>';
	}
}
	
function registerUser($email, $username, $password, $firstname, $lastname, $mobile, $address,) {
	$con = mysqli_connect('localhost', 'root', '','online_store');

    $usernameQuery = "SELECT * FROM profile WHERE username='$username'";
    $usernameResult = mysqli_query($con, $usernameQuery);

    $emailQuery = "SELECT * FROM profile WHERE email='$email'";
    $emailResult = mysqli_query($con, $emailQuery);

    if (mysqli_num_rows($usernameResult) > 0 || mysqli_num_rows($emailResult) > 0) {
        if (mysqli_num_rows($usernameResult) > 0) {
			echo '<script>
				alert("Username already exists!");
				window.location.href = "register.html";
				</script>';
        }

        if (mysqli_num_rows($emailResult) > 0) {
			echo '<script>
				alert("Email already exists!");
				window.location.href = "register.html";
				</script>';
        }

        return false;
    }

	$query = "INSERT INTO `profile` (`email`, `username`, `password`, `firstname`, `lastname`, `mobile`, `address`) VALUES ('$email', '$username', '$password', '$firstname', '$lastname', '$mobile', '$address')";
	$result = mysqli_query($con, $query);

    return true;
}
?>