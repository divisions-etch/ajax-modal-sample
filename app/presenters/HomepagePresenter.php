<?php

namespace App;

use Nette,
	Model;

class HomepagePresenter extends BasePresenter{

	public function renderFireModal(){
			$this->setLayout(false);
	}

	protected function createComponentTest(){
		return new \FormComponent();
	}

}
