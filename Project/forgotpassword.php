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
        <h2><strong>Forgot your password ?</strong></h2>
        <h4 id="noEmail" name="noEmail"><strong></strong></h4>
        <form method="post" class="form-horizontal" action="forgotpassword.php">  
            <div class="form-group">
              <label class="control-label col-sm-2">Email:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Enter your email address here!" required="" name="email">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-default" name="Submit">
            </div>
            </div>
        </form>
    </div>

<?php

        if (isset ($_POST ["Submit"])){
                $email = $_POST['email'];
         
                require_once("connection.php");
                $conn = connectToMySQL();
                
                
                $query="SELECT COUNT(*) FROM customer WHERE Email = '$email'";
                
                $result = mysqli_query ($conn, $query)
                    or die ("Error in query: ".mysqli_error($conn));
                
                $row = mysqli_fetch_row($result);
                $count = $row[0];
                
                if ($count >0){
                    
                    $query1 = "SELECT AccountId from customer WHERE Email = '$email' ";
                    
                    $result1=  mysqli_query($conn, $query1)
                    or die("Error in query: ". mysqli_error($conn));
            
                    $row1 =mysqli_fetch_row($result1);
                    $accId = $row1[0];
                    
                   $query2 = "SELECT Password from customer_account WHERE AccountId = '$accId'";
                    
                   $result2=  mysqli_query($conn, $query2)
                    or die("Error in query: ". mysqli_error($conn));
            
                    $row2 =mysqli_fetch_row($result2);
                    $pass = $row2[0];

            
                    
                    $message = "Your account password is: $pass";
                    $headers ="From: mygrocerypal1@gmail.com";
                    mail ($email, "Forgot Password", $message, $headers);
                    
                    echo '<script language="javascript">';
                      echo 'var nun = document.getElementById("noEmail").innerHTML = "Email Sent Successfully"';
                      echo '</script>';
                }else{
                      echo '<script language="javascript">';
                      echo 'var nun = document.getElementById("noEmail").innerHTML = "That Email account does not exists. "';
                      echo '</script>';
                    
                }
        }


include("footer.php");
?>