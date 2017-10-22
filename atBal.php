<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danses Traditionelles - Cie Foulbaz'Art</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Raleway|Lakki+Reddy" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body class="uk-container-large">
<header>
    <div class="uk-cover-container">
        <canvas width="400" height="200"></canvas>
        <img src="img/banniereLongue.png" alt="banniere avec logo" uk-cover>
    </div>
    <?php include 'nav.php' ?>
</header>

<section class=" contenu">
    <article class="uk-article">

        <h1 class="uk-article-title">Les danses traditionelles</h1>
        <!--p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p-->

        <div class="uk-card uk-card-default uk-card-body ">
            <p>Ce projet musique convient tout à fait à une école entière.
                Il met en avant le lien entre le corps et la musique.
            </p>
            Il peut se décliner sous différents aspects :
            <ul class="uk-list">
                <li>Des apprentissages par classe.</li>
                <li>Du travail inter-classe (niveaux identiques ou différents).</li>
                <li>Des rencontres dansées avec les parents.</li>
                <li>Un spectacle musique et danse.</li>
            </ul>
            <div>
                <a class="uk-button uk-button-text " uk-toggle="target: .plus" href="#">Lire la suite</a>
            </div>
            <p class="plus" hidden>
                Tout au long du projet, les apprentissages se font avec de la musique vivante
                (jeu des élèves, musique par les intervenants).<br/>
                Nous avons choisi d'utiliser les danses traditionnelles car on y trouve, outre l'aspect corporel et
                musical,
                une dimension collective.<br/>
                Pour chaque enfant il s'agit d'être alternativement danseur, musicien ou encore chanteur.
                Quelque soit son rôle, l'élève doit être dans une démarche d'écoute, d'attention aux autres, de
                collaboration.<br/>
                Dans ce but, nous nous laissons la possibilité, à des fins pédagogiques, d'adapter les danses
                aux besoins et au niveau des élèves.
            </p>
        </div>
        <div class="uk-card uk-card-default uk-card-body uk-margin ">
            <h2>Les projets</h2>
            Les formules possibles :
            <ul>
                <li>Séances de découvertes et bal inter-classes.</li>
                <li>Séances de découverte et bal avec les parents.</li>
                <li>Séances de découverte et de travail, rencontre parents et spectacle de fin d'année.(15 séances
                    minimum)
                </li>
            </ul>
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