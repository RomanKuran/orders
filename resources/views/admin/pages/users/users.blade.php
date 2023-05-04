@extends('admin.layouts.app')

@push('styles')
    @vite(['resources/sass/admin/pages/users/users.scss'])
@endpush

@push('scripts')
    @vite(['resources/js/admin/pages/users/users.js'])
    {{-- 
    let route_create_user = "{{ route('admin.createUser') }}"; --}}
    <script>
        let route_edit_user = "{{ route('admin.editUser') }}";
        let route_delete_user = "{{ route('admin.deleteUser') }}";
    </script>
@endpush

@section('content')
    <div class="container">
        <b>To edit a user - double click on the field, edit and click outside the field!!!!!!</b>
        <table class="js-users-table table table-striped">
            <thead class="thead-dark">
                <th scope="col">
                    {{ __('id') }}
                </th>
                <th scope="col">
                    {{ __('name') }}
                </th>
                <th scope="col">
                    {{ __('email') }}
                </th>
                <th scope="col">
                    {{ __('is_admin') }}
                </th>
            </thead>

            @include('admin.pages.users.inc.userItemExample')

            @include('admin.pages.users.inc.userItemCreate')

            @foreach ($users as $user)
                @include('admin.pages.users.inc.userItem')
            @endforeach
        </table>

        {!! $users->links() !!}
    </div>
@endsection
