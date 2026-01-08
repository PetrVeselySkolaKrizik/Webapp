<!DOCTYPE html>
<html>
    <head>
    <style>
        #main{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        p{
            width: 70%;
            height: 8vw;
            border: solid 3px black;
            font-size: 2vw;
            overflow: hidden;
        }
    </style>
    </head>
    <body>
        <form action="index.php" method="get">
            <?php if ($_SESSION['user_id'] > 0):?>
            <input type="submit" value="Profile">
        <?php else: ?>
            <input type="submit" value="Login/Register">
        <?php endif; ?>
            <input type="hidden" name="login" value="true">
        </form>

        <div id="main">
        <p>
            <?php echo $content; ?>
        </p>
        </div>
    </body>
</html>