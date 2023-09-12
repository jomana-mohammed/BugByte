<?php
require_once '../models/bug.php'; //tamam
require_once '../controller/staff_control.php';
$b2 = new bugs();
$new_st = new staff_controller();
if (isset($_POST['solu']) && isset($_POST["bugid"])) {
    $b2->setSolution($_POST['solu']);
    $bid =  $_POST["bugid"];
   
    if($new_st ->sendsolution( $b2,$bid ))
  {
    echo '<script type="text/javascript">
    window.onload = function() { alert ("Solution sets successfully"); }
    </script>';

  } 
   else if (!($new_st ->sendsolution( $b2,$bid ))) {

    echo '<script type="text/javascript">
    window.onload = function() { alert ("Solution not sent , may be you entered bug id not exist"); }
    </script>';
   }

        
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>submit a bug</title>
</head>

<body style="background-image: url(../images/bb23.jpeg) ; background-size: cover;">
<nav class = "navv">
    <div class = "navnov">
        <div class="logo">
            BugByte
        </div>
        <ul>
        <li class="lii"><a href="home.php">Home</a></li>
            <li class="lii"><a href="Login/login.php">Log out</a></li>
        </ul>
    </div>
  </nav>


    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h3 class="mb-3">Send solution</h3>
                    <p>We care about your code quality. That’s why we prioritize every bug report and resolve it
                        quickly.</p>
                    <p>Bugs are inevitable, but they don’t have to be frustrating. Let us handle them for you and keep
                        your software running smoothly.</p>
                    <p><img style="width: 520px;height: 320px;" src="images\1.png" alt="pc"></p>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h3 class="heading">leave your solution here</h3>
                        <form class="mb-5" method="post" id="send a bug" name="send a bug">
                            <div class="row">

                               
                                <div class="col-md-6 form-group">
                                    <label for="name" class="col-form-label">Bug ID</label>
                                    <input type="text" class="form-control" name="bugid" 
                                        required>
                                </div>
                            </div>
                            <div class="row">
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message" class="col-form-label"> Solution </label>
                                    <textarea class="form-control" name="solu" id="message" cols="30" rows="7"
                                        required></textarea>
                                </div>
                            </div>
                           
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send" class="btn btn-block btn-primary rounded-0 py-2 px-4"
                                style="background-color: rgb(27, 183, 180);">
                            <span class="submitting"></span>
                        </div>
                    </div>
                 
                        <?php
                        
                        ?>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                        Your bug was submitted, thank you!
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

<style>
.navv{
 
 padding-left: 15px;

}
.navnov{
 display: flex;
 align-items: center;
 justify-content: space-between;

}
.lii {
 list-style: none;
 display: inline-block;
 transition: 0.5s;
}

li a {
 font: bold;
 margin-right: 45px;
 color: black;
 font-size: large;
 font-weight: bold;
 padding: 0 10px;
 position: relative;
 text-decoration: none;
}
a:before ,
a:after {
content: "";
position: absolute;
width: 0%;
height: 3px;
background-color: rgb(140, 59, 143);
transition: 0.5s;  
}
a:after{
 left: 0;
 bottom: -5px;
}
a:before{
 right: 0;
 top: -5px;
}
a:hover:after ,
a:hover:before{
 width : 100% ;
}
a:hover {
color: white;
}
.logo
{
color: black;
 font-size:40px;
 font-weight: bold;
}

</style>

