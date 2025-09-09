<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-color:#E5E7EB; color: #111827; margin: 0%; " >
    <header style="background-color: #8299c2; border: 1px black; align-items: center; text-align: center; display: flex; justify-content: center; width:100%; height : 110px; font-size: 80px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Projeto de login</header>
    <form action="login.php" method="post" style="border: 3px solid #9CA3AF; text-align: center; padding: 35px; width: 400px; align-items: center; justify-content: center; margin: auto; margin-top: 100px; border-radius: 7%; background-color: #FFFFFF; color: #111827; box-shadow: 5px 5px 5px grey;">
        <h1>Login </h1>
        <label style="color: rgb(0, 0, 0);font-size: larger; ">Login:</label>
        <input type="text" name="login" id="login" required style="border-radius: 4px;  box-shadow: 1px 1px 1px #111827 ; padding-left: 50px; ">
        <br>
        <br>
        <label  style="color: rgb(0, 0, 0);font-size: larger;">Password:</label>
        <input type="password" name="password" id="password" required style="border-radius: 4px; box-shadow: 1px 1px 1px #111827; padding-left: 80px; ">
        <br>
        <br>
        <button type="submit" style="background-color: #9333EA; border-radius: 4px; width: 120px; height: 30px;">Submit</button>
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