<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CatScratch/title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">

</head>
<body class="d-flex flex-column min-vh-100 font-monospace fs-3 bg-dark text-white">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>

<?php

include "header.php";
?>

<div id="statistics" class="my-5 mx-5 d-flex justify-content-center align-items-center border rounded border-dark-subtle">
    <p>here will be statistics ig</p>
    <form action="index.php" method="get">
        <input type="hidden" value="logout" name="page">
        <input type="submit" value="Logout" id="logout" class="d-flex btn my-2 mx-5 background-pink bg-gradient text-end text-white border-white">
    </form>
</div>

<div id="profile_page" class="d-flex justify-content-center align-items-center bg-dark text-white">
    <form id="profile_changes" class="fs-5 font-monospace text-center my-5 p-4 border rounded border-dark-subtle background-pink bg-gradient">
        <label for="x">x:</label><br>
        <input type="text" id="x" name="x" class="bg-dark bg-gradient border border-dark rounded"><br>
        <input type="submit" value="Submit" class="mt-4 px-4 py-2 bg-dark bg-gradient text-white border border-dark rounded">
    </form>
</div>

<div id="" class="my-5 mx-5 d-flex justify-content-center align-items-center border rounded border-dark-subtle">
    <p>placeholder</p>
</div>


</body>

</html>
