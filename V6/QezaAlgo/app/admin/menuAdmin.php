<?php
function MenuAdmin($nomPage){
    require '../../app/public/fonctionsAlgo.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $nomPage ?></title>
        <meta charset="utf-8">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <!-- CSS Reset -->
        <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <!-- Milligram CSS minified -->
        <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        <!-- Css Perso -->
        <link rel="stylesheet" type="text/css" href="/pages/style/style.css">
    </head>

    <nav>
        <ul>
            <li>
                <a href="/pages/admin/add.php"> Ajout dans la bdd </a>
            </li>

            <li>
                <a href="/pages/admin/modif.php"> Modification dans la bdd </a>
            </li>

            <li>
                <a href="/pages/admin/suppr.php"> Suppression dans la bdd </a>
            </li>

            <li>
                <a href="/pages/admin/deco.php"> Deconnexion </a>
            </li>
        </ul>
    </nav>

    <body>
    <?php
}


function FooterAdmin(){
    ?>
    </body>
    </html>
    <?php
}
