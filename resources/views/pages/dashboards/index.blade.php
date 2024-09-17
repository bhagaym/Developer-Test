<x-default-layout>

    @section('title')
    Dashboard
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-12 col-lg-12 col-xl-12 mb-md-5 mb-xl-10">
            <div class="card card-flush h-md-100">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                            <span class="me-2">
                                Welcome To
                                <br>
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="javascript:;" class="text-primary opacity-75-hover">{{ env('APP_NAME') }}</a>
                                    <!--begin::Separator-->
                                    <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-primary border-bottom w-100"></span>
                                    <!--end::Separator-->
                                </span>
                            </span>
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--begin::Wrapper-->
                    <!--begin::Illustration-->
                    <img class="mx-auto h-150px h-lg-200px theme-light-show" src="{{ url('assets/media/illustrations/dozzy-1/2.png') }}" alt="">
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Col-->

    </div>
    <!--end::Row-->


</x-default-layout>