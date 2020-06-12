<?php

namespace MaBaker\App\Port;

/**
 * Interface PancakeMixDispenser
 * @package MaBaker\App\Port
 */
interface PancakeMixDispenser {
	/**
	 * @return PancakeMixture
	 */
	public function giveMeSomeMixture(): PancakeMixture;
}
