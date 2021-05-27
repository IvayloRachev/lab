<html lang="fr">

<head>
    <title>lab template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/27176a295f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="ar-camera.png"/>
</head>

<body>
    <!--header-->
    <header>
        <?php include "header_mobile.php"; ?>
        <?php include "header.php"; ?>
    </header>
    <!--fin de header-->

    <!--section 1-->
    <section class="slider">
        <?php include "slider.php"; ?>
    </section>
    <!--fin de section 1-->

    <!--section 2-->
    <section class="section2">
        <div class="intro">
            <img src="portrait.png" alt="photo profil">
            <h3>Duis sed odio dit amet nibh vulputate cursus a sit amet mauris.<br>
                Morbi accumsan ipsum velit</h3>
            <p>Sean Geraghty - Designer Of This Template</p>
        </div>
    </section>
    <!--fin de section 2-->

    <!--footer-->
    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <!--fin de footer-->
    <script src="script.js"></script>
</body>

</html>