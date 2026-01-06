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
        <?php if ($user_set): ?>
            <button>Profile</button>
        <?php else: ?>
            <button>Login/Register</button>
        <?php endif; ?>

        <div id="main">
        <p>
            <?php echo $content; ?>
        </p>
        </div>
    </body>
</html>