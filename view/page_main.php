<!DOCTYPE html>
<html>
    <head>
    <style>
        .main{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        p{
            width: 400px;
            height: 200px;
            border: solid 3px black;
        }
    </style>
    </head>
    <body>
        <form action="index.php" method="get">
            <?php if ($user_set): ?>
            <input type="submit" value="Profile">
        <?php else: ?>
            <input type="submit" value="Login/Register">
        <?php endif; ?>
            <input type="hidden" name="logging_in" value="true">
        </form>

        <div id="main">
        <p>
            <?php echo $content; ?>
        </p>
        </div>
    </body>
</html>