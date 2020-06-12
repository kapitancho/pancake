<?php

namespace MaBaker\App\Port;

/**
 * Class PancakeMixture
 * @package MaBaker\App\Port
 */
final class PancakeMixture {
	/**
	 * PancakeMixture constructor.
	 */
	private function __construct() {}
	/**
	 * @return self
	 */
	public static function mixFromMaterials(): self {
		return new self;
	}
}
