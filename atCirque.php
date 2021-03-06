<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arts du cirque - Cie Foulbaz'Art</title>
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
    <p class="uk-article">

    <h1 class="uk-article-title">Les Arts du Cirque</h1>
    <!--p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p-->

    <p class="uk-text-lead">Les Arts du Cirque mèlent des compétences sportives et artistiques où s'alternent
        travail individuel et collectif.
    </p>
        <div class="uk-card uk-card-default uk-card-body ">
            <h2>La technique</h2>
            <p>
                Nous nous déplaçons dans votre structure avec tout le matériel
                spécifique à la pratique des Arts du Cirque.
            </p>
            <ul class="uk-list">
                <li>-La jonglerie : assiettes chinoises, bâtons du diable, diabolos, balles, foulards...</li>
                <li>-L'équilibre sur matériel : boule d'équilibre, rouleaux américains...</li>
                <li>-L'acrobatie : roulades, pyramides...</li>
            </ul>

            <div>
                <a class="uk-button uk-button-text " uk-toggle="target: .plus" href="#">Lire la suite</a>
            </div>
            <p class="plus" hidden>
                En plus de toutes ces disciplines, une découverte du monde du spectacle avec des ateliers
                d'expression et pourquoi pas la création d'un spectacle.<br/>
                Les apprentissages passent par des phases d'observation où les enfants essaient de comprendre,
                reproduire un mouvement, mais aussi par des temps d'explorations où les ils vont chercher, tester et
                créer avec leur propre corps.
            </p>
        </div>
        <div class="uk-card uk-card-default uk-card-body uk-margin ">
            <h2>Les projets et interventions </h2>
            <p>
                Nous intervenons dans différentes structures (écoles, centres sociaux, centres de loisirs,
                crèches…)</p>
                Quelques formules possibles :
            <ul class="uk-list">
                <li>-Découverte sur quelques scéances.</li>
                <li>-Projet à plus long terme avec un montage de spectacle (10 scéances minimum).</li>
                <li>-Cirque et musique en lien avec l'intervenante musique.</li>
            </ul>
            Et bien d'autres encore en fonction des envies !
        </div>

    <p class="uk-article-meta">"Les Arts du Cirque mèlent des compétences sportives et artistiques où
        s'alternent travail individuel et travail collectif."</p>
    <!--div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">Read more</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="#">5 Comments</a>
        </div>
    </-div-->
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