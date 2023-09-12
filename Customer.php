<?php

require_once 'models/customer.php';
require_once 'controller/AUTHcontroller2.php';
require_once 'models/person.php';
require_once 'models/bug.php'; 
require_once 'controller/customer_control2.php';


$c = new customer();
$c->setCustomer_id($_SESSION["user_id"]);
$c->setCustomer_name($_SESSION["user_name"]);


//php for sending bug
$b1 = new bugs();
$c1 = new customer_controller();
$new_cus = new customer();
$check = "not sent";
if (isset($_POST['Desc']) && isset($_POST["img"]) && isset($_POST["bug_type"])) {

    $b1->setDesc($_POST['Desc']);
    $b1->setImg($_POST['img']);
    $b1->setType($_POST['bug_type']);

    if ($c1->send_bug($b1)) {

        $check = "";
    }
    
}


?>


<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-pUA-Compatible" content="ie=edge" />
    <title>Customer</title> 
     <script>
      if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
     </script> 
</head>
<body style="background-image:url(images/stars2.jpg); background-size: cover;  background-attachment: fixed;">
 
  <nav class = "navv">
    <div class = "navnov">
        <div class="logo">
            BugByte
        </div>
        <ul>
            <li class="lii"><a class="aa" href="home.php">Home</a></li>
            <li class="lii"><a class="aa" href="Login/login.php">Log out</a></li>
            <li class="lii"><a class="aa" href="delete_cust.php">Delete account</a></li>
        </ul>
    </div>
  </nav>
 <div class="out">
    <h1 style="margin-left: 50px;
               padding-top: 50px;
               color:white;
               font-size :40px ; "
               ><?php
                        echo "Welcome " . $c->getCustomer_name();
                        ?>
                        </h1>
                        <div style="width: 700px;"> 
                        <p style="color: white; font-size: large; margin-left: 50px;">
                        Welcome to our website! We are thrilled to have you here.
                         Whether you're a first-time visitor or a returning user,
                         we hope you find everything you're looking for and more. Our goal is to provide
                         you with a seamless and enjoyable experience as you explore our offerings.
                          </p>
                         <p style="color: white; font-size: large; margin-left: 50px;">
                         If you have any questions, concerns, or simply want to
                          connect with our friendly community, don't hesitate to reach out. Our dedicated
                          team is always ready to assist you and ensure that your time spent here is worthwhile.
                         </p>
                         <p style="color: white; font-size: large; margin-left: 50px;">    
                          Thank you for choosing our website. We appreciate your support and look forward to serving you. 
                          Enjoy your stay and let the journey begin!
                         </p>         
                       </div> 
 </div> 

<br>
<br>

 <div class="send">
  <form method="post">

    <h1 style="margin-left: 25px;
               padding-top: 30px;
               color:white;
               font-size :40px ;" > Send a new bug</h1>
    
    <h3 style="color: #fff; margin-left: 25px;" >Write a short description about your bug : </h3> 
   <textarea name="Desc"  rows="4" cols="50" required style="color: white;" type="text"></textarea>
   
   <br>
   <br>
   <br>
             <label for="">Bug type:</label>
             <br>
             
               <select name="bug_type" style="margin-top:7px; width:200px; margin-left: 30px;" required>
                <option  value="none" selected disabled > please select one..</option>
                
                <option selected value="Syntax Errors: These mistakes might make the 
                  program act unexpectedly and prevent it from compiling.">Syntax Errors: These mistakes might make the 
                  program act unexpectedly and prevent it from compiling.</option>
                
                <option value="Logic Errors:These mistakes may cause 
                  the program to provide an incorrect or unexpected result.">Logic Errors:These mistakes may cause 
                  the program to provide an incorrect or unexpected result.</option>
                  
                  <option value="Security Bugs">Security Bugs</option> 
               </select>

   <br>
   <br>
   <br>

   <label>Upload bug photoshot</label>
   <br>
   <input type="file" name="img" accept="image/*" required>
   
   <br>
   <br>
   <br>
    
   <input type="submit" value="Submit" class="description"></input>

  </div>
      </form>
          </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>   
   <div>

    <div class="cont">
       <img src="images/bug_1.png" style="width:100px; height:100px ; margin-left:55px ; margin-top:30px ;">
       <h2 > <a class="hh22"  href="view_status\newview.php" >View your bugs</a></h2>
    </div>

    <div class="contact">
    <img src="images/contact-1.jpg" style="width:100px; height:100px ; margin-left:55px ; margin-top:30px ;">
       <h2><a class="hh23"  href="contact\cont.php">Contact admin</a></h2>
    </div>

    <div class="feed">
    <img src="images/4470816.png" style="width:100px; height:100px ; margin-left:55px ; margin-top:30px ;">
       <h2 ><a class="hh24" href="feedback\feedback.php">Send feedback</a></h2>
    </div>
  
  </div>

   <br>
   <br>
   <br>
   <!--
    <div class="rating-box">
      <header>How was your experience?</header>
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>

      <br>
      <br>
      <button class="btn" onclick="location.href='customer.php'" >Send</button>
    </div>
-->  
<div class="footer">
     <h2 style="color:white">Questions?</h2>
     <img class="icons_f" style="margin-left: 610px;" src="images/ff3.png" >
     <img class="icons" style="margin-left: 20px;" src="images/gg1.png" >
     <img class="icons" style="margin-left: 20px;" src="images/ll.png" >
     <img class="icons" style="margin-left: 20px;" src="images/tt.png" >
     <hr width="70%" size="2" color="white">
     <img  style="width: 15px; height: 15px; margin-left: 500px;" src="copy3.png" >
     <h4 style="color:white">2023 All Rights are Reserved</h4>  
   </div> 

</body>
</html>

<style>
.navv{   
    padding-right: 15px;
    padding-left: 15px;
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
    color: #fff;
    font-size: larger;
    font-weight: bold;
    padding: 0 10px;
    position: relative;
    text-decoration: none;
}
.aa:before ,
.aa:after {
  content: "";
  position: absolute;
  width: 0%;
  height: 3px;
  background-color: rgb(140, 59, 143);
  transition: 0.5s;  
}
.aa:after{
    left: 0;
    bottom: -5px;
}
.aa:before{
    right: 0;
    top: -5px;
}
.aa:hover:after ,
.aa:hover:before{
    width : 100% ;
}
.aa:hover {
  color: white;
}
.logo
{
    color: #fff;
    font-size: 40px;
    font-weight: bold;
}

.out{
    background-color: #0c0a0ab6;
    background: -webkit-linear-gradient(left , #0c0a0ab6,#d5d6db9a);
    background-size: cover;
    width: 900px;
    height: 400px;
    border-radius: 50px;
    margin-left: 210px;
   margin-top: 90px;
   animation: slideme 0.9s; 
}

.send{
    width:600px;
    height: 550px;
    background: -webkit-linear-gradient(left, rgba(188, 143, 143, 0.729), rgba(18, 9, 9, 0.906));
    background-size: cover;
    border-radius: 10px;
    margin-top: 50px;
    margin-left: 80px;
}

textarea {
  padding: 12px 20px;
  margin-top: 10px;
  margin-left: 25px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: transparent;
  font-size: 16px;
  resize: none;
}
textarea:focus{
  color: white;
}
label{
    color: white;
    font-size: x-large;
    margin-top: 30px;
    margin-left: 25px;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  margin-top: 10px;
  margin-left: 25px;
  border: none;
  background: rosybrown;
  padding: 10px 20px;
  border-radius: 10px;
  color: black;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background-color: #44b5bfda;
}

.description{
   width: 170px;
   height: 40px;
   border: none;
   background-color: rosybrown;
   font-size: 32;
   font-family:'Times New Roman', Times, serif;
   font-weight: 600;
   border-radius: 10px;
   margin-left: 200px;
   transition: 0.4s;
}

.description:hover{
    color: white;
    background-color: #2f747bda;
}

.check{
  width:600px;
  height: 80px;
  background-color: brown;
}





.cont{
  background-color:  rgba(148, 180, 212, 0.935);
  background-size: cover;
  width: 220px;
  height: 220px;
  border-radius: 30px;
  margin-left: 200px;
  margin-top: 20px;
}
.contact{
  background-color:  #fff;
  background-size: cover;
  width: 220px;
  height: 220px;
  border-radius: 30px;
  margin-left: 560px;
  margin-top: -220px;
}

.feed{
  background-color: rgba(205, 188, 188, 0.935);
  background-size: cover;
  width: 220px;
  height: 220px;
  border-radius: 30px;
  margin-left: 900px;
  margin-top: -220px;
}
.hh22{
  transition: 0.5s;
  text-decoration: none;
  color:black;
}
.hh22:hover{
 font-size: xx-large;
 color: black;
}

.hh23{
  transition: 0.5s;
  text-decoration: none;
  color:rgb(62, 148, 247);
}
.hh23:hover{
 font-size: xx-large;
 color:rgb(62, 148, 247);
}

.hh24{
  transition: 0.5s;
  text-decoration: none;
  color:brown;
}
.hh24:hover{
  font-size: xx-large;
 color:brown;
}






.rating-box {
  position: relative;
  width: 400px;
  background-image: url(images/b16.jpeg);
  background-size: cover;
  padding: 25px 50px 35px;
  border-radius: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
  margin-top: 50px;
  margin-left: 350px;
}
.rating-box header {
  font-size: 40px;
  color: black;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}
.rating-box .stars {
  display: flex;
  align-items: center;
  gap: 25px;
  margin-left: 50px;
}
.stars i {
  color: #e6e6e6;
  font-size: 35px;
  cursor: pointer;
  transition: color 0.2s ease;
}
.stars i.active {
  color: yellow;
}
.btn{
    width: 170px;
    height: 30px;
    border: none;
    border-radius: 15px;
    background-color: white ;
    font-size: x-large;
    font-weight: bold;
    font-family:'Times New Roman', Times, serif;
    margin-left: 110px;
    transition: 0.5s;
}
.btn:hover{
    background-color: yellow;
}




.footer{
    margin-right: -30px;
    margin-left: -40px;
    margin-top: 100px;
    padding-left: 15px;
    height: 130px;  
}
.icons_f{
  width:12px;
  height:25px;
}
.icons{
  width: 25px;
  height: 25px;
}

h2 , h4 {
  text-align: center;
}
h4{
  margin-top: -20px;
}


</style>