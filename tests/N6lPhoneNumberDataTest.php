<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l\PHP\Tests;

use BeastBytes\PhoneNumber\N6l\PHP\N6lPhoneNumberData;
use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use RuntimeException;

class N6LPhoneNumberDataTest extends TestCase
{
    private static array $n6lPhoneNumberData;
    private static N6lPhoneNumberData $testClass;

    #[BeforeClass]
    public static function init(): void
    {
        self::$testClass = new N6lPhoneNumberData();
    }

    public function test_getting_countries()
    {
        $this->assertCount(
            count(require dirname(__DIR__) . '/data/data.php'),
            self::$testClass->getCountries()
        );
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_has_country($country)
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    #[DataProvider('badCountriesProvider')]
    public function test_does_not_have_country($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_get_pattern($country)
    {
        $this->assertSame(self::$n6lPhoneNumberData[$country]['pattern'], self::$testClass->getPattern($country));
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_replacement($country, $hasReplacement)
    {
        $this->assertSame($hasReplacement, self::$testClass->hasReplacement($country));

        if ($hasReplacement) {
            $this->assertSame(self::$n6lPhoneNumberData[$country]['replacement'], self::$testClass->getReplacement($country));
        } else {
            $this->expectException(RuntimeException::class);
            $this->expectExceptionMessage(strtr(
                N6lPhoneNumberData::COUNTRY_DOES_NOT_HAVE_A_REPLACEMENT_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            ));
            self::$testClass->getReplacement($country);
        }
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->getPattern($country);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->hasReplacement($country);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->getReplacement($country);
    }

    public static function goodCountriesProvider(): \Generator
    {
        self::$n6lPhoneNumberData = require dirname(__DIR__) . '/data/data.php';

        foreach (array_keys(self::$n6lPhoneNumberData) as $country) {
            yield $country => [$country, count(self::$n6lPhoneNumberData[$country]) === 2];
        }
    }

    public static function badCountriesProvider(): \Generator
    {
        foreach (
            [
                'non-existent code' => ['XX'],
                'alpha-3 code' => ['GBR'],
                'too short' => ['G'],
                'too long' => ['GBRT'],
                'number string' => ['12']
            ] as $name => $value
        ) {
            yield $name => $value;
        }
    }
}
