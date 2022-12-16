<html>

    <head>
        <title>LOGIN</title>
        
      
    </head>
    <?php
   session_start();
   if(array_key_exists('submit',$_POST))
    {
        $username2 = "vinayak";
        $password2 = 12345;
        if (($_POST['uname'] == $username2) && ($_POST['password'] == $password2)) {
            $_SESSION['uname'] = $username2;
              $_SESSION['password'] = $password2;
            header("Location: home.php");
        
        }
else{
            echo "login failed";
        
}
    }
    ?>
    <body>
        <form method="post"><h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit" name="submit" value="submit" onclick="validate()">LOGIN</button>
    </form>
    </body>
</html>