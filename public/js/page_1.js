$(document).ready(function () {
    $('#btn-grid').click(function () {
        $('#grid-model').hide();
        $('#list-model').show();
    });
    $('#btn-list').click(function () {
        $("#list-model").hide();
        $("#grid-model").show();
    });
    var bol = 0;
    $("#btn-filter").click(function () {
        if (bol == 0) {
            $("#filter").css("display", "none");
            bol = 1;
        } else {
            $("#filter").css("display", "block");
            bol = 0;
        }
    });
});