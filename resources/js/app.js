$(document).ready(function() {

    $('#btn-avatar').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        console.log(form);
        action(form);
    });

    function action(form){
        var action = form.attr('action');
        var method = form.attr('method');

        var formdata = false;

        if (window.FormData) {
            formdata = new FormData(form[0]);
            formdata.append('avatar', $('#avatar')[0].files[0]);
        }
        var token = $('input[name=_token]').val();
        
        $.ajax({
            beforeSend: function() {
                alertify.success('Procesando Solicitud');
            },
            url: action,
            headers: { 'X-CSRF-TOKEN': token },
            type: method,
            data: formdata ? formdata : form.serialize(),
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,

            success: function(respuesta) {
                $.each(respuesta, function(name, value) {
                    alertify.success(value);
                    location.reload();
                });
            },

            error: function(jqXHR, estado, error) {
                $.each(jqXHR.responseJSON, function(indice, valor) {
                    alertify.error(valor);
                });
            },

            complete: function(jqXHR, estado) {
                alertify.success('Solicitud procesada!');
            },
        });
    }
});
