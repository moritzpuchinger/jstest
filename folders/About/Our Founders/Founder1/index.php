<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Moritz/main.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/Moritz/style.css">
        <link rel="stylesheet" href="/Moritz/css/app.css">
        <link rel="stylesheet" href="/Moritz/node_modules/motion-ui/dist/motion-ui.min.css">
        <title>Founder 1</title>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo_container">
                <img class="logo" src="/Moritz/empire-state-building.jpg">
            </div>
            <ul class="menu vertical accordion-menu main_nav" data-accordion-menu>
                <?php echo menu($_SERVER["DOCUMENT_ROOT"]."/Moritz/folders"); ?>
            </ul>
        </div>
        <div class="site_content">
            <header>
                <h1 class="main_heading">Testseite</h1>
            </header>
        </div>
        <script src="/Moritz/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/Moritz/node_modules/foundation-sites/dist/js/foundation.min.js"></script>
        <script src="/Moritz/node_modules/motion-ui/dist/motion-ui.min.js"></script>
        <script src="/Moritz/js/app.js"></script>
    </body>
</html>