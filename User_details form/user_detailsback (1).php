<?php
session_start();
require_once('../Authentication/Db_connection.php');
if($conn) {
// Check if form was submitted and session variables exist
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['step1']) && isset($_SESSION['step2'])) {
    // Get session variables
    $step1 = $_SESSION['step1'];
    $step2 = $_SESSION['step2'];

    // Combine step1 and step2 arrays
    $data = array_merge($step1, $step2);

    // Assign values to variables
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $companyname = $data['companyname'];
    $peremail = $data['peremail'];
    $compemail = $data['compemail'];
    $newsletter = $data['newsletter'];
    $type = $data['type'];
    $phoneno = $data['phoneno'];
    $postalcode = $data['postalcode'];
    $time = $data['time'];
    $aboutbizz = $data['aboutbizz'];
    $specify = $data['specify'];
    $expbusiness = $data['expbusiness'];
    $users = $data['users'];
    $typewebsite = $data['typewebsite'];
    $packageintrest = $data['packageintrest'];
    $webdev = $data['webdev'];
    $appdev = $data['appdev'];
    $digimark = $data['digimark'];
    $branding = $data['branding'];
    $design = $data['design'];
    $seo = $data['seo'];
    $photo = $data['photo'];
    $smgmt = $data['smgmt'];
    $recomm = $data['recomm'];
    $darktop = $data['darktop'];
    $brightcolorful = $data['brightcolorful'];
    $subtlesimple = $data['subtlesimple'];
    $productfeed = $data['productfeed'];

    // Insert data into database table
    $sql = "INSERT INTO `userdetails` (`firstname`,`lastname`,`companyname`,`peremail`,`compemail`,`newsletter`,`type`,`phoneno`,`postalcode`,`time`,`aboutbizz`,`specify`,`expbusiness`,`users`,`typewebsite`,`packageintrest`,`webdev`,`appdev`,`digimark`,`branding`,`design`,`seo`,`photo`,`smgmt`,`recomm`,`darktop`,`brightcolorful`,`subtlesimple`,`productfeed`) 
            VALUES ('$firstname','$lastname','$companyname','$peremail','$compemail','$newsletter','$type','$phoneno','$postalcode','$time','$aboutbizz','$specify','$expbusiness','$users','$typewebsite','$packageintrest','$webdev','$appdev','$digimark','$branding','$design','$seo','$photo','$smgmt','$recomm','$darktop','$brightcolorful','$subtlesimple','$productfeed')";
    $result = mysqli_query($conn, $sql);

    // Clear session variables
    unset($_SESSION['step1']);
    unset($_SESSION['step2']);

    if ($result) {
        header('Location: thank_you.php'); // Redirect to thank you page
        exit(); // Prevent further execution
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
}
mysqli_close($conn);
?>

