<a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    Actions
    <i class="ki-duotone ki-down fs-5 ms-1"></i>
</a>
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-image-id="{{ $image->id }}" data-bs-toggle="modal" data-bs-target="#kt_modal_add_image" data-kt-action="update_row">
            {!! getIcon('notepad-edit', 'fs-2 me-3') !!} Edit
        </a>
    </div>
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3 text-danger" data-kt-image-id="{{ $image->id }}" data-kt-action="delete_row">
            {!! getIcon('trash', 'fs-2 me-3 text-danger') !!} Delete
        </a>
    </div>
</div>
<!--end::Menu-->