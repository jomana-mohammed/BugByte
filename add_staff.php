<?php
require_once 'staff.php' ;
require_once 'models/person.php' ;
require_once 'controller/admin_controller.php' ;

$adminController = new admin_controller ;

///////////Add new staff//////////////
if (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age'])  && isset($_POST['gender']) && isset($_POST['phone'])) {
  if (!empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['age'])  && !empty($_POST['gender']) && !empty($_POST['phone'])) {
    $staff = new person;

    $staff->id = $_POST['id'];
    $staff->email = $_POST['email'];
    $staff->password = $_POST['password'];
    $staff->age = $_POST['age'];
    $staff->name = $_POST['name'];
    $staff->gender = $_POST['gender'];
    $staff->phone = $_POST['phone'];
    //echo "<br>" . $staff->phone . "<br>" . $staff->age . "<br>" . $staff->password . "<br>" . $staff->email . "<br>" . $staff->id;
    if (($adminController->addStaff($staff)) && (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['phone']))) {

      echo '<script type="text/javascript">
      window.onload = function() { alert ("New member added successfully"); }
      </script>';
    } elseif (!($adminController->addStaff($staff)) && (isset($_POST['id']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age'])  && isset($_POST['gender']) && isset($_POST['phone']))) {
      echo '<script type="text/javascript">
      window.onload = function() { alert ("the id entered aleardy exist"); }
      </script>';
    }
  }

}


?>

<!DOCTYPE html>
<html>
  <head>
  <title>Add new member</title>
  </head>
  <body style="background-image:url(images/stars33.jpg); background-size:cover ">
  <nav class = "navv">
    <div class = "navnov">
        <div class="logo">
            BugByte
        </div>
        <ul>
            <li class="lii"><a href="home.php">Home</a></li>
            <li class="lii"><a href="#">Log out</a></li>
        </ul>
    </div>
  </nav>
 <div class="bodyy"> 
  <div class="container">
      <div class="text">
         Add new Staff member
      </div>
      <form method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="name"  style="outline: none ; background-color:transparent;">
               <div class="underline"></div>
               <label for="">Full Name</label>
            </div>
            <div class="input-data">
               <input type="email" required name="email" style="outline: none  ; background-color:transparent;">
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
            <div class="input-data">
               <input type="number" min="2000" required name="id" style="outline: none ; background-color:transparent;">
               <div class="underline"></div>
               <label for="">ID</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="number" required name="password" style="outline: none ; background-color:transparent;">
               <div class="underline"></div>
               <label for="">Password</label>
            </div>
            <div class="input-data">
               <input type="number" required name="phone" style="outline: none ; background-color:transparent; ">
               <div class="underline"></div>
               <label for="">Phone Number</label>
            </div>
            
         </div>
         <div class="form-row">
         <div class="input-data">
               <input type="number" min="22" max="52" required name="age" style="outline: none ; background-color:transparent;">
               <div class="underline"></div>
               <label for="">Age</label>
            </div>
            <div class="input-data">
               
               <label for="">Gender</label>
               <select style="margin-top: 30px;" name="gender">
                <option value="" disabled hidden>please select one..</option>
                <option value="female">female</option>
                <option value="male">male</option> 
               </select>
            </div>
         </div>
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit">
               </div>
            </div>
      </form>
      </div>
</div>
  </section>

  <!--
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
--> 
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
    color: #fff;
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
  color: #fff;
    font-size:40px;
    font-weight: bold;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

.bodyy{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  margin-left: -30px;
  margin-right: -30px;
  font-family: 'Poppins', sans-serif;
  background-image: url(images/stars33.jpg);
  background-size: cover;
}
.container{
  max-width: 800px;
  background:rgba(0, 0, 0, 0.478);
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

input:focus{
  color: #fff;
}

.container .text{
  text-align: center;
  font-size: 41px;
  font-weight: 600;
  font-family: 'Poppins', sans-serif;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
  color:#fff ;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background-color: transparent;
}


.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
  background-color:#fff;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}


.footer{
    height: 130px;
    margin-top: 80px;
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
</style>