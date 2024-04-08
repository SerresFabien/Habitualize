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
                    <a class="link" href="#">Acceuil</a>
                    <a class="link" href="#services">Services</a>
                    <a class="link" href="#join_us">Nous rejoindre</a>
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
                        <a class="btn-link" href="#services"><button>En savoir plus</button></a>
                    </div>
                    <div>
                        <img src="<?= "/$prefixToRelativePath" . "/resources/images/organisationProject.svg" ?>" alt="Illustration d'une personne qui organise des fichiers sur un ordinateur">
                    </div>
                </div>
            </section>

            <!-- Services section -->
            <section id="services" class="vh-100 menu">
                <p>
                    Chez Habitualize, nous proposons une gamme de services pour vous aider à développer
                    <br> et réussir dans vos objectifs personnels. Nos services comprennent :
                </p>
                <div class="line-card">
                   <div class="card">
                       <h2>Suivez vos habitudes <br> quotidiennes</h2>
                       <img src="<?= "/$prefixToRelativePath" . "/resources/images/onlineOrganizer" ?>" alt="Image de suivi des habitudes">
                   </div>
                    <div class="card">
                        <h2>Visualisez <br> vos progrès <br> avec des statistiques <br> détaillées</h2>
                        <img src="<?= "/$prefixToRelativePath" . "/resources/images/stats.svg" ?>" alt="Image de graphique / statistiques">
                    </div>
                </div>
                <div class="line-card">
                    <div class="card">
                        <h2>Définissez et atteignez <br> vos objectifs personnels</h2>
                        <img src="<?= "/$prefixToRelativePath" . "/resources/images/schedule.svg" ?>" alt="Image d'organisation">
                    </div>
                    <div class="card">
                        <h2>Restez motivé grâce à des <br> rappels <br> personnalisés</h2>
                        <img src="<?= "/$prefixToRelativePath" . "/resources/images/notifications.svg" ?>" alt="Image de notifcation">
                    </div>
                </div>
            </section>

            <!-- Nous rejoindre section -->
            <section id="join_us" class="menu">
                <div class="big-card">
                    <div>
                        <p>
                            Prêt à <span class="txt-red">voyager</span> vers une <span class="txt-red">meilleure version</span> de vous-même ?
                            <br><br>
                            Cliquez maintenant pour créer votre compte Habitualize et commencez à transformer vos habitudes pour une vie plus épanouie !
                        </p>
                        <button>Créer un compte</button>
                    </div>
                    <img src="<?= "/$prefixToRelativePath" . "/resources/images/subscriptions.svg" ?>" alt="Personne qui créer un compte">
                </div>
            </section>
        </main>

        <footer>
            <div class="line-footer"></div>
            <div class="content-footer">
                <img src="<?= "/$prefixToRelativePath" . "/resources/images/logoHabitualizePng.png" ?>" alt="Logo de Habitualize">
                <div>
                    <p>Contact</p>
                    <a>Contactez-nous</a>
                    <a>Mentions légales</a>
                </div>
                <div>
                    <p>Aide</p>
                    <a>Centre d'aide</a>
                </div>
            </div>
        </footer>
    </body>
</html>