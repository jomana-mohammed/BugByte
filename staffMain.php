<?php
session_start();
require_once 'models/person.php';
require_once 'controller/AUTHcontroller2.php';
// $_SESSION["user_name"];
//echo $_SESSION["user_role"];
if ($_SESSION["user_role"] != 'staff') {
    header("location:../Login/login.php");
}


require_once 'controller/staff_control2.php';
$status = new staff_controller;
$statuses = $status->view_ab($_SESSION["user_id"]);


?>


<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Main page</title> 
</head>

<body style="background-image: url(images/gg.jpg); background-size: cover;  background-attachment: fixed;">
 
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
 <div class="out">
    <h1 style="margin-left: 50px;
               padding-top: 50px;
               color:white;
               font-size :40px ; "
               ><?php
                        echo "Hello " . $_SESSION["user_name"] . " ,";
                        ?>       
                        </h1>
                       <div style="width: 300px;"> 
                        <p style="color: white; font-size: large; margin-left: 50px;">
                 Remeber , Every day you bring your unique talents, skills, 
                 creating a vibrant and dynamic work environment. Your hard work and
                 play an integral role in our collective success,
                 and we are truly grateful for your unwavering contributions.
                </p>        
                       </div>   
 </div> 

<br>
<br>
<br>
<br>
<br>
<br>

<h1 style=" margin-left:32px ; color:white ; ">Your Assigned bugs</h1>

<br>

<table >
          <colgroup>
            <col width="6.2%">
            <col width="39.6%">
            <col width="17.8%">
            <col width="36.4%">
          </colgroup>
          <thead>
            <tr style="height: 26px;">
              <th >Bug id</th>
              <th >Bug description</th>
              <th >Bug type</th>
            </tr>
          </thead>
          
          <?php

    foreach ($statuses as $stat) {

    ?>
    <tbody>
    <tbody >
         <tr style="height: 75px;">
            <td >
                <?php echo $stat["ID"] ?>
            </td>
        
            <td >
                <?php echo $stat["Description"] ?>
            </td>
        
            <td >
                <?php echo $stat["type"] ?>
            </td>
           
     </tr>
    
    <?php }
?>
    </tbody>
</table>

<br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

    <div class="cont">
       <img src="images/sol.png" style="width:100px; height:100px ; margin-left:100px ; margin-top:30px ;">
       <h2 > <a class="hh22"  href="solution\index.php" >Send solution</a></h2>
    </div>

    <div class="contact">
    <img src="images/his2.png" style="width:100px; height:100px ; margin-left:100px ; margin-top:30px ;">
       <h2><a class="hh23"  href="history\viewhis.php">View solved bugs</a></h2>
    </div>

  </div>

   <br>
   <br>
   <br>
   
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
    margin-right: 45px;
    color: #fff;
    font-size: larger;
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
    color: #fff;
    font-size: 40px;
    font-weight: bold;
}

.out{
    background-image: url(images/b8.jpg);
    background-size: cover;
    width: 800px;
    height: 320px;
    border-radius: 50px;
    margin-left: 210px;
   margin-top: 90px;
   animation: slideme 0.9s; 
}

table, tbody, td { 
    
    padding: 8px; 
  }
table{
    margin-left: 40px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    border-collapse: collapse;

}  
tr:nth-child(even)
{
    background-color:mediumpurple;
    
}
tr{
    text-align: center;
    background-color: #ddd;
    transition: 0.3s;
}
tr:hover{
  background-color: #e2b4f9c6;
}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #578bf2c8 ;
  color: white;
  font-size: larger;
}

.check{
  width:600px;
  height: 80px;
  background-color: brown;
}


.cont{
  background-image: url(images/b16.jpeg);
  background-size: cover;
  width: 320px;
  height: 220px;
  border-radius: 30px;
  margin-left: 300px;
  margin-top: 20px;
  transition: 0.5s;
}

.contact{
  background-color:#f1f3f6;
  background-size: cover;
  width: 320px;
  height: 220px;
  border-radius: 30px;
  margin-left: 700px;
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
  color: black ; 
}
.hh23:hover{
 font-size: xx-large;
 color: black ;
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