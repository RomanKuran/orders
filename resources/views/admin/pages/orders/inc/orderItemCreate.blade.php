<div>
    <b>Create an order:</b>
    <select class="js-create-order" data-user-id="{{ $userId }}" name="status">
        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endforeach
    </select>
</div>
