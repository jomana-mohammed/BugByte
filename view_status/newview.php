<?php
require_once '../controller/customer_control.php';
$status = new customer_controller;
$statuses = $status->get_Status($_SESSION["user_id"]);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   
    <title>Bug-view</title>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body style="background-image:url(../images/stars2.jpg); background-size: cover;  background-attachment: fixed;">
 
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
  <br>
  <br>
  <br>
    <section >
        <div >
            <table>
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="19.8%">
                    <col width="20.2%">
                </colgroup>
                <thead >
                    <tr style="height: 80px;">
                        <th class="u-table-cell"><h2>Bug id</h2></th>
                        <th class="u-table-cell"><h2> Description</h2></th>
                        <th class="u-table-cell"><h2>Bug type</h2></th>
                        <th class="u-table-cell"><h2>State</h2></th>
                        <th class="u-table-cell"><h2>Solution</h2></th>  
                    </tr>
                </thead>


                <?php
                if ($_SESSION["error_view"] == "") {
                    foreach ($statuses as $stat) {

                        ?>
                        <tbody>
                        <tbody >
                            <tr style="height: 59px;">
                                <td >
                                    <?php echo $stat["ID"] ?>
                                </td>
                                <td >
                                    <?php echo $stat["Description"] ?>
                                </td>
                                <td >
                                    <?php echo $stat["type"] ?>
                                </td>
                                <td >
                                    <?php
                                    if ($stat["State"] == 0) {
                                        echo "Didn't started ";

                                    } elseif ($stat["State"] == 1) {
                                        echo "Working on it ";
                                    } else {
                                        echo "Finished";
                                    }

                                    ?>
                                </td>
                                
                                <td >
                                    <?php
                                    echo $stat["Solution"] ?>
                                </td>

                            </tr>
                        <?php }
                } else { ?>
                        <td>
                            there is no bugs for you !!!!!
                        </td>
                        <?php
                }
                ?>
                </tbody>
                </tbody>

            </table>
        </div>
       
            </section>

            <div class="footer">
     <h2>Questions?</h2>
     <img class="icons" style="margin-left: 610px;" src="../images/fb.png" >
     <img class="icons" style="margin-left: 20px;" src="../images/insta3.png" >
     <img class="icons" style="margin-left: 20px;" src="../images/link2.png" >
     <img class="icons" style="margin-left: 20px;" src="../images/twitter.png" >
     <hr width="70%" size="2" color="black">
     <img  style="width: 15px; height: 15px; margin-left: 500px;" src="copy3.png" >
     <h4>2023 All Rights are reserved</h4>  
   </div>  
   
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
    color: #fff ;
    font-size:40px;
    font-weight: bold;
}
table, tbody, td { 
    
    padding: 8px; 
  }
table{
    margin-left: 40px;
    margin-top: 40px;
    border-collapse: collapse;
    width: 90%;
   font-size: larger;
}  
td{
    color:#fff;
}

tr:nth-child(even)
{
    background-color:mediumpurple;
    
}
tr{
    text-align: center;
    background-color: rgba(16, 19, 22, 0.701);
    transition: 0.4s;
}

 tr:hover {
    background-color:rgba(95, 158, 160, 0.729);
}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:rgba(95, 158, 160, 0.729);
  color: white;
}

.footer{
    margin-right: -30px;
    margin-left: -40px;
    margin-top: 140px;
    padding-left: 15px;
    height: 130px;  
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