<html>

    <head>
        <title>LOGIN</title>
        
      
    </head>
    <?php
    $username
    
    ?>
    <body>
        <form action="home.php" method="post"><h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
            
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">LOGIN</button>
    </form>
    </body>
</html>