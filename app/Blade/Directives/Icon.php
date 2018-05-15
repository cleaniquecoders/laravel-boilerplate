<?php 

namespace App\Blade\Directives;

use Illuminate\Support\Facades\Blade;

class Icon
{
	public static function register()
	{
		Blade::directive('icon', function ($icon) {
			return '<i class="<?php echo $icon; ?>"></i>';
        });
	}
}