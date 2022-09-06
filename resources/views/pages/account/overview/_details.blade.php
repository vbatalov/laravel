<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Детальная информация') }}</h3>
        </div>
        <!--end::Card title-->

        <!--begin::Action-->
        <a href="{{ theme()->getPageUrl('account/settings') }}" class="btn btn-primary align-self-center">{{ __('Редактировать') }}</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('Имя Фамилия') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{ auth()->user()->name }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('Компания') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold fs-6">
                    @isset($info->company)
                        {{$info->company }}
                    @endisset
                </span>
                @if($info->verified_company == true)
                    <span class="badge badge-success">{{ __('Подтвержден') }}</span>
                @else <span class="badge badge-danger">{{ __('Не подтвержден') }}</span>
                @endif
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">
                {{ __('Контактный телефон') }}
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Указывайте настоящий телефон"></i>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8 d-flex align-items-center">
               @if(($info->phone) != null)
                    <span class="fw-bolder fs-6 me-2">{{ $info->phone }}</span>
                @else <span class="fw fs-6 me-2">Контактный телефон не указан</span>

                @endif


                @if($info->verified_phone == true)
                    <span class="badge badge-success">{{ __('Подтвержден') }}</span>
                    @else
                    @isset($info->phone)
                    <span class="badge badge-danger">{{ __('Не подтвержден') }}</span>
                    @endisset
                @endif
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('Веб сайт') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <a href="#" class="fw-bold fs-6 text-dark text-hover-primary">{{ $info->website }}</a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">
                {{ __('Страна') }}
                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Страна компании"></i>
            </label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">
                    {{ $info->country ? collect(\App\Core\Data::getCountriesList())->get($info->country)['name'] ?? '' : '-' }}
                </span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{ __('Доступный метод связи') }}</label>
            <!--end::Label-->

            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">
                    {{ implode(', ', array_map('ucwords', array_keys(array_filter($info->communication ?? []) ?? []))) }}
                </span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
