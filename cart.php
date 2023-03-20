<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./images/shopping.png">
    <title>Cart</title>
</head>
<body>
    <?php include "./navbar.php"; ?>
    <!-- check if user is logged in -->
    <?php
    if(isset($_SESSION['success'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" style="background-color:#d4edda; font-size:18px; font-weight:bold color:#d4edda; padding:7px;" role="alert">
           <?php echo $_SESSION['success'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['success']);
    }else if(isset($_SESSION['error'])){
    ?>
    <div class="alert alert-success alert-dismissible fade show" style="background-color:#f8d7da; font-size:18px; font-weight:bold color:#f8d7da; padding:7px;" role="alert">
           <?php echo $_SESSION['error'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['error']);}?>

    <div class="outer-container">
        <div class="cart-container">
            
            <div class="cart-items"></div>
        </div>
        <div class="checkout">
            <div class="inner-checkout">
            <h3>CART SUMMARY</h3> <hr>
            <h4>Subtotal &nbsp; &nbsp; <span id="price">0</span></h4><hr>
            <form action="checkout.php" method="post">
            <button class="check-btn" type="submit">CHECKOUT</button>
            </form>
            </div>
        </div>
    </div>
    

    <script src="./js/main.js"></script>
    <script src="./js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>