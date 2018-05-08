<?php

use ASL\ASLForm;

class RegistrationForm extends ASLForm
{
	public function render($element)
	{
		parent::render($element)
			->append(
				parent::getTemplateContent("template.html")
			);

		return $element;
	}
}
?>
