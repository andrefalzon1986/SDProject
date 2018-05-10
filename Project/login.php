<?php
session_start();
require_once("menu.php"); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  
    <div class="container">
        <h2>Login</h2>
        <form method="post" class="form-horizontal" action="login.php">  
            <div class="form-group">
              <label class="control-label col-sm-2">Username:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
                
                $query = "SELECT COUNT(*) FROM account WHERE Username = '$uname' AND Password = '$password' ";
                
                $result = mysqli_query ($conn, $query)
                    or die ("Error in query: ".mysqli_error($connection));
                
                $row = mysqli_fetch_row($result);
                $count = $row[0];
                
                if ($count >0){
                    $_SESSION['uname'] = $uname;
                    header("Location: index.php");
                    
                }else {
                    echo "<h1>You are not logged in </h1>";
                    
                   
                }
                        
            }
        }

    ?>
        
<?php require_once("footer.php"); ?>