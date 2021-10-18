$(document).ready(function () {
    $(".input-bike-button").prop('disabled', true);

    $(".input-bike").on("keypress", function (e) {
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((e.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $(".input-bike").on("keyup", function (e) {
        if ($(this).val() >= 1500) {
            $("#valorBike").val($(this).val());
            $(".input-bike-button").prop('disabled', false);
            $(".input-bike-button").addClass("input-bike-button-enabled");
        } else {
            $(".input-bike-button").prop('disabled', true);
            $(".input-bike-button").removeClass("input-bike-button-enabled");
        }
    });

    $('input[type=radio][name=exampleRadios]').change(function () {
        if (this.value === 'cartao') {
            $(".select-parcelas").removeClass("d-none");
        } else if (this.value === 'boleto') {
            $(".select-parcelas").addClass("d-none");
        }
    });
});
