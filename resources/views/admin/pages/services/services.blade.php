@extends('admin.layouts.app')

@push('scripts')
    @vite(['resources/js/admin/pages/services/services.js'])

    <script>
        let route_edit_service = "{{ route('admin.editService') }}";
        let route_delete_service = "{{ route('admin.deleteService') }}";

    </script>
@endpush

@section('content')
    <div class="container">
        <b>To edit a services - double click on the field, edit and click outside the field!!!!!!</b>
        <table class="js-services-table table table-striped">
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
            </thead>

            @include('admin.pages.services.inc.serviceItemCreate')

            @foreach ($services as $service)
                @include('admin.pages.services.inc.serviceItem')
            @endforeach
        </table>

        {!! $services->links() !!}
    </div>
@endsection
