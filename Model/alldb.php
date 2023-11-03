<?php
   require_once('db_conn.php');

   function authAdmin($uname,$pass)
   {
      $con=getConnection();
      $sql="select * from admin where uname='{$uname}' 
      and upass ='{$pass}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function authLawyer($uname,$pass)
   {
      $con=getConnection();
      $sql="select * from lawyer where Mail='{$uname}' 
      and upass ='{$pass}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
    function authClient($uname,$pass)
   {
      $con=getConnection();
      $sql="select * from clients where Email='{$uname}' 
      and upass ='{$pass}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
    function authAssistant($uname,$pass)
   {
      $con=getConnection();
      $sql="select * from lawyer where uname='{$uname}' 
      and upass ='{$pass}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function addLawyer($fname,$uname,$upass,$gender,$mail, $phone)
   {
    $con = getConnection();
    $sqlCheck = "SELECT * FROM lawyer WHERE Mail = '$mail' OR uname = '$uname'";
    $resultCheck = mysqli_query($con, $sqlCheck);
    $count = mysqli_num_rows($resultCheck);

    if ($count > 0) {
        return false;
    }

    $sql = "INSERT INTO lawyer VALUES('$fname','$uname','$upass','$mail','$phone','$gender')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }

   }
    function addClient($fname,$uname,$upass,$mail,$gender, $phone)
   {
      $con=getConnection();
      $sql= "INSERT INTO clients VALUES('{$mail}','{$fname}','{$uname}','{$upass}','{$phone}' , '{$gender}')";
      $sql2 = "SELECT * from clients where Email = '{$mail}' and uname = '{$uname}'" ;
      $result=mysqli_query($con,$sql);
      $result2=mysqli_query($con,$sql2);
      $tot = mysqli_num_rows($result2) ;
      if($result == TRUE && $tot == FALSE)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
    function addAssistant($mail ,$fname,$uname,$upass,$phone,$lawyer, $gender)
   {
      $con=getConnection();
      $sql= "INSERT INTO assistant VALUES('{$mail}','{$fname}','{$uname}','{$upass}','{$phone}','{$lawyer}' , '{$gender}')";
      $sql2 = "SELECT * from assistant where Email = '{$mail}' and uname = '{$uname}'" ;
      $result=mysqli_query($con,$sql);
      $result2=mysqli_query($con,$sql2);
      $tot = mysqli_num_rows($result2) ;
      if($result == TRUE && $tot == FALSE)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function allClient()
   {
      $con=getConnection();
      $sql="SELECT * from clients";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

   }
   function allLawyer()
   {
      $con=getConnection();
      $sql="SELECT * from lawyer";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

   }
   function allAssistant()
   {
      $con=getConnection();
      $sql="SELECT * from assistant";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

   }
   function deleteClient($uname)
   {
      $con=getConnection();
      $sql="DELETE FROM clients WHERE uname = '$uname'";

      $result=mysqli_query($con,$sql);
      if($result)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }

   }
   function deleteLawyer($uname)
   {
      $con=getConnection();
      $sql="DELETE FROM lawyer WHERE uname = '$uname'";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }

   }
   function deleteAssistant($uname)
   {
      $con=getConnection();
      $sql="DELETE FROM assistant WHERE uname = '$uname'";

      $result=mysqli_query($con,$sql);
      if($result)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }

   }
   function editLawyer($uname)
  {
      $con=getConnection();
      $sql="select * from lawyer where uname='{$uname}'";

      $result= mysqli_query($con,$sql); 
      return $result; 
      
  }
     function editClient($uname)
  {
      $con=getConnection();
      $sql="select * from clients where uname='{$uname}'";

      $result= mysqli_query($con,$sql); 
      return $result; 
      
  }
     function editAssistant($uname)
  {
      $con=getConnection();
      $sql="select * from assistant where uname='{$uname}'";

      $result= mysqli_query($con,$sql); 
      return $result; 
      
  }

   function updateLawyer($fname,$uname,$upass,$gender,$mail, $phone)
   {
      $con=getConnection();
      $update = "UPDATE lawyer SET fname = '$fname', uname = '$uname', upass = '$upass', Mail = '$mail', phone = '$phone', Gender = '$gender' WHERE uname = '$uname'";
      $result=mysqli_query($con,$update);
      if($result)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
   }

 function updateClient($fname , $uname , $pass , $mail , $gender ,$phone)
 {
     $con=getConnection();
      $update = "UPDATE clients SET Email = '$mail', fname = '$fname', uname = '$uname', upass = '$pass', phone = '$phone', Gender = '$gender' WHERE uname = '$uname'";
      $result=mysqli_query($con,$update);
      if($result)
      {
         return TRUE;
      }
      else
      {
        echo "Error: " . mysqli_error($con);
        return FALSE;
      }
}
function updateAssistant($mail,$fname , $uname , $pass , $phone , $x ,$gender)
{
    $con=getConnection();
      $update = "UPDATE assistant SET Email = '$mail', fname = '$fname', uname = '$uname', upass = '$pass', phone = '$phone', lawyer = '$x' , Gender = '$gender' WHERE uname = '$uname'";
      $result=mysqli_query($con,$update);
      if($result)
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }

}
function allAppointments()
{

     $con=getConnection();
      $sql="SELECT * from appointment";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

}

function allPayments()
{

     $con=getConnection();
      $sql="SELECT * from Payments";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

}
 
  

?>