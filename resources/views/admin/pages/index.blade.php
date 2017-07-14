@extends('admin.partials.master')
@section('content')
<div class="static-content-wrapper">
	<div class="static-content">
		<div class="page-content">
			<div class="page-heading">
				<h1>Dashboard</h1>
				<div class="options">
					<div class="btn-toolbar">
						<a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
					</div>
				</div>
			</div>
	<li class="active"><a href="index.html">Home</a></li>

	</ol> -->
	<div class="container-fluid">


	<div id="panel-advancedoptions">
		<div class="row">
			<div class="col-md-3">
				<a class="info-tiles tiles-inverse has-footer" href="#">
					<div class="tiles-heading">
						<div class="pull-left">Orders</div>
						<div class="pull-right">
							<div id="tileorders" class="sparkline-block"></div>
						</div>
					</div>
					<div class="tiles-body">
						<div class="text-center">1,249</div>
					</div>
					<div class="tiles-footer">
						<div class="pull-left">manage orders</div>
						<div class="pull-right percent-change">+20.7%</div>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a class="info-tiles tiles-green has-footer" href="#">
					<div class="tiles-heading">
						<div class="pull-left">Revenues</div>
						<div class="pull-right">
							<div id="tilerevenues" class="sparkline-block"></div>
						</div>
					</div>
					<div class="tiles-body">
						<div class="text-center">$61,250</div>
					</div>
					<div class="tiles-footer">
						<div class="pull-left">go to accounts</div>
						<div class="pull-right percent-change">+17.2%</div>
					</div>
				</a>
			</div>
			<div class="col-md-3">
				<a class="info-tiles tiles-blue has-footer" href="#">
					<div class="tiles-heading">
						<div class="pull-left">Tickets</div>
						<div class="pull-right">
							<div id="tiletickets" class="sparkline-block"></div>
						</div>
					</div>
					<div class="tiles-body">
						<div class="text-center">1,398</div>
					</div>
					<div class="tiles-footer">
						<div class="pull-left">see all tickets</div>
						<div class="pull-right percent-change">+10.3%</div>
					</div>
				</a>
			</div>

			<div class="col-md-3">
				<a class="info-tiles tiles-midnightblue has-footer" href="#">
					<div class="tiles-heading">
						<div class="pull-left">Members</div>
						<div class="pull-right">
							<div id="tilemembers" class="sparkline-block"></div>
						</div>
					</div>
					<div class="tiles-body">
						<div class="text-center">7,112</div>
					</div>
					<div class="tiles-footer">
						<div class="pull-left">manage members</div>
						<div class="pull-right percent-change">-11.1%</div>
					</div>
				</a>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12 bs-grid">
				<div class="panel panel-default panel-btn-focused" id="p1" data-widget-editbutton="false">
					<div class="panel-heading">
						<h2>
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab-visitor" data-toggle="tab"><i class="fa fa-user visible-xs"></i><span class="hidden-xs">Visitor Stats</span></a></li>
								<li><a href="#tab-revenues" data-toggle="tab"><i class="fa fa-bar-chart-o visible-xs"></i><span class="hidden-xs">Revenues</span></a></li>
							</ul>
						</h2>
					</div>
					<div class="panel-colorbox" style="display: none">
						<ul class="list-unstyled list-inline panel-color-list">
							<li><span data-widget-setstyle="panel-default"></span></li>
							<li><span data-widget-setstyle="panel-inverse"></span></li>
							<li><span data-widget-setstyle="panel-primary"></span></li>
							<li><span data-widget-setstyle="panel-success"></span></li>
							<li><span data-widget-setstyle="panel-warning"></span></li>
							<li><span data-widget-setstyle="panel-danger"></span></li>
							<li><span data-widget-setstyle="panel-info"></span></li>
							<li><span data-widget-setstyle="panel-brown"></span></li>
							<li><span data-widget-setstyle="panel-indigo"></span></li>
							<li><span data-widget-setstyle="panel-orange"></span></li>
							<li><span data-widget-setstyle="panel-midnightblue"></span></li>
							<li><span data-widget-setstyle="panel-sky"></span></li>
							<li><span data-widget-setstyle="panel-magenta"></span></li>
							<li><span data-widget-setstyle="panel-purple"></span></li>
							<li><span data-widget-setstyle="panel-green"></span></li>
							<li><span data-widget-setstyle="panel-grape"></span></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="clearfix">
								<button class="btn btn-default pull-left" id="daterangepicker2">
									<i class="fa fa-calendar visible-xs"></i> 
									<span class="hidden-xs" style="text-transform: uppercase;"><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
								</button>

								<div class="btn-toolbar pull-right">
									<div class="btn-group">
										<a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download visible-xs"></i><span class="hidden-xs">Export as </span> <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Text File (*.txt)</a></li>
											<li><a href="#">Excel File (*.xlsx)</a></li>
											<li><a href="#">PDF File (*.pdf)</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div id="tab-visitor" class="tab-pane active">
								<div id="visitors-stats" style="height:250px;" class="demo-graph graph-1"></div>
							</div>
							<div id="tab-revenues" class="tab-pane">
								<div id="revenues-stats" style="height: 250px;" class="demo-graph graph-2"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 bs-grid">
				<div class="row">
					<div class="col-md-12 bs-grid">
						<div class="panel panel-default panel-btn-focused" id="p2">
							<div class="panel-heading">
								<h2>Population by country</h2>
							</div>
							<div class="panel-editbox" style="display: none">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="panel-colorbox" style="display: none">
								<ul class="list-unstyled list-inline panel-color-list">
									<li><span data-widget-setstyle="panel-default"></span></li>
									<li><span data-widget-setstyle="panel-inverse"></span></li>
									<li><span data-widget-setstyle="panel-primary"></span></li>
									<li><span data-widget-setstyle="panel-success"></span></li>
									<li><span data-widget-setstyle="panel-warning"></span></li>
									<li><span data-widget-setstyle="panel-danger"></span></li>
									<li><span data-widget-setstyle="panel-info"></span></li>
									<li><span data-widget-setstyle="panel-brown"></span></li>
									<li><span data-widget-setstyle="panel-indigo"></span></li>
									<li><span data-widget-setstyle="panel-orange"></span></li>
									<li><span data-widget-setstyle="panel-midnightblue"></span></li>
									<li><span data-widget-setstyle="panel-sky"></span></li>
									<li><span data-widget-setstyle="panel-magenta"></span></li>
									<li><span data-widget-setstyle="panel-purple"></span></li>
									<li><span data-widget-setstyle="panel-green"></span></li>
									<li><span data-widget-setstyle="panel-grape"></span></li>
								</ul>
							</div>
							<div class="panel-body bg-gray">
								<div class="map-world">
									<div class="row mb20">
										<div class="map col-md-12">
											<span>Alternative content for the map</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="areaLegend">
												<span>Alternative content for the legend</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="plotLegend">
												<span>Alternative content for the legend</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 bs-grid">
						<div class="panel panel-default panel-btn-focused demo-new-members" id="p3">
							<div class="panel-heading">
								<h2>New Members</h2>
							</div>
							<div class="panel-editbox" style="display: none">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="panel-colorbox" style="display: none">
								<ul class="list-unstyled list-inline panel-color-list">
									<li><span data-widget-setstyle="panel-default"></span></li>
									<li><span data-widget-setstyle="panel-inverse"></span></li>
									<li><span data-widget-setstyle="panel-primary"></span></li>
									<li><span data-widget-setstyle="panel-success"></span></li>
									<li><span data-widget-setstyle="panel-warning"></span></li>
									<li><span data-widget-setstyle="panel-danger"></span></li>
									<li><span data-widget-setstyle="panel-info"></span></li>
									<li><span data-widget-setstyle="panel-brown"></span></li>
									<li><span data-widget-setstyle="panel-indigo"></span></li>
									<li><span data-widget-setstyle="panel-orange"></span></li>
									<li><span data-widget-setstyle="panel-midnightblue"></span></li>
									<li><span data-widget-setstyle="panel-sky"></span></li>
									<li><span data-widget-setstyle="panel-magenta"></span></li>
									<li><span data-widget-setstyle="panel-purple"></span></li>
									<li><span data-widget-setstyle="panel-green"></span></li>
									<li><span data-widget-setstyle="panel-grape"></span></li>
								</ul>
							</div>
							<div class="panel-body panel-no-padding">
								<div class="tabel-responsive">
									<table class="table table-hover mb0">
										<thead>
											<tr>
												<th width="5" class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></th>
												<th width="25">Name</th>
												<th width="35" class="hidden-xs">Email</th>
												<th width="50"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Joesph Keitt</td>
												<td class="hidden-xs">joseph01@xyz.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Andrew Hall</td>
												<td class="hidden-xs">andrew01@xyz.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Rhett Hisle</td>
												<td class="hidden-xs">rhett88@abc.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Collin Bessette</td>
												<td class="hidden-xs">collb11@xyz.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Anderson Corrigan</td>
												<td class="hidden-xs">andy91@abc.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Archie Chavarria</td>
												<td class="hidden-xs">arch77@abc.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Dirk Fino</td>
												<td class="hidden-xs">dif03@xyz.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Ignacio Mcmaster</td>
												<td class="hidden-xs">andrew01@xyz.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Dana Adair</td>
												<td class="hidden-xs">dann4@abc.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<td class="vam"><div class="checkbox icheck"><input type="checkbox" value=""></div></td>
												<td>Lloyd Klass</td>
												<td class="hidden-xs">lklass1@abc.com</td>
												<td class="vam td-btn text-right">
													<div class="btn-group">
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-check"></i></a>
														<a href="#" class="btn btn-xs btn-default"><i class="fa fa-fw fa-times"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer p10 m0">
									<ul class="pagination pagination-sm m0 pull-right">
										<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
									</ul>
									<a href="#" class="btn btn-sm btn-default pull-left">Approve Selected</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 bs-grid">
						<div class="panel panel-default panel-btn-focused" id="p4">
							<div class="panel-heading">
								<h2>Calendar</h2>
								<div class="panel-ctrls">

								</div>
							</div>
							<div class="panel-editbox" style="display: none">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="panel-colorbox" style="display: none">
								<ul class="list-unstyled list-inline panel-color-list">
									<li><span data-widget-setstyle="panel-default"></span></li>
									<li><span data-widget-setstyle="panel-inverse"></span></li>
									<li><span data-widget-setstyle="panel-primary"></span></li>
									<li><span data-widget-setstyle="panel-success"></span></li>
									<li><span data-widget-setstyle="panel-warning"></span></li>
									<li><span data-widget-setstyle="panel-danger"></span></li>
									<li><span data-widget-setstyle="panel-info"></span></li>
									<li><span data-widget-setstyle="panel-brown"></span></li>
									<li><span data-widget-setstyle="panel-indigo"></span></li>
									<li><span data-widget-setstyle="panel-orange"></span></li>
									<li><span data-widget-setstyle="panel-midnightblue"></span></li>
									<li><span data-widget-setstyle="panel-sky"></span></li>
									<li><span data-widget-setstyle="panel-magenta"></span></li>
									<li><span data-widget-setstyle="panel-purple"></span></li>
									<li><span data-widget-setstyle="panel-green"></span></li>
									<li><span data-widget-setstyle="panel-grape"></span></li>
								</ul>
							</div>
							<div class="panel-body">
								<div id="calendar-drag"></div>
							</div>
						</div>
					</div>			
				</div>
			</div>
			<div class="col-md-6 bs-grid">
				<div class="row">
					<div class="col-md-12 bs-grid">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default panel-btn-focused" id="p5">
									<div class="panel-heading">
										<h2>Live Dynamic</h2>
										<div class="panel-ctrls">
											<input type="checkbox" class="js-switch-success switchery-xs" checked id="live-dynamic-switch" />
											<i class="separator"></i>
										</div>
									</div>
									<div class="panel-editbox" style="display: none">
										<div class="form-horizontal">
											<div class="form-group">
												<div class="col-sm-12">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="panel-colorbox" style="display: none">
										<ul class="list-unstyled list-inline panel-color-list">
											<li><span data-widget-setstyle="panel-default"></span></li>
											<li><span data-widget-setstyle="panel-inverse"></span></li>
											<li><span data-widget-setstyle="panel-primary"></span></li>
											<li><span data-widget-setstyle="panel-success"></span></li>
											<li><span data-widget-setstyle="panel-warning"></span></li>
											<li><span data-widget-setstyle="panel-danger"></span></li>
											<li><span data-widget-setstyle="panel-info"></span></li>
											<li><span data-widget-setstyle="panel-brown"></span></li>
											<li><span data-widget-setstyle="panel-indigo"></span></li>
											<li><span data-widget-setstyle="panel-orange"></span></li>
											<li><span data-widget-setstyle="panel-midnightblue"></span></li>
											<li><span data-widget-setstyle="panel-sky"></span></li>
											<li><span data-widget-setstyle="panel-magenta"></span></li>
											<li><span data-widget-setstyle="panel-purple"></span></li>
											<li><span data-widget-setstyle="panel-green"></span></li>
											<li><span data-widget-setstyle="panel-grape"></span></li>
										</ul>
									</div>
									<div class="panel-body">
										<div id="server-load" style="height: 192px;"></div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="info-tiles tiles-midnightblue">
									<div class="tiles-heading">
										Bandwidth
									</div>
									<div class="tiles-body">
										<div class="easypiechart" id="bandwidth" data-percent="42">
											<span class="percent"></span>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="info-tiles tiles-primary">
									<div class="tiles-heading">
										Server Load
									</div>
									<div class="tiles-body">
										<div class="easypiechart" id="serverload" data-percent="31">
											<span class="percent"></span>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="info-tiles tiles-grape">
									<div class="tiles-heading">
										RAM Usage
									</div>
									<div class="tiles-body">
										<div class="easypiechart" id="ramusage" data-percent="72">
											<span class="percent"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>		
					<div class="col-md-12 bs-grid">
						<div class="panel panel-default panel-btn-focused" id="p6">
							<div class="panel-heading">
								<h2>Todo List</h2>
							</div>
							<div class="panel-editbox" style="display: none">
								<div class="form-horizontal">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="panel-colorbox" style="display: none">
								<ul class="list-unstyled list-inline panel-color-list">
									<li><span data-widget-setstyle="panel-default"></span></li>
									<li><span data-widget-setstyle="panel-inverse"></span></li>
									<li><span data-widget-setstyle="panel-primary"></span></li>
									<li><span data-widget-setstyle="panel-success"></span></li>
									<li><span data-widget-setstyle="panel-warning"></span></li>
									<li><span data-widget-setstyle="panel-danger"></span></li>
									<li><span data-widget-setstyle="panel-info"></span></li>
									<li><span data-widget-setstyle="panel-brown"></span></li>
									<li><span data-widget-setstyle="panel-indigo"></span></li>
									<li><span data-widget-setstyle="panel-orange"></span></li>
									<li><span data-widget-setstyle="panel-midnightblue"></span></li>
									<li><span data-widget-setstyle="panel-sky"></span></li>
									<li><span data-widget-setstyle="panel-magenta"></span></li>
									<li><span data-widget-setstyle="panel-purple"></span></li>
									<li><span data-widget-setstyle="panel-green"></span></li>
									<li><span data-widget-setstyle="panel-grape"></span></li>
								</ul>
							</div>
							<div class="panel-body panel-no-padding panel-tasks">
								<h4 class="task-header">Pending Tasks</h4>
								<ul class="connectedSortable" id="sortable-tasks">
									<li class="item-warning">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox"></div>
										</span>
										<p>
											Send project demo files to client
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>
									<li class="item-orange">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox"></div>
										</span>
										<p>
											Sketch wireframes for new project and send it to client as soon as possible
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>
									<li class="">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox"></div>
										</span>
										<p>
											Buy some milk
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>
									<li class="">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox"></div>
										</span>
										<p>
											Prepare documentation for completed project
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>
									<li class="item-success">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox"></div>
										</span>
										<p>
											Meeting with the development team
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>

								</ul>
								<h4 class="task-header"><i class="fa fa-check"></i> Completed Tasks</h4>
								<ul class="task-completed connectedSortable" id="completed-tasks">

									<li class="item-primary">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox" checked></div>
											<span class="drag-image"></span>
										</span>
										<p>
											Assign tasks to designers
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>
									<li class="">
										<span class="drag-handle"> 
											<div class="checkbox-inline icheck"><input type="checkbox" checked></div>
											<span class="drag-image"></span>
										</span>
										<p>
											Set up a meeting with new client
										</p>
										<a href="#" class="btn btn-xs btn-default task-options"><i class="fa fa-pencil"></i></a>
									</li>

								</ul>
								<div class="tasks-footer clearfix">
									<a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> <span class="hidden-xs">New</span></a>
									<a href="#" class="btn btn-sm btn-default"><i class="fa fa-check"></i> <span class="hidden-xs">Mark All Done</span></a>
									<a href="app-todo.html" class="btn-link btn-sm pull-right" style="padding-right: 0">Go to todo page</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div> <!-- .container-fluid -->
	</div> <!-- #page-content -->
</div>

@endsection