<?php

namespace Mod11;

class Mod11
{
	/**
	 * @param string $data
	 * @param array $weights
	 * @param int $when_11
	 * @param int $when_10
	 * @return int
	 */
	public static function calculate($data, $weights, $when_11 = 5, $when_10 = 0)
	{
		if (!is_string($data)) {
			throw new \InvalidArgumentException('Data value must be a string.');
		}
		if (!is_array($weights)) {
			throw new \InvalidArgumentException('Weights value must be an array.');
		}

		// Split the string into individual characters
		$characters = str_split($data);

		$check_digit_sum = 0;
		for ($i = 0; $i < count($weights); $i++) {
			if (!isset($weights[$i])) {
				throw new \InvalidArgumentException('You haven\'t provided enough weights for the length of the data.');
			}

			// Add the multiplication of these two to the check_digit_sum
			$check_digit_sum += ((int)$characters[$i] * (int)$weights[$i]);
		}

		// Divide the sum by 11 and get the remainder
		$check_digit_remainder = $check_digit_sum % 11;

		// Minus the remainder from 11
		$check_digit = 11 - $check_digit_remainder;

		// Adjust the final values if necessary
		if ($check_digit === 11) {
			$check_digit = $when_11;
		} elseif ($check_digit === 10) {
			$check_digit = $when_10;
		}

		return $check_digit;
	}
}