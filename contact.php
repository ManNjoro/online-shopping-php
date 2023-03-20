<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./images/shopping.png">
    <title>Contact</title>
<!-- Internal Css -->
    <style>
        body{
            background: none;
        }
        .icons{
            width: 30%;
            font-size: 26px;
            padding-right: 16px;
            letter-spacing: 10px;
        }

        .footer-content{
            padding: 5px;
        }
        .contact-form{
            font-size: 20px;
        }
        #contact-form{
            background-color: rgba(0,0,255,0.1);
            width:50%;
            font-weight:bold;
            border-radius: 5px;
            padding: 5px;
            margin: 3px;
        }
        input{
            width:90%;
        }
        button[type='submit']{
            width: 50%;
        }
        .form-content{
            padding: 3px;
        }
    </style>
</head>
<body>
    <?php include "./navbar.php" ?>

     <!-- Contact us -->
     <div class="footer" id="contact">
        <div class="footer-content">
            <h1>Contact us</h1>
            <hr>

            <div class="contact-form">
            We love hearing from our customers! If you have any questions, feedback, or concerns, please don't hesitate to get in touch. Here are a few ways to reach us:<br>

            Email: support@lobrellclothing.com <br>

            Phone: +254728391236 (Monday-Friday, 8am-5pm EAT)<br>

            You can also fill out the contact form below, and we'll get back to you as soon as possible.<br>

            <form action="" id="contact-form">
                <div class="form-content">
                    CONTACT FORM
                    <hr>
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email"><br>
                <label for="subject">Feedback</label><br>
                <textarea name="subject" id="subject" cols="35" rows="3"></textarea><br>
                <button type="submit">Submit</button>
                </div>
            </form>

            We're committed to providing exceptional customer service, and we're here to help with anything you need. Whether you have a question about a product, need assistance with an order, or just want to say hello, we're always happy to hear from you.

            Thank you for choosing our e-commerce website - we appreciate your business!

            </div>
        
        <h3>Join Us on</h3>
        <p class="icons">
            <a href="https://facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="mailto:support@lobrellclothing.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </p>
        <h4>copyright &copy; 2023</h4>
        </div>
        
    </div>

    <script src="./js/main.js"></script>
</body>
</html>