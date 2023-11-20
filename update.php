<?php
    session_start();

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobile']) && isset($_POST['address'])) {
	if (updateUser($_POST['email'], $_POST['username'],$_POST['password'], $_POST['firstname'],  $_POST['lastname'], $_POST['mobile'], $_POST['address'])) {

		echo '<script>
			alert("Update successful!");
			window.location.href = "index.php";
			</script>';
	}
}
	
function updateUser($email, $username, $password, $firstname, $lastname, $mobile, $address) {
	$con = mysqli_connect('localhost', 'root', '','online_store');

    $usernameQuery = "SELECT * FROM profile WHERE username='$username'";
    $usernameResult = mysqli_query($con, $usernameQuery);

    $emailQuery = "SELECT * FROM profile WHERE email='$email'";
    $emailResult = mysqli_query($con, $emailQuery);

    $sql = "SELECT * FROM profile WHERE user_id = '$_SESSION[user_id]'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($usernameResult) > 0) {
        if ($username != $user['username']) {
            echo '<script>
                alert("Username already exists!");
                window.location.href = "profile.php";
            </script>';
            return false;
        }
    }

    if (mysqli_num_rows($emailResult) > 0) {
        if ($email != $user['email']) {
            echo '<script>
                alert("Email already exists!");
                window.location.href = "profile.php";
            </script>';
            return false;
        }
    }

	$query = "UPDATE profile SET email = '$email', username = '$username', password = '$password', firstname = '$firstname', lastname = '$lastname', mobile = '$mobile', address = '$address' WHERE user_id = '{$_SESSION['user_id']}'";

	$result = mysqli_query($con, $query);

    return true;
}
?>