<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','online_store2');

// get the post records
$uname = $_POST['uname'];
$password = $_POST['psw'];

// database insert SQL code
$sql = "SELECT * FROM profile WHERE username = '$uname'";

// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
    if (mysqli_num_rows($rs) > 0) {
        #check if username matches password 
        while($row = $rs->fetch_assoc()) {
            if ($row["password"] == $password)
            {
                echo "match!";
            }else {
                echo "Username and Password did not match!";
            }
      }
    } else {
        echo 'username not found';
    }
}

$con->close();
?>