
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <script>
        var myfunc=function()
        {
            document.getElementById("menu-content").style.background="black";
        };

        document.getElementById("dash").click();
    </script>
    <style>
        *{
            font:300 breeze sans
        }
        .menu {
            height:100%;
            width:20%;
            margin: 0px;
            position: fixed;
            background-color:#bb5bd6 ;
            top: 0px;
            bottom: 0px;
            left: 0px;
        }
        .menu-content
        {
            color: white;
            width: 500%;
            height: 120px;
            margin: 0px;
            text-align: center;
            background-color: black;
            vertical-align: middle;
            border-radius: 2px;
            font: 300 helvetica;
            margin-bottom: 50px;
            border: 0.5px solid black;
            cursor: pointer;
            font-size: 30px;
        }
        .menu-cotent
        {
            color: black;
            width: 100%;
            height: 100px;
            margin: 0px;
            text-align: center;
            background-color: #0000;
            vertical-align: middle;
            border-radius: 2px;
            font: 300 helvetica;
            margin-bottom: 50px;
            border: 0.5px solid black;
            cursor: pointer;
            font-size: 22px;
        }
        .menu-content:hover
        {
            background-color: #bb5bd6;
            transform:scaleY(1.05);
            transition-duration: 400ms;
            color: white;
        }

        .foot
        {
            vertical-align: bottom;
            text-align: center;
        }

        .foot h1
        {
            color: black;
        }

        .special:hover
        {
            cursor: grab;
        }
        .body{
            background-color:black;
        }
    </style>
</head>
     
<body>
    <section class="menu">
        <nav class="nav">
            <h1 aligin="right"><a href="../Animation/index.php">Logout</a>
            </h1>
            <!--h1 class="special" align="center">WEBGYOR</h1-->
            <a href="admin_index.php">
                <button class="menu-content" id="dash">
                    WEBGYOR Dashboard
                </button>
            </a>

            <a href="orders.php">
                <button class="menu-cotent">
                    View Orders
                </button>
            </a>

            <a href="contactus.php"> 
                <button class="menu-cotent">
                    Contact-Details
                </button>
            </a>

            <a href="call.php"> 
                <button class="menu-cotent">
                    Call Details
                </button>
            </a>

    


        </nav>
    </section>
</body>

</html>