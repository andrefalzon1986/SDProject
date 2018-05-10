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
                <th>Expiry Date</th>
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
    
            echo "<td>$row[ProductId]</td> <td>$row[Name]</td> <td>$row[ExpiryDate]</td> <td>$row[CategoryId]</td> <td>$row[BrandId]</td> <td>$row[Price]</td>"; 
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