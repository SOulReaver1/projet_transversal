<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/assets/css/reset.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/css/style.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/css/checkBox.css">
    <link rel="stylesheet" href="/views/questionnaire/assets/css/setColor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/views/questionnaire/assets/js/script.js"></script>
    <script src="/views/assets/js/config.js"></script>
    <title>Document</title>
</head>
<body>
    <header data-include="header" class="header"></header>
    <div data-include="menuAccessibilite"></div>
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
        <form action="" class="form-carbone">
            <?php foreach ($allQuestions as $key => $value):?>    
                <ul id="question<?php echo $key+1;?>">

                    <li>
                        <h1>Question <?php echo $key+1;?></h1>                    
                        <i class="fas fa-circle round"></i>
                        <h3><?php echo $value->name;?></h3>
                    </li>

                    <li>
                        <?php foreach ($questions->allAnswers($value->id) as $k => $question):?>

                            <input type="radio" name="answer<?php echo $value->id;?>" value="<?php echo $question->name;?>" id="answer<?php echo $value->id.$k+1;?>" class="inputcheck">

                            <label for="answer<?php echo $value->id.$k+1;?>" class="check">

                                <h3><?php echo $question->name;?></h3>

                            </label>

                        <?php endforeach;?>
                    </li>
                </ul>
            <?php endforeach;?>
            <button type="button" class="button button1" id="buttonForm">Suivant</button>
        </form>
    </div>
</body>
</html>