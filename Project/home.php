<?php session_start(); 

    if(!isset($_SESSION['uname']))
    {
        include("menu.php");
    }
    else
    {
        include("menuLogOut.php");
    }

include("footer.php");
?>