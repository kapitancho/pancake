<?php

namespace MaBaker\Main;

use MaBaker\App\UseCase\MasterPancakeMaker;
use MaBaker\App\Port\PancakeMaker;
use MaBaker\Infrastructure\Adapter\{
	CoolMixDispenser, TeflonPan, CliPancakeService, WebPancakeService
};

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
