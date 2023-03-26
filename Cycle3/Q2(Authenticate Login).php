<html>

<head>
    <title>LOGIN</title>


</head>
<?php

if (array_key_exists('submit', $_POST)) {
    $username2 = "vinayak";
    $password2 = 12345;
    if (($_POST['uname'] == $username2) && ($_POST['password'] == $password2)) {
        echo '<script>alert("Login Success")</script>';
    } else {
        echo '<script>alert("Login Failed")</script>';
    }
}
?>

<body>
    <form method="post">
        <h2>LOGIN</h2>
        
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit" name="submit" value="submit" onclick="validate()">LOGIN</button>
    </form>
</body>

</html>