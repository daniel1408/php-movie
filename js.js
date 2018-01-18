$(document).ready(function () {    
    $.ajaxSetup({ cache: false });
    $(".btnInfo").click(function () {        
        var id = $(this).data("value");
        
        $("#details").load("details.php?id="+id, function () {
            $('#myModal').modal("show");
        });
    });
});

window.onload=function(){
    var div = document.getElementById('lateral');
    var clique = document.getElementById('iconMenu');
    
    div.style.display = 'block';
    div.style.transform = 'translate(220px, 0)';

    clique.onclick=function(){
        if( 'getComputedStyle' in window ){
            var display = window.getComputedStyle(div).display;
        } else {
            var display = div.style.display;
        }
            //  div.style.transform = 'translate(0px, 0)';            
            if( display === 'none' ){
                // Muda para display block
                div.style.display = 'block';
            } else {
                // Muda para display none
                div.style.display = 'none';
            }
        // Retorna falso para não atualizar a página
        return false;
    };
};