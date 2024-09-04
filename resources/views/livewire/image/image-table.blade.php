<div class="card-body py-4">
    @if (sizeof($images) == 0)
        @component('components.empty_state')
        @endcomponent
    @else
    
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-3">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-150px">Image</th>
                        <th>Name</th>
                        <th class="text-end min-w-150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td>
                                @include('livewire.image.columns._image', ['image' => $image])
                            </td>
                            <td>{{ $image->name }}</td>
                            <td class="text-end">
                                @include('livewire.image.columns._actions', ['image' => $image])
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    @endif

    {{ $images->links('layout.pagination') }}
</div>