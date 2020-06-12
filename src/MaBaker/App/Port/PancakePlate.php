<?php

namespace MaBaker\App\Port;

/**
 * Class PancakePlate
 * @package MaBaker\App\Port
 */
final class PancakePlate implements \Countable {
	/**
	 * @var Pancake[]
	 */
	private array $pancakes;
	/**
	 * PancakePlate constructor.
	 * @param Pancake ...$pancakes
	 */
	private function __construct(Pancake ... $pancakes) {
		$this->pancakes = $pancakes;
	}
	/**
	 * @param Pancake ...$pancakes
	 * @return PancakePlate
	 */
	public static function fromPancakes(Pancake ... $pancakes): self {
		return new self(... $pancakes);
	}
	/**
	 * @return Pancake[]
	 */
	public function getAllPancakes(): array {
		return $this->pancakes;
	}
	/**
	 * @return int
	 */
	public function count(): int {
		return count($this->pancakes);
	}

}