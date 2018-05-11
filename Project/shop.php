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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
        <table class="table table-bordered">
             <thead>
               <tr>
                <th>ProductId</th>
                <th>Name</th> 
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <tr>

              
    
    <?php       
        require_once("connection.php");
                
        $conn = connectToMySQL();
                  

                  
        $query = "SELECT * FROM product";
            
        $result = mysqli_query($conn, $query)
            or die("Error in query: ". mysqli_error($conn));
                
            
        while ($row =mysqli_fetch_assoc($result)){
    
            
        $query1 = "SELECT NAME from brand WHERE BrandId = $row[BrandId]";
            
        $result1=  mysqli_query($conn, $query1)
            or die("Error in query: ". mysqli_error($conn));
            
            $row1 =mysqli_fetch_row($result1);
            $test1 = $row1[0];
            
            
        $query2 = "SELECT NAME from category WHERE CategoryId = $row[CategoryId]";
            
        $result2=  mysqli_query($conn, $query2)
            or die("Error in query: ". mysqli_error($conn));
            
            $row2 =mysqli_fetch_row($result2);
            $test2 = $row2[0];
            
            
            echo "<td>$row[ProductId]</td> <td>$row[Name]</td>  <td>$test2</td> <td>$test1</td> <td>$row[Price]</td>"; 
            ?>
                
            <td><img src="<?php echo $row ['Image']; ?>" width='150px'/></td>
            </tr>
            
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
            
            


                  
        




<?php include("footer.php");
?>