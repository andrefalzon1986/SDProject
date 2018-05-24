<?php
session_start();
require_once("menu.php"); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    

    <div class="container" id="testy">
        <h2><strong>Login</strong></h2>
        <form method="post" class="form-horizontal" action="login.php">  
            <div class="form-group">
              <label class="control-label col-sm-2">Username:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username" required="" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" required="" name="pwd">
              </div> 
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-default" name="Submit">
            </div>
            </div>
            <div class="container">
              <span class="psw">Forgot <a href="forgotpassword.php">password?</a></span>
            </div>
        </form>
    </div>

       
   <?php
    
        if ((isset($_POST['Submit'])))
        {
            if((empty($_POST['username'])) || (empty($_POST['pwd'])))
            {
                echo " Both values must be set";
                
            }else
            {
                $uname = $_POST['username'];
                $password = $_POST ['pwd'];
                
                require_once("connection.php");
                
                $conn = connectToMySQL();
                
                $query = "SELECT COUNT(*), AccountId FROM customer_account WHERE Username = '$uname' AND Password = '$password' ";
                
                $result = mysqli_query ($conn, $query)
                    or die ("Error in query: ".mysqli_error($connection));
                
                $row = mysqli_fetch_row($result);
                $count = $row[0];
                
                if ($count >0){
                    $_SESSION['uname'] = $uname;
                    $_SESSION['AccountId'] = $row[1];
                    header("Location: loginsuccess.php");
                    
                }else {
                    echo "<h1>You are not logged in </h1>";
                    
                   
                }
                        
            }
        }

    ?>
        
<?php require_once("footer.php"); ?>