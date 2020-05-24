    var bools = false;
    $("#fasBurger").on("click", function(){
        bools = !bools
        console.log("oui")
        if(bools == true){
            $(".burgerMenuList").css({"max-height": "1500px"})
            $(this).removeClass("fas-bars")
            $(this).css({"color": "#C53050"})
            $(this).addClass("fa-times")

        }else{
            $(".burgerMenuList").css({"max-height": "0px"})
            $(this).addClass("fas-bars")
            $(this).css({"color": "white"})
            $(this).removeClass("fa-times")
        }
    })  

