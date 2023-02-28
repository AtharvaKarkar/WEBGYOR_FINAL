<?php
session_start();
include("Db_connection.php");
$sql="SELECT * FROM join_us";
$result=mysqli_query($con,$sql);

?>
<table>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Time</th>
        <th>Discussion Topic</th>
    </tr>
    <?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
        <tr>
            <td><?$row=["id"]?></td>
            <td><?$row=["name"]?></td>
            <td><?$row=["phone"]?></td>
            <td><?$row=["time"]?></td>
            <td><?$row=["discussion_topic"]?></td>
        </tr>
    <?php }?>
</table>