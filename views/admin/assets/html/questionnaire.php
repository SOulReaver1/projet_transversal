<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/views/admin/assets/js/admin/questionnaire.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-4 text-uppercase">
            Questionnaire
        </h1>
        <span class="text-success"></span>
        <button class="d-inline-block btn btn-ala my-2" data-toggle="collapse" data-target="#collapseAddQuestion" aria-expanded="false" aria-controls="collapseAddQuestion" id="addQuestionButton">
            <i class="fas fa-download mr-2"></i>
            Ajouter une question
        </button>
    </div>

    <div class="collapse" id="collapseAddQuestion">
        <div class="card card-body">
          <form action="/admin/questionnaire/addQuestion" method="post" class="card">
            <div class="card-header bg-white ">
                <div class="input-group input-group-lg d-flex align-items-center">
                  <div class="input-group-prepend d-flex align-items-center">
                    <span class="input-group-text bg-question" id="inputGroup-sizing-lg">Nom de la question :</span>
                    <i class="fas fa-circle color-saumon mr-3"></i>
                  </div>
                  <input type="text" class="form-control form-control-Addquestion" aria-label="Nom de la question :" aria-describedby="inputGroup-sizing-lg" name="question-name">
                </div>      
            </div>

              <div class="collapse show">
                <div class="card-body">
                  <ul class="list-group" id="listAnswersToQuestion">
                    <li class="d-flex align-items-center justify-content-center my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Réponse 1" name="reponses[]">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de points" name="points[]">
                      </div>
                    </li>
                    <li class="d-flex align-items-center justify-content-center my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Réponse 2" name="reponses[]">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre de points" name="points[]">
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <button type="button" class="btn btn-ala mb-2 mx-auto" id="addAnswerToQuestion">
                <i class="fas fa-plus mr-2"></i>
                Ajouter une réponse
              </button>
              <button type="submit" class="btn btn-saumon mb-2 mx-auto">
                <i class="fas fa-check mr-2"></i>
                Valider
              </button>
            </div>
        </form>
    </div>
    
    <div id="accordion">
      <?php foreach($allQuestions as $key => $value):?>
        <form action="/admin/questionnaire/edit" method="post" class="card my-3 editform">
            <input type="hidden" name="questionId" value="<?php echo $value->id;?>">
            <div class="card-header d-sm-flex align-items-center justify-content-between" id="heading<?php echo $key;?>">
              <div class="mb-0 d-flex align-items-center text-center w-75">
                <h5>Question <?php echo $key+1;?></h5>
                <i class="fas fa-circle mx-4 color-saumon"></i>
                <input type="text" name="editQuestion" value="<?php echo $value->name;?>" class="editQuestion form-control d-none">
                <div class="questionNormal"><?php echo $value->name;?></div>
                <button type="button" class="btn btn-lg questionToColapse p-0 m-0" style="box-shadow: none"data-toggle="collapse" data-target="#collapse<?php echo $key;?>" aria-expanded="false" aria-controls="collapse<?php echo $key;?>"><i class="fas fa-chevron-down ml-3"></i></button>
              </div>
              <div class="d-inline-block">
                <button type="button" class="btn btn-lg editQuestionButton" data-toggle="collapse" data-target="#collapse<?php echo $key;?>" aria-expanded="false" aria-controls="collapse<?php echo $key;?>">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#delete<?php echo $key;?>"><i class="fas fa-trash color-red"></i></button>
              </div>
            </div>

            <div id="collapse<?php echo $key;?>" class="collapse" aria-labelledby="heading<?php echo $key;?>" data-parent="#accordion">
                <div class="card-body"> 
                  <ul class="list-group">
                    <?php foreach($questions->allAnswersOfQuestions($value->id) as $k => $question):?>
                      <li class="list-group-item container">
                        <div class="row">
                          <div class="col">
                            Réponse <?php echo $k+1;?> : 
                          </div>
                          <div class="col">
                            <input type="text" name="editAnswerToQuestion[]" value="<?php echo $question->name;?>" class="w-100 d-none editAnswerToQuestion">
                            <p class="editAnswerNormal"><?php echo $question->name;?></p>
                          </div>
                          <div class="col text-center">
                            <div class="d-none editPointsToQuestion">
                              <input type="number" name="editPointsToQuestion[]" value="<?php echo $question->points;?>">pts
                            </div>
                            <p class="editPointsNormal"><?php echo $question->points;?>pts</p>
                          </div>
                        </div>
                      </li>
                    <?php endforeach;?>
                    <button type="button" class="btn btn-ala mx-auto my-2 d-none addAnswerToEditQuestion">
                      <i class="fas fa-plus mr-2"></i>
                      Ajouter une réponse
                    </button>
                    <button type="submit" class="btn btn-saumon my-2 mx-auto d-none submitEditQuestion">
                      <i class="fas fa-check mr-2"></i>
                      Valider
                    </button>
                  </ul>                 
                </div>
              </div>
          </form>

        <div class="modal fade" id="delete<?php echo $key;?>" tabindex="-1" role="dialog" aria-labelledby="delete<?php echo $key;?>Label" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger text-uppercase" id="exampleModalLabel">Supprimer la question <?php echo $key+1;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-uppercase text-danger">
                      Attention, vous allez définitivement supprimer la question <?php echo $key+1;?> êtes vous certain de vouloir continuer ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="/admin/questionnaire/delete-question" method="post">
                  <input type="text" name="question" class="d-none" value="<?php echo $value->id;?>">
                  <button type="submit" class="btn btn-danger text-white">Supprimer</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    </div>

</body>
</html>