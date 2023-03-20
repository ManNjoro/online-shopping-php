<nav class="navbar">
    <a class="navbar-brand" href="#">My Website</a>
    <div class="navbar-menu-icon">
      <!-- <i class="fa fa-bars"></i> -->
      <i class="fa fa-bars" aria-hidden="true"></i>
      <!-- <i class="fa-solid fa-bars"></i> -->
    </div>
    <ul class="navbar-nav">
    <?php
    session_start();
    if(isset($_SESSION['online_shopping']))
    {
      ?>
  
      <li class="nav-item">
        <a class="nav-link" href="./index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>
    <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link" href="./sign_up.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Login</a>
      </li>
    <?php }?>
    </ul>
  </nav>
  
  
