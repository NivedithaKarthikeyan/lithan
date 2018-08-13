<?php
/**
 * to check whether the user is a valid user 
 */
include ('manger.php');
$error="Please Register First To Login" ;
$error1="Wrong Password";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login_user = UserManager::user_exists($email);
    
    if ($login_user) {

        $check = $login_user->compare_password($password);
        if ($check) {
            session_start();
            $_SESSION['is_admin'] = $login_user->isadmin;
            $_SESSION['user'] = serialize($login_user);
            $_SESSION['is_logged_in'] = true;
            header("Location: landing.php");
        } else {
            header("location:errorlogin.php?error=$error1");
        }
    } else {
        header("location:errorlogin.php?error=$error");
    }

    echo $error;
}