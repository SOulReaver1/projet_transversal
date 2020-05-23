$(document).ready(function () {
    var bool = false;
    var i = 2
    $("#addAnswerToQuestion").on("click", function(){
        i++
        $("#listAnswersToQuestion").append(`<li class="d-flex align-items-center justify-content-center my-2">
        <div class="col">
          <input type="text" class="form-control" placeholder="Réponse ${i}" name="reponses[]">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre de points" name="points[]">
        </div>
        <i class="fas fa-trash color-red delete-reponse-add"></i>
      </li>
      `)

        $(".delete-reponse-add").each(function(){
            $(this).on("click", function(){
                $(this).parent().remove()
                if(i > 2){
                    i--
                }
            })
        })
    })
    $(".editQuestionButton").on("click", function(){

        if($(this).attr("aria-expanded") == "false"){
          $(this).parent().parent().parent().find(".submitEditQuestion").removeClass("d-none")
          $(this).parent().parent().parent().find(".addAnswerToEditQuestion").removeClass("d-none")
          $(this).parent().parent().parent().find(".editAnswerToQuestion").removeClass("d-none")
          $(this).parent().parent().parent().find(".editPointsToQuestion").removeClass("d-none")
          $(this).parent().parent().parent().find(".editQuestion").removeClass("d-none")
          $(this).parent().parent().parent().find(".editAnswerNormal").addClass("d-none")
          $(this).parent().parent().parent().find(".editPointsNormal").addClass("d-none")
          $(this).parent().parent().parent().find(".questionNormal").addClass("d-none")
        }else{
        editModeDisabled()
      }
    })
    $(".questionToColapse").on("click", function(event){
      editModeDisabled()
    })

    function editModeDisabled(){
        $(".submitEditQuestion").addClass("d-none")
        $(".addAnswerToEditQuestion").addClass("d-none")
        $(".editPointsToQuestion").addClass("d-none")
        $(".editAnswerToQuestion").addClass("d-none")
        $(".editQuestion").addClass("d-none")
        $(".editAnswerNormal").removeClass("d-none")
        $(".editPointsNormal").removeClass("d-none")
        $(".questionNormal").removeClass("d-none")
    }
}); 