<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="text-uppercase mb-4">
            Analytique
        </h1>
        <span class="text-success"></span>
        <button class="d-inline-block btn btn-ala my-2" data-toggle="collapse" data-target="#collapseAddQuestion" aria-expanded="false" aria-controls="collapseAddQuestion" id="addQuestionButton">
            <i class="fab fa-searchengin mr-2"></i>
            Plus de détails
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="color-analytics"><?php echo $countEmail;?></h3>
                <h4 class="text-uppercase">Nombre total de visiteur</h4>
                <h3 class="color-analytics"><?php echo $countMonthEmail;?></h3>
                <p class="color-analytics text-uppercase">(ce mois-ci)</p>
            </div>
            <div class="col">
                <h3 class="color-analytics"><?php echo $countEmail;?></h3>
                <h4 class="text-uppercase">Inscription à la newsletter</h4>
                <h3 class="color-analytics"><?php echo $countMonthEmail;?></h3>
                <p class="color-analytics text-uppercase">35%</p>
                <p class="color-analytics text-uppercase">(de test achevés)</p>
            </div>
            <div class="col">
                <h3 class="color-analytics"><?php echo $countEmail;?></h3>
                <h4 class="text-uppercase">Partages de résultats sur les réseaux sociaux</h4>
            </div>
            <div class="col">
                <h3 class="color-analytics"><?php echo $countEmail;?></h3>
                <h4 class="text-uppercase">Inscription à la newsletter</h4>
                <h3 class="color-analytics"><?php echo $countMonthEmail;?></h3>
                <p class="color-analytics text-uppercase">(ce mois-ci)</p>
            </div>
        </div>
        <div class="row my-3 w-100">
            
            <div class="col">
                <div class="col">
                   <h3 class="color-analytics"><?php echo $recordsCount;?></h3>
                    <h4 class="text-uppercase">Tests achevés</h4> 
                </div>
                <div class="col">
                    <p>aa</p>
                </div>
            </div>
            <div class="col">
                <h3 class="color-analytics">
                    <div class="row">
                        <?php foreach ($calcTypeOfProfil as $key => $value):?>
                            <div class="col d-flex flex-column align-items-center justify-content-end">
                                <img src="<?php echo $value->img;?>" alt="<?php echo $value->name;?>" width="<?php echo $value->stats+40;?>%)">
                                <p class="color-analytics font-weight-bold"><?php echo round($value->stats);?>%</p>
                            </div>
                        <?php endforeach;?>
                    </div>
                </h3>
                <h4 class="text-uppercase text-center">Répartition des différents types de profils</h4>
            </div>
        </div>
    </div>
</body>
</html>