<?php
require_once 'DBcontroller.php' ;
require_once 'staff.php' ;
require_once 'models/person.php' ;

class admin_controller{

   public  $db ;

public function addStaff(person $staff)    
{
   $this->db= new db ;
   if($this->db->openconnection())
    {   
      $q = "select * from account where ID = $staff->id ;" ;
      $result = $this->db->select($q);
      if(!$result)
      { 
        $query = "insert into account values ( $staff->id , '$staff->email' , '$staff->password' ,$staff->age, 'staff'  , '$staff->name' , '$staff->gender' , $staff->phone)";
        $query2 = "insert into staff values ( $staff->id , '$staff->name' , 0 ) " ;
        $this->db->insert($query);
        $this->db->insert($query2);
        return true ;
      }
      else
      {
         return false ;
      }
   } 
   else
   {
     echo "Error in data base connection";
     return false ;
   }

}
  public function deleteStaff( $id)
{
     $this->db= new db ;
     if($this->db->openconnection())
     {  
        $query1 = "select * from staff where ID = $id " ;
        $result = $this->db->select($query1);
       if($result)
       { 
        $query2="delete staff , account from staff inner join account on staff.ID = account.ID where staff.ID = $id ";
        return $this->db->delete($query2);
       }
       else
       {
         return false ;
       }
     }
     else
     {
        echo "Error in Database Connection";
        return false ; 
     }
}  

    public function editStaff(person $staff){

      $this->db= new db ;
     if($this->db->openconnection())
     {  
        $query1 = "select * from account where ID = $staff->id ; " ;
        $result = $this->db->select($query1);
       if($result)
       { 
        $query2=" UPDATE account  SET `email` = '$staff->email'  , password = '$staff->password' , `phoneNumber` = $staff->phone where id = $staff->id ";
        return $this->db->update($query2);
       }
       else
       {
         return false ;
       }
     }
     else
     {
        echo "Error in Database Connection";
        return false ; 
     }

    }

    public function assignBug(bugs $bug){

      $this->db= new db ;
     if($this->db->openconnection())
     {  
        $query1 = "select * from bug where ID = $bug->bug_id ; " ;
        $query2 = "select * from staff where ID = $bug->staff_id ; " ;
        $result = $this->db->select($query1);
        $result2 = $this->db->select($query2);
       if($result && $result2)
       { 
        $query2=" UPDATE bug  SET `Staff_ID` = $bug->staff_id  where `ID` = $bug->bug_id" ;
        return $this->db->update($query2);
       }
       else
       {
         return false ;
       }
     }
     else
     {
        echo "Error in Database Connection";
        return false ; 
     }

    }

    public function getAllStaff()
   {
     $this->db=new db;
     if($this->db->openconnection())
     {
        $query=" select ID , Name , role , phoneNumber from account where role = 'staff';";
        return $this->db->select($query);
     }
     else
     {
        echo "Error in Database Connection";
        return false ; 
     }
   }

}
?>