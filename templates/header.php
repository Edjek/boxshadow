<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="../favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="../favicon-32x32.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/<?= $current_css ?>.css">

    <?= $current_link ?? ''; ?>

    <title><?= $current_title ?> - BoxShadow</title>
</head>

<body>
    <header class="row">
        <a href="../index.php" class="boxshadow">
            <p>
                <span class="logo">B<span class="logo-span">ox</span><span class="logo logo-var">S</span><span class="logo-span">hadow.fr</span> </span>
            </p>
        </a>

        <form action="">
            <input type="search" name="" id="" placeholder="Rechercher">
            <i class="material-icons">search</i>
            <!-- <img src="../assets/img/icon/search_white_24dp.svg" alt=""> -->

            <input type="submit" value="" class="submit-search">
        </form>

        <div class="row links">
            <nav class="row">
                <a href="../views/html.php">HTML</a>
                <a href="../views/css.php">CSS</a>
                <a href="../views/quiz.php">Quizzz</a>
                <a href="../views/contact.php">Contact</a>
            </nav>
            <div class="row social-media">
                <a href="https://codepen.io/dihcar-cesar/" target="_blank" title="CodePen" class="row">
                    <img src="../assets/img/social-media/codepen_icon.svg" alt="lien codepen" class="codepen">
                </a>
                <a href="https://github.com/Edjek" target="_blank" title="GitHub" class="row">
                    <img src="../assets/img/social-media/github_icon.png" alt="lien github">
                </a>
            </div>
        </div>

        <nav class="nav-hamburger">
            <div class="wrap">
                <div class="hamburger">
                </div>
            </div>
            <ul class="menu-hamburger">
                <li><a href="../views/html.php">HTML</a></li>
                <li><a href="../views/css.php">CSS</a></li>
                <li><a href="../views/quiz.php">Quizzz</a></li>
                <li><a href="../views/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>