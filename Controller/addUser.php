<?php 
require_once('../Model/alldb.php');
session_start() ;
if(isset($_REQUEST['submit'])){

    $Mail = $_REQUEST['Email'];
    $name = $_REQUEST['fname'];
    $username = $_REQUEST['uname'];
    $pass = $_REQUEST['upass'];
    $phone = $_REQUEST['phone'];
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '' ;

   if (empty($name) || empty($username) || empty($pass) || empty($phone) || empty($Mail) || empty($gender)) {
        echo 'Please Fill up all fields';
      }
   else{ 

    $add = addClient($name ,$username, $pass,  $Mail, $gender, $phone) ;
    if($add){
        echo "User Added Successfully.";
        header('location: ../Views/Client Management.php/');
        exit();
    } 
    else{
        echo "Unexpected Erorr occured." ;
    }
}

}

?>
