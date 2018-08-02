<div class="text-center">
	<div class="item-action dropdown">
	  <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="true">
	  	<i class="fe fe-more-vertical"></i>
	  </a>
	  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" 
	  	style="position: absolute; transform: translate3d(-181px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
	  	{{ $prepend_action or '' }}
	    <a class="dropdown-item show-action-btn" style="cursor: pointer;"
			data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
			<i class="fe fe-eye"></i>
		</a>
		<a class="dropdown-item edit-action-btn" style="cursor: pointer;"
			data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
			<i class="fe fe-edit"></i>
		</a>
		{{ $append_action or '' }}
	    <div class="dropdown-divider " ></div>
	    {{ $prepend_footer_action or '' }}
	    <a class="dropdown-item destroy-action-btn"  style="cursor: pointer;"
			data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
			<i class="fe fe-trash"></i>
		</a>
		{{ $append_footer_action or '' }}
	  </div>
	</div>
</div>