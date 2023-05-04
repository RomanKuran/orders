$(document).ready(function (e) {
    // enabled user field
    $(document).on('dblclick', '.js-edit-user-field', function (e) {
        $(this).removeAttr("disabled");
    });
    // ----

    // event edit user
    $(document).on('focusout', '.js-edit-user-field', function () {
        let user = $(this);
        let user_id = user.parents('tr').attr('data-user-id');
        let field_name = user.attr('name');
        let value = user.val();
        user.attr('disabled', 'disabled');

        editUser(user_id, field_name, value);
    });
    // ----

    // event is admin user
    $(document).on('change', '.js-edit-user-field-checkbox', function () {
        let field = $(this);
        let user_id = field.parents('tr').attr('data-user-id');
        let field_name = field.attr('name');
        let value = field.is(':checked') ? 1 : 0;
        editUser(user_id, field_name, value);
    });
    // ----
})

// function edit user
function editUser(user_id, field_name, value) {
    $.ajax({
        type: "PUT",
        url: route_edit_user,
        dataType: 'json',
        data: {
            user_id: user_id,
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