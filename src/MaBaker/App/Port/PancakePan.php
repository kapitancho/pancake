<?php

namespace MaBaker\App\Port;

/**
 * Interface PancakePan
 * @package MaBaker\App\Port
 */
interface PancakePan {
	/**
	 * @param PancakeMixture $mixture
	 * @param int $amount
	 * @return PancakePlate
	 */
	public function bake(PancakeMixture $mixture, int $amount): PancakePlate;
}
