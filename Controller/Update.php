<?php
require_once('../Model/alldb.php');
if (isset($_REQUEST['update'])) { 
    $utype = $_REQUEST['Use'];  
    $fname = $_REQUEST['fname'];
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['upass'];
    $mail = $_REQUEST['Mail'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['Gender'];
    

        if ($utype == 'Lawyer') {
            $law = updateLawyer($fname , $uname , $pass , $gender , $mail ,$phone) ;
            if ($law) {
                header('location: /Mr. Attorneyy/Views/Lawyer Management.php/');
                exit();
            } else {
                echo 'Update Failed or Duplication. Try Again';
            }
        } else if ($utype == 'Client') {
            $client = updateClient($fname , $uname , $pass , $mail , $gender ,$phone) ;
            if ($client) {
                header('location: /Mr. Attorneyy/Views/Client Management.php/');
                exit();
            } else {
                echo 'Update Failed or Duplication. Try Again';
            }
        } else if ($utype == 'Assistant') {
            $x = $_REQUEST['lawyer'] ;
           $assistant = updateAssistant($mail,$fname , $uname , $pass , $phone , $x ,$gender) ;
            if ($assistant) {
                header('location: /Mr. Attorneyy/Views/Assistant Management.php/');
                exit();
            } else {
                echo 'Update Failed or Duplication. Try Again';
            }
        }
    }
?>