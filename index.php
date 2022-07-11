<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="favicon-16x16.png">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon-32x32.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="manifest" href="site.webmanifest">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <title>Accueil - BoxShadow</title>
</head>

<body>
    <header class="row">
        <a href="index.php" class="boxshadow">
            <p>
                <span class="logo">B<span class="logo-span">ox</span><span class="logo logo-var">S</span><span class="logo-span">hadow.fr</span> </span>
            </p>
        </a>

        <form action="">
            <input type="search" name="" id="" placeholder="Rechercher">
            <i class="material-icons">search</i>
            <!-- <img src="assets/img/icon/search_white_24dp.svg" alt=""> -->

            <input type="submit" value="" class="submit-search">
        </form>

        <div class="row links">
            <nav class="row">
                <a href="views/html.php">HTML</a>
                <a href="views/css.php">CSS</a>
                <a href="views/quiz.php">Quizzz</a>
                <a href="views/contact.php">Contact</a>
            </nav>
            <div class="row social-media">
                <a href="https://codepen.io/dihcar-cesar/" target="_blank" title="CodePen" class="row">
                    <img src="assets/img/social-media/codepen_icon.svg" alt="lien codepen" class="codepen">
                </a>
                <a href="https://github.com/Edjek" target="_blank" title="GitHub" class="row">
                    <img src="assets/img/social-media/github_icon.png" alt="lien github">
                </a>
            </div>
        </div>
        <nav class="nav-hamburger">
            <div class="wrap">
                <div class="hamburger">
                </div>
            </div>
            <ul class="menu-hamburger">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="views/html.php">HTML</a></li>
                <li><a href="views/css.php">CSS</a></li>
                <li><a href="views/quiz.php">Quizzz</a></li>
                <li><a href="views/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-index">
        <section>
            <h1>Développez-vous</h1>
            <h2>Les plus grandes montagnes sont faites de petites pierres...</h2>
            <div class="row courses">
                <a href="views/html.php">
                    <div class="row course crs-html">
                        <img src="assets/img/logo/html-5.png" alt="logo html">
                        <p>HyperText Markup Language</p>
                        <span class="btn-course">Apprendre</span>
                    </div>
                </a>
                <a href="views/css.php">
                    <div class="row course crs-css">
                        <img src="assets/img/logo/css-3.png" alt="logo css">
                        <p>Cascading Style Sheets</p>
                        <span class="btn-course">Apprendre</span>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <footer>
        <p>
            <span class="domain">B</span>ox<span class="domain">S</span>hadow.fr
        </p>
    </footer>
    <script type="text/javascript" src="assets/js/apps.js"></script>
</body>

</html>