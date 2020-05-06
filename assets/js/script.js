window.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll(".formulaire-test>ul").forEach(function(value){
        if(value.id > 1){
            value.style.display = "none"
        }else{
            value.style.display = "flex"
        }
        document.querySelector('.back-btn').addEventListener("click", ()=>{
            if(value.style.display !== "none"){
                if(value.previousElementSibling !== null){
                    value.style.display = "none"
                    value.previousElementSibling.style.display = "flex"
                    for(const inputs of value.children[1].children){
                        inputs.checked = false
                    }
                }
            }
        })
    })
    
    const config = {
        mail:[
            "^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$",
        ]
    }
    if($_GET("success") == "true"){
        Swal.fire({
            title: 'Votre demande à bien été enregistrer !',
            icon: 'success',
            text: 'Votre emprunte carbone vous sera envoyé par mail'

          }).then((result) => {
            if (result.value) {
              window.location.href = "index.html"
            }
          })
          document.body.style.paddingRight = "0px"
    }
    check(config)
})