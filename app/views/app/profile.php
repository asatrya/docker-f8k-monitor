<div class="page-content">
	<!-- BEGIN PAGE HEADER-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				<b>Profil Pengguna</b>
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php echo base_url();?>">
					Beranda
					</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					Profil
				</li>
				<li class="pull-right">
					<div class="dashboard-date">
						<i class="fa fa-calendar"></i> <b><?php echo $this->general_conf->convert_date_id(date('D, j M Y'));?></b>
					</div>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row profile">
		<div class="col-md-12">
			<!--BEGIN TABS-->
			<div class="tabbable tabbable-custom tabbable-full-width">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab_1_1" data-toggle="tab">
						Profil Saya
						</a>
					</li>
					<li>
						<a href="#tab_1_2" data-toggle="tab">
						Ubah Password
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_1_1">
						<div class="row">
							<div class="col-md-3">
								<ul class="list-unstyled profile-nav">
									<li>
										<img src="assets/img/profile/profile-img.png" class="img-responsive" alt=""/>
									</li>
								</ul>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-8 profile-info">
										<h1>John Doe</h1>
										<p>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
										</p>
										<p>
											<a href="#">
											www.mywebsite.com
											</a>
										</p>
										<ul class="list-inline">
											<li>
												<i class="fa fa-map-marker"></i> Spain
											</li>
											<li>
												<i class="fa fa-calendar"></i> 18 Jan 1982
											</li>
											<li>
												<i class="fa fa-briefcase"></i> Design
											</li>
											<li>
												<i class="fa fa-star"></i> Top Seller
											</li>
											<li>
												<i class="fa fa-heart"></i> BASE Jumping
											</li>
										</ul>
									</div>
									<!--end col-md-8-->
									<div class="col-md-4">
										<div class="portlet sale-summary">
											<div class="portlet-title">
												<div class="caption">
													Sales Summary
												</div>
												<div class="tools">
													<a class="reload" href="javascript:;">
													</a>
												</div>
											</div>
											<div class="portlet-body">
												<ul class="list-unstyled">
													<li>
														<span class="sale-info">
															TODAY SOLD <i class="fa fa-img-up"></i>
														</span>
														<span class="sale-num">
															23
														</span>
													</li>
													<li>
														<span class="sale-info">
															WEEKLY SALES <i class="fa fa-img-down"></i>
														</span>
														<span class="sale-num">
															87
														</span>
													</li>
													<li>
														<span class="sale-info">
															TOTAL SOLD
														</span>
														<span class="sale-num">
															2377
														</span>
													</li>
													<li>
														<span class="sale-info">
															EARNS
														</span>
														<span class="sale-num">
															$37.990
														</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!--end col-md-4-->
								</div>
								<!--end row-->
								<div class="tabbable tabbable-custom tabbable-custom-profile">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_1_11" data-toggle="tab">
											Latest Customers
											</a>
										</li>
										<li>
											<a href="#tab_1_22" data-toggle="tab">
											Feeds
											</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1_11">
											<div class="portlet-body">
												<table class="table table-striped table-bordered table-advance table-hover">
													<thead>
														<tr>
															<th>
																<i class="fa fa-briefcase"></i> Company
															</th>
															<th class="hidden-xs">
																<i class="fa fa-question"></i> Descrition
															</th>
															<th>
																<i class="fa fa-bookmark"></i> Amount
															</th>
															<th>
															</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<a href="#">
																Pixel Ltd
																</a>
															</td>
															<td class="hidden-xs">
																Server hardware purchase
															</td>
															<td>
																52560.10$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House
																</a>
															</td>
															<td class="hidden-xs">
																Office furniture purchase
															</td>
															<td>
																5760.00$
																<span class="label label-warning label-sm">
																	Pending
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd
																</a>
															</td>
															<td class="hidden-xs">
																Company Anual Dinner Catering
															</td>
															<td>
																12400.00$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																WaterPure Ltd
																</a>
															</td>
															<td class="hidden-xs">
																Payment for Jan 2013
															</td>
															<td>
																610.50$
																<span class="label label-danger label-sm">
																	Overdue
																</span>
															</td>
															<td>
																<a class="btn default btn-xs red-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Pixel Ltd
																</a>
															</td>
															<td class="hidden-xs">
																Server hardware purchase
															</td>
															<td>
																52560.10$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs green-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																Smart House
																</a>
															</td>
															<td class="hidden-xs">
																Office furniture purchase
															</td>
															<td>
																5760.00$
																<span class="label label-warning label-sm">
																	Pending
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#">
																FoodMaster Ltd
																</a>
															</td>
															<td class="hidden-xs">
																Company Anual Dinner Catering
															</td>
															<td>
																12400.00$
																<span class="label label-success label-sm">
																	Paid
																</span>
															</td>
															<td>
																<a class="btn default btn-xs blue-stripe" href="#">
																View
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!--tab-pane-->
										<div class="tab-pane" id="tab_1_22">
											<div class="tab-pane active" id="tab_1_1_1">
												<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
													<ul class="feeds">
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			You have 4 pending tasks.
																			<span class="label label-danger label-sm">
																				Take action <i class="fa fa-share"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	Just now
																</div>
															</div>
														</li>
														<li>
															<a href="#">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New version v1.4 just lunched!
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	20 mins
																</div>
															</div>
															</a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			Database server #12 overloaded. Please fix the issue.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	24 mins
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	30 mins
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-success">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	40 mins
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-warning">
																			<i class="fa fa-plus"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New user registered.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	1.5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			Web server hardware needs to be upgraded.
																			<span class="label label-inverse label-sm">
																				Overdue
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	2 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	3 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-warning">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	18 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!--tab-pane-->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--tab_1_2-->
					<div class="tab-pane" id="tab_1_2">
						<div class="row profile-account">
							<div class="col-md-9">
									<div id="tab_3-3" class="tab-pane">
										<form action="#">
											<div class="form-group">
												<label class="control-label">Current Password</label>
												<input type="password" class="form-control"/>
											</div>
											<div class="form-group">
												<label class="control-label">New Password</label>
												<input type="password" class="form-control"/>
											</div>
											<div class="form-group">
												<label class="control-label">Re-type New Password</label>
												<input type="password" class="form-control"/>
											</div>
											<div class="margin-top-10">
												<a href="#" class="btn green">
												Change Password
												</a>
												<a href="#" class="btn default">
												Cancel
												</a>
											</div>
										</form>
									</div>
							</div>
							<!--end col-md-9-->
						</div>
					</div>
					<!--end tab-pane-->
				</div>
			</div>
			<!--END TABS-->
		</div>
	</div>
	<!-- END PAGE CONTENT-->
</div>
