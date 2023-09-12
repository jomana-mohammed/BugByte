<?php
require_once 'staff.php' ;
require_once 'controller/admin_controller.php' ;
require_once 'controller/DBcontroller.php';

session_start();
require_once 'models/person.php';
require_once 'controller/AUTHcontroller2.php';

if ($_SESSION["user_role"] != 'admin') {
    header("location:../Login/login.php");
}


$admin = new admin_controller ;
$staffs = $admin->getAllStaff();

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body style="background-image: url(images/bb23.jpeg); background-size: cover;  background-attachment: fixed;">
 
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
               color:white; "
               >
               <?php
                  
                 echo "Welcome " . $_SESSION["user_name"] . " ,";
                        ?></h1>
                <div style="width: 500px;"> 
                        <p style="color: white; font-size: large; margin-left: 50px;">
                        Good morning, dedicated admin!
                         As you kickstart your day, remember that you possess incredible skills and invaluable
                          contributions to make. Your hard work, attention to detail,
                          and organizational prowess keep the gears of the office turning smoothly.
                       </p>
                       <p style="color: white; font-size: large; margin-left: 50px;">
                       Your positive attitude and unwavering
                        determination inspire those around you and create a harmonious work environment. 
                        Have a good day!   
                    </p>        
                       </div>          
 </div>   

 <br>
 <br>
 <br>

 <div class="viewers" >   
 <img src="images/multi.png" style="width:170px ; height:170px ;">   
 <h2 style=" color:black; margin-left: 180px; margin-top: -140px;" > Total number of viewers</h2>    
 <img src="images/eye72.jpg"  style=" width:50px ; height:30px ; margin-left:210px ; margin-top: 25px; "> 
 <h1 style="color:black ; margin-left: 270px; margin-top: -39px;"><?php 
    echo(rand(100,1000));
    ?></h1>
</div>

 <div class="customers" >
 <img src="images/c10.png" style="width:180px ; height:180px ;">   
 <h2 style=" color:black; margin-left: 180px; margin-top: -160px;" > Total number of customers</h2>    
 <img src="images/cust.png"  style=" width:50px ; height:50px ; margin-left:210px ; margin-top: 25px; "> 
 <h1 style="color:black ; margin-left: 270px; margin-top: -39px;"><?php 
    echo(rand(100,1000));
    ?>
 </h1>       
</div> 

<br>
 <br>
 <br>


<h1 style="margin-left: 30px; margin-top: 120px;">Staff Members</h1>
 <div>
 <table >
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead >
              <tr style="height: 26px;">
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Phone Number</th>
              </tr>

            <?php
            
            foreach($staffs as $staff)
            { ?>
             
             <tr style="height: 75px;">
                <td ><?php echo $staff['ID'] ?></td>
                <td ><?php echo $staff['Name'] ?> </td>
                <td > <?php echo $staff['role'] ?> </td>
                <td ><?php echo $staff['phoneNumber'] ?>  
             </tr>   
             <?php
            }
        
    ?>
            </thead>
          </table>
 </div>

 <br>
 <br>
 <br>
 <br>
 <br>
 

 <img src="images/tech.png" style=" height:400px; width:400px; margin-left:700px; margin-top: -450px;">
 <div class="add2">
    <img src="images/plus.jpg" class="icona">
    <h2 style="text-align: center;"><a href="add_staff.php" >New staff member</a></h2>
 </div>  
 <div class="edit">
    <img src="images/edit.png" class="icona">
    <h2 style="text-align: center;"><a href="edit_staff.php" >Edit staff member</a></h2>
 </div>  
 <div class="delete">
    <img src="images/delete.png" class="icona">
    <h2 style="text-align: center;"><a href="delete_staff.php" >Delete staff member</a></h2>
 </div>  
 <div class="assign">
    <img src="images/assign.png" class="icona">
    <h2 style="text-align: center;"><a href="assign_bug.php" >Assign bug to staff member</a></h2>
 </div>

 <div class="footer">
     <h2>Questions?</h2>
     <img class="icons" style="margin-left: 590px;" src="images\fb.png" >
     <img class="icons" style="margin-left: 20px;" src="images\insta3.png" >
     <img class="icons" style="margin-left: 20px;" src="images\link2.png" >
     <img class="icons" style="margin-left: 20px;" src="images\twitter.png" >
     <hr width="70%" size="2" color="black">
     <img  style="width: 15px; height: 15px; margin-left: 500px;" src="copy3.png" >
     <h4>2023 All Rights are reserved</h4>  
    
 </div>  
</body>
</html>


<style>
.navv{
    
    padding-right: 15px;
    padding-left: 15px;
    margin-left: -15px;
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
    color: black;
    font-size: 20px;
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
    font-size:45px;
    font-weight: bold;
    margin-left:10px;
}

.out{
    background-image: url(images/b9.jpg);
    background-size: cover;
    width: 900px;
    height: 350px;
    border-radius: 50px;
    margin-left: 230px;
   margin-top: 90px;
   animation: slideme 0.9s; 
}
/*
.first{
    
   background-image: url(images/bug3.avif);
  background-size: cover;
   width: 300px;
   height: 300px;
   margin-left: 120px;
   margin-top: -290px;
   animation: slideme 0.9s; 
  
}
*/
@keyframes slideme 
{
    from{
        opacity: 0;
        transform: translateY(-50px);
    }
    to{
        opacity: 1;
        transform: translateY(0px);
    }
}
.viewers  {
    width: 400px;
    height: 200px;
    background-color: rgba(255, 255, 255, 0.792);
    margin-left: 160px;
    margin-top: 50px;
    border-radius: 10px;
}
.customers{
    width: 400px;
    height: 200px;
    background-color:rgba(255, 255, 255, 0.792);
    margin-left: 690px;
    margin-top: -200px;
    border-radius: 10px;
}
table, tbody, td { 
    
    padding: 8px; 
  }
table{
    margin-left: 40px;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    font-weight: bold; 
}  
tr:nth-child(even)
{
    background-color:mediumpurple;
    
}
tr{
    text-align: center;
}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:rgba(95, 158, 160, 0.729);
  color: white;
  font-size: larger;
}
.add{
    margin-top: 30px;
    margin-left: 70px;
    font-size: 15px;
    font-weight: bold;
   background-color: blueviolet;
   border: none;
   width: 140px;
   height: 32px;
   border-radius: 30px;
}
.del{
    margin-left: 30px;
    font-size: 15px;
  font-weight: bold;
   background-color: blueviolet;
   border: none;
   width: 140px;
   height: 32px;
   border-radius: 30px;
}
.add2 , .delete , .edit , .assign{
  background-color: rgba(95, 158, 160, 0.729);
  width: 300px;
  height: 200px;
  border-radius: 20px;
}
.add2{
    margin-left: 250px;
    margin-top: 140px;
}
.edit{
    margin-left: 720px;
    margin-top: -200px;
}

.delete{
    margin-left: 720px;
    margin-top: 100px;
}
.assign{
   margin-left: 250px;
    margin-top: -200px;
}
.icona{
    width: 70px;
    height: 70px;
    margin-top: 20px;
   margin-left: 110px;
}

.footer{
    height: 130px;
    margin-top: 250px;
  
}
.icons{
  width: 20px;
  height: 20px;
}

h2 , h4 {
  text-align: center;
}
h4{
  margin-top: -20px;
}
a{
    text-decoration: none;
    color:black;
}
</style>