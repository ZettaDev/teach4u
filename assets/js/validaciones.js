$(document).ready(function(){
    $('#email').on('keyup',validarEmail);
    $('.localidadReg').hide();
    $('.infoReg').hide();
    $('.btnRegistro').hide();
});
function validarEmail () {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if((!emailReg.test($('#email').val()))||($('#email').val()== "" ))
        $('#email').addClass('uk-form-danger');

    else{
        $('#email').removeClass('uk-form-danger');
        $('#email').addClass('uk-form-success');
        $('#password').on('keyup',validarPassword);
    }
}
function validarPassword () {
    var expPass = /(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$/;
    if(!expPass.test($(password).val()))
        $('#password').addClass('uk-form-danger');

    else{
        $('#password').removeClass('uk-form-danger');
        $('#password').addClass('uk-form-success');
        $('#password2').on('keyup',validarPassword2);

    }
}

function validarPassword2 () {
    if($('#password').val()!=$('#password2').val())
        $('#password2').addClass('uk-form-danger');

    else{
        $('#password2').removeClass('uk-form-danger');
        $('#password2').addClass('uk-form-success');
        $('.localidadReg').show('slow');
        $('#comunidad').on('change',function () {
            $('.infoReg').show('slow');
        })
        $('#nombre').on('keyup',validarNombre);
    }

}

function validarNombre () {
    if(($('#nombre').val() == "")||($('#nombre').val().length <=3))
        $('#nombre').addClass('uk-form-danger');

    else{
        $('#nombre').removeClass('uk-form-danger');
        $('#nombre').addClass('uk-form-success');
        $('#apellido').on('keyup',validarNombre);
        $('#apellido').on('keyup',validarApellido);
    }

}
function validarApellido () {
    if(($('#apellido').val() == "")||($('#apellido').val().length <=3))
        $('#apellido').addClass('uk-form-danger');

    else{
        $('#apellido').removeClass('uk-form-danger');
        $('#apellido').addClass('uk-form-success');
        $('#telefono').on('keyup',validarTelefono);
    }

}
function validarTelefono () {
    var expTelefono = /^[0-9]{2,3}-? ?[0-9]{6,7}$/;
    if(!expTelefono.test($(telefono).val()))
        $('#telefono').addClass('uk-form-danger');

    else{
        $('#telefono').removeClass('uk-form-danger');
        $('#telefono').addClass('uk-form-success');
        $('#btnRegistro').show('slow');

    }

}
