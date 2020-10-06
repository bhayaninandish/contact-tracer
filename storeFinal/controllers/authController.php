<?php
//session_start();
require 'db.php';

// if user clicks on register button
$errors= array();
$storename="";
$email= "";
$aadhar="";
$address="";
$pnumber="";    

    if(isset($_POST['signup-btn'])){
        $storename= $_POST['storename'];
        $aadhar= $_POST['aadhar'];
        $email= $_POST['email'];
        $pnumber= $_POST['pnumber'];
        $address= $_POST['address'];
        if(empty($storename)){
            $errors['storename']= "Storename is required";

        }
        if(empty($pnumber)){
            $errorsp['pnumber']= "Phone number is required";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']= "Email address is invalid";
        }
        if(empty($email)){
            $errors['email']= "Email required";

        }

        if(empty($aadhar)){
            $errors['aadhar']= "Aadhar required";

        }

        if(strlen($aadhar)!=12){
            $errors['aadhar']="Aadhar length must be 12";
        }

        if(strlen($pnumber)!=10){
            $errors['pnumber']="Phone number length must be 10";
        }

        if(!preg_match('/^[a-zA-Z\s]+$/',$storename)){
            $errors['storename']="Storename must be letters only";
        }

        if(!preg_match('/^[0-9]+$/',$aadhar)){
            $errors['aadhar']="Aadhar must be numbers only";
        }
        if(!preg_match('/^[0-9]+$/',$pnumber)){
            $errors['pnumber']="Phone number must be numbers only";
        }

        if(empty($address)){
            $errors['address']= "Address is required";
        }

        $emailQuery= "SELECT * from store where email=? LIMIT 1";
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
            
            $insert = "INSERT INTO store(sname,aadhar,email,phone,address) VALUES ('$storename','$aadhar','$email','$pnumber','$address')";
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

    