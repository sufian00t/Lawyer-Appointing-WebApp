<?php
require_once('../Model/alldb.php');
session_start() ;
if (isset($_REQUEST['submit'])) { 
    $utype = $_REQUEST['User'];  
    $fname = $_REQUEST['fname'];
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['upass'];
    $cpass = $_REQUEST['cpass'];
    $mail = $_REQUEST['Email'];
    $phone = $_REQUEST['phone'];
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';

    if (empty($fname) || empty($uname) || empty($pass) || empty($cpass) || empty($mail) || empty($phone) || empty($gender)) {
        echo 'Please Fill up all fields';
    } 
    else {
        if ($utype == 'Lawyer' && ($pass == $cpass)) {
            $law = addLawyer($fname , $uname , $pass , $gender , $mail ,$phone) ;
            if (!$law) {
                header('location: ../Views/Lawyer Management.php/');
                echo 'User Added Successfully';
                exit();
            } else {
                echo 'Registration Failed or User already exists. Try Again';
            }
        } else if ($utype == 'Client' && ($pass == $cpass)) {
            $client = addClient($fname , $uname , $pass , $mail , $gender ,$phone) ;
            if (!$client) {
                header('location: ../Views/Client Management.php/');
                echo 'User Added Successfully';
                exit();
            } else {
                echo 'Registration Failed or User already exists. Try Again';
            }
        } else if ($utype == 'Assistant' && ($pass == $cpass)) {
            $x= $_REQUEST['lawyer'] ;
           $assistant = addAssistant($mail,$fname , $uname , $pass , $phone , $x ,$gender) ;
            if (!$assistant) {
                header('location: ../Views/Assistant Management.php/');
                echo 'User Added Successfully';
                exit();
            } else {
                echo 'Registration Failed or User already exists. Try Again';
            }
        }
    }
}
?>