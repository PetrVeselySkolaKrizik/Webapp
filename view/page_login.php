<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form action="controller/controller_user.php" method="post">
            <label for="usr">username</label>
            <input type="text" name="usr" id="usr">
            <label for="pswd">password</label>
            <input type="password" name="pswd" id="pswd">
            <label for="pswdvrf">verify password</label>
            <input type="password" name="pswdvrf" id="pswdvrf">

            <input type="submit" value="Login/Register">
        </form>
    </body>
</html>