<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN-PANEL -HOME</title>
    <style>
        .head-div
        {
            width: 100%;
            background-color: Black;
            color: white;
            border: 1px solid white;
            margin-top:0px;
        }

        .head-div h1
        {
            margin-left: 200px;
        }

        html, body
    {
        margin: 0px;
        width: 100%;
        height: 100%;
    }
    </style>
</head>
<body>
    <?php include('side_menu.php');?>
    <div class="head-div">
        <h1 align="center">Admin Panel</h1>
    </div>
    <frameset cols="50%,50%">
        <frame src="#">
        <frame src="#"
    </frameset>
</body>
</html>