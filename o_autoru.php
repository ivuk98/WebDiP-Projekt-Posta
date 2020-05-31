<!DOCTYPE html>
<html lang="hr">
    <head>
        <title>Prijava</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Ilija Vuk">
        <meta name="keywords" content="Project home page">
        <meta name="description" content="Home page for the WebDiP Project">
        <meta name='date' content='May. 19, 2020'>
        <meta name="referrer" content="origin-when-cross-origin"><link rel="icon" href="multimedija/favicon.png">
        <meta property="og:image" content="multimedija/favicon.png" />
        <meta property="og:image:secure_url" content="multimedija/favicon.png" /> 
        <meta property="og:type" content="Website for a project" /> 
        <meta property="og:title" content="WebDiP Project - Ilija Vuk" />

        <link rel="stylesheet" href="css/ivuk.css">
    </head>
    <body>
       <?php
            require('komponente/header.php');
            require('komponente/navBar.php');
       ?>

        <div class="footerWrapper">
		<main>
            <div id="wrapper" class="rotateIn"  style="overflow:visible;">
                <h1 class="heading">O autoru</h1>
                <div class="podatciWrapper" >    
                    <ul class="podatci">
                        <li>Ime i prezime:</li>
                        <li><b>Ilija Vuk</b></li>
                        <li>Matični broj</li>
                        <li><b>46198/17-R</b></li>
                        <li>Mail</li>
                        <li><b><a style="text-decoration: none; color: #000000;" href="mailto:ivuk@foi.hr?subject=Kontakt sa stranice o autoru" target="_blank">ivuk@foi.hr</a></b></li>
                        <li>Slika autora</li>
                        <li><img src="multimedija/autor-slika.jpg" alt="Autor" height=100 width=100 /></li>
                    </ul>
                    <div class="oAutoruTekst" >
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </main>  

        <?php
            require('komponente/podnozje.php');
        ?> 
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="javascript/ivuk.js"></script>
</html>