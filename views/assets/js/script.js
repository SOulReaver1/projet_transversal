/* Slider */

let isMoving =false;
let x = 0;
let percent= 0;

var container = document.getElementById('infography_container');
const rect = container.getBoundingClientRect();
var before_container = document.getElementById('before');
var after_container = document.getElementById('after');
var separation = document.getElementById('separation');

container.addEventListener('mousedown', e => {
    x = e.clientX - rect.left;
    isMoving = true;
    percent = (x*100/rect.width);
    before_container.style.width = percent +"%";
    separation.style.left = percent +"%";
    after_container.style.width = 100-percent+"%";
});

container.addEventListener('mousemove', e => {
if (isMoving==true){
    x = e.clientX - rect.left;
    percent = (x*100/rect.width);
    before_container.style.width = percent +"%";
    separation.style.left = percent +"%";
    after_container.style.width = 100-percent+"%";
}
});

window.addEventListener('mouseup', e =>{
    isMoving=false;
});

/* Infography_change */
var targetId = "2020"
redimensionnement(targetId);
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.yearbutton').forEach(elem => {
        targetId = elem.getAttribute('href').split('#')[1];
        elem.addEventListener('click', (evt) => {
            evt.preventDefault();
            targetId = elem.getAttribute('href').split('#')[1];
            redimensionnement(targetId);
        });
    });
});
window.addEventListener("resize", () => {
    redimensionnement(targetId);
})
function redimensionnement(targetId){
    if(window.innerWidth <= 1080 && window.innerWidth > 600){
        $(".before_img").attr("src", "/views/assets/img/infographie/tablette/without" + String(targetId) + ".svg");
        $(".after_img").attr("src", "/views/assets/img/infographie/tablette/with" + String(targetId) + ".svg");
    }else if(window.innerWidth <= 600){
        $(".before_img").attr("src", "/views/assets/img/infographie/mobile/without" + String(targetId) + ".svg");
        $(".after_img").attr("src", "/views/assets/img/infographie/mobile//with" + String(targetId) + ".svg");
    }else{
        before_container.style.backgroundImage=`url(/views/assets/img/infographie/without${String(targetId)}.svg)`;
        after_container.style.backgroundImage=`url(/views/assets/img/infographie/with${String(targetId)}.svg)`;
    }
}

