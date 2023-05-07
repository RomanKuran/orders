<tr class="js-order-item" data-order-id="{{ $order->id }}">
    <td class="js-container-order-field" name="id">
        {{ $order->id }}
    </td>
    <td class="js-container-order-field" name="name">
        <input class="js-edit-order-field js-enabled-field order-field" type="text" name="name"
            value="{{ $order->name }}" disabled>
    </td>
    <td class="js-container-order-field" name="price">
        {{ $order->price }}
    </td>
    <td class="js-container-order-field" name="price">
        <input class="js-edit-order-field js-enabled-field order-field" type="text" name="status"
            value="{{ $order->order->status }}" disabled>
    </td>
    <td>
        <button class="js-delete-order">{{ __('Delete') }}</button>
    </td>
</tr>
