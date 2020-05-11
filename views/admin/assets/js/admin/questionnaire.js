$(document).ready(function () {
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
    
});