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
    
    <div class="container w-100">
        <div class="row">
            <div class="card color-analytics bg-light m-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">Nombre total de visiteur</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_views;?> visiteurs au total</h5>
                    <p class="card-text">Cette statistique comprend le nombre de personne venant sur la home page ainsi que sur le questionnaire</p>
                </div>
            </div>
            <div class="card color-analytics bg-light m-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">Inscription à la newsletter</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $countEmail;?> mails</h5>
                    <p class="card-text">dont <span class="color-analytics"><?php echo round($statsMail[0]->statsMail);?>%</span> des test achevés ainsi que <span class="color-analytics"><?php echo $countMonthEmail;?></span> inscriptions ce mois.</p>
                </div>
            </div>
            <div class="card color-analytics bg-light m-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">Nombre de partage sur les réseaux</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $countShare;?> partage(s)</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card color-analytics bg-light m-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">Nombre de tests débutés</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_views_questionnaire;?> tests débutés</h5>
                    <p class="card-text"><?php echo round($stats_questionnaire);?>% des visites</p>
                </div>
            </div>
            <div class="card color-analytics bg-light m-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">Nombre de tests achevés</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $recordsCount;?> tests achevés</h5>
                    <p class="card-text">sur les <?php echo $total_views_questionnaire;?> débutés soit, <?php echo round($recordsCount * 100 / $total_views_questionnaire);?>% des tests</p>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="card color-analytics bg-light m-3">
                    <div class="card-header text-uppercase">Répartition des différents types de profils</div>
                    <ul class="d-flex justify-content-between flex-wrap m-3">
                        <?php foreach ($calcTypeOfProfil as $key => $value):?>
                            <li class="d-flex flex-column align-items-center justify-content-center">
                                <h5 class="text-center text-underline">
                                    <?php echo $value->name;?>
                                </h5>

                                <img src="<?php echo $value->img;?>" alt="<?php echo $value->name;?>" width="<?php echo $value->stats+70;?>"px>

                                <p class="card-text color-analytics my-2"><?php echo round($value->stats);?>%</p>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>