@extends('admin.layouts.app')

@push('styles')
    @vite(['resources/sass/admin/pages/users/users.scss'])
@endpush

@section('content')
    <div class="container">
        <b>To edit a user - double click on the field, edit and click outside the field!!!!!!</b>
        <table class="js-users-table">
            <thead>
                <th>
                    {{ __('id') }}
                </th>
                <th>
                    {{ __('name') }}
                </th>
                <th>
                    {{ __('email') }}
                </th>
                <th>
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
