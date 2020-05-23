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

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.yearbutton').forEach(elem => {
        elem.addEventListener('click', (evt) => {
            evt.preventDefault();
    
            const targetId = elem.getAttribute('href').split('#')[1];
            var before_img = "/views/assets/img/infographie/without" + String(targetId) + ".svg";
            var after_img = "/views/assets/img/infographie/with" + String(targetId) + ".svg";
            
            before_container.style.backgroundImage="url("+before_img+")";
            $(".before_img").attr("src", `${before_img}`);
            after_container.style.backgroundImage="url("+after_img+")";
            $(".after_img").attr("src", `${after_img}`);
        });
    });
});