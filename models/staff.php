<?php
session_start();
require_once 'person.php';
if ($_SESSION["user_role"] != 'staff') {
    header("location:../../Login/login.php");
  echo $_SESSION["user_role"];
}
class staff extends person{
    
    public $id ;
    public $name ;
    public $rate ;
    
    public function getstaff_id()
    {
        return $this->id;
    }
    public function setstaff_id($staff_id)
    {
        $this->id = $staff_id;
        return $this;
    }


    public function getnum_of_bugs()
    {
        return $this->name;
    }
    public function setnum_of_bugs($num_of_bugs)
    {
        $this->$num_of_bugs = $num_of_bugs;
        return $this;
    }


    public function getrate()
    {
        return $this->name;
    }
    public function setrate($rate)
    {
        $this->$rate = $rate;
        return $this;
    }
}

?>