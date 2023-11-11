<?php

session_start();
$_SESSION = array();
session_destroy();
echo  '<script>
            window.location.href = "index1.php";
            alert("Logout successfull..!")
        </script>';


?>

