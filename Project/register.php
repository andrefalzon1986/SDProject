<?php require_once("menu.php"); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="container">
      <h2>Registration</h2>
      <form method="post" class="form-horizontal" action="processRegister.php">
        <div class="form-group">
          <label class="control-label col-sm-2">Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Firstname" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Surname:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="surname" placeholder="Lastname" name="surname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="mail" placeholder="Email" name="email">
          </div>
        </div>
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
          <label class="control-label col-sm-2">Mobile:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">City:</label>
          <div class="col-sm-10">
            <select class="form-control" name="city">
              <option value="1">Poala</option>
              <option value="2">Pieta</option>
              <option value="3">Birkirkara</option>
              <option value="4">Hamrun</option>
              <option value="5">Tarxien</option>
              <option value="6">Naxxar</option>
              <option value="7">Rabat</option>
              <option value="8">Marsa</option>
              <option value="9">Mgarr</option>
            </select>
           
            <!--<input type="text" class="form-control" id="City" placeholder="City" name="city">-->
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
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
    require_once("footer.php"); 
?>