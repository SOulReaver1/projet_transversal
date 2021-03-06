<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alguaïa">
    <meta name="copyright" content="Mouloud Bessa - Alguaïa - https://www.ilandev.fr/">
    <meta name="language" content="fr">
    <link rel="icon" type="image/png" href="/views/assets/img/logo.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/assets/css/reset.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/css/style.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/css/checkBox.css">
    <link rel="stylesheet" href="/views/assets/css/setColor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/views/questionnaire/assets/js/script.js"></script>
    <script src="/views/assets/js/config.js"></script>
    <title>Alguaïa | Questionnaire</title>
</head>
<body>
    <header data-include="header" class="header"></header>
    <div class="roche"></div>
    <div class="algues">
        <div class="algues1 algue"></div>
        <div class="algues2 algue"></div>
        <div class="algues3 algue"></div>
    </div>
    <div id="content">
        <div class="title">
            <button class="back-btn">
                <i class="fas fa-chevron-left"></i>
                Retour
            </button>
            <h1>Quel type de pollueur êtes-vous ?</h1>
        </div>
        <form action="/questionnaire/resultat-ecolo" method="post" class="form-carbone">
            <?php if(isset($_GET["mail"]) && $_GET["mail"] == "true"):?>
                <p style="color: green;"><?php echo "Votre mail à bien été enregistrer !";?></p>
            <?php elseif(isset($_GET["share"]) && $_GET["share"] == "true"):?>
                <p style="color: green;"><?php echo "Le partage à été effectuer avec succès";?></p>
            <?php endif;?>
            <?php foreach ($allQuestions as $key => $value):?>    
                <ul id="question<?php echo $key+1;?>" class="ulquestion">

                    <li>
                        <h1 class="text-uppercase">Question <?php echo $key+1;?></h1>                    
                        <i class="fas fa-circle round"></i>
                        <h3><?php echo $value->name;?></h3>
                    </li>

                    <li>
                        <?php foreach ($questions->allAnswersOfQuestions($value->id) as $k => $question):?>
                            <input type="radio" name="<?php echo $question->id;?>" value="<?php echo $question->name;?>" id="answer<?php echo $value->id.$k+1;?>" class="inputcheck">

                            <label for="answer<?php echo $value->id.$k+1;?>" class="check">

                                <?php echo $question->name;?>

                            </label>

                        <?php endforeach;?>
                        
                    </li>
                </ul>
            <?php endforeach;?>
            <button type="button" class="button button1" id="buttonForm">Suivant</button>
        </form>
    </div>
    <br>
    <br>
    <footer data-include="footer"></footer>
</body>
</html>