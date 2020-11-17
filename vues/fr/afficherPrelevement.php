<?PHP
session_start();
include "../../modeles/prelevement.php";
include "../../modeles/recherchePrel.php";

if(!isset($_SESSION['z4_code']) OR $_SESSION['z4_filial'] != "01") {
    header('Location: connexion.php');
}

if (isset($_POST['num_lot'])) {
    $afficherPrelevement=rechercherPrelevements($_POST['num_lot']);
}
if (isset($_POST['num_lot'])) {
    $afficherPrelevement2=rechercherPrelevements($_POST['num_lot']);
}

//$afficherPrelevement=rechercherPrelevements($_POST['num_lot']);
//$afficherPrelevement2=rechercherPrelevements($_POST['num_lot']);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
    <meta http-equiv="Cache-control" content="private" />
    <title>Résultats de la recherche</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../css/nav2.css">
    <link rel="stylesheet" href="../css/resultatsRecherche.css">
    <link rel="stylesheet" href="../css/menuGauche.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

<!-- barre de navigation -->

<?php include('nav2.php'); ?>
<div class="videNav"></div>

<div class="contenu">
    <?php include('menuGestionnaire.php'); ?>

    <!-- contenu -->

    <div id="milieu">
        <!--<div class="recherche">
            <input class="search-text" type = "text" name="" placeholder="Tapez un nom...">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>-->
        <h2>Résultats de la recherche</h2>
        <?PHP if (rechercherPrelevements($_POST['num_lot'])->fetch()): ?>

            <div id="tableauMobile">
                <?PHP foreach ($afficherPrelevement2 as $row2) { ?>
                    <div class="cellule">
                        <p class="titre">ID FILIAL</p>
                        <p class="valeur"><?PHP echo $row2['z0filial']; ?></p>

                        <p class="titre">CODE MARCHE</p>
                        <p class="valeur"><?PHP echo $row2['code_marche']; ?></p>

                        <p class="titre">NUMERO DE LOT</p>
                        <p class="valeur"><?PHP echo $row2['num_lot']; ?></p>

                        <p class="titre">DATE DE PRELEVEMENT</p>
                        <p class="valeur"><?PHP echo $row2['date_prelevement']; ?></p>
                        <p class="titre">CODE LABO</p>
                        <p class="valeur"><?PHP echo $row2['code_labo']; ?></p>
                    </div>
                <?PHP } ?>
            </div>


            <table class="tableau" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID Filial</th>
                    <th>Code Marché</th>
                    <th>Numéro de lot</th>
                    <th>Date de prélèvement</th>
                    <th>Code Labo</th>
                </tr>
                </thead>
                <tbody>
                <?PHP foreach($afficherPrelevement as $row) { ?>
                    <tr>
                        <td><?PHP echo $row['z0filial']; ?></td>
                        <td><?PHP echo $row['code_marche']; ?></td>
                        <td><?PHP echo $row['num_lot']; ?></td>
                        <td><?PHP echo $row['date_prelevement']; ?></td>
                        <td><?PHP echo $row['code_labo']; ?></td>
                    </tr>
                <?PHP } ?>
                </tbody>
            </table>

        <?PHP else: ?>
            <p>Aucun résultat trouvé pour "<?PHP echo $_POST['num_lot']; ?>"</p>
        <?PHP endif; ?>
    </div>

</div>

<?php include('footer.php') ?>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../js/base.js"></script>
</body>
</html>
