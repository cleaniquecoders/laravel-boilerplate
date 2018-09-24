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
						<a href="{{ route('home') }}" class="nav-link {{ is_active_nav('home') ? 'active' : '' }}"><i class="fe fe-home"></i> Home</a>
					</li>
					<li class="nav-item">
						<a href="javascript:void(0)" 
							class="nav-link {{ is_active_nav([
								'manage.users.index',
								'manage.acl.index',
								'manage.oauth.passport'
								]) ? 'active' : '' }}" 
							data-toggle="dropdown">
							@icon('fe fe-grid') Manage</a>
						<div class="dropdown-menu dropdown-menu-arrow">
							@can('user-index')
								<a href="{{ route('manage.users.index') }}" class="dropdown-item ">Users</a>
							@endcan

							@can('acl-index')
								<a href="{{ route('manage.acl.index') }}" class="dropdown-item ">ACL</a>
							@endcan

							@can('passport-index')
								<a href="{{ route('manage.oauth.passport') }}" class="dropdown-item ">OAuth</a>
							@endcan
						</div>
					</li>
					@if(user()->is_developer)
						<li class="nav-item">
							<a href="#" 
								class="nav-link">
									<i class="fe fe-activity"></i> Stats Tracker
							</a>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
</div>