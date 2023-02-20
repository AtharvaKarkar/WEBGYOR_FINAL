
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family: sans-serif;
           background: url() no-repeat;
           background-size: cover;

        }
        
.login-box {
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
}
.login-box h1 {
    float: left;
    font-size: 40px;
    border-bottom: 4px solid #191970;
    margin-bottom: 50px;
    padding: 13px;
}      
.textbox {
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid #191970;
}
 
.fa {
    width: px;
    float: left;
    text-align: center;
}
 
.textbox input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    float: left;
    margin: 0 10px;
}
.button {
    width: 100%;
    padding: 8px;
    color: #ffffff;
    background: none #191970;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
    </style>
</head>
<body>
    <form action="admin_validate.php" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
            <div class="textbox">
                <i class="fa fa-user">
                    <input type="text" placeholder="Username" name="username" value="">

                </i>
            </div>
            <div class="textbox">
                <i class="fa fa-user"></i>
                    <input type="text" placeholder="Id" name="id" value="">
                
            </div>

            <div class="textbox">
                <i class="fa fa-user"></i>
                    <input type="text" placeholder="Password" name="password" value="">
                
            </div>

            <input type="button" type="submit" name="login" value="Sign In">
     
        
        </div>
    </form>
</body>
</html>