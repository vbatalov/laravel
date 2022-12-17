@if(isset($info))
    @foreach($info as $key => $value)
        <!--begin::Modal - Create App-->
        <div class="modal fade" id="about_{{ $key }}" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Информация о специалисте</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="p-10 d-flex flex-column flex-lg-row mb-17">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-0 me-lg-20">
                            <!--begin::Job-->
                            <div class="mb-17">
                                <!--begin::Description-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <h4 class="fs-1 text-gray-800 w-bolder mb-6">Описание</h4>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-5 text-gray-600 mb-2">{{ $value['full-text'] }}</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Description-->
                                <!--begin::Accordion-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1" aria-expanded="false">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Требования к работодателю</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_1" class="fs-6 ms-1 collapse" style="">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Доступ к ЕГАИС Лес</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Электронная подпись или подключение через удаленный рабочий стол</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_2">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Сроки выполнения и цена</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_2" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_3">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_3" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_4">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																		<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																		<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																	</svg>
																</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_1_4" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--end::Accordion-->

                            </div>
                            <!--end::Job-->

                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
                            <!--begin::Careers about-->
                            <div class="card bg-light">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Top-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <h2 class="fs-1 text-gray-800 w-bolder mb-6">О себе</h2>
                                        <!--end::Title-->
                                        <img class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded w-100 max-height-100 mb-6" src="../{{ $value['img'] }}">
                                        <!--begin::Text-->
                                        <p class="fw-semibold fs-6 text-gray-600">
                                            Меня зовут Валентина, мне 26 лет. Я занимаюсь ведением ВЭД у компаний на протяжении 10 лет.
                                        </p>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Item-->
                                    <div class="mb-8">
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 w-bolder mb-0">Сильные стороны</h4>
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <div class="my-2">
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center mb-3">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Section-->

                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Apply-->
                                    <a href="../../demo10/dist/pages/careers/apply.html" class="btn btn-sm btn-primary mt-5 col-12">Связаться сейчас</a>
                                    <!--end::Apply-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Careers about-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create App--
@endforeach
@endif

