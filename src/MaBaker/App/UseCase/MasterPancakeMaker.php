<?php

namespace MaBaker\App\UseCase;

use MaBaker\App\Port\PancakeMaker;
use MaBaker\App\Port\PancakeMixDispenser;
use MaBaker\App\Port\PancakePan;
use MaBaker\App\Port\PancakePlate;

final class MasterPancakeMaker implements PancakeMaker {
	/**
	 * @var PancakeMixDispenser
	 */
	private PancakeMixDispenser $mixDispenser;
	/**
	 * @var PancakePan
	 */
	private PancakePan $pan;

	public function __construct(PancakeMixDispenser $mixDispenser, PancakePan $pan) {
		$this->mixDispenser = $mixDispenser;
		$this->pan = $pan;
	}

	/**
	 * @param int $amount
	 * @return PancakePlate
	 */
	public function giveMePancakes(int $amount): PancakePlate {
		if ($amount <= 0) {
			throw new \InvalidArgumentException("The number of pancakes should be at least 1");
		}
		return $this->pan->bake(
			$this->mixDispenser->giveMeSomeMixture(),
			$amount
		);
	}
}
