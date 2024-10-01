<?php
/**
 * @copyright Copyright © 2024 BeastBytes - All rights reserved
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

class N6lPhoneNumberDataTest extends TestCase
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

    public function test_constructor_with_null(): void
    {
        $n6lPhoneNumberData = new N6lPhoneNumberData();
        $this->assertCount(
            count(require self::$dataFilename),
            $n6lPhoneNumberData->getCountries()
        );
    }

    public function test_constructor_with_string(): void
    {
        $n6lPhoneNumberData = new N6lPhoneNumberData(
            self::$dataFilename
        );
        $this->assertCount(
            count(require self::$dataFilename),
            $n6lPhoneNumberData->getCountries()
        );
    }

    public function test_constructor_with_array(): void
    {
        $data = $this->getData();

        $n6lPhoneNumberData = new N6lPhoneNumberData($data);
        $this->assertCount(
            count($data),
            $n6lPhoneNumberData->getCountries()
        );
    }

    #[DataProvider('badDataProvider')]
    public function test_bad_constructor(string $data): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(N6lPhoneNumberData::INVALID_DATA_EXCEPTION_MESSAGE);
        new N6lPhoneNumberData(__DIR__ . "/data/$data.php");
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_has_country(string $country): void
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    #[DataProvider('badCountriesProvider')]
    public function test_does_not_have_country(string $country): void
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_n6l(string $country): void
    {
        $this->assertSame(
            self::$n6lPhoneNumberData[$country]['n6l'],
            self::$testClass->getN6l($country)
        );
    }

    #[DataProvider('goodCountriesProvider')]
    public function test_epp($country)
    {
        $this->assertSame(
            self::$n6lPhoneNumberData[$country]['epp'],
            self::$testClass->getEpp($country)
        );
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries_n6l(string $country): void
    {
        $this->assertFalse(self::$testClass->hasCountry($country));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            strtr(
                N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
                ['{country}' => $country]
            )
        );
        self::$testClass->getN6l($country);
    }

    #[DataProvider('badCountriesProvider')]
    public function test_bad_countries_epp(string $country): void
    {
        $this->assertFalse(self::$testClass->hasCountry($country));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->getEpp($country);
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
        $countries = array_rand(
            self::$n6lPhoneNumberData,
            random_int(1, count(self::$n6lPhoneNumberData))
        );

        foreach ($countries as $country) {
            $data[$country] = self::$n6lPhoneNumberData[$country];
        }

        return $data;
    }
}
