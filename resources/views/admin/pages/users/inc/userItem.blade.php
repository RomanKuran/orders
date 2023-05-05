<tr class="js-user-item" data-user-id="{{ $user->id }}">
    <td class="js-container-user-field" name="id">
        {{ $user->id }}
    </td>
    <td class="js-container-user-field" name="name">
        <input class="js-edit-user-field js-enabled-field user-field" type="text" name="name" value="{{ $user->name }}" disabled>
    </td>
    <td class="js-container-user-field" name="email">
        <input class="js-edit-user-field js-enabled-field user-field" type="text" name="email" value="{{ $user->email }}" disabled>
    </td>
    <td class="js-container-user-field" name="is_admin">
        <input class="js-edit-user-field-checkbox" type="checkbox" name="is_admin" value="{{ $user->is_admin }}" {{ $user->is_admin ? 'checked' : '' }}>
    </td>
    <td>
        <button class="js-delete-user">{{ __('Delete') }}</button>
    </td>
</tr>
