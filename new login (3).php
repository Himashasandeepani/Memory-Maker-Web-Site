<?php
$isInvalid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = "id21630567_memorymaker";
    $server = "localhost";
    $username = "id21630567_root";
    $pwd = "memoryMaker&28";

    $conn = new mysqli($server, $username, $pwd, $db);
    $sql = sprintf("SELECT * FROM admin
                    WHERE Username = '%s'",
                    $conn->real_escape_string($_POST['user']));
    
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        if ($_POST['password'] == $user["Password"]) {
            session_start();
            /*$_SESSION['user_id'] = $user['id'];*/
            header("Location: dashboard index.html");
            exit;
        }
    }
    $isInvalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Maker</title>
    <link href="logo.jpg" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Include your existing CSS styles here*/ 
    </style>
</head>
<body>
    <div class="full-screen-container">
        <div class="login-container">
            <h1 class="login-title">Welcome</h1>
            
            <?php
                if ($isInvalid) {
                    echo "<strong style='color:red'>Invalid login</strong>";
                }
            ?>
            
            <form method="POST" action="">
                <div class="input-group success">
                    <label for="user">User Name</label>
                    <input type="text" name="user" id="user">
                </div>

                <div class="input-group error">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                
                <center><button type="submit" class="login-button">Login</button></center>
            </form>
        </div>
    </div>
</body>
</html>
