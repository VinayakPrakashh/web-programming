<?php
require_once('db_connection.php');
?>
<html>

    
    <head>REGISTRATION
</head>
<?php
if (isset($_POST['register'])) {
    $uname = $_POST['username'];
    $admissionno = $_POST['admno'];
    $phone = $_POST['phoneno'];
    $passwrd = $_POST['password'];
   mysqli_query($conn,"INSERT INTO users (user_name,admno,phone,passwrd) VALUES('$uname','$admissionno','$phone','$passwrd')");
}
?>
<body>
    <form action="" method="POST">

       <label>User Name:</label>
        <input type="text" name="username" placeholder="User Name:">
        <br>
        <label>Admission No:</label>
        <input type="text" name="admno" placeholder="Admission No:">
        <br>
        <label>Phone No:</label>
        <input type="text" name="phoneno" placeholder="Phone No:">
        <br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password"><br>
        <label>Confirm Password:</label>
        <input type="password" name="confirmpassword" placeholder="confirm Password"><br>
        <button type="submit" name="register">Register</button>
        <br>
        Already Registered?<a href="index.php">login</a>
    </form>
</body>
</html>