<template>
    <div class="d-flex flex-wrap flex-stack pb-7">
										<!--begin::Title-->
										<div class="d-flex flex-wrap align-items-center my-1">
											<h3 class="fw-bold me-5 my-1">Users (38)</h3>
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-3 position-absolute ms-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Title-->
										<!--begin::Controls-->
										<div class="d-flex flex-wrap my-1">
											<!--begin::Tab nav-->
											<ul class="nav nav-pills me-6 mb-2 mb-sm-0">
												<li class="nav-item m-0">
													<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
												</li>
												<li class="nav-item m-0">
													<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
																<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
												</li>
											</ul>
											<!--end::Tab nav-->
											<!--begin::Actions-->
											<div class="d-flex my-0">
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm border-body bg-body w-150px me-5">
													<option value="1">Recently Updated</option>
													<option value="2">Last Month</option>
													<option value="3">Last Quarter</option>
													<option value="4">Last Year</option>
												</select>
												<!--end::Select-->
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-sm border-body bg-body w-100px">
													<option value="1">Excel</option>
													<option value="1">PDF</option>
													<option value="2">Print</option>
												</select>
												<!--end::Select-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Controls-->
									</div>
  <div class="row g-6 g-xl-9">
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-2.jpg" alt="image" />
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Karina Clark</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Bean</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Developer at Loop Inc</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-1.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Alan Johnson</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Web Designer at Nextop Ltd.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-14.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Marketing Analytic at Avito Ltd.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-6.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Wild</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Art Director at Seal Inc.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">System Arcitect at Wolto Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Peter Marcus</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Accountant at Numbers Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-12.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Benjamin Jacob</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-400 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-400">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-400">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-400">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
											</div>
</template>

<script>

export default{
    name: 'project-detail-user',
    mounted(){
      
    }



}
</script>