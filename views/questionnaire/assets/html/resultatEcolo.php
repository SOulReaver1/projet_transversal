<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alguaïa">
    <meta name="copyright" content="Mouloud Bessa - Alguaïa - https://www.ilandev.fr/">
    <meta name="language" content="fr">
    <link rel="icon" type="image/png" href="/views/assets/img/logo.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/assets/css/reset.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/html/assets/css/style.css">
    <link rel="stylesheet" href="/views/assets/css/setColor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/views/assets/js/config.js"></script>
    <title>Votre résultat écolo !</title>
</head>
<body>
    <header data-include="header" class="header"></header>
    <div id="content">
        <h1 class="first-title">Tu es... <?php  echo $getProfil[0]->nameResult;?> !</h1>
        <div class="ecoloDesc">
            <img src="<?php  echo $getProfil[0]->resultImg;?>" alt="<?php  echo $getProfil[0]->nameResult;?> ">
            <p>
                <?php echo $getProfil[0]->resultDesc;?>
            </p>
        </div>
        <form action="/questionnaire/shareResultOnNetwork" method="post">
            <button type="submit" id="shareYouResult" class="button button-share" name="submit">
            Partager
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
        </form>
        
        <div class="profil">
            <div class="profilDesc">
                <h2>
                    Tu es de profil <span><?php echo $getProfil[0]->nameResult;?></span> comme :
                </h2>
                <h1>
                    <?php echo $getProfil[0]->profilName;?>
                </h1>
                <p>
                    <?php echo $getProfil[0]->profilDesc;?>
                </p>
            </div>
            <img src="<?php echo $getProfil[0]->profilImg;?>" alt="<?php echo $getProfil[0]->profilName?>">
        </div>
        <div class="ourConseils">
            <div class="bull">
                <h3 class="text-uppercase">Comment s'améliorer ?</h3>
                <ul class="ourConseilsList">
                    <?php foreach ($getConseils as $key => $value):?>
                        <li>
                            <?php echo $value->conseil;?>
                        </li>
                    <?php endforeach;?>
                </ul>
                <img src="/views/questionnaire/assets/html/assets/img/fish.png" alt="" id="fish1">
                <img src="/views/questionnaire/assets/html/assets/img/fish2.png" alt="" id="fish2">
            </div>
        </div>
        <div class="promos">
            <h1 class="text-uppercase">Suis nos conseils et bénéficie de nos chouettes promos !</h1>
            <p>
                Entre ton adresse pour recevoir ta promotion. Pas d'inquiétude, ton adresse mail ne sera pas utilisée pour autre chose de façon ultérieure !
            </p>
            
            <form class="input-group mb-3 d-flex justify-content-center button-newsletter" method="post" action="/questionnaire/newsletter">
                <input type="email" class="form-control input-newsletter" placeholder="Votre adresse ici" aria-label="Votre adresse ici" aria-describedby="button-addon2" name="newsletterEmail">
                <div class="input-group-append">
                    <button class="btn button-sendNewsletter" type="submit" id="button-addon2">Envoyer</button>
                </div>
            </form>
        </div>
        <footer data-include="footer"></footer>
        <div class="algues">
            <img src="/views/questionnaire/assets/html/assets/img/rightAlgue.png" alt="" class="leftAlgue">
            <img src="/views/questionnaire/assets/html/assets/img/leftAlgue.png" alt="" class="rightAlgue">
        </div>
    </div>
</body>
</html>