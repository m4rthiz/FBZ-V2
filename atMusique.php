<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Ulkit!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Raleway|Lakki+Reddy" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body class="uk-container-large">
<header>
    <div class="uk-cover-container">
        <img src="img/banniereLongue.png" alt="banniere avec logo" uk-cover>
    </div>
    <?php include 'nav.php' ?>
</header>

<section class=" contenu">
    <article class="uk-article">

        <h1 class="uk-article-title">La Musique</h1>
        <!--p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p-->
            <div class="uk-card uk-card-default uk-card-body ">
                Lors de la mise en place des projets avec les enseignants, on peut choisir d'aborder :
                <ul class="uk-list">
                    <li>-La chanson.</li>
                    <li>-Le travail rythmique.</li>
                    <li>-Les objets sonores.</li>
                    <li>-La rythmique corporelle.</li>
                    <li>-La fabrication d'instruments.</li>
                    <li>-Etc…</li>
                </ul>
                <div>
                    <a class="uk-button uk-button-text " uk-toggle="target: .plus" href="#">Lire la suite</a>
                </div>
                <p class="plus" hidden>La musique à l'école permet d'aborder de façon collective le travail d'écoute,
                    les notions musicales, la production sonore et vocale.<br/>
                    Elle peut se décliner en différents projets en lien avec d'autres disciplines
                    scolaires ou des thématiques abordées en classe
                    (l'eau, la solidarité, le jardin...).
                </p>
            </div>
            <div class="uk-card uk-card-default uk-card-body uk-margin ">
        <h2>Les projets</h2>
        <p>Les projets peuvent prendre différentes formes :<br/>
            <br/>
        <ul class="uk-list">
            <li>-Quelques séances en lien avec un spectacle vu par les élèves.</li>
            <li>-Des séances inter-classes pour mettre en place une chorale d'école.</li>
            <li>-Des séances sur toute l'année pour un travail plus approfondi.</li>
            <li>-La réalisation d'un spectacle.</li>
        </ul>
        </p>
            </div>
    </article>
</section>
<footer>
    <?php include 'footer.php' ?>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>

</body>

</html>