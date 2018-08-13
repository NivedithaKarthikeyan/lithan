<?php
/**
 * help to display the search result 
 */
include 'common/session.php';
include 'manger.php';
include("common/header.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $search = $_POST['search'];
    $field = $_POST['field'];
    
    $users = UserManager::search($search, $field);
}
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
        <th>First Name</th><th>Last Name</th><th>Email</th><th>City</th><th>Country</th>
    </tr>

<?php foreach ($users as $u) {
?>
    <tr>
        <td><?php echo $u['firstname']; ?></td>
        <td><?php echo $u['lastname']; ?></td>
        <td><?php echo $u['email']; ?></td>
        <td><?php echo $u['country']; ?></td>
        <td><?php echo $u['city']; ?></td>   
       
    </tr>
    </br>
<?php
}
?>
</table>
</br>
<?php 
include("common/footer.php");
?>