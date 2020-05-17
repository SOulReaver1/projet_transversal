window.addEventListener("DOMContentLoaded", () =>{
    $(function(){
        var includes = $('[data-include]');
        jQuery.each(includes, function(){
        var file = '/views/assets/html/' + $(this).data('include') + '.html';
        $(this).load(file);
        });
    });
})