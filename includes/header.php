<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Blindness - <?php if($current=='index') echo 'Accueil'; 
                             if($current=='notions') echo 'Notions';
                             if($current=='deficiences-visuelles') echo 'Déficiences visuelles';
                             if($current=='outils') echo 'Outils';
                             if($current=='bonnes-pratiques') echo 'Bonnes pratiques';
                             if($current=='statistiques') echo 'Statistiques';
                             if($current=='mentions') echo 'Mentions légales';
                        ?>
    </title>
    <link rel="icon" href="../favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Un site sur l'accessibilité optimisé pour les malvoyants. Créé par les stagiaires de l'ACS.">
    <link rel="stylesheet" type="text/css" href="../styles/header.css">
    <link rel="stylesheet" type="text/css" href="../styles/footer.css">
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" type="text/css" href="../styles/notions.css">
    <link rel="stylesheet" type="text/css" href="../styles/mentions.css">
    <link rel="stylesheet" type="text/css" href="../styles/outils.css">
</head>

<body>
    <nav>
        <div class="nav">
            <a href="index.php"><img src="../assets/logo/blindness.svg" alt="Logo du site Blindness" class="logo">
                <h1 class="logo-text noselect">Blindness</h1>
            </a>
            <label for="toggle" class="noselect" tabindex="0">Navigation</label>
            <input type="checkbox" id="toggle" />
            <div class="menu">
                <div class="nav-menu-romanum">
                    <a href="notions.php">I.</a>
                    <a href="deficiences-visuelles.php">II.</a>
                    <a href="#">III.</a>
                    <a href="#">IV.</a>
                    <a href="#">V.</a>
                </div>
                <div class="nav-menu-name">
                    <a href="notions.php">NOTIONS</a>
                    <a href="deficiences-visuelles.php">DÉFICIENCES VISUELLES</a>
                    <a href="outils.php">OUTILS</a>
                    <a href="bonnes-pratiques.php">BONNES PRATIQUES</a>
                    <a href="statistiques.php">STATISTIQUES</a>
                </div>
            </div>
        </div>