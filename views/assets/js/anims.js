$( document ).ready(function() {
    var poulpe = $(".poupleBottom")
    var bob = $(".bob")
    var $sidebar = $("#scrollDown"),
    $window = $(window),
    offset = $sidebar.offset(),
    topPadding = 500;
    
    $window.scroll(function() {
        $(".sacplastiquetext1").css({"opacity": "0"})
        $(".sacplastiquetext2").css({"opacity": "0"})
        $(".ondes").css({"opacity": "0"})
        if ($window.scrollTop() > offset.top) {
            if($window.scrollTop() > 1000){
                $(".sacPlastique1").css({"opacity": 0})
            }else{
                $(".sacPlastique1").css({"opacity": 1})
            }
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
            $(".sacplastiquetext1").css({"opacity": "1"})
            $(".sacplastiquetext2").css({"opacity": "1"})
            $(".ondes").css({"opacity": "1"})
        }
    });
    function loop(){
        poulpe.stop().animate({
            left: '-100px',
        }, 10000, "swing", function(){
            poulpe.css({'left': "auto", "right": "-100px"});
            loop();
        })
    }
    loop();

});