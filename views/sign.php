<?php 
if(isset($_SESSION["logged"]) && $_SESSION["logged"]===true ){
  Redirect::to("home");
}
if(isset($_POST["submita"])){
  $createUser=new  UsersController();
  $createUser->register();
}


if(isset($_POST["submit"])){
    $loginUser = new UsersController();
    $loginUser->auth();}



?>
<link rel="stylesheet" type="text/css" href="public\styles\loginstyle.css">
    <div class="ct">
    <div class="cont">
    <form  method="post">
    <div class="form sign-in">
    <div class="col-md-5 mx-auto m-3">
        <?php
            include('./views/includes/alerts.php')
        ?>
    </div>
    
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required>
      </label>
      <button class="submit" name="submit">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>

      
    </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form  method="post">

      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>FullName</span>
          <input type="text" name="fullname" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" required >
        </label>
        <button name="submita" class="submit">Sign Up Now</button>
      </div>
      </form>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <br>

<script type="text/javascript" src="public\scripts\loginscript.js"></script>
