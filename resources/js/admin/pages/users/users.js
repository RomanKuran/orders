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

    // event delete user
    $(document).on('click', '.js-delete-user', function () {
        let field = $(this);
        let user_id = field.parents('tr').attr('data-user-id');

        deleteUser(user_id);
    });
    // ----

    // event create user
    $(document).on('click', '.js-create-user', function () {
        let name = $('.js-create-user-field[name="name"]').val();
        let email = $('.js-create-user-field[name="email"]').val();
        let is_admin = $('.js-create-user-field-checkbox[name="is_admin"]').is(':checked') ? 1 : 0;

        createUser(name, email, is_admin);
    });
    // ----
})

// function create user
function createUser(name, email, is_admin) {
    $.ajax({
        type: "post",
        url: route_create_user,
        dataType: 'json',
        data: {
            name: name,
            email: email,
            is_admin: is_admin,
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

// function delete user
function deleteUser(user_id) {
    $.ajax({
        type: "DELETE",
        url: route_delete_user,
        dataType: 'json',
        data: {
            user_id: user_id,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (result) {
            $(`tr[data-user-id=${user_id}]`).remove();
        },
        error: function (result) {
            alert(result.responseJSON.message);
        }
    });
}
// ----