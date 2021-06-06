<?php 




?>
<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="..\ressources\styles\style.css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">LOGIN</div> 

        <div class="content">
            <form action="test.php" method="POST">
                <div class="user-details">
                 
                    <div class="input-box">
                      <span class="details"> EMAIL </span>
                      <input id="emailfield" name="emailfield" type="text" placeholder="Enter your EMAIL " >
                  </div>
                    <div class="input-box">
                        <span class="details"> PASSWORD </span>
                        <input id="password" name="passwordfield" type="password" placeholder="Enter your password " >
                    

                </div></div>
                <div class="button">
                    <input type="submit"  value="LOGIN">
                  </div>
            </form>
        </div>
    </div>
    <script  type = "text/javascript" src="scripts/loginscript.js"></script>

</body>

</html>