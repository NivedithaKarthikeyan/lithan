<?php
/**
 * to navigate to successful registration page to alert the user 
 */
include ('manger.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $companyname = $_POST['companyname'];
    $country = $_POST['country'];
    $city = $_POST['city'];
   
    if (!isset($_POST['subscription']))
    
        $subscription =0;
        
        else
            $subscription =1;
    
    
    
    $user = UserManager::create_user($email,$password,$firstname,$lastname,$gender,$companyname,$city,$country,$subscription);
   
    
        header("location:registerationconfirm.php?email=$email");
    
}
?>