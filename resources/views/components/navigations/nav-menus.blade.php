<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 ml-auto">
				<form class="input-icon my-3 my-lg-0">
					<input type="search" class="form-control header-search" placeholder="Search…" tabindex="1">
					<div class="input-icon-addon">
						<i class="fe fe-search"></i>
					</div>
				</form>
			</div>
			<div class="col-lg order-lg-first">
				<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
					<li class="nav-item">
						<a href="{{ route('home') }}" class="nav-link"><i class="fe fe-home"></i> Home</a>
					</li>
					<li class="nav-item">
						<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">
							@icon('fe fe-grid') Manage</a>
						<div class="dropdown-menu dropdown-menu-arrow">
							@can('user_index')
								<a href="{{ route('manage.users.index') }}" class="dropdown-item ">Users</a>
							@endcan

							@can('acl_index')
								<a href="{{ route('manage.acl.index') }}" class="dropdown-item ">ACL</a>
							@endcan

							@can('passport_index')
								<a href="{{ route('manage.oauth.passport') }}" class="dropdown-item ">OAuth</a>
							@endcan
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
						<div class="dropdown-menu dropdown-menu-arrow">
							<a href="./maps.html" class="dropdown-item ">Maps</a>
							<a href="./icons.html" class="dropdown-item ">Icons</a>
							<a href="./store.html" class="dropdown-item ">Store</a>
							<a href="./blog.html" class="dropdown-item ">Blog</a>
							<a href="./carousel.html" class="dropdown-item ">Carousel</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
						<div class="dropdown-menu dropdown-menu-arrow">
							<a href="./profile.html" class="dropdown-item ">Profile</a>
							<a href="./login.html" class="dropdown-item ">Login</a>
							<a href="./register.html" class="dropdown-item ">Register</a>
							<a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
							<a href="./400.html" class="dropdown-item ">400 error</a>
							<a href="./401.html" class="dropdown-item ">401 error</a>
							<a href="./403.html" class="dropdown-item ">403 error</a>
							<a href="./404.html" class="dropdown-item ">404 error</a>
							<a href="./500.html" class="dropdown-item ">500 error</a>
							<a href="./503.html" class="dropdown-item ">503 error</a>
							<a href="./email.html" class="dropdown-item ">Email</a>
							<a href="./empty.html" class="dropdown-item ">Empty page</a>
							<a href="./rtl.html" class="dropdown-item ">RTL mode</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
					</li>
					<li class="nav-item">
						<a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
					</li>
					<li class="nav-item">
						<a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>