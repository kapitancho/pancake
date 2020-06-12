<?php

namespace MaBaker\Main;

use MaBaker\App\Adapter\MasterPancakeMaker;
use MaBaker\App\Port\PancakeMaker;
use MaBaker\Infrastructure\Adapter\CoolMixDispenser;
use MaBaker\Infrastructure\Adapter\TeflonPan;
use MaBaker\Infrastructure\Service\CliPancakeService;
use MaBaker\Infrastructure\Service\WebPancakeService;

/**
 * Class Config
 * @package MaBaker\Main
 */
final class Config {
	/**
	 * @return PancakeMaker
	 */
	private static function pancakeMaker(): PancakeMaker {
		return new MasterPancakeMaker(
			new CoolMixDispenser(),
			new TeflonPan()
		);
	}

	/**
	 * @return WebPancakeService
	 */
	public static function webPancakeService(): WebPancakeService {
		return new WebPancakeService(self::pancakeMaker());
	}

	/**
	 * @return CliPancakeService
	 */
	public static function cliPancakeService(): CliPancakeService {
		return new CliPancakeService(self::pancakeMaker());
	}
}
