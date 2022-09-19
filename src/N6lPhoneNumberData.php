<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l\PHP;

use BeastBytes\PhoneNumber\N6l\N6lPhoneNumberDataInterface;
use InvalidArgumentException;
use RuntimeException;

final class N6lPhoneNumberData implements N6lPhoneNumberDataInterface
{
    public function __construct(private array|string|null $n6lPhoneNumberData = null)
    {
        if ($this->n6lPhoneNumberData === null) {
            $this->n6lPhoneNumberData = require 'data.php';
        } elseif (is_string($this->n6lPhoneNumberData)) {
            $this->n6lPhoneNumberData = require $this->n6lPhoneNumberData;
        }

        if (!is_array($this->n6lPhoneNumberData)) {
            throw new InvalidArgumentException('`$n6lPhoneNumberData` must be an array of national phone number data, a path to a file that returns an array of national phone number data, or `null` to use local data');
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
            'Country {country} not found in list of national phone number formats',
            ['{country}' => $country]
        ));
    }

    public function getReplacement(string $country): string
    {
        if ($this->hasCountry($country)) {
            if (count($this->n6lPhoneNumberData[$country]) === 2) {
                return $this->n6lPhoneNumberData[$country]['replacement'];
            }

            throw new RuntimeException(
                strtr(
                    'Country {country} does not have a replacement',
                    ['{country}' => $country]
                )
            );
        }

        throw new InvalidArgumentException(strtr(
           'Country {country} not found in list of national phone number formats',
           ['{country}' => $country]
       ));
    }

    public function hasReplacement(string $country): bool
    {
        if ($this->hasCountry($country)) {
            return count($this->n6lPhoneNumberData[$country]) === 2;
        }

        throw new InvalidArgumentException(strtr(
            'Country {country} not found in list of national phone number formats',
            ['{country}' => $country]
        ));
    }
}