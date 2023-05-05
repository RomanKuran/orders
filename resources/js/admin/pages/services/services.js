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

    // event delete service
    $(document).on('click', '.js-delete-service', function () {
        let field = $(this);
        let service_id = field.parents('tr').attr('data-service-id');

        deleteService(service_id);
    });
    // ----

    // event create service
    $(document).on('click', '.js-create-service', function () {
        let name = $('.js-create-service-field[name="name"]').val();
        let price = $('.js-create-service-field[name="price"]').val();

        createService(name, price);
    });
    // ----
})

// function create service
function createService(name, price) {
    $.ajax({
        type: "post",
        url: route_create_service,
        dataType: 'json',
        data: {
            name: name,
            price: price,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            location.reload();
        },
        error: function (result) {
            alert(result.responseJSON.message);
        }
    });
}
// ----

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

// function delete service
function deleteService(service_id) {
    $.ajax({
        type: "DELETE",
        url: route_delete_service,
        dataType: 'json',
        data: {
            service_id: service_id,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            $(`tr[data-service-id=${service_id}]`).remove();
        },
        error: function (result) {
            alert(result.responseJSON.message);
        }
    });
}
// ----