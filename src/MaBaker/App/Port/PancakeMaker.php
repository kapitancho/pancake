<?php

namespace MaBaker\App\Port;

/**
 * Interface PancakeMaker
 * @package MaBaker\App\Port
 */
interface PancakeMaker {
	/**
	 * @param int $amount
	 * @return PancakePlate
	 */
	public function giveMePancakes(int $amount): PancakePlate;
}
