$(document).ready(function() {
    
                var contenido = $(this).attr('href');
			
                $("body").addClass("cargando");

                $('body').fadeOut(400);

                function leer() {
                        $('body').load(contenido);
                    }

                setTimeout(leer, 900);

                $('body').fadeIn( 1800, function() {

                    $("body").removeClass("cargando");

                });

            });