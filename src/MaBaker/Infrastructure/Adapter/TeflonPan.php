<?php

namespace MaBaker\Infrastructure\Adapter;

use MaBaker\App\Port\Pancake;
use MaBaker\App\Port\PancakeMixture;
use MaBaker\App\Port\PancakePan;
use MaBaker\App\Port\PancakePlate;

/**
 * Class TeflonPan
 * @package MaBaker\Infrastructure\Adapter
 */
final class TeflonPan implements PancakePan {
	public function bake(PancakeMixture $mixture, int $amount): PancakePlate {
		$pancakes = [];
		for($i = 0; $i < $amount; $i++) {
			$pancakes[] = Pancake::fromMixture(/*$mixture*/);
		}
		return PancakePlate::fromPancakes(... $pancakes);
	}
}
