$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    var url = window.location.pathname.split("/");
    $("#sidebarMenu").find("li").each(function (){
        if(url[2] == $(this).attr("id")){
            $("#sidebarMenu").find("li").each(function(){
                $(this).removeClass('active');
            })
            $(this).toggleClass('active');
        }
    })
});