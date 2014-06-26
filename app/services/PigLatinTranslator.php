<?php

namespace PigLatinTranslator\Services;

use Nette\Utils\Strings;

class PigLatinTranslator implements ITranslator
{
	/**
	 * @inherit
	 */
	public function translate($text)
	{
		$words = Strings::split($text, '~([\s,.]+)~');
		foreach($words as &$word) {
			$word = $this->translateWord($word);
		}
		return implode($words);
	}

	protected function translateWord($word)
	{
		return Strings::replace($word, array(
			'~^[aeiou]+[a-z]*$~' => '\\0way',
			'~^([^aeiou]+)([a-z]+)$~' => '\\2\\1ay',
		));
	}
}
