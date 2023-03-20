<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="icon" href="./images/shopping.png">
    <title>Login</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <?php
    if(isset($_SESSION['status'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" style="background-color:#f8d7da; font-size:18px; font-weight:bold color:#f8d7da; padding:7px;" role="alert">
           <?php echo $_SESSION['status'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
    <div class="login">
        <form action="./validate.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="doe@gmail.com" required>
        <label for="password">Password:</label><br>
        <input type="password" name="passwd" id="password" required>
        <h5 class="passwd-info"></h5>
        <button type="submit" id="login">Login</button>
        </form>
    </div>
    
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>