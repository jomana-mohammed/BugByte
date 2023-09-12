<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="home2.css">
</head>
<body style="background-image: url(images/stars1.jpg);
   background-attachment: fixed;
   background-size: cover;
  ">
 
 <div>
     
  <nav class = "navv">
    <div class = "navnov">
        <div class="logo">
            BugByte
        </div>
        <ul>
            <li class="lii"><a class="aa" href="index.php">Home</a></li>
            <li class="lii"><a class="aa" href="Login/Register.php">Register</a></li>
            <li class="lii"><a class="aa" href="Login/login.php">Log in</a></li>
        </ul>
    </div>
  </nav>

     <div class="owner">
        <h1 style="margin-left: 10px ; padding-top:20px; ">Welcome in our website</h1>
        <p style = "margin-left:10px ;">We are a bug tracking system team that helps you
         in solving your bugs and avoid bugs </p>
         <button class="but1"><a href='https://www.techslang.com/definition/what-is-a-computer-bug/'>Learn more </a></button>
     </div> 

     <img class="imgg" src="images/c11.png" style="animation: slideme 0.9s ;
      width: 500px; 
      height:500px ;
       margin-left:500px ;
       margin-top:-130px ;" >    
 </div> 
     
     <div class="about">
        <h1 style="margin-left: 10px ; padding-top:20px; ">About us</h1>
        <p style = "margin-left:10px ;">Welcome to our bug tracking system website! Our platform 
        is designed to help users effectively manage and solve 
        the bugs and errors that arise in their software applications. Our team of experts
         has created a user-friendly interface that enables users to easily report,
         track, and resolve bugs in a timely and efficient manner. With our system, 
        users can collaborate with their teams, assign tasks, 
        and receive notifications to ensure that bugs are resolved quickly and effectively.
         We are committed to providing exceptional service and support to our users, 
        and we constantly strive to improve our platform to meet their evolving needs.
         Join us today and experience the benefits of our bug tracking system for yourself! </p>
         <button class="but1"><a href="Login/Register.php">Sign in</a></button>
         <button class="but2"><a href="Login/login.php">Log in</a></button>
       </div> 
    
     
    
     
     <div class="bug">
      <h1 style="margin-left: 10px ; padding-top:20px;">How can we solve bugs ?</h1>
         <p style = "margin-left:10px ;"> Resolving bugs often requires technical expertise,
          and may involve updating software,
          changing settings, or even reinstalling the operating system. . First, you can try
           restarting your computer,
           as this can often help clear up any temporary issues. If the problem persists,
           you can try updating your software, as newer versions may have fixes for known bugs.
           You can also try uninstalling and reinstalling the problematic program, as this can sometimes
           resolve bugs caused by corrupted files. If you're not comfortable troubleshooting 
          the issue yourself, you can seek help from a technical support professional,
           who can diagnose and resolve the problem for you. Remember, it's important to regularly 
          back up your important files, as bugs or errors can sometimes cause data loss.</p>
     </div>
     
   <div class="solve" >
        <h1 style="margin-left: 10px ; padding-top:20px;">What is the bugs ?</h1>
        <p style = "margin-left:10px ;">Bugs in a computer refer to problems or errors that can occur
         in the software that runs on the computer. These bugs can cause programs
         to malfunction or crash, and can prevent the computer from working properly.
         They can be caused by a variety of factors, such as coding errors, 
        compatibility issues, or conflicts with other software.
        In short, bugs are like little glitches that can make a computer act up
         and cause frustration for the user.</p>
      </div>
       
      <div class="footer">
     <h2 style="color:white">Questions?</h2>
     <img class="icons_f" style="margin-left: 590px;" src="images/ff3.png" >
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
    background-color: transparent;
    padding-right: 15px;
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
a:hover {
  color: white;
}
.logo
{
    color: cornsilk;
    font-size: 40px;
    font-weight: bold;
}

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
.but1 , .but2{
  font-size: 15px;
  font-weight: bold;
   background-color: blueviolet;
   border: none;
   width: 100px;
   height: 32px;
   margin-top: 20px;
   margin-left: 40px;
   border-radius: 10px;
   
}

p {
    font-family:Arial, Helvetica, sans-serif;
    font-size: 17px;
}

.footer{
    
    background-color: transparent;
    margin-right: -30px;
    padding-left: 15px;
    height: 130px;
    margin-top: 440px;
  
}
.solve{
    width: 500px;
    height: 268px;
    background: rgba(80, 122, 159, 0.9);
    border-radius: 5px; 
    margin-left : 650px; 
    margin-top :-573px ;
    animation: slideme 0.9s ;
}
.solve:hover{
  background: rgba(80, 122, 159, 1);
}

.bug{
    width: 570px;
    height: 350px;
    background: rgba(124, 178, 90, 0.814);
    border-radius: 5px; 
    margin-top: 100px;
    margin-left: 168px;
    animation: slideme 0.9s ;
}
.bug:hover{
  background: rgba(124, 178, 90, 1);
}
.owner{
    width: 620px;
    height: 230px;
    background: rgba(234, 228, 228, 0.8);
    border-radius: 5px; 
    margin-top: 70px;
    margin-left: 40px;
    animation: slideme 0.9s ;   
}
.owner:hover{
  background: rgba(234, 228, 228, 1);
}

.about{
    width: 700px;
    height: 350px;
    background: rgba(214, 115, 214, 0.814);
    border-radius: 5px; 
    margin-top: -150px;
    margin-left: 60px;
    animation: slideme 0.9s ;
}
.about:hover{
  background: rgba(214, 115, 214, 1);
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
  color:#fff;
}
h4{
  margin-top: -20px;
}
</style>