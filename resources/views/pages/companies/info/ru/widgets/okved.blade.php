<div class="card mb-10 ">
    <!--begin::Header-->
    <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
            <span class="fw-bold mb-2 text-dark">Виды деятеьности (ОКВЭД)</span>
            <span class="text-muted fw-semibold fs-7">Общероссийский классификатор видов экономической деятельности</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Timeline-->
        <div class="timeline-label">
            <!--begin::Item-->
            @if(isset($okved_main))


                @php
                    $atr = $okved_main['@attributes'];
                    $main_name = $atr['НаимОКВЭД'];
                    $main_code = $atr['КодОКВЭД'];
                @endphp

                <div class="timeline-item">
                    <!--begin::Label-->
                    <div class="timeline-label fw-bold text-gray-800 fs-6">{{ $main_code }}</div>
                    <!--end::Label-->
                    <!--begin::Badge-->
                    <div class="timeline-badge pulse">
                        <i class="fa fa-genderless text-warning fs-1"></i>
                    </div>
                    <!--end::Badge-->
                    <!--begin::Text-->
                    <div class="fw-mormal timeline-content text-muted ps-3">{{ $main_name }}</div>
                    <!--end::Text-->
                </div>
        <!--end::Item-->
            @endif
        </div>
        <!--end::Timeline-->
    </div>
    <!--end: Card Body-->
</div>
