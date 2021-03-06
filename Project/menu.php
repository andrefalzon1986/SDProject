<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css" />
    <title>Home</title>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
          <img src="images/logo.png" alt="logo" style="width:60px;height:80px; margin-right:15px;" >
          <a class="navbar-brand" href="#">  Your Grocery Pal</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="home.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">OnLine Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
      </div>
        <form class="form-inline" action="search.php" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="term">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>


   
   
