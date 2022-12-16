<html>
    <body>
        <h1>Hi,
            <?php  session_start();
            echo $_SESSION['uname']; ?></h1>
        <br>
       <h1> Your password=<?php echo $_SESSION['password']; ?></h1><br>
    </body>
</html>