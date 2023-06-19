<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l\PHP;

use BeastBytes\PhoneNumber\N6l\N6lPhoneNumberDataInterface;
use InvalidArgumentException;
use RuntimeException;

final class N6lPhoneNumberData implements N6lPhoneNumberDataInterface
{
    public const COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE =
        'Country {country} not found in list of national phone number formats';
    public const INVALID_DATA_EXCEPTION_MESSAGE
        = '`$n6lPhoneNumberData` must be an array of national phone number data, a path to a file that returns an array of national phone number data, or `null` to use local data';
    public const NO_REPLACEMENT_EXCEPTION_MESSAGE =
        'Country {country} does not have a replacement';

    public function __construct(private array|string|null $n6lPhoneNumberData = null)
    {
        if ($this->n6lPhoneNumberData === null) {
            $this->n6lPhoneNumberData = require dirname(__DIR__) . '/data/data.php';
        } elseif (is_string($this->n6lPhoneNumberData)) {
            $this->n6lPhoneNumberData = require $this->n6lPhoneNumberData;
        }

        if (!is_array($this->n6lPhoneNumberData)) {
            throw new InvalidArgumentException(self::INVALID_DATA_EXCEPTION_MESSAGE);
        }
    }

    public function getCountries(): array
    {
        return array_keys($this->n6lPhoneNumberData);
    }

    public function hasCountry(string $country): bool
    {
        return array_key_exists($country, $this->n6lPhoneNumberData);
    }

    public function getPattern(string $country): string
    {
        if ($this->hasCountry($country)) {
            return $this->n6lPhoneNumberData[$country]['pattern'];
        }

        throw new InvalidArgumentException(strtr(
            self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
    }

    public function getReplacement(string $country): string
    {
        if (!$this->hasReplacement($country)) {
            throw new RuntimeException(strtr(
                self::NO_REPLACEMENT_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            ));
        }

        return $this->n6lPhoneNumberData[$country]['replacement'];
    }

    public function hasReplacement(string $country): bool
    {
        if (!$this->hasCountry($country)) {
            throw new InvalidArgumentException(strtr(
                self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            ));
        }

        return array_key_exists(
            'replacement',
            $this->n6lPhoneNumberData[$country]
        );
    }
}
