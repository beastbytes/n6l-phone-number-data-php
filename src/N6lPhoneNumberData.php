<?php
/**
 * @copyright Copyright © 2024 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 *
 * @psalm-type N6L = array{
 *      pattern: string, // Regex to match input formats derived from {@link https://www.itu.int/oth/T0202.aspx?parent=T0202 National Numbering Plans}
 *      replacement?: string // Replacement to create nationally formatted number
 *  }
 *
 * @psalm-type EPP = array{
 *      pattern?: string, // Regex to match unwanted characters in a nationally formatted number
 *      idc: string // International Dialling Code
 *  }
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l\PHP;

use BeastBytes\PhoneNumber\N6l\N6lPhoneNumberDataInterface;
use InvalidArgumentException;

final class N6lPhoneNumberData implements N6lPhoneNumberDataInterface
{
    public const COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE =
        'Country {country} not found in list of national phone number formats';
    public const INVALID_DATA_EXCEPTION_MESSAGE
        = '`$n6lPhoneNumberData` must be an array of national phone number data, a path to a file that returns an array of national phone number data, or `null` to use local data';

    public function __construct(private array|string|null $n6lPhoneNumberData = null)
    {
        /** @psalm-suppress MissingFile, MixedAssignment, UnresolvableInclude */
        if ($this->n6lPhoneNumberData === null) {
            $this->n6lPhoneNumberData = require dirname(__DIR__) . '/data/data.php';
        } elseif (is_string($this->n6lPhoneNumberData)) {
            $this->n6lPhoneNumberData = require $this->n6lPhoneNumberData;
        }

        if (!is_array($this->n6lPhoneNumberData)) {
            throw new InvalidArgumentException(self::INVALID_DATA_EXCEPTION_MESSAGE);
        }
    }

    /**
     * @return string[]
     * @psalm-return list<string>
     */
    public function getCountries(): array
    {
        return array_keys($this->n6lPhoneNumberData);
    }

    public function hasCountry(string $country): bool
    {
        return array_key_exists($country, $this->n6lPhoneNumberData);
    }

    /**
     * @psalm-return EPP
     */
    public function getEpp(string $country): array
    {
        if ($this->hasCountry($country)) {
            return $this->n6lPhoneNumberData[$country]['epp'];
        }

        throw new InvalidArgumentException(strtr(
            self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
    }

    /**
     * @psalm-return N6L
     */
    public function getN6l(string $country): array
    {
        if ($this->hasCountry($country)) {
            return $this->n6lPhoneNumberData[$country]['n6l'];
        }

        throw new InvalidArgumentException(strtr(
            self::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
    }
}
