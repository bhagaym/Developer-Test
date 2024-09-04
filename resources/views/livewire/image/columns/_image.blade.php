<div class="symbol symbol-100px">
    @if($image->file_path)
    <div class="symbol-label">
        <img src="{{ asset('storage/' . $image->file_path) }}" class="w-100 h-100 rounded-3 object-fit-cover" />
    </div>
    @else
    <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', $image->name) }}">
        {{ substr($image->name, 0, 1) }}
    </div>
    @endif
</div>