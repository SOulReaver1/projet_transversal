function check(config){
    // Dans cette fonction, je check si tous mes inputs sont checked. Dans ce cas, je passe aux autres checkboxes, sinon j'affiche un message d'erreur.
    document.getElementById("button").addEventListener("click", function(){
        for(const inputs of document.querySelectorAll(".formulaire-test>ul>li>input:checked")){
            inputs.parentElement.parentElement.style.display = "none"
            inputs.parentElement.parentElement.nextElementSibling.style.display = "flex"
        }
        for(const element of document.querySelectorAll(".informations>div>input")){
            if(element.value !== ''){
                if(RegExp(config[element.id][0]).test(element.value) == true){
                    element.style.borderColor = "green"
                }else{
                    element.style.borderColor = "red"
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Vous avez mal rempli les questions soulignés en rouge',
                    })
                    event.preventDefault();
                }
            }else{
                event.preventDefault();
            }
        }
    })
}
function $_GET(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;	
    }
    return vars;
}