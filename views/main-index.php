<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/views/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/views/assets/js/config.js"></script>
    <title>Document</title>
</head>
<body>
    <header data-include="header" class="header"></header>
    <div data-include="menuAccessibilite"></div>
    <div id="content">
        <div class="body1 body">
            <div class="sacPlastiquesParent">
                <img src="/views/assets/img/sacPlastique1.svg" alt="Sac plastique" class="sacPlastique">
                <p class="sacplastiquetext1">Sac Alguaïa</p>
                <img src="/views/assets/img/sacPlastique2.svg" alt="Sac plastique" class="sacPlastique sacPlastique2">
                <p class="sacplastiquetext2">Sac plastique</p>
            </div>
            
            <div class="titleFirst">
                <img src="/views/assets/img/sardines.svg" alt="Les sardines" class="sardines">
                <h1 class="firstTitle">Sommes nous des <br>pollueurs ?</h1>
            </div>
            <h2 class="scrollToDiscover">Scrollez pour découvrir <i class="fas fa-long-arrow-alt-down white"></i></h2>
            <img src="/views/assets/img/fish1.svg" alt="Mon poisson" class="fish1">
            <img src="/views/assets/img/goblet.svg" alt="Mon goblet" class="goblet">
        </div>
        <ul class="body2List">
            <img src="/views/assets/img/fish3.svg" alt="Un poisson incroyable" class="fish3">
            <img src="/views/assets/img/fish4.svg" alt="Un poisson incroyable" class="fish4">
            <img src="/views/assets/img/jerrycan.svg" alt="Jerrycan" class="jerrycan">
            <li>
                <p>2020</p>
                <div class="round"></div>
                <div>
                    <p>Nos sacs se déversent dans la rivière NOM à VILLE. Catastrophe. Nous qui prônons le respect de l'environnement, serions à notre tour devenus des pollueurs ? Les journaux en parlent : ALGUAÏA dégringole. Nos excuses publiques ne suffisent pas à calmer l'encre que font couler (aha, vous l'avez ?) nos détracteurs. Alors nous répondons grâce à cette plateforme : sommes-nous des pollueurs ?
                    <br>
                    <br>
                    Découvrez en toute transparence notre consommation plastique, nos prévisions sur le futur du plastique, et notre empreinte environnementale.</p>
                </div>
            </li>
        </ul>
        <div class="body3 body">
            <h1>Consommation de plastique mondiale</h1>
            <div class="body3Carre"></div>
            <ul class="body3List">
                <li>
                    <img src="/views/assets/img/ondes.svg" alt="Des ondes">
                    <h4>2020</h4>
                </li>
                <li>
                    <img src="/views/assets/img/ondes.svg" alt="Des ondes">
                    <h4>2030</h4>
                </li>
                <li>
                    <img src="/views/assets/img/ondes.svg" alt="Des ondes">
                    <h4>2040</h4>
                </li>
                <li>
                    <img src="/views/assets/img/ondes.svg" alt="Des ondes">
                    <h4>2050</h4>
                </li>
                <li>
                    <img src="/views/assets/img/ondes.svg" alt="Des ondes">
                    <h4>2060</h4>
                </li>
                <i class="fas fa-chevron-right body3Arrow"></i>
            </ul>
            <div class="dropdown m-auto">
                <h2 class="dropdownTitle mx-3">Année</h2>
                <button class="btn btn-ala dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Année 2020</button>
                    <button class="dropdown-item" type="button">Année 2030</button>
                    <button class="dropdown-item" type="button">Année 2040</button>
                    <button class="dropdown-item" type="button">Année 2050</button>
                    <button class="dropdown-item" type="button">Année 2060</button>
                </div>
            </div>
            <i class="fas fa-long-arrow-alt-down white arrow-down"></i>
        </div>
        <div class="lastBody body m-auto d-flex flex-column justify-content-center align-items-center">
            <h1>Alors, et vous ?</h1>
            <a href="/questionnaire"><button class="btn btn-ala btn-test">
                Faites le test
            </button></a>
        </div>
        
    </div>
    <div class="algues">
        <img src="/views/questionnaire/assets/html/assets/img/rightAlgue.png" alt="" class="leftAlgue">
        <img src="/views/questionnaire/assets/html/assets/img/leftAlgue.png" alt="" class="rightAlgue">
    </div>
    
    <img src="/views/assets/img/sable.svg" alt="" class="sable">
    <footer data-include="footer" class="footer"></footer>
</body>
</html>