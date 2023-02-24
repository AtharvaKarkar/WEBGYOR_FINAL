<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .memu {
            height:100%;
            width:20%;
            margin: 0px;
            position: fixed;
            background-color: #C21E56;
            top: 0px;
            bottom: 0px;
            left: 0px;
        }
        .menu-content
        {
            color: #E4D00A;
            width: 100%;
            height: 120px;
            margin: 0px;
            text-align: center;
            background-color: white;
            vertical-align: middle;
            border-radius: 2px;
            font: 300 helvetica;
            margin-bottom: 50px;
            border: 0.5px solid black;
            cursor: pointer;
            font-size: 1.7vw;
        }
        .menu-content:hover
        {
            background-color: gold;
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
            color: white;
        }

        .special:hover
        {
            cursor: grab;
        }
    </style>
</head>

<body>
    <section class="menu">
        <nav class="nav">
            <h1 aligin="right"><a href="../Animation/index.php">Logout</a>
            </h1>
            <h1 class="special" align="center">WEBGYOR</h1>
            <a href="admin_index.php">
                <button class="menu-content" id="dash">
                    Dashboard
                </button>
            </a>

            <a href="orders.php">
                <button class="menu-cotent">
                    View Orders
                </button>
            </a>

            <a href="conatct.php"> 
                <button class="menu-cotent">
                    Contact-Details
                </button>
            </a>

            <a href="conatct.php"> 
                <button class="menu-cotent">
                    Call Details
                </button>
            </a>

          

            <div class="foot">
                <h1>Admin</h1>
            </div>



        </nav>
    </section>
</body>

</html>