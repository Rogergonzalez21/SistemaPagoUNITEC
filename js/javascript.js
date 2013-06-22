// 
//	jQuery Validate example script
//
//	Prepared by David Cochran
//	
//	Free for your use -- No warranties, no guarantees!
//
$(document).ready(function () {

    // Validate
    // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
    // http://docs.jquery.com/Plugins/Validation/
    // http://docs.jquery.com/Plugins/Validation/validate#toptions

    $('#data-form').validate({
        rules: {
            numero_tarjeta: {
                required: true,
                minlength: 16,
                maxlength: 16,
                digits: true
            },
            numero_transferencia: {
                required: true,
                digits: true,
                minlength: 4,
            },
            nombre_tarjeta: {
                required: true,
                minlength: 2
            },
            cedula_tarjeta: {
                required: true,
                digits: true,
                maxlength: 8,
                minlength: 8
            },
            codigo_tarjeta_credito: {
                required: true,
                digits: true,
                minlength: 3,
                maxlength: 3
            },
            codigo_tarjeta_debito: {
                required: true,
                digits: true,
                minlength: 4,
                maxlength: 4
            },
        },
        highlight: function (label) {
            $(label).closest('.control-group').addClass('error');
        },
        success: function (label) {
            label
                .text('Campo correcto').addClass('valid')
                .closest('.control-group').addClass('success');
        }
    });

}); // end document.ready