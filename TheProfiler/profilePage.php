<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- set tab icon -->
        <link rel="shortcut icon" type="image/x-icon" href="./resources/images/smile.ico" />

        <!-- page title -->
        <title>Profiler</title>

        <!-- the default css -->
        <link rel="stylesheet" href="./css/mainStyle.css">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- header -->
        <?php require "./header.php"; ?>
    </header>
    <body>
        <div id="mainContainer">
            <div id="firstBody">
                <center>
                    <h2>Profile</h2>
                    <hr id="horiLine1">
                    <?php require "./processor/manageProfilePage.php"; ?>
                </center>
            </div>
        </div>
    </body>

    <footer>
        <?php require "./footer.php"; ?>
    </footer>
</html>