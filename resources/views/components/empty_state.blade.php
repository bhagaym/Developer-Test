<div class="empty-state text-center my-5">
    <img src="{{ asset('assets/media/illustrations/empty_state.svg') }}" alt="No Data" class="mb-4" style="max-width: 200px;">
    <h3 class="text-muted">{{ (isset($message) ? $message : 'Sorry, no data available.') }}</h3>
    @if($slot->isNotEmpty())
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</div>