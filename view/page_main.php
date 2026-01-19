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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="view/style.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
            integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
            crossorigin="anonymous"></script>
    <script src="view/typing.js" defer></script>

</head>

<?php include "header.php"; ?>

<body class="d-flex flex-column min-vh-100 font-monospace">
    <div id="main" class="flex-fill bg-dark text-white">
        <div id="app">
            <div id="timer" class="p-2 mx-5 my-5 flex-wrap text-white fs-3"></div>
            <div id="typeSpace" class="flex-wrap flex-row pink fs-3" style="width: 62vw">
                <div class="wordsWrap" tabindex="0">
                    <div id="caret" class="text-white"></div>
                    <div id="words">
                        <?php echo $content; ?>
                    </div>
                    <div id="overlay">Click here to focus</div>
                    <div id="result" class="bg-dark"></div>
                </div>
            </div>
            <a href="index.php" class="btn background-pink text-white text-center border-white bi bi-arrow-clockwise bi bi-arrow-clockwise" id="restart"></a>
        </div>
    </div>

</body>

<?php include "footer.php"; ?>

</html>
