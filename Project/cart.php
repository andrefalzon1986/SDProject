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
    
    <div class="container" id="testy">
        <table class="table table-bordered">
             <thead>
               <tr>
                <th>Name</th> 
                <th>Price</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              

              
    
    <?php       
    
    require_once("connection.php");
                
    $conn = connectToMySQL();

    $query = "SELECT product.Name, product.Price, product.Image FROM `product` inner join shoppingcart on product.ProductId=shoppingcart.ProductId WHERE shoppingcart.AccountId='$_SESSION[AccountId]'";

    $result = mysqli_query($conn, $query)
            or die("Error in query: ". mysqli_error($conn));

    while ($row =mysqli_fetch_assoc($result)){
        echo "<tr>
                  <td>$row[Name]</td> 
                  <td>$row[Price]</td>  
                  <td><img src='". $row ['Image'] ."' width='120px' height='100px'/></td>
                  </tr>";
    }
            
       echo "</tbody>
    </table>
</div>";
           
    
   
  
 






require_once("footer.php"); ?>