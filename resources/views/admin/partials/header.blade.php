<header id="topnav" class="navbar navbar-inverse navbar-fixed-top clearfix" role="banner">
	<a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
	<a class="navbar-brand" href="{{ route('admin.index') }}">Avalon</a>
	<div class="yamm navbar-left navbar-collapse collapse">
	</div>
	<ul class="nav navbar-nav toolbar pull-right">
		<li class="dropdown">
			<a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">&nbsp;</a>
		</li>

		<li class="toolbar-icon-bg demo-headerdrop-hidden">
			<a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></i></a>
		</li>


		<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-tasks"></i></span><span class="badge badge-warning">7</span></a>

		</li>


		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-alizarin">5</span></a>

		</li>

		<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span><span class="badge badge-info">1</span></a>
		</li>

		<li class="dropdown toolbar-icon-bg demo-search-hidden mr5">
			<a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>

			<div class="dropdown-menu arrow search dropdown-menu-form">
				<div class="dd-header">
					<span>Search</span>
					<span><a href="#">Advanced search</a></span>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="">

					<span class="input-group-btn">

						<a class="btn btn-primary" href="#">Search</a>
					</span>
				</div>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<span class="hidden-xs">@if(Sentinel::check()) {{$userlogin->email}} @endif</span>
			</a>
			<ul class="dropdown-menu userinfo">
				<li><a href="#"><span class="pull-left">Edit Profile</span> <i class="pull-right fa fa-pencil"></i></a></li>
				<li><a href="#"><span class="pull-left">Account Settings</span> <i class="pull-right fa fa-cogs"></i></a></li>
				<li><a href="#"><span class="pull-left">Help</span> <i class="pull-right fa fa-question-circle"></i></a></li>
				<li class="divider"></li>
				<li><a href="#"><span class="pull-left">Earnings</span> <i class="pull-right fa fa-money"></i></a></li>
				<li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-file-o"></i></a></li>
				<li><a href="#"><span class="pull-left">Withdrawals</span> <i class="pull-right fa fa-credit-card"></i></a></li>
				<li class="divider"></li>
				<li><a href="{{ route('admin.logout') }}"><span class="pull-left">Sign Out</span> <i class="pull-right fa fa-sign-out"></i></a>
				</li>
			</ul>
		</li>
	</ul>
</header>