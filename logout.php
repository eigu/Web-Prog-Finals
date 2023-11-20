<?php
session_start(); 
session_destroy();

unset($_SESSION['user_id']);

echo '<script>
    alert("Logout successful!");
    window.location.href = "index.php";
    </script>';
?>