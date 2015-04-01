/*
  Created on : 25-mar-2015
  Author     : Hideki
 */

$(document).ready( function() {
    $('#isla').on('change',buscarDatos);
});

function buscarDatos(e){
    $.getJSON('api/townships/'+$('#isla').val(),{},function(r){
        var soptions = "<option value='' disabled selected>Comunidad</option>";
        $.each(r,function(i,tupla){
            soptions += "<option value='"+i+"'>"+tupla+"</option>";
        });
        $('#comunidad').empty().append(soptions).prop('disabled',false);
    });
}
