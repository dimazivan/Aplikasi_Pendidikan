<div id="navbar" class="navbar">
	<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
		<span class="fa fa-bars"></span>
	</button>
	<a class="navbar-brand" href="{{ route('dashboard') }}">
		<small>
			<i class="fa fa-desktop"></i>
			{{ __('Dashboard') }}
		</small>
	</a>
	<ul class="nav flaty-nav pull-right">
		<li class="hidden-xs">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="fa fa-tasks"></i>
				<span class="badge badge-warning">4</span>
			</a>
			<ul class="dropdown-navbar dropdown-menu">
				<li class="nav-header">
					<i class="fa fa-check"></i>
					4 Tasks to complete
				</li>
				<li>
					<a href="#">
						<div class="clearfix">
							<span class="pull-left">Software Update</span>
							<span class="pull-right">75%</span>
						</div>

						<div class="progress progress-mini">
							<div style="width:75%" class="progress-bar progress-bar-warning"></div>
						</div>
					</a>
				</li>

				<li>
					<a href="#">
						<div class="clearfix">
							<span class="pull-left">Transfer To New Server</span>
							<span class="pull-right">45%</span>
						</div>

						<div class="progress progress-mini">
							<div style="width:45%" class="progress-bar progress-bar-danger"></div>
						</div>
					</a>
				</li>

				<li>
					<a href="#">
						<div class="clearfix">
							<span class="pull-left">Bug Fixes</span>
							<span class="pull-right">20%</span>
						</div>

						<div class="progress progress-mini">
							<div style="width:20%" class="progress-bar"></div>
						</div>
					</a>
				</li>

				<li>
					<a href="#">
						<div class="clearfix">
							<span class="pull-left">Writing Documentation</span>
							<span class="pull-right">85%</span>
						</div>

						<div class="progress progress-mini progress-striped active">
							<div style="width:85%" class="progress-bar progress-bar-success"></div>
						</div>
					</a>
				</li>

				<li class="more">
					<a href="#">See tasks with details</a>
				</li>
			</ul>
		</li>
		<li class="hidden-xs">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="fa fa-bell"></i>
				<span class="badge badge-important">5</span>
			</a>
			<ul class="dropdown-navbar dropdown-menu">
				<li class="nav-header">
					<i class="fa fa-warning"></i>
					5 Notifications
				</li>

				<li class="notify">
					<a href="#">
						<i class="fa fa-comment orange"></i>
						<p>New Comments</p>
						<span class="badge badge-warning">4</span>
					</a>
				</li>

				<li class="notify">
					<a href="#">
						<i class="fa fa-twitter blue"></i>
						<p>New Twitter followers</p>
						<span class="badge badge-info">7</span>
					</a>
				</li>

				<li class="notify">
					<a href="#">
						<img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
						<p>David would like to become moderator.</p>
					</a>
				</li>

				<li class="notify">
					<a href="#">
						<i class="fa fa-bug pink"></i>
						<p>New bug in program!</p>
					</a>
				</li>

				<li class="notify">
					<a href="#">
						<i class="fa fa-shopping-cart green"></i>
						<p>You have some new orders</p>
						<span class="badge badge-success">+10</span>
					</a>
				</li>

				<li class="more">
					<a href="#">See all notifications</a>
				</li>
			</ul>
		</li>
		<li class="hidden-xs">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">
				<i class="fa fa-envelope"></i>
				<span class="badge badge-success">3</span>
			</a>
			<ul class="dropdown-navbar dropdown-menu">
				<li class="nav-header">
					<i class="fa fa-comments"></i>
					3 Messages
				</li>

				<li class="msg">
					<a href="#">
						<img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
						<div>
							<span class="msg-title">Sarah</span>
							<span class="msg-time">
								<i class="fa fa-clock-o"></i>
								<span>a moment ago</span>
							</span>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.</p>
					</a>
				</li>

				<li class="msg">
					<a href="#">
						<img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
						<div>
							<span class="msg-title">Emma</span>
							<span class="msg-time">
								<i class="fa fa-clock-o"></i>
								<span>2 Days ago</span>
							</span>
						</div>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
					</a>
				</li>

				<li class="msg">
					<a href="#">
						<img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
						<div>
							<span class="msg-title">John</span>
							<span class="msg-time">
								<i class="fa fa-clock-o"></i>
								<span>8:24 PM</span>
							</span>
						</div>
						<p>Duis aute irure dolor in reprehenderit in ...</p>
					</a>
				</li>

				<li class="more">
					<a href="#">See all messages</a>
				</li>
			</ul>
		</li>
		<li class="user-profile">
			<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="{{ asset('backend/img/demo/avatar/avatar1.jpg')}}"
					alt="Penny's Photo" />
				<span class="hhh" id="user_info" style="text-transform:capitalize;">
					{{ Auth::user()->name }}
				</span>
				<i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-navbar" id="user_menu">
				<li class="nav-header">
					<i class="fa fa-clock-o"></i>
					<!-- Jam login -->
					Ahay
				</li>
				<li>
					<a href="{{ route('profile.edit') }}">
						<i class="fa fa-user"></i>
						{{ __('Profile') }}
					</a>
				</li>
				<li>
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<a href="{{ route('logout')}}" onclick="event.preventDefault();                                                
							this.closest('form').submit();">
							<i class="fa fa-off"></i>
							{{ __('Log Out') }}
						</a>
					</form>

				</li>
			</ul>
		</li>
	</ul>
</div>