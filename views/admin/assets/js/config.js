window.addEventListener("DOMContentLoaded", () =>{
    $(function(){
        var includes = $('[data-include]');
        jQuery.each(includes, function(){
        var file = '/views/admin/assets/html/' + $(this).data('include') + '.php';
        $(this).load(file);
        });
    });
    
})
