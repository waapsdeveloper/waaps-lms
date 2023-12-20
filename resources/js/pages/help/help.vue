<template>
 <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Help Faq </h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">FAQ</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->

											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfa86a63fe1">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-dark fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfa86a63fe1" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>

									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::FAQ card-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-15">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-lg-row">
												<!--begin::Sidebar-->
												<div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 me-lg-20">
													<!--begin::Catigories-->
													<div class="mb-15">
														<h4 class="text-dark mb-7">Categories</h4>
														<!--begin::Menu-->
														<div class="menu menu-rounded menu-column menu-title-gray-700 menu-state-title-primary menu-active-bg-light-primary fw-semibold">
															<!--begin::Item-->
															<div class="menu-item mb-1">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3 active">Bootstrap Admin</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="menu-item mb-1">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3">Laravel App</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="menu-item mb-1">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3">Angular Dashbaord</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="menu-item mb-1">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3">VueJs Dashbaord</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="menu-item mb-1">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3">React Admin</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="menu-item">
																<!--begin::Link-->
																<a href="#" class="menu-link py-3">Bootstrap Theme</a>
																<!--end::Link-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Catigories-->
													<!--begin::Search blog-->

													<!--end::Search blog-->
													<!--begin::Recent posts-->

													<!--end::Recent posts-->
												</div>
												<!--end::Sidebar-->
												<!--begin::Content-->
												<div class="flex-lg-row-fluid">
													<!--begin::Extended content-->
													<div class="mb-13">
														<!--begin::Content-->
														<div class="mb-15">
															<!--begin::Title-->
															<h4 class="fs-2x text-gray-800 w-bolder mb-6">Frequesntly Asked Questions</h4>
															<!--end::Title-->
															<!--begin::Text-->
															<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
															<!--end::Text-->
														</div>
														<!--end::Content-->
														<!--begin::Item-->
														<div class="mb-15">
															<!--begin::Title-->
															<h3 class="text-gray-800 w-bolder mb-4">Buying Product</h3>
															<!--end::Title-->
															<!--begin::Accordion-->
															<!--begin::Section-->
															<div class="m-0">
																<!--begin::Heading-->
																<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_8_1">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_8_1" class="collapse show fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_8_2">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use this Admin Theme ?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_8_2" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_8_3">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_8_3" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_8_4">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_8_4" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--end::Accordion-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="mb-15">
															<!--begin::Title-->
															<h3 class="text-gray-800 w-bolder mb-4">Buying Product</h3>
															<!--end::Title-->
															<!--begin::Accordion-->
															<!--begin::Section-->
															<div class="m-0">
																<!--begin::Heading-->
																<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_9_1">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_9_1" class="collapse show fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_9_2">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use this this Admin Theme?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_9_2" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_9_3">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_9_3" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_9_4">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_9_4" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--end::Accordion-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="mb-0">
															<!--begin::Title-->
															<h3 class="text-gray-800 w-bolder mb-4">Installation</h3>
															<!--end::Title-->
															<!--begin::Accordion-->
															<!--begin::Section-->
															<div class="m-0">
																<!--begin::Heading-->
																<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_10_1">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What platforms are compatible?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_10_1" class="collapse show fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_10_2">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How many people can it support?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_10_2" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_10_3">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How long is the warrianty?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_10_3" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
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
																<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_10_4">
																	<!--begin::Icon-->
																	<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																		<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																		<span class="svg-icon toggle-off svg-icon-1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																				<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																				<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How fast is the installation?</h4>
																	<!--end::Title-->
																</div>
																<!--end::Heading-->
																<!--begin::Body-->
																<div id="kt_job_10_4" class="collapse fs-6 ms-1">
																	<!--begin::Text-->
																	<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																	<!--end::Text-->
																</div>
																<!--end::Content-->
															</div>
															<!--end::Section-->
															<!--end::Accordion-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Extended content-->
												</div>
												<!--end::Content-->
											</div>
											<!--end::Layout-->
											<!--begin::Card-->

											<!--end::Card-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::FAQ card-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->

						<!--end::Footer-->
					</div>
</template>

<script>
import Base from './../base.vue';

export default{
    extends: Base,
    name: 'help',
    mounted(){

    }



}
</script>
