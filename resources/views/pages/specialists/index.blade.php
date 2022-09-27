<x-base-layout>
    @include('pages.specialists._headerIndex')
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            @include('pages.specialists._listIndex')
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</x-base-layout>
