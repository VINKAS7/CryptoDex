<?php
    session_start();
    $d = $_SESSION["id"];
    require_once "database.php";
    $s = "DELETE FROM users WHERE id = $d";
    mysqli_query($conn,$s);
    header("location:admin.php");
?>