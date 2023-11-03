<?php 
require_once('../Model/alldb.php');
session_start() ;
if(isset($_REQUEST['sub']))
{
	$uname=$_REQUEST['name'];
	$upass=$_REQUEST['pass'];
     if(empty($uname) || empty($upass)){
        echo 'Fill up the fields';
    }
    else{ 

        $user = '';
        if(isset($_REQUEST['User'])){
            $user = $_REQUEST['User'];

        if($user == 'Admin'){
            $authentication = authAdmin($uname , $upass) ;
            if($authentication){
                $_SESSION['username'] = $uname ;
                setcookie('name' , $_REQUEST['name'] , time()+(60*60));
                setcookie('pass' , $_REQUEST['pass'], time()+(60*60));
                header('location: ../Views/Admin_Dash.php');
                exit();
            }
            else{
                echo 'Username or Password Mismatched! Try Again.';
                header('Location: ../Views/Login1.php/');
                exit();
            }
        }
        else if($user == 'Lawyer'){
            $authentication = authLawyer($uname , $upass) ;
            if($authentication){
                $_SESSION['username'] = $uname ;
                header('location: ../Views/Lawyer_Dash.php');
                exit();
            }
            else{
                echo 'Username or Password Mismatched! Try Again.';
                header('location: ../Views/Login1.php/');
                exit();
            }
        }
        else if($user == 'Client'){
            $authentication = authClient($uname , $upass) ;
            if($authentication){
                $_SESSION['username'] = $uname ;
                header('location: ../Views/Client_Dash.php');
                exit();
            }
            else{
                echo 'Username or Password Mismatched! Try Again.';
                header('Location: Mr. Attorneyy/Views/Login1.php/');
                exit();
            }
        }
        else{

            $authentication = authClient($uname , $upass) ;
            if($authentication){
                $_SESSION['username'] = $uname ;
                header('location: ../Views/Assistant_Dash.php');
                exit();
            }
            else{
                echo 'Username or Password Mismatched! Try Again.';
                header('Location: Mr. Attorneyy/Views/Login1.php/');
                exit();
            }

        }

    }
  }

    }
        
?>

