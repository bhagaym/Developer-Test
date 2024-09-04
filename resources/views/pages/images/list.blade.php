<x-default-layout>

    @section('title')
    Images
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('image') }}
    @endsection

    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" id="mySearchInput" class="form-control form-control-solid w-250px ps-13" placeholder="Search images" />
                </div>
            </div>

            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_image">
                        {!! getIcon('plus', 'fs-2', '', 'i') !!}
                        Add Image
                    </button>
                </div>

                @livewire('image.add-image-modal')
            </div>
        </div>

        @livewire('image.image-table')
    </div>

    @push('scripts')
    <script>
        // Initialize KTMenu
        KTMenu.init();
        
        document.getElementById('mySearchInput').addEventListener('keyup', function() {
            Livewire.dispatch('searchImage', { searchValue: this.value});
        });

        document.addEventListener('livewire:init', function() {
            Livewire.on('success', function() {
                $('#kt_modal_add_image').modal('hide');
            });
        });
        $('#kt_modal_add_image').on('hidden.bs.modal', function() {
            Livewire.dispatch('reset_form');
        });


        // Add click event listener to delete buttons
        document.querySelectorAll('[data-kt-action="delete_row"]').forEach(function (element) {
            element.addEventListener('click', function () {
                Swal.fire({
                    text: 'Are you sure you want to remove?',
                    icon: 'warning',
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Of course!',
                    cancelButtonText: 'No, Cancel it!',
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-secondary',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('delete_image', [this.getAttribute('data-kt-image-id')]);
                    }
                });
            });
        });

        // Add click event listener to update buttons
        document.querySelectorAll('[data-kt-action="update_row"]').forEach(function (element) {
            element.addEventListener('click', function () {
                Livewire.dispatch('update_image', [this.getAttribute('data-kt-image-id')]);
            });
        });
    </script>
    @endpush

</x-default-layout>