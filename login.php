<?php
    session_start();
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if($_POST["username"] == "admin" && $_POST["pass"] == "123456")
        {
            $_SESSION["user"] = $_POST["username"];
            header("location: pages/view.php");
        }
        else
        {
            $error = "error! invalid credential";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz App Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <div class="main-login-page">

        <div class="header text-center">
            <h1 class="header-text">Quiz App Admin Panel</h1>
        </div>

        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="login-pane">
                <select class="login-input" name="username" id="role-selector">
                    <option value="admin" selected>Admin</option>
                </select>
                <input name="pass" type="password" class="login-input" placeholder="Enter Admin Password"> <br>
                <span class="error" style="display:block; padding: 10px; color: #aa0000; text-align: center;"><?php echo $error; ?></span>
                <button class="login-button" type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>