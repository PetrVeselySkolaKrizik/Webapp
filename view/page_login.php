<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CatScratch</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
            integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
            crossorigin="anonymous"></script>

</head>

<?php include "header.php"; ?>

<body class="d-flex flex-column min-vh-100 font-monospace">

<div id="login_page" class="d-flex justify-content-center align-items-center flex-fill bg-dark text-white">

    <form id="register" class="fs-3 text-center my-5 me-5 p-4 border rounded border-dark-subtle background-pink bg-gradient">
        <p class="text-center">Register</p>
        <label for="username_register">Username:</label><br>
        <input type="text" id="username_register" name="username" class="bg-dark bg-gradient border border-dark rounded"><br>
        <label for="password_register">Password:</label><br>
        <input type="password" id="password_register" name="password" class="bg-dark bg-gradient border border-dark rounded"><br>
        <label for="password_repeat_register">Repeat password:</label><br>
        <input type="password" id="password_repeat_register" name="password" class="bg-dark bg-gradient border border-dark rounded"><br>
        <input type="submit" value="Sign up" class="mt-4 px-4 py-2 bg-dark bg-gradient text-white border border-dark rounded">
    </form>

    <form id="login" class="fs-3 text-center my-5 p-4 border rounded border-dark-subtle background-pink bg-gradient" action="index.php?page=logging_in" method="post">
        <p class="text-center">Login</p>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" class="bg-dark bg-gradient border border-dark rounded"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" class="bg-dark bg-gradient border border-dark rounded"><br>

        <?php if (isset($error)) {
            echo $error . "<br>";
        }?>

        <input type="submit" value="Sign in" class="mt-4 px-4 py-2 bg-dark bg-gradient text-white border border-dark rounded">
    </form>

</div>

</body>

</html>
