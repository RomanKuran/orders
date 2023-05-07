<tr class="js-order-item" data-order-id="{{ $order->id }}">
    <td class="js-container-order-field" name="id">
        {{ $order->id }}
    </td>
    <td class="js-container-order-field" name="name">
        {{ $order->name }}
    </td>
    <td class="js-container-order-field" name="price">
        {{ $order->price }}
    </td>
    <td class="js-container-order-field" name="price">
        <select class="js-edit-order-field" name="status">
            @foreach ($statuses as $status)
                @if ($order->order->status == $status)
                    <option value="{{ $status }}" selected>{{ $status }}</option>
                @else
                    <option value="{{ $status }}">{{ $status }}</option>
                @endif
            @endforeach
        </select>
    </td>
    <td>
        <button class="js-delete-order">{{ __('Delete') }}</button>
    </td>
</tr>
