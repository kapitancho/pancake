<?php

namespace MaBaker\Infrastructure\Service;

use MaBaker\App\Port\PancakeMaker;

/**
 * Class WebPancakeService
 * @package MaBaker\Infrastructure\Service
 */
final class WebPancakeService {
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
	 * @param array $getData
	 */
	public function handle(array $getData): void {
		try {
			$amount = (int)($getData['amount'] ?? 1);
			$plate = $this->pancakeMaker->giveMePancakes($amount);
			echo "Your plate is ready. Total number of pancakes: ", count($plate->getAllPancakes());
		} catch (\Exception $ex) {
			echo "ERROR: ", $ex->getMessage();
		}
	}
}
