<?php

namespace MaBaker\Infrastructure\Adapter;

use MaBaker\App\Port\PancakeMaker;

/**
 * Class CliPancakeService
 * @package MaBaker\Infrastructure\Service
 */
final class CliPancakeService {
	/**
	 * @var PancakeMaker
	 */
	private PancakeMaker $pancakeMaker;

	/**
	 * WebPancakeService constructor.
	 * @param PancakeMaker $pancakeMaker
	 */
	public function __construct(PancakeMaker $pancakeMaker) {
		$this->pancakeMaker = $pancakeMaker;
	}

	/**
	 * Simplified
	 * @param array $argv
	 */
	public function handle(array $argv): void {
		try {
			$amount = (int)($argv[1] ?? 1);
			$plate = $this->pancakeMaker->giveMePancakes($amount);
			echo "Your plate is ready. Total number of pancakes: ", count($plate);
		} catch (\Exception $ex) {
			echo "ERROR: ", $ex->getMessage();
		}
	}
}
