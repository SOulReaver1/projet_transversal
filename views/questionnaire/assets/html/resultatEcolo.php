<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/questionnaire/assets/html/assets/css/style.css">
    <link rel="stylesheet" href="/views/assets/css/setColor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/views/assets/js/config.js"></script>
    <title>Document</title>
</head>
<body>
    <header data-include="header" class="header"></header>
    <div data-include="menuAccessibilite"></div>
    <div id="content">
        <h1 class="first-title">Tu es... un écolo !</h1>
        <div class="ecoloDesc">
            <img src="../views/questionnaire/assets/html/assets/img/PNJ.png" alt="">
            <p>
                Comme XX% des gens qui ont répondu à ce questionnaire, tu es l’Ecolo par excellence qui se soucie de son mode de consommation.
                <br>
                <br>
                Tu es une personne respectueuse de l’environnement, et tu fais en sorte de préserver la nature pour les générations futures.
                <br>
                <br>
                Tu l’as bien compris et ce depuis des années, qu'adopter des gestes écologiques permettrait au monde qui t’entoure d’aller de l’avant.
                <br>
                <br>
                Félicitations ! Continue sur cette voie.
            </p>
        </div>
        <button type="button" id="shareYouResult" class="button button-share">
            Partager ton résultat
            <div class="vertiTrait"></div>
            <ul class="shareNetwork">
                <li>
                    <i class="fab fa-facebook"></i>
                </li>
                <li>
                    <i class="fab fa-twitter"></i>
                </li>
                <li>
                    <i class="fab fa-instagram"></i>
                </li>
            </ul>
        </button>
        <div class="profil">
            <div class="profilDesc">
                <h2>Tu es de profil comme :</h2>
                <h1>Nicolas</h1>
                <p>Il est un grand écologiste reconnu de tous. Il constate à l’œil nu les dégradations que l’on fait subir à la planète et l’urgence d’agir. Il crée donc en 1990 la Fondation Nicolas Hulot pour la Nature et l’Homme, reconnue d’utilité publique !
                Wow génial !</p>
            </div>
            <img src="../views/questionnaire/assets/html/assets/img/PNJ2.png" alt="">
        </div>
        <div class="ourConseils">
            <div class="bull">
                <h1>Comment s'améliorer ?</h1>
                <ul class="ourConseilsList">
                    <li>Faire passer le message sur les actions menées afin de sensibiliser ses proches</li>
                    <li>Sensibiliser ses enfants</li>
                </ul>
                <img src="/views/questionnaire/assets/html/assets/img/fish.png" alt="" id="fish1">
                <img src="/views/questionnaire/assets/html/assets/img/fish2.png" alt="" id="fish2">
            </div>
        </div>
        <div class="promos">
            <h1>Si tu suis nos conseils, tu as droit à nos chouettes promos !</h1>
            <p>
                Entre ton adresse pour recevoir ta promotion. Pas d'inquiétude, ton adresse mail ne sera pas utilisée pour autre chose de façon ultérieure !
            </p>
            
            <form class="input-group mb-3 button-newsletter" method="post" action="">
                <input type="text" class="form-control input-newsletter" placeholder="Votre adresse ici" aria-label="Votre adresse ici" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn button-sendNewsletter" type="submit" id="button-addon2">Envoyer</button>
                </div>
            </form>
        </div>
        <footer data-include="footer"></footer>
        <div class="algues">
            <img src="../views/questionnaire/assets/html/assets/img/rightAlgue" alt="" class="leftAlgue">
            <img src="../views/questionnaire/assets/html/assets/img/leftAlgue" alt="" class="rightAlgue">
        </div>
    </div>
</body>
</html>