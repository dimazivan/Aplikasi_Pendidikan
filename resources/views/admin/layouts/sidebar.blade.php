<div id="sidebar" class="navbar-collapse collapse">
	<ul class="nav nav-list">
		<li>
			<form target="#" method="GET" class="search-form">
				<span class="search-pan">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<input type="text" name="search" placeholder="Search ..." autocomplete="off" />
				</span>
			</form>
		</li>
		<li id="menu" class="active">
			<a href="/">
				<i class="fa fa-dashboard"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li id="menu">
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-archive"></i>
				<span>Data Master</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>
			<ul class="submenu">
				<li><a href="{{ route('user.index') }}">Data User</a></li>
			</ul>
		</li>
	</ul>

	<div id="sidebar-collapse" class="visible-lg">
		<i class="fa fa-angle-double-left"></i>
	</div>
</div>