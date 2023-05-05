$(document).ready(function (e) {
    // event edit service
    $(document).on('focusout', '.js-edit-service-field', function () {
        let service = $(this);
        let service_id = service.parents('tr').attr('data-service-id');
        let field_name = service.attr('name');
        let value = service.val();
        service.attr('disabled', 'disabled');

        editService(service_id, field_name, value);
    });
    // ----
})

// function edit service
function editService(service_id, field_name, value) {
    $.ajax({
        type: "PUT",
        url: route_edit_service,
        dataType: 'json',
        data: {
            service_id: service_id,
            field_name: field_name,
            value: value,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {

        },
        error: function (result) {
            alert(result.responseJSON.message);
        }

    });
}
// ----
