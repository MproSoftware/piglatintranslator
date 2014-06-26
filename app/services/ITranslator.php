<?php

namespace PigLatinTranslator\Services;

interface ITranslator
{
	/**
	 * Translate method
	 * @param  string $text text for translate
	 * @return string       translated text
	 */
	public function translate($text);
}
