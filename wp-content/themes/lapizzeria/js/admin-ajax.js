$ = jQuery.noConflict();

$(document).ready(function(){
   //Obtener la URL de admin-ajax.php
   //console.log(url_eliminar.ajaxurl); 
   $('.borrar_registro').on('click',function(e){
       e.preventDefault();
       var id = $(this).attr('data-reservaciones');
       console.log(id); 
   });
});