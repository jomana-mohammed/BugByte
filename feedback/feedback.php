<?php
require_once '../models/feedback.php';
require_once '../controller/customer_control.php';
$check = "not sent yet";
$c = new customer_controller;
if (isset($_POST['message']) && isset($_POST['rating1'])) {
    //echo $_POST['message'];
    $f = new feedback();
    $f->setContent($_POST['message']);
    $f->setRate(($_POST['rating1']));
    if ($c->sendfeedback($f)) {
        $check = "";

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

    <title>feedback</title>
</head>

<body>
<nav class = "navv">
    <div class = "navnov">
        <div class="logo">
            BugByte
        </div>
        <ul>
        <li class="lii"><a class="aa" href="../home.php">Home</a></li>
            <li class="lii"><a class="aa" href="../Login/login.php">Log out</a></li>
            <li class="lii"><a class="aa" href="../Login/Register.php">Delete account</a></li>
        </ul>
    </div>
  </nav>

    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    <h3 class="mb-3">we would like to hear from you </h3>
                    <h4>We value your feedback.</h4>
                    <p>Please take a few minutes to tell us how we’re doing and what we can do better.
                    <p>
                    <h4>Your opinion matters.</h4>
                    <p> Help us improve our site by filling out this quick survey. We appreciate your honest feedback.
                    </p>
                    <p><img style="width: 420px;height: 320px;" src="images\1.png" alt="pc"></p>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <h3 class="heading">what can we make better?</h3>
                        <form class="mb-5" method="post" id="feedback" name="feedback" required>
                            <div class="row">
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message" class="col-form-label"> feedback *</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="7"
                                    style="resize: none;" required></textarea>
                                </div>
                            </div>
                            <label>how would you rate us</label><br>
                            <span class="star-rating">
                                <input type="radio" name="rating1" value="1"><i></i>
                                <input type="radio" name="rating1" value="2"><i></i>
                                <input type="radio" name="rating1" value="3"><i></i>
                                <input type="radio" name="rating1" value="4"><i></i>
                                <input type="radio" name="rating1" value="5" required><i></i>
                            </span>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Submit" class="btn btn-block btn-primary rounded-0 py-2 px-4"
                                style="background-color: rgb(27, 183, 180);">
                            <span class="submitting"></span>
                        </div>
                    </div>
                    </form>


                    <?php
                    if ($check == "") {
                        ?>
                        <div class="btn btn-block btn-primary rounded-0 py-2 px-4" data-href="../customer.php">
                            Your feedback was submitted, thank you!
                        </div>
                        <?php
                    }

                    ?>

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
    padding-right: 15px;
    padding-left: 15px;
    margin-top:20px;
    margin-left: 20px;
    margin-right: -15px;
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
    margin-right: 15px;
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
    font-size: xx-large;
    font-weight: bold;
}

</style>