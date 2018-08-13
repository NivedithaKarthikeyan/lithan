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
<form method="post" action="mailsend.php" >
<table align="center">
    <tr>
        <th>First Name</th><th>Last Name</th><th>Email</th><th>City</th><th>Country</th><th>Subscribe</th>
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
        
            
            
            <a href="subscribe.php?id=<?php echo $u['user_id'];?>&subscribe=<?php echo $u['subscription'];?>" >
                <?php echo $u['subscription'] == 0 ? "subscribe" : "Unsubscribe"; ?>
            </a>
            
           <?php }?>  
        </td>
        
       
        
    </tr>
 
<?php

}
?>
</table>
Subject:
<input type ="text"  class="form-control" name="subject">
</br>
Body:
<input type ="text"  class="form-control" name="body">
<input type ="submit"  value="SUBMIT" name="Submit" >
<input type ="reset"  value="CLEAR">
 </form>  
</br>


<?php 

include("common/footer.php");
?>