<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\PhoneNumber\N6l\PHP\Tests;

use BeastBytes\PhoneNumber\N6l\PHP\N6lPhoneNumberData;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class N6LPhoneNumberDataTest extends TestCase
{
    private static string $dataFilename;
    private static array $n6lPhoneNumberData;
    private static N6lPhoneNumberData $testClass;

    #[BeforeClass]
    public static function init(): void
    {
        self::$testClass = new N6lPhoneNumberData();
        self::$dataFilename = dirname(__DIR__) . '/data/data.php';
    }

    public function test_constructor_with_null()
    {
        $n6lPhoneNumberData = new N6lPhoneNumberData();
        $this->assertCount(
            count(require self::$dataFilename),
            $n6lPhoneNumberData->getCountries()
        );
    }

    public function test_constructor_with_string()
    {
        $n6lPhoneNumberData = new N6lPhoneNumberData(
            self::$dataFilename
        );
        $this->assertCount(
            count(require self::$dataFilename),
            $n6lPhoneNumberData->getCountries()
        );
    }

    public function test_constructor_with_array()
    {
        $data = $this->getData();

        $n6lPhoneNumberData = new N6lPhoneNumberData($data);
        $this->assertCount(
            count($data),
            $n6lPhoneNumberData->getCountries()
        );
    }

    #[DataProvider('badDataProvider')]
    public function test_bad_constructor($data)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(N6lPhoneNumberData::INVALID_DATA_EXCEPTION_MESSAGE);
        new N6lPhoneNumberData(__DIR__ . "/data/$data.php");
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
                N6lPhoneNumberData::NO_REPLACEMENT_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            ));
            self::$testClass->getReplacement($country);
        }
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries_pattern($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            strtr(
                N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            )
        );
        self::$testClass->getPattern($country);
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries_has_replacement($country)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->hasReplacement($country);
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries_get_replacement($country)
    {
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
            ] as $name => $data
        ) {
            yield $name => $data;
        }
    }

    public static function badDataProvider(): \Generator
    {
        foreach (
            [
                'array',
                'null',
                'string'
            ] as $name
        ) {
            yield $name => [$name];
        }
    }

    private function getData(): array
    {
        $data = [];

        self::$n6lPhoneNumberData = require dirname(__DIR__) . '/data/data.php';
        $countries = array_rand(self::$n6lPhoneNumberData, random_int(1, count(self::$n6lPhoneNumberData)));

        foreach ($countries as $country) {
            $data[$country] = self::$n6lPhoneNumberData[$country];
        }

        return $data;
    }
}
