$(document).ready(function (e) {
    // enabled field
    $(document).on('dblclick', '.js-enabled-field', function (e) {
        $(this).removeAttr("disabled");
    });
    // ----
})