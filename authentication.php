<?php
    session_start();
    if (isset($_SESSION["user"]))
    {
        if($_SESSION["email"] == "vinayakkashyap753@gmail.com")
        {
            header("location:admin.php");
        }
        else
        {
            header("location:profile.php");
        }
    }   
?>