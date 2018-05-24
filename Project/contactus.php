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
       <h2><strong>Contact Form</strong></h2>
        <form action="" method="POST" enctype="multipart/form-data">  
            Your Name:<br>       
            <input name="name" type="text" value="" size="30"/><br>
            Your email:<br>
            <input name="email" type="email" value="" size="30"/><br>
            Your message:<br>
            <textarea name="message" rows="7" cols="30"></textarea><br>
            <input type="submit" class="btn btn-default" value="Send email" name="Submit"/>
        </form>
    </div>
    <?php

        if ((isset($_POST['Submit'])))
            {
                if((empty($_POST['name'])) || (empty($_POST['email'])) || (empty($_POST['message'])))
                    {
                        echo " All fields are required, please fill <a href=\"\">the form</a> again.";
                    }else
                    {
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $message=$_POST['message'];
                        $msg="From ".$name.".Email: ".$email." ".$message;

                        $from="From: $name<$email>\r\nReturn-path: $email";
                        $subject="Message sent using your contact form";
                        mail("mygrocerypal1@gmail.com", $subject, $msg, $from);
                        echo "Email sent!";
                    }
            }
   

        
include("footer.php");    
?>