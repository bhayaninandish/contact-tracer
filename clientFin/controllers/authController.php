<?php
//session_start();
require 'config.php';

// if user clicks on register button
$errors= array();
$storename="";
$name="";
$email= "";
$aadhar="";

    if(isset($_POST['signup-btn'])){
        $storename= $_POST['storename'];
        $name= $_POST['name'];
        $aadhar= $_POST['aadhar'];
        $email= $_POST['email'];
        
        if(empty($storename)){
            $errors['storename']= "Storename is required";

        }
        
        if(empty($name)){
            $errors['name']= "Name is required";

        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Email address is invalid";
        }
        if(empty($email)){
            $errors['email']= "Email required";

        }

        

        if(strlen($aadhar)!=12){
            $errors['aadhar']="Aadhar length must be 12";
        }

        

        if(!preg_match('/^[a-zA-Z\s]+$/',$storename)){
            $errors['storename']="Storename must be letters only";
        }

        if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
            $errors['name']="Name must be letters only";
        }

        if(!preg_match('/^[0-9]+$/',$aadhar)){
            $errors['aadhar']="Aadhar must be numbers only";
        }
        

        $emailQuery= "SELECT * from customer where email=? LIMIT 1";
        $stmt= $conn->prepare($emailQuery);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt -> get_result();
        $userCount = $result->num_rows;
        $stmt->close();

        if($userCount > 0){
            $errors['email']= 'Email already exists';
        }

        if(count($errors)===0){
            
            $insert = "INSERT INTO customer(sname,cname,aadhar,email,datestime) VALUES ('$storename','$name','$aadhar','$email',curdate())";
        if($conn-> query($insert)===TRUE){
            $_SESSION['message']= "You are now logged in";
            $_SESSION['alert-class']= 'alert-success';
            header('location: verified.php');
            exit();
        }
        else{
            $errors['email']=  'Database error';
        }
        

        }

    }

    