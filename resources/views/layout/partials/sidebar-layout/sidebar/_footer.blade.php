<!--begin::Footer-->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
	<a class="button-ajax btn btn-flex flex-center btn-custom overflow-hidden text-nowrap px-0 h-40px w-100" href="#" data-action="{{ route('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true" style="background-color: var(--bs-danger); color: #FFF">
		<span class="btn-label">Sign Out</span>{!! getIcon('lock-3', 'btn-icon fs-2 m-0 text-light') !!}
	</a>
</div>
<!--end::Footer-->