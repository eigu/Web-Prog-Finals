<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (validateLogin($username, $password)) {
        $_SESSION['login'] = "true";

        $con = mysqli_connect('localhost', 'root', '','online_store');

        $sql = "SELECT * FROM profile WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['user_id'];

        echo '<script>
            alert("Login successful!");
            window.location.href = "index.php";
        	</script>';
    } else {
        echo '<script>
			alert("Invalid Username or Password!");
			window.location.href = "login.html";
			</script>';
    }
}

function validateLogin($username, $password) {
	$con = mysqli_connect('localhost', 'root', '','online_store');

    $sql = "SELECT * FROM profile WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $user = $result->fetch_assoc();

    if ($result->num_rows == 0) {
        return false;
    }

    if ($password == $user['password']) {
        return true;
    } else {
        return false;
    }

    return true;
}
?>