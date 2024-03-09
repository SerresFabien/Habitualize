<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur <?= $err_code ?></title>
    <link rel="stylesheet" href="<?= "/$prefixToRelativePath" . "/resources/css/app.css" ?>">
</head>
<body>
<main class="center">
    <?php if ($err_code == 404) { ?>
        <div>
            <h1>Erreur 404</h1>
            <p>La page ou la ressource demandée n'existe pas ou plus.</p>
        </div>
        <a href="index.php">
            <button>Revenir à l'accueil</button>
        </a>
    <?php } elseif ($err_code == 500) { ?>
        <div>
            <h1>Erreur 500</h1>
            <p>Une erreur interne est survenue, veuillez réessayer.</p>
        </div>
        <a href="index.php">
            <button>Revenir à l'accueil</button>
        </a>
    <?php } else { ?>
        <h1>Une erreur c'est produite</h1>
        <a href="index.php">
            <button>Revenir à l'accueil</button>
        </a>
    <?php } ?>
</main>
</body>
</html>