<?php
session_start();
#include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>



    <style>
        .content {
            background-color: #FF84BE;
            border-radius: 25px;
            height: 750px;
            width: 1000px;
            margin-left: 400px;
        }

        .form-container {
            height: 700px;
            width: 70%;
            text-align: center;
            color: pink;
            background-color: black;
            margin-left: 150px;
            border-radius: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form-input-style {
            width: 300px;
            text-align: center;
            margin-left: 50px;
        }

        .accept {
            border-radius: 5px;
            border: 2px purple;
            width: 100%;
            height: 40px;
            text-align: center;
            padding: 2px;
            margin-top: 10px;
            margin-left: 150px;
        }

        .butt {
            border-radius: 6px;
            background-color: pink;
            color: black;
            cursor: pointer;
            margin-top: 5px;
            width: 18vw;
            height: 5vh;
        }

        .butt:hover {
            transform: scale(1.1);
            transition-duration: 500ms;
        }
    </style>

</head>

<body>
    <?php include('sidemenu.php'); ?>
    <div class="content">
        <div class="form-container">
            <form action="master.php" method="POST">


                <div class="form-input-style">
                    <input class="accept" type="text" name="name" placeholder="Customer Name">
                </div>

                <div class="form-input-style">
                    <div>
                        <input class="accept" type="text" name="Company Name" placeholder="Company Name">
                    </div>

                    <div class="form-input-style">
                        <div>
                            <input class="accept" type="text" name="Company Location" placeholder="Company Location">
                        </div>


                        <div class="form-input-style">
                            <select class="accept" id="cat" name="cat">
                                <option value="select package" disabled selected>Select Package</option>
                                <option value="standardpm">Standard (Per Month)</option>
                                <option value="standardyear">Standard (Yearly)</option>
                                <option value="proyear">Pro (Yearly)</option>
                                <option value="enterprise">Enterprise (Yearly)</option>

                            </select>
                        </div>

                        <div class="form-input-style">
                            <input class="accept" type="number" name="price" placeholder="Price" min="1" max="1000000" alert>
                        </div>



                        <div class="form-input-style">
                            <select class="accept" id="state" name="state">
                                <option value="select" disabled selected>Select Servies</option>
                                <option value="webdev">Web Development</option>
                                <option value="appdev">App Development</option>
                                <option value="seo">Search Engine Optimization (SEO)</option>
                                <option value="digim">Digital Marketing</option>
                                <option value="socmgmt">Social Media Management</option>
                                <option value="photos">Photography & Commercials</option>
                                <option value="design">Design</option>
                                <option value="branding">Branding</option>
                                <option value="gmybusiness">Google My Business</option>

                            </select>
                        </div>

                        <div class="form-input-style" style="margin-left:50px;">
                            <select class="accept" name="status" id="status" style="margin-left:100px;">
                                <option value="select" disabled selected>Status</option>
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                        </div>

                        <div class="form-input-style">

                            <input class="butt" type="submit" value="Add" name="add" style="margin-left:100px;">
                            <input class="butt" type="reset" value="Reset" style="margin-left:100px;">
                        </div>
            </form>
        </div>
    </div>

</body>

</html>