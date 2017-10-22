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

        <h1 class="uk-article-title">l'équipe</h1>
        <!--p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p-->

        <div class="uk-card uk-card-default uk-card-body ">
<h2>Pour la musique :</h2>
            Perrine SAUVAGE qui possède le "DUMI" (Diplôme Universitaire de Musicien Intervenant)
            <h2> Pour le cirque :</h2>
            Marie THIZY qui possède le "BIAC" (Brevet d'initiateur aux Art du Cirque) et le "BPJEPS art du cirque".
            <h2>Pour le bon déroulement administratif :</h2>
            Camille, Jacques et Jocelyn qui signent les papiers, font les factures, collent les timbres !

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