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
    <title>Sign up</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <?php
    if(isset($_SESSION['success'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" style="background-color:#d4edda; font-size:18px; font-weight:bold color:#d4edda; padding:7px;" role="alert">
           <?php echo $_SESSION['success'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['success']);
    }else if(isset($_SESSION['fail'])){
    ?>
    <div class="alert alert-success alert-dismissible fade show" style="background-color:#f8d7da; font-size:18px; font-weight:bold color:#f8d7da; padding:7px;" role="alert">
           <?php echo $_SESSION['fail'];?>
           <button style="float:right; background: transparent; border:none;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i style="cursor:pointer;" class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <?php
        unset($_SESSION['fail']);}?>
      <form action="./customer.php" method="post">
        <table>
        <tr>
            <td colspan="2"><h2>Fill in the form to register</h2></td>
        </tr>
        <tr>
            <td>Firstname:</td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Lastname:</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password1"></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="password2"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">SIGN UP</button></td>
        </tr>
       </table> 
   </form>   
    
   
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>