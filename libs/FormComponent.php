<?php

use Nette\Application\UI\Control,
		Nette\Application\UI\Form;

class FormComponent extends Control{

	public function render(){
		$template = $this->createTemplate();
		$template->setFile(__DIR__.'/formComponent.latte');
		$template->render();
	}

	protected function createComponentForm(){
		$control = new Form();
		$control->getElementPrototype()->class('ajax modal-form');
		$control->addText('text', 'Text')
					->addRule(Form::FILLED, 'Musíte vyplnit položku "text"');
		$control->addSubmit('send', 'Send')->getControlPrototype()->class('form-button');
		return $control;
	}
}

?>
