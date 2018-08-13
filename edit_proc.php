<?php
/**
 * help to display the serach result for the admin 
 */
include 'common/session.php';
include("common/header.php");
include 'manger.php';   
 
$users = UserManagerDB::all();

?>
<html>
<style>
table, th, td {
    border: 2px solid black;}
    a{
    color:orange;
    }
</style>
</html>
<table align="center">
    <tr>
        <th>First Name</th><th>Last Name</th><th>Email</th><th>City</th><th>Country</th><th>Block</th><th>Delete</th>
    </tr>

<?php foreach ($users as $u) 
{
?>
    <tr>
        <td><?php echo $u['firstname']; ?></td>
        <td><?php echo $u['lastname']; ?></td>
        <td><?php echo $u['email']; ?></td>
        <td><?php echo $u['country']; ?></td>
        <td><?php echo $u['city']; ?></td>
        <td>
        <?php if($u['email']=="krhp@gmail.com"){
            
        }
        else{
        ?>
        
            <a href="block_user.php?id=<?php echo $u['user_id'];?>&block=<?php echo $u['status'];?>" >
                <?php echo $u['status'] == 0 ? "Block" : "Unblock"; ?>
            </a>
           <?php }?>  
        </td>
        <td>
        <?php if($u['email']=="krhp@gmail.com"){
            
        }
        else{
        ?>
        <a href="delete.php?id=<?php echo $u['user_id'];?>">Delete</a>
        <?php }?> 
        </td>
    </tr>
    
<?php

}
?>
</table>
</br>
<?php 
include("common/footer.php");
?>