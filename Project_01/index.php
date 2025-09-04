<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color:#E5E7EB; color: #111827; " >
    <form action="login.php" method="post" style="border: 3px solid #9CA3AF; text-align: center; padding: 30px; width: 400px; align-items: center; justify-content: center; margin: auto; margin-top: 200px; border-radius: 7%; background-color: #FFFFFF; color: #111827; box-shadow: 5px 5px 5px grey;"    >
        <h1>Login </h1>
        <label style="color: rgb(53, 45, 47);">Login:</label>
        <input type="text" name="login" id="login" required style="border-radius: 4px;  box-shadow: 1px 1px 1px #111827;">
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" id="password" required style="border-radius: 4px; box-shadow: 1px 1px 1px #111827;">
        <br>
        <br>
        <button type="submit" style="background-color: #9333EA; border-radius: 4px; width: 100px;">Submit</button>
        <br>
        <br>
    
        
<?php
if (isset($_GET['msg'])){
    echo "<p style='color:white; border: 1px red; border-radius: 4px; background-color: red; width: 200px; height: 30px; margin: 0 auto; display: flex; align-items: center; justify-content: center; text-align: center;'>" . htmlspecialchars($_GET['msg']). "</p>";
}
?>


    </form>
</body>
</html>