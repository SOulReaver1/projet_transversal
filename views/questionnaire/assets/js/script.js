$( document ).ready(function() {
    $(".form-carbone").find("ul").each(function(){
        $(this).css({"display": "none"})
        if($(this).attr("id") == "question1"){
            $(this).css({"display": "block"})
        }
    })

    $(".check").each(function(key, value){
        var ul = $(this).parent().parent()
        $(this).on("click", function(){
            $(this).parent().children("label").removeClass("checked")
            $(this).addClass("checked")
            $("#buttonForm").one("click", function(){
                ul.css({"display": "none"})
                ul.next().css({"display": "block"})
            })
        })
    })

});