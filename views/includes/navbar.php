<div class="header">
<div class="container">
<div class="navbar">

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="Images\logo.png" width="125" ></a>
                </div>
                <nav>
                    <ul>


                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">

      <li><a href="<?php echo BASE_URL; ?>">Home</a></li>

    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="  color: #555;" href="accountedit" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>Products">ALL PRODUCTS</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>Shoes">Shoes</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>Shirts">Shirts</a></li>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>Shorts">Shorts</a></li>

          </ul>

        </li>
                        <li><a  href="#opening">About us</a></li>




   <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="  color: #555;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ACCOUNT
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

          <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true): ?>
            <li><a class="dropdown-item" href="#"><?php echo $_SESSION["fullname"]; ?></a></li>
            <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true): ?>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>dashboard">Dashboard <span class="sr-only">(current)</span></a>
              <?php endif;?>
            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>logout">Logout</a></li>
            
        <?php endif;?>
        <?php else: ?>
          <li><a  href="<?php echo BASE_URL; ?>sign">Sign In/Up</a></li>

        <?php endif;?>


          </ul>

        </li>



          </ul>







                    </ul>
                    <a href="<?php echo BASE_URL; ?>shoppingCart"> <img src="Images\cart.png"  width="30px" height="30px"></a>


      </ul>
      </ul>
    </div>








                </nav>


            </div>
            </div>
