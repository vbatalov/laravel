<div class="card">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Финансы компании</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Доходы, расходы и налоговые выплаты</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
        @if (isset($fin))
            <!--begin::Table-->
                <table class="table align-middle gs-5 gy-5 table-hover">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="border-bottom border-gray-200">
                        <th class="w-125px">

                        </th>
                        <th class="min-w-125px">
                            <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Доходы</span>
                        </th>
                        <th class="min-w-125px">
                            <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Расходы</span>
                        </th>
                        <th class="min-w-125px">
                            <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Прибыль</span>
                        </th>
                        <th class="min-w-125px">
                            <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">Налоги</span>
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($fin as $key => $value)
                        <tr>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $key }}</a>
                            </td>
                            <td>
                                <span class="text-muted fw-bold text-hover-primary">{{ $value['income'] }}</span>
                            </td>
                            <td>
                                <span class="text-muted fw-bold text-hover-primary">{{ $value['outcome'] }}</span>
                            </td>
                            <td>
                                <span class="text-muted fw-bold text-hover-primary">{{ $value['profit'] }}</span>
                            </td>
                            <td>
                                <span class="text-muted fw-bold text-hover-primary">{{ $value['sum_tax'] }}</span>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
        @else
            <!--begin::Alert-->
                <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">

                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-5tx svg-icon-danger mb-5">Ошибка!</span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="text-center">
                        <!--begin::Title-->
                        <h1 class="fw-bold mb-5">Данные недоступны</h1>
                        <!--end::Title-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="mb-9 text-dark">
                            Это может быть связано с тем, что компания
                            <strong>не раскрывает доходы</strong>
                            или <strong>данные за налоговый период отсутствуют в открытом доступе</strong>.<br/><br/>

                            Пожалуйста, если Вы считаете что это внутренняя ошибка нашего сервиса,
                            <a href="#" class="fw-bold">Свяжитесь с нами</a> для получения информации.
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Alert-->
            @endif
        </div>
        <!--end::Table container-->
    </div>
    <!--end::Body-->
</div>
