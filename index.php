<?php
    include("authenticate.php");
    $auth = new authenticate();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login System</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="test.js"></script>
    </head>
    <body>
        <h1>User Login</h1>
        <form method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit" name="login">Login</button>
        </form>

        <?php $auth->login();?>
        <h1>New User</h1>
        <form method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="newUsername" placeholder="username"/>
            <input type="password" name="newPassword" placeholder="password"/>
            <button type="submit" name="Register">Login</button>
        </form>

        <?php $auth->login();?>
    </body>
</html>
