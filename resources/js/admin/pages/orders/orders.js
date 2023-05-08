$(document).ready(function (e) {
    // event edit order
    $(document).on('change', '.js-edit-order-field', function () {
        let order = $(this);
        let order_id = order.parents('tr').attr('data-order-id');
        let field_name = order.attr('name');
        let value = order.val();

        editOrder(order_id, field_name, value);
    });
    // ----

    // event delete order
    $(document).on('click', '.js-delete-order', function () {
        let field = $(this);
        let order_id = field.parents('tr').attr('data-order-id');

        deleteOrder(order_id);
    });
    // ----

    // event create order
    $(document).on('change', '.js-create-order', function () {
        let service = $(this);
        let service_id = service.val();
        let user_id = service.attr('data-user-id');

        createOrder(service_id, user_id);
    });
    // ----


})

// function create order
function createOrder(service_id, user_id) {
    $.ajax({
        type: "post",
        url: route_create_order,
        dataType: 'json',
        data: {
            service_id: service_id,
            user_id: user_id,
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

// function edit order
function editOrder(order_id, field_name, value) {
    $.ajax({
        type: "PUT",
        url: route_edit_order,
        dataType: 'json',
        data: {
            order_id: order_id,
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

// function delete order
function deleteOrder(order_id) {
    $.ajax({
        type: "DELETE",
        url: route_delete_order,
        dataType: 'json',
        data: {
            order_id: order_id,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            $(`tr[data-order-id=${order_id}]`).remove();
        },
        error: function (result) {
            alert(result.responseJSON.message);
        }
    });
}
// ----