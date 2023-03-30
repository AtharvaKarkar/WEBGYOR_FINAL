<?php
session_start();
include("../Authentication/Db_connection.php");
$sql="SELECT * FROM customer";
$result=mysqli_query($conn,$sql);
?>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Company Name</th>
    <th>Country</th>
    <th>State</th>
    <th>City</th>
    <th>Company Email</th>
    <th>Explain Business</th>
    <th>Website Type</th>
    <th>Facility Required</th>
    <th>Color Preference</th>
    <th>Package Type</th>
    <th>Convinient Time</th>
    <th>Feedback</th>
  </tr>

  <?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
       <tr>
        <td><?=$row["fname"]?></td>
        <td><?=$row["lname"]?>/td>
        <td><?=$row["pemailid"]?></td>
        <td><?=$row["pcontact"]?></td>
        <td><?=$row["companyName"]?></td>
        <td><?=$row["country"]?></td>
        <td><?=$row["country_state"]?></td>
        <td><?=$row["city"]?></td>
        <td><?=$row["Emailid"]?></td>
        <td><?=$row["Explain1"]?></td>
        <td><?=$row["websiteType"]?></td>
        <td><?=$row["facility"]?></td>
        <td><?=$row["color_pref"]?></td>
        <td><?=$row["package_type"]?></td>
        <td><?=$row["feedback"]?></td>
        <td><?=$row["convi_time"]?></td>

    
       </tr>
<?php }?>
</table>