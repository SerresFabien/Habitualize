<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Habitualize - Acceuil</title>
        <link rel="stylesheet" href="<?= "/$prefixToRelativePath" . "/resources/css/app.css" ?>">
        <link rel="stylesheet" href="<?= "/$prefixToRelativePath" . "/resources/css/home_page.css" ?>">
        <link rel="icon" type="image/png" href="<?= "/$prefixToRelativePath" . "/resources/images/monitor.svg" ?>">
    </head>
    <body>
        <nav>
            <div id="nav-bar-main">
                <a href="index.php"><img src="<?= "/$prefixToRelativePath" . "/resources/images/logoHabitualizePng.png" ?>" alt="Le logo de Habitualize sur fond blanc"></a>
                <div>
                    <a class="link" href="">Acceuil</a>
                    <a class="link" href="">Services</a>
                    <a class="link" href="">Contact</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
            </div>
        </nav>

        <main>
            <!-- Acceuil section -->
            <section class="vh-100">
                <div class="txt-img">
                    <div>
                        <h1> Transformez vos <br> <span class="txt-red">habitudes</span>, atteignez
                            <br> vos <span class="txt-red">objectifs</span> avec
                            <br> <span class="txt-red">Habitualize !</span>
                        </h1>
                        <p>
                            Soyez le maître de votre quotidien : <br> votre compagnon pour une vie plus <br> organisée, plus motivée, et plus <br> accomplie avec Habitualize.
                        </p>
                        <button>En savoir plus</button>
                    </div>
                    <div>
                        <img src="<?= "/$prefixToRelativePath" . "/resources/images/organisationProject.svg" ?>" alt="Illustration d'une personne qui organise des fichiers sur un ordinateur">
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>