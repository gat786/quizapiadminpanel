<?php
    session_start();
    if(!isset($_SESSION))
    {
        header("location: login.php");
    }
    if(isset($_SESSION))
    {
        if($_SESSION["user"] == "admin")
        {
            header("location: pages/view.php");
        }
    }
?>