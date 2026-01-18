<!DOCTYPE html>
<html lang="en">


<body>

<div id="navbar" class="navbar sticky-top navbar-expand-lg bg-dark text-white border border-dark-subtle fs-2">

    <a class="navbar-brand my-2 mx-5 text-white" href="index.php">
        <img src="#" alt="logo" width="30" height="24">
        Text
    </a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Text</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Text</a>
            </li>

        </ul>
    </div>

    <form action="index.php" method="get">
        <?php if (isset($_SESSION["user_id"])):?>
            <input type="hidden" value="profile" name="page">
            <input type="submit" value="Profile" id="profile" class="d-flex btn my-2 mx-5 background-pink bg-gradient text-end text-white border-white">
        <?php else:?>
            <input type="hidden" value="login" name="page">
            <input type="submit" value="Login/Register" id="profile" class="d-flex btn my-2 mx-5 background-pink bg-gradient text-end text-white border-white">
        <?php endif;?>
    </form>

</div>

</body>