<?php

namespace PigLatinTranslator\Presenters;

use Nette,
	PigLatinTranslator\Model;
use Nette\Application\UI\Form;
use Kdyby\BootstrapFormRenderer\BootstrapRenderer;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function createComponentTranslatorForm()
	{
		$form = new Form;
		$form->setRenderer(new BootstrapRenderer);
		$form->addText('text', 'Text:')
			->setRequired('Zadejte prosím text.');
		$form->addSubmit('translate', 'Přeložit');
        $form->onSuccess[] = array($this, 'translatorFormSubmitted');
        return $form;
	}

	public function translatorFormSubmitted($form)
	{
		$translator = $this->context->getByType('PigLatinTranslator\Services\ITranslator');
		$this->template->translate = $translator->translate($form->values->text);
	}

}
