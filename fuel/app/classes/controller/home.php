<?php

use Fuel\Core\View;

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$this->template->content = View::forge('home/index');
	}

}
