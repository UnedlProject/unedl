$(".campos").hide();
$(document).ready(function(){
    $("#show").click(function(){
        $(".campos").animate({
            height: 'toggle'
        });
    });
});
$(".campos1").hide();
$(document).ready(function(){
    $("#show1").click(function(){
        $(".campos1").animate({
            height: 'toggle'
        });
    });
});
$(".campos2").hide();
$(document).ready(function(){
    $("#show2").click(function(){
        $(".campos2").animate({
            height: 'toggle'
        });
    });
});
document.getElementById('role').addEventListener('change', function(event){
    var codigo = document.querySelector('#code');
    if(event.target.value === 'Administrador'||event.target.value === 'Responsable de calculo') {
        codigo.style.display = 'block';
    } else {
        codigo.style.display = 'none';
    }

});
if($('#code').length < 0) {
    $('#code').style.display('block');
}