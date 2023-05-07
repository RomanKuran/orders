@extends('admin.layouts.app')

@push('scripts')
    @vite(['resources/js/admin/pages/orders/orders.js'])

    <script>
        let route_edit_order = "{{ route('admin.editOrder') }}";
    </script>
@endpush

@section('content')
    <div class="container">
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

            @include('admin.pages.orders.inc.orderItemCreate')

            @foreach ($orders as $order)
                @include('admin.pages.orders.inc.orderItem')
            @endforeach
        </table>

        {!! $orders->links() !!}
    </div>
@endsection
