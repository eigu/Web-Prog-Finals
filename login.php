<?php
session_start ();

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (validateLogin($_POST['username'], $_POST['password'])) {
        $_SESSION['login'] = "1";
        $_SESSION['username'] = $_POST['username'];

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
    $query = "SELECT * FROM profile WHERE username='$username'";

    $result = mysqli_query($con, $query);

    if ($result->num_rows == 0) {
        return false;
    }

    $user = $result->fetch_assoc();

    if ($password == $user['password']) {
        return true;
    } else {
        return false;
    }

    return true;
}
?>