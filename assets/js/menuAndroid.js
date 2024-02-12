$(document).ready(main);

var contador = 0;
var contador2 = 0;
function main(){
    $('#mostrarMenu').click(function(){
        contador = (contador + 1)%2
        if(contador == 1){
            $('#flotante').animate({
                left: '0'
            });
            
        } else {
            
            $('#flotante').animate({
                left: '-100%'                
            });
        }
    });
};