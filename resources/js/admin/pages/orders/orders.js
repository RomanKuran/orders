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
})

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
