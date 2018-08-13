<?php
include 'common/session.php';
include 'manger.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{     
    $firstname=$_POST["firstname"];
    $lastname= $_POST["lastname"];
    $city=$_POST["city"];
    $country=$_POST["country"];
    $companyname=$_POST["company"];
   
    $get = UserManager::update_all($firstname, $lastname, $city, $country, $companyname, $user->user_id);
    if($get)
    {
        $update = UserManager::get_user($user->user_id);
        $_SESSION['user'] = serialize($update);
        header("location:updateprofilesuccess.php");
    }
    
}