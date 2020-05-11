let isUnderline = localStorage.getItem("text-underline") || false;
let navKeyboard = localStorage.getItem("keyboard-nav") || false;
let isBiggerText = localStorage.getItem("bigger-text") || 0;
let isLightSpacing = localStorage.getItem("light-spacing") || 0;
let isContrast = localStorage.getItem("more-contrast") || 0;
let isReadPage = localStorage.getItem("read-page") || false;

window.addEventListener("DOMContentLoaded", () =>{
    let bool = false
    $(".accessibilityLogo").click(function(){
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
        readPage()
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
})

function readPage(){
    if(isReadPage){
        $('#check-readPage').css({"display": "block"})
        localStorage.setItem("read-page", true)
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
    }else{
        $('#check-keyboardNav').css({"display": "none"})
        localStorage.removeItem("keyboard-nav")
    }
}

function textUnderline(){
    for(const a of document.querySelectorAll("a")){
        if(isUnderline){
            $('#check-underline').css({"display": "block"})
            localStorage.setItem("text-underline", true)
            a.style.textDecoration = "underline"
        }else{
            $('#check-underline').css({"display": "none"})
            localStorage.removeItem("text-underline")
            a.style.textDecoration = "unset"
        }
    }
}

function biggerText(){
    $("#biggerText-result").empty()
    if(isBiggerText > 0){
        for (let index = 0; index < isBiggerText; index++) {
            $("#biggerText-result").append("<li></li>")
        }
        localStorage.setItem("bigger-text", isBiggerText)
        for(const value of document.querySelectorAll("body *")){
          value.style.fontSize = `calc(${window.getComputedStyle(value, null).getPropertyValue('font-size')} + ${isBiggerText}px)`
        }
    }else{
        localStorage.removeItem("bigger-text")
        for(const value of document.querySelectorAll("body *")){
            value.style.fontSize = ""
        }    
    }
}

function lightSpacing(){
    $("#lightSpacing-result").empty()
    for (let index = 0; index < isLightSpacing; index++) {
        $("#lightSpacing-result").append("<li></li>")
    }
    if(isLightSpacing > 0){
        localStorage.setItem("light-spacing", isLightSpacing)
        for(const value of document.querySelectorAll("body *")){
            value.style.letterSpacing = isLightSpacing+"px"
        }
    }else{
        localStorage.removeItem("light-spacing")
        for(const value of document.querySelectorAll("body *")){
            value.style.letterSpacing = "0px"
        }    
    }
}
