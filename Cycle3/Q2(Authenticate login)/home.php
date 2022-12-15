<html>
<?php
include "db_connection.php";
session_start();
$uname = $_SESSION['user_name'];
$sql = "SELECT * FROM users WHERE user_name='$uname'";
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1);
$row = mysqli_fetch_assoc($result);
    $_SESSION['admno'] = $row['admno'];
    $_SESSION['phone'] = $row['phone'];
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}?><body>
            <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
            <a href="logout.php">LOGOUT</a>
    </body>
</html>