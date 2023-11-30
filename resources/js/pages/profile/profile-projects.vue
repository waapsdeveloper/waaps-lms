<template>
    <div class="d-flex flex-wrap flex-stack mb-6" >
										<!--begin::Heading-->
										<h3 class="fw-bold my-2" >My Projects
										<span class="fs-6 text-gray-400 fw-semibold ms-1">Active</span></h3>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-wrap my-2">
											<div class="me-4">
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
													<option value="Active" selected="selected">Active</option>
													<option value="Approved">In Progress</option>
													<option value="Declined">To Do</option>
													<option value="In Progress">Completed</option>
												</select>
												<!--end::Select-->
											</div>
											<a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">New Project</a>
										</div>
										<!--end::Actions-->
									</div>

                                    <!--begin::Row-->
									<div class="row g-6 g-xl-9">
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9" href="javascript:void(0)" @click="goto('/projectdetails/projectdetails')">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark"  >Fitnes App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Apr 15, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/disqus.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Leaf CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 	w-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">May 10, 2021</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$36,400.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 30% completed">
														<div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/figma-1.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Atica Banking</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Mar 14, 2021</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$605,100.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
														<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mad Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Cris Willson">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Garcie">
															<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/sentry-3.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Finance Dispatch</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Oct 25, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 60% completed">
														<div class="bg-info rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nich Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">N</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rob Otto">
															<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/xing-icon.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >9 Degree</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Mar 10, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 40% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
															<img alt="Pic" src="assets/media/avatars/300-20.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
															<img alt="Pic" src="assets/media/avatars/300-7.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/tvit.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >GoPro App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Dec 20, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
															<span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/aven.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Buldozer CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Sep 22, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 70% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
															<img alt="Pic" src="assets/media/avatars/300-14.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewProject">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/treva.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Overdue</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Aviasales App</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Mar 10, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 10% completed">
														<div class="bg-danger rounded h-4px" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-xl-4">
											<!--begin::Card-->
											<a  class="card border-hover-primary" @click="navigateToViewCampaign">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->
													<div class="card-title m-0">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px w-50px bg-light">
															<img src="assets/media/svg/brand-logos/kanba.svg" alt="image" class="p-3" />
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-success fw-bold me-auto px-4 py-3">Completed</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bold text-dark" >Oppo CRM</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">Sep 22, 2022</div>
															<div class="fw-semibold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
															<div class="fw-semibold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 100% completed">
														<div class="bg-success rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nick Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Sean Paul">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--begin::User-->
														<!--begin::User-->
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Collin">
															<span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
														</div>
														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
</template>

<script>

export default {
    name: 'profile-projects',
    mounted() {

    },
	methods: {
    navigateToprojectdetails() {
      // Use Vue Router to navigate to the 'viewproject' route
      this.$router.push({ name: 'projectdetails' }); // Replace 'name' with the name of your route
    }
  }



}
</script>
