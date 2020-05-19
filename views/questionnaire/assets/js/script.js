$( document ).ready(function() {
    $(".form-carbone").find("ul").each(function(){
        $(this).css({"display": "none"})
        if($(this).attr("id") == "question1"){
            $(this).css({"display": "block"})
        }
    })

    $(".ulquestion").each(function(key, ul){
        $(".back-btn").on("click", function(){
            if(ul.previousElementSibling !== null && ul.style.display !== "none"){
                ul.style.display == "none"
                ul.previousElementSibling.style.display == "block"
            }
        })
        $(this).find(".check").each(function(k, label){
            let nextUl = ul.nextElementSibling
            $(this).on("click", function(){
                $(this).parent().children("label").removeClass("checked")
                $(this).addClass("checked")
                $("#buttonForm").one("click", function(e){
                    if(nextUl.id !== "buttonForm"){
                        ul.style.display = "none"
                        ul.nextElementSibling.style.display = "block"
                    }else{
                        $('#buttonForm').attr("type", "submit")                        
                    }
                    if(nextUl.nextElementSibling.id == "buttonForm"){
                        $("#buttonForm").text("Valider le formulaire")
                    }
                })
            })
        
        })
       
    })
});