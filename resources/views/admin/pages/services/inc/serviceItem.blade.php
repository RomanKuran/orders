<tr class="js-service-item" data-service-id="{{ $service->id }}">
    <td class="js-container-service-field" name="id">
        {{ $service->id }}
    </td>
    <td class="js-container-service-field" name="name">
        <input class="js-edit-service-field service-field" type="text" name="name" value="{{ $service->name }}"
            disabled>
    </td>
    <td class="js-container-service-field" name="email">
        <input class="js-edit-service-field service-field" type="number" name="email" value="{{ $service->price }}"
            disabled>
    </td>
    <td>
        <button class="js-delete-service">{{ __('Delete') }}</button>
    </td>
</tr>
