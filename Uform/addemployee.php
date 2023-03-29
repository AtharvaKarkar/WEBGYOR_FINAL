<!DOCTYPE html>
<html>
<head>
    <title><?php echo $main_title; ?></title>
	<?php include("./head.php"); ?>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
</head>
<body>

<?php include("./header.php"); ?>

<section class="p-10">
<div style="text-align:center">
    <h3 class="display-4 t-10">Add a new member!</h3>
    </div>
    <br><br>
    
    <div class="container">
    <form action="" method="POST" enctype="multipart/form-data" id="add_emp_form">
        <h4 class="page-header text-center">Personal Details</h4>
        <br>
        <div class="box">
            <div class="form-group">  
                  <div class="row">

                     <div class="col-md-1"><label for="fname">First&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-4"><input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkFName()" required></div>

                     <div class="col-md-1 text-right"><label for="lname">&nbsp;&nbsp;Last&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-4"><input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkLName()" required></div>    

                  </div>

                  <div class="row">

                    <div class="col-md-1"><label for="fathername">Father&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-4"><input type="text" class="form-control" id="fname" placeholder="Enter father name" name="fathername" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkFatherName()" required></div>

                  </div>
            </div>
            <br>
        <div class="form-group">
            <div class="row mt-0">
                <div class="col-lg-6 col-xl-5 mx-auto text-center">
                    <button class="btn btn-primary rounded-pill text-center" id="submit" name="submit">Add&nbsp;Employee</button>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    </section>
	
<?php include("./footer.php"); ?>

</body>

<?php include("./progress-wrap.php"); ?>

<?php include("./javascript.php"); ?>

</html>


<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fathername = $_POST['fathername'];

    $conn = mysqli_connect("localhost","root","","demo") or die($conn);

    $fname = mysqli_real_escape_string($conn,$fname);
    $lname = mysqli_real_escape_string($conn,$lname);
    $fathername = mysqli_real_escape_string($conn,$fathername);

    $result = mysqli_query($conn,"insert into employee values ('$fname','$lname','$fathername')") or die("Query Failed".mysqli_error($conn));

    if(move_uploaded_file($tmp_name,$new_name))
	{
        
        $desitationfile ='docs/'.$filename;

		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='./home.php'</script>";
	}
	else
	{
		echo "<script>alert('Registration Successfull')</script>";
		
	}
	
}
?>