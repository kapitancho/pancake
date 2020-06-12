<?php

namespace MaBaker\Infrastructure\Adapter;

use MaBaker\App\Port\PancakeMixDispenser;
use MaBaker\App\Port\PancakeMixture;

/**
 * Class CoolMixDispenser
 * @package MaBaker\Infrastructure\Adapter
 */
final class CoolMixDispenser implements PancakeMixDispenser {
	/**
	 * @return PancakeMixture
	 */
	public function giveMeSomeMixture(): PancakeMixture {
		return PancakeMixture::mixFromMaterials();
	}
}
