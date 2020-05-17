let isUnderline = localStorage.getItem("text-underline") || false;
let navKeyboard = localStorage.getItem("keyboard-nav") || false;
let isBiggerText = localStorage.getItem("bigger-text") || 0;
let isLightSpacing = localStorage.getItem("light-spacing") || 0;
let isContrast = localStorage.getItem("more-contrast") || 0;
let isReadPage = localStorage.getItem("read-page") || false;

    let bool = false
    $(".accessibilityLogo").on("click", function(){
        bool = !bool
        if(bool == true){
            $(".accessibilityMenu").css({"display": "flex"})
        }else{
            $(".accessibilityMenu").css({"display": "none"})
        }
    })
    $(".accessibilityClose").click(function() {
        bool = !bool
        $(".accessibilityMenu").css({"display": "none"})
    })

    textUnderline();
    biggerText();
    lightSpacing();
    keyboardNav();
    moreContrast();
    readPage();

    $("#reset-ls").click(function(){
        isReadPage = false
        isContrast = 0
        isLightSpacing = 0
        isBiggerText = 0
        navKeyboard = false
        isUnderline = false
        textUnderline();
        biggerText();
        lightSpacing();
        keyboardNav();
        moreContrast();
        readPage();
    })
    $("#read-page").click(function(){
        isReadPage = !isReadPage
        readPage();
    })
    $("#more-contrast").click(function(){
        if(isContrast < 4){
            isContrast++ 
        }else{
            isContrast = 0
        }
        moreContrast()
    })
    $("#keyboard-nav").click(function(){
        navKeyboard = !navKeyboard
        keyboardNav()
    })
    $("#text-underline").click(function(){
        isUnderline = !isUnderline
        textUnderline()
    })
    $("#bigger-text").click(function(){
        if(isBiggerText < 4){
            isBiggerText++ 
        }else{
            isBiggerText = 0
        }
        biggerText()
    })
    $("#light-spacing").click(function(){
        if(isLightSpacing < 4){
            isLightSpacing++ 
        }else{
            isLightSpacing = 0
        }
        lightSpacing()
    })

function readPage(){
    if(isReadPage){
        $('#check-readPage').css({"display": "block"})
        localStorage.setItem("read-page", true)
        $("#content").find("h1, h2, h3, h4, h5, h6, p, a").each(function(key, value){
            $(this).one("click", function(e){
                if(isReadPage){
                    const synth = window.speechSynthesis;
                    const text = value
                    const toSpeak = new SpeechSynthesisUtterance(text.innerHTML);
                    synth.speak(toSpeak); 
                }
            })
        })
    }else{
        $('#check-readPage').css({"display": "none"})
        localStorage.removeItem("read-page")
    }
}


function moreContrast(){
    $("#contrast-result").empty()
    if(isContrast){
        for (let index = 0; index < isContrast; index++) {
            $("#contrast-result").append("<li></li>")
        }
        localStorage.setItem("more-contrast", isContrast)
        jQuery("body").css({"filter": `contrast(${isContrast})`})
    }else{
        localStorage.removeItem("more-contrast")
        jQuery("body").css({"filter": `unset`})
    }
}

function keyboardNav(){
    if(navKeyboard){
        $('#check-keyboardNav').css({"display": "block"})
        localStorage.setItem("keyboard-nav", true)
        $("#content").find("*").each(function(key, value){
            $(this).on("focus", function(){
                $(this).css({"border": "7px dashed red"})
            })
            $(this).on("focusout", function(){
                $(this).removeAttr( 'style' );
            })
        })
    }else{
        $('#check-keyboardNav').css({"display": "none"})
        localStorage.removeItem("keyboard-nav")
        $("#content").find("*").each(function(key, value){
            $(this).on("focus", function(){
                $(this).removeAttr( 'style' );
            })
            $(this).on("focusout", function(){
                $(this).removeAttr( 'style' );
            })
        })
    }
}

function textUnderline(){
    if(isUnderline){
        $('#check-underline').css({"display": "block"})
        localStorage.setItem("text-underline", true)
        $("#content").find("a").each(function(){
            $(this).css({"text-decoration": "underline"})
        })
    }else{
        $('#check-underline').css({"display": "none"})
        localStorage.removeItem("text-underline")
        $("#content").find("a").each(function(){
            $(this).css({"text-decoration": "unset"})
        })
    }
}

function biggerText(){
    $("#biggerText-result").empty()
    if(isBiggerText > 0){
        for (let index = 0; index < isBiggerText; index++) {
            $("#biggerText-result").append("<li></li>")
        }
        localStorage.setItem("bigger-text", isBiggerText)
        $("#content").find("*").each(function(key, value){
            $(this).css({"font-size": `calc(${window.getComputedStyle(value, null).getPropertyValue('font-size')} + ${isBiggerText}px)`})
        })
    }else{
        localStorage.removeItem("bigger-text")
        $("#content").find("*").each(function(){
            $(this).css({"font-size": ""})
        })
    }
}

function lightSpacing(){
    $("#lightSpacing-result").empty()
    for (let index = 0; index < isLightSpacing; index++) {
        $("#lightSpacing-result").append("<li></li>")
    }
    if(isLightSpacing > 0){
        localStorage.setItem("light-spacing", isLightSpacing)
        $("#content").find("*").each(function(key, value){
            $(this).css({"letter-spacing": `${isLightSpacing}px`})
        })
    }else{
        localStorage.removeItem("light-spacing")
        $("#content").find('*').each(function(){
            $(this).css({"letter-spacing": "0px"})
        })   
    }
}
