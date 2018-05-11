<?php   

        if (isset ($_POST ["Submit"])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $uname = $_POST['username'];
        $password = $_POST['pwd'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];
        
        //echo "$name $surname $email $uname $password $mobile $city"; die;
            
            
            if ( (!empty($name)) &&  (!empty($surname)) && (!empty($email)) && (!empty($uname)) && (!empty($mobile)) && (!empty($city)) && (!empty($password)) ) {      

               require_once("connection.php");
                
                $conn = connectToMySQL();
                
                //echo "fffffffffff"; die;
                
                $query="SELECT COUNT(*) FROM customer_account WHERE Username = '$uname'";
                
                $result = mysqli_query ($conn, $query)
                    or die ("Error in query: ".mysqli_error($connection));
                
                $row = mysqli_fetch_row($result);
                $count = $row[0];
                
                if ($count >0){
                    header("Location: register.php");
                    $message1 = "Username already taken";
                    echo "<script type='text/javascript'>alert('$message1');</script>";
                    
                }else{
                    
                    $query1 = "INSERT INTO customer_account (Username, Password) VALUES ('$uname', '$password')";

                    $result1 = mysqli_query($conn, $query1);

                    $test = mysqli_insert_id($conn);

                    $query2 =  "INSERT INTO customer (Name, Surname, Email, Mobile, CityId, AccountId)
                    VALUES ('$name', '$surname', '$email', '$mobile', '$city','$test')";

                    $result2 = mysqli_query($conn, $query2)
                    or die("Error in query: ". mysqli_error($conn));

                    $message = "Registered Successfully";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Location: home.php");
                    }
                
                    
            }
            else{ 
                echo "Please fill all fields";

            }
        }
            