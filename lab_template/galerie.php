<html lang="fr">

<head>
    <title>galerie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="galerie.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/27176a295f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="ar-camera.png" />
</head>

</html>

<body>
    <!--header-->
    <header>
        <?php include "header_mobile.php"; ?>
        <?php include "header.php"; ?>
    </header>
    <!--fin de header-->

    <!--section 1-->
    <section class="section1-2">

    </section>
    <!--fin de section 1-->

    <!--section 2-->
    <section class="section2-2">
        <div class="div1_s4">
            <h2>Galerie</h2>
        </div>
        <div class="images">
            <div class="img1">
                <img class="myImg" src="./galerie/etoile.jpg" alt="image de ciel avec des etoiles" style="width:100%;max-width:300px">
            </div>
            <div class="img2">
                <img class="myImg" src="./galerie/femme.jpg" alt="image de femme avec un appreil photo" style="width:100%;max-width:300px">
            </div>
            <div class="img3">
                <img class="myImg" src="./galerie/jungle.jpg" alt="image d'un appareil photo dans la fôret" style="width:100%;max-width:300px">
            </div>
            <div class="img4">
                <img class="myImg" src="./galerie/lune.jpg" alt="image d'une personne qui prenne des photos" style="width:100%;max-width:300px">
            </div>
        </div>
        <div class="images2">
            <div class="img5">
                <img class="myImg" src="./galerie/etoile.jpg" alt="image de ciel avec des etoiles" style="width:100%;max-width:300px">
            </div>
            <div class="img6">
                <img class="myImg" src="./galerie/femme.jpg" alt="image de femme avec un appreil photo" style="width:100%;max-width:300px">
            </div>
            <div class="img7">
                <img class="myImg" src="./galerie/jungle.jpg" alt="image d'un appareil photo dans la fôret" style="width:100%;max-width:300px">
            </div>
            <div class="img8">
                <img class="myImg" src="./galerie/lune.jpg" alt="image d'une personne qui prenne des photos" style="width:100%;max-width:300px">
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </section>
    <!--fin de section 2-->

    <!--footer-->
    <footer>
        <?php include "footer.php"; ?>
    </footer>
    <!--fin de footer-->
    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>