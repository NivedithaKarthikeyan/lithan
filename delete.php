<?php
/**
 * helps to delete the user from portal
 */
include 'common/session.php';
include ('manger.php');

if (!isset($_SESSION['is_admin']) && !$_SESSION['is_admin']) {
    header("Location: home.php");
} else {
    $user_id = $_GET['id'];
  
    UserManager::delete($user_id);
   
   header("Location: edit_proc.php");
}

