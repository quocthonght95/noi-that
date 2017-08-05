<div id="wrapper">
	<div id="layout-static">
		<div class="static-sidebar-wrapper sidebar-default">
			<div class="static-sidebar">
				<div class="sidebar">
					<div class="widget stay-on-collapse">
						<div class="widget-body welcome-box tabular">
							<div class="tabular-row">
								<div class="tabular-cell welcome-avatar">
									<a href="#"><img src="assets/demo/avatar/avatar_06.png" class="avatar"></a>
								</div>
								<div class="tabular-cell welcome-options">
									<span class="welcome-text">Welcome,</span>
									<a href="#" class="name">{{$userlogin->email}}</a>
								</div>
							</div>
						</div>
					</div>
					<div class="widget stay-on-collapse" id="widget-sidebar">
						<span class="widget-heading">Explore</span>
						<nav role="navigation" class="widget-body">
							<ul class="acc-menu">
								<li><a href="index-2.html"><i class="fa fa-home"></i><span>Dashboard</span><span class="badge badge-dark">1</span></a></li>
								<li><a href="javascript:;"><i class="fa fa-columns"></i><span>Manager Category</span><span class="badge badge-dark">23</span></a>
									<ul class="acc-menu">
										<li><a href="{{ route('admin.category.getCreate') }}">Add</a></li>
										<li><a href="{{ route('admin.category.show') }}">Show</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="widget stay-on-collapse">
						<div class="widget-heading">Functional Apps</div>
						<nav class="widget-body">
							<ul class="acc-menu">
								<li><a href="app-inbox.html"><i class="fa fa-inbox"></i><span>Inbox</span><span class="badge badge-success">3</span></a></li>
							</ul>
						</nav>
					</div>
					<div class="widget stay-on-collapse">
						<div class="widget-heading">Templates</div>
						<nav class="widget-body">
							<ul class="acc-menu">
								<li><a href="javascript:;"><i class="fa fa-coffee"></i><span>Blog</span></a>
									<ul class="acc-menu">
										<li><a href="app-blog-dashboard.html">Dashboard</a></li>
									</ul>
								</li>
								<li><a href="javascript:;"><i class="fa fa-shopping-cart"></i><span>eCommerce</span></a>
							<ul class="acc-menu">
								<li><a href="app-ecommerce-dashboard.html">Dashboard</a></li>
							</ul>
					</li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>