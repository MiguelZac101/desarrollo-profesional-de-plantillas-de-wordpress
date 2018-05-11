var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('mapa'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}

$ = jQuery.noConflict();

$(document).ready(function () {
    $('.mobile-menu a').on('click', function () {
        $('nav.menu-sitio').toggle('slow');
    });

    var breakpoint = 768;

    $(window).resize(function () {
        if ($(document).width() >= breakpoint) {
            $('nav.menu-sitio').show();
        } else {
            $('nav.menu-sitio').hide();
        }
    });
    
    //Ajustar mapa
    var mapa = $('#mapa');
    if(mapa.length > 0){
        if($(document).width()>=breakpoint){
            ajustarMapa(0);
        }else{
            ajustarMapa(300);
        }
    }
    $(window).resize(function () {
        if($(document).width()>=breakpoint){
            ajustarMapa(0);
        }else{
            ajustarMapa(300);
        }
    });

    //FluidBox
    jQuery('.gallery a').each(function () {
        jQuery(this).attr({'data-fluidbox': ''});
    });
    if (jQuery('[data-fluidbox]').length > 0) {
        jQuery('[data-fluidbox]').fluidbox();
    }

});

function ajustarMapa(altura){
    if(altura==0){
        var ubicacionSection = $('.ubicacion-reservacion');
        var ubicacionAltura = ubicacionSection.height();
        altura = ubicacionAltura;        
    }
    
    $('#mapa').css({'height': altura});
    
}