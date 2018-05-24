<?php session_start(); 

    if(!isset($_SESSION['uname']))
    {
        include("menu.php");
    }
    else
    {
        include("menuLogOut.php");
    }

?>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="container" id="testy">
        <h1><strong>Login Successful. Proceed to Online Shop</strong></h1>
    </div>


<?php
include("footer.php");
?>


