<?php
session_start();
include("Db_connection.php");
$sql = "SELECT * FROM `join_us` ";
$result = mysqli_query($con, $sql);
?>

<table>
  <tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Time</th>
    <th>Discussion Topic</th>
  </tr>

  <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["phone"]; ?></td>
      <td><?php echo $row["time"]; ?></td>
      <td><?php echo $row["discussion_topic"]; ?></td>
    </tr>
  <?php } ?>

</table>
