<?php

namespace PigLatinTranslator\Presenters;

use Nette,
	PigLatinTranslator\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
