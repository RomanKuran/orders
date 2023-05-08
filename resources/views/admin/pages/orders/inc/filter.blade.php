<div>
    <b>Filter by status:</b>
    <button>
        <a class="full-size" href="{{ route('admin.orders', ['userId' => $userId]) }}">{{ __('All') }}</a>
    </button>
    <button>
        <a class="full-size"
            href="{{ route('admin.orders', ['userId' => $userId, 'status' => 'created']) }}">{{ __('Created') }}</a>
    </button>
    <button>
        <a class="full-size"
            href="{{ route('admin.orders', ['userId' => $userId, 'status' => 'inProgress']) }}">{{ __('InProgress') }}</a>
    </button>
    <button>
        <a class="full-size"
            href="{{ route('admin.orders', ['userId' => $userId, 'status' => 'done']) }}">{{ __('Done') }}</a>
    </button>
</div>
