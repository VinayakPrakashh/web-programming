<html>
<?php

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
   
 
}
    if (isset($_POST['details'])) {
    echo "hi";
        header("location: home.php");
        exit();
    }

?>

    <body>
            <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
            <a href="logout.php">LOGOUT</a>
        <form action="" method="post">

        <input type="submit" name="details" value="Enter details"><br>
        <input type="submit" name="view" value="View details">
        </form>
    </body>
</html>