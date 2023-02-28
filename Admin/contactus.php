<?php
session_start();
include("Db_connection.php");
$sql="SELECT * FROM contactus";
$result=mysqli_query($con,$sql);

?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>
    <?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
       <tr>
        <td><?=$row["name"]?></td>
        <td><?=$row["email"]?></td>
        <td><?=$row["phone"]?></td>
        <td><?=$row["message"]?></td>
       </tr>
<?php }?>
</table>