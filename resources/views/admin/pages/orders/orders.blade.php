@extends('admin.layouts.app')

@push('scripts')
    @vite(['resources/js/admin/pages/orders/orders.js'])

    <script>
        let route_edit_order = "{{ route('admin.editOrder') }}";
        let route_delete_order = "{{ route('admin.deleteOrder') }}";
        let route_create_order = "{{ route('admin.createOrder') }}";
    </script>
@endpush

@section('content')
    <div class="container">
        @include('admin.pages.orders.inc.orderItemCreate')
        <b>To edit a order - double click on the field, edit and click outside the field!!!!!!</b>
        <table class="js-orders-table table table-striped">
            <thead class="thead-dark">
                <th scope="col">
                    {{ __('id') }}
                </th>
                <th scope="col">
                    {{ __('name') }}
                </th>
                <th scope="col">
                    {{ __('price') }}
                </th>
                <th scope="col">
                    {{ __('status') }}
                </th>
            </thead>

            @foreach ($orders as $order)
                @include('admin.pages.orders.inc.orderItem')
            @endforeach
        </table>

        {!! $orders->links() !!}
    </div>
@endsection
