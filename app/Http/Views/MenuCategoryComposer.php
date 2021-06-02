<?php

namespace App\Http\Views;

use Illuminate\View\View;

class MenuCategoryComposer
{

	public function compose(View $view){
		$menu = ['Thời sự', 'Thể thao'];

		$view->with('menu',$menu);
	}
}