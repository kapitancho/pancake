<?php

namespace MaBaker\App\Port;

/**
 * Class Pancake
 * @package MaBaker\App\Port
 */
final class Pancake {

	/**
	 * Pancake constructor.
	 */
	private function __construct() {}
	/**
	 * @return self
	 */

	public static function fromMixture(): self {
		return new self;
	}

}
