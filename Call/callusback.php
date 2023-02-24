<?php
require_once('../Authentication/Db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $time = $_POST['time'];
  $discussion_topic = $_POST['discussion_topic'];

// Insert data into database table
  $sql = "INSERT INTO join_us (name, phone, time, discussion_topic) VALUES ('$name', '$phone', '$time', '$discussion_topic')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('Location: index.php'); //redirect to index.php
    exit(); //prevent further execution
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

