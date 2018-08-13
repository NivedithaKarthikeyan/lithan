<?php
/**
 * helps to block the user
 */
include 'common/session.php';
include 'mangerdb.php';

if (!isset($_SESSION['is_admin']) && !$_SESSION['is_admin']) {
    header("Location: home.php");
} else {
    $user_id = $_GET['id'];
    $block = $_GET['block'];
    $block = $block == 1 ? 0 : 1;

    
    UserManagerDB::update_one($user_id, "status", $block);
    
    header("Location: edit_proc.php");
}
