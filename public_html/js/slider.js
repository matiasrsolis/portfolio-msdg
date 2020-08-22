//almacenar slider en una variable
var slider = $('#slider');
//almacenar botones
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');

//mover la ultima imagen al primer lugar
$('#slider section:last').insertBefore('#slider section:first');

//mostrar la primera imagen con un margen de -100%
slider.css('margin-left', '-'+100+'%');

//para que los botones funcionen
function moverD() {
    slider.animate({
        marginLeft:'-'+200+'%'
    } ,700, function(){
        //mover al que quedo ahora en el primer lugar al ultimo para seguir con la animacion
        $('#slider section:first').insertAfter('#slider section:last');
        //el margen debe volver a ser de -100%
        slider.css('margin-left', '-'+100+'%');
    });
}

function moverI() {
    slider.animate({
        marginLeft:0
    } ,700, function(){
        //mover al que quedo ahora en el ultimo lugar al primero para seguir con la animacion
        $('#slider section:last').insertBefore('#slider section:first');
        //el margen debe volver a ser de -100%
        slider.css('margin-left', '-'+100+'%');
    });
}

//cuando apriete el boton siguiente se ejecuta la funcion moverD 
siguiente.on('click',function() {
    moverD();
});

//cuando apriete el boton anterior se ejecuta la funcion moverI 
anterior.on('click',function() {
    moverI();
});


//para que ejecute automaticamente:  https://www.youtube.com/watch?v=6LISZ6roKog&t=29s
