<?php

namespace Test;

use Nette,
	Tester,
	Tester\Assert;

$container = require __DIR__ . '/bootstrap.php';


class PigLatinTranslatorTest extends Tester\TestCase
{
	protected $translator;

	function setUp()
	{
		$this->translator = new \PigLatinTranslator\Services\PigLatinTranslator;
	}


	function testSingleWord()
	{
		Assert::same( 'appyhay', $this->translator->translate('happy') );
		Assert::same( 'uckday', $this->translator->translate('duck') );
		Assert::same( 'oveglay', $this->translator->translate('glove') );

		Assert::same( 'eggway', $this->translator->translate('egg') );
		Assert::same( 'inboxway', $this->translator->translate('inbox') );
		Assert::same( 'eightway', $this->translator->translate('eight') );
	}

	function testPhrase()
	{
		Assert::same( 'appyhay.eggway', $this->translator->translate('happy.egg') );
		Assert::same( 'uckday eightway eggway', $this->translator->translate('duck eight egg') );
		Assert::same( 'ogday andway atcay', $this->translator->translate('dog and cat') );
	}

}


$test = new PigLatinTranslatorTest($container);
$test->run();
