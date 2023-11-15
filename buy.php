<?php
    session_start();
    $_SESSION["money"] -= 30;
    $_SESSION["sub"] = "yes";
    header("location:sub_wallet.php");
?>