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
    /** @var string */
    private static string $dataFilename;
    /** @psalm-var array<
     *     string,
     *     array{
     *         n6l: array{pattern: string, replacement?: string},
     *         epp: array{pattern?: string, idc: string}
     *     }
     * > $n6lPhoneNumberData
     */
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
        $n6lPhoneNumberData = new N6lPhoneNumberData(self::$dataFilename);
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

    public function test_default_data(): void
    {
        $countries = require dirname(__DIR__) . '/data/data.php';

        /**
         * @var string $country
         * @var array $data
         */
        foreach($countries as $country => $data) {
            $this->assertCount(2, $data, "Invalid number of array elements for $country");
            $this->assertArrayHasKey('n6l', $data, "$country missing 'n6l' key");

            if (array_key_exists('n6l', $data)) {
                $this->assertGreaterThan(
                    0,
                    count($data['n6l']),
                    "Invalid number of array elements for $country" . "['n6l']; must be 1 or 2"
                );
                $this->assertLessThan(
                    3,
                    count($data['n6l']),
                    "Invalid number of array elements for $country" . "['n6l']; must be 1 or 2"
                );
                $this->assertArrayHasKey(
                    'pattern', $data['n6l'],
                    $country . "['n6l'] missing 'pattern' key"
                );

                if (array_key_exists('pattern', $data['n6l'])) {
                    $this->assertIsString(
                        $data['n6l']['pattern'], $country . "['n6l']['pattern'] must be a regex string"
                    );
                    $this->assertNotEmpty(
                        $data['n6l']['pattern'],
                        $country . "['n6l']['pattern'] must be a regex string"
                    );
                }

                if (count($data['n6l']) === 2) {
                    $this->assertArrayHasKey(
                        'replacement', $data['n6l'],
                        $country . "['n6l'] has invalid key; expecting 'replacement'"
                    );

                    if (array_key_exists('replacement', $data['n6l'])) {
                        $this->assertIsString(
                            $data['n6l']['replacement'],
                            $country . "['n6l']['replacement'] must be a regex replacement string"
                        );
                        $this->assertNotEmpty(
                            $data['n6l']['replacement'],
                            $country ."['n6l']['replacement'] must be a regex replacement string"
                        );
                    }
                }
            }

            $this->assertArrayHasKey('epp', $data, "$country missing 'epp' key");

            if (array_key_exists('epp', $data)) {
                $this->assertGreaterThan(
                    0,
                    count($data['epp']),
                    "Invalid number of array elements for $country" . "['epp']; must be 1 or 2"
                );
                $this->assertLessThan(
                    3,
                    count($data['epp']),
                    "Invalid number of array elements for $country" . "['epp']; must be 1 or 2"
                );
                $this->assertArrayHasKey(
                    'idc', $data['epp'],
                    $country . "['epp'] missing 'idc' key"
                );

                if (array_key_exists('idc', $data['epp'])) {
                    $this->assertIsString(
                        $data['epp']['idc'],
                        $country . "['epp']['idc'] must be the International Dialling Code for $country"
                    );
                    $this->assertMatchesRegularExpression(
                        '/\d{1,4}/',
                        $data['epp']['idc'],
                        $country . "['epp']['idc'] must be the International Dialling Code for $country"
                    );
                }

                if (count($data['epp']) === 2) {
                    $this->assertArrayHasKey(
                        'pattern', $data['epp'],
                        $country . "['epp'] has invalid key; expecting 'pattern'"
                    );

                    if (array_key_exists('pattern', $data['epp'])) {
                        $this->assertIsString(
                            $data['epp']['pattern'],
                            $country . "['epp']['pattern'] must be a regex string to find unwanted characters in phone number"
                        );
                        $this->assertNotEmpty(
                            $data['epp']['pattern'],
                            $country . "['epp']['pattern'] must be a regex string to find unwanted characters in phone number"
                        );
                    }
                }
            }
        }
    }

    #[DataProvider('badDataProvider')]
    public function test_bad_constructor(string $data): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(N6lPhoneNumberData::INVALID_DATA_EXCEPTION_MESSAGE);
        new N6lPhoneNumberData(__DIR__ . "/data/$data.php");
    }

    #[DataProvider('countryPass')]
    public function test_has_country_pass(string $country): void
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    #[DataProvider('countryFail')]
    public function test_has_country_fail(string $country): void
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    #[DataProvider('countryPass')]
    public function test_n6l_pass(string $country): void
    {
        $this->assertSame(
            self::$n6lPhoneNumberData[$country]['n6l'],
            self::$testClass->getN6l($country)
        );
    }

    #[DataProvider('countryPass')]
    public function test_epp_pass(string $country): void
    {
        $this->assertSame(
            self::$n6lPhoneNumberData[$country]['epp'],
            self::$testClass->getEpp($country)
        );
    }

    #[DataProvider('countryFail')]
    public function test_n6l_fail(string $country): void
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

    #[DataProvider('countryFail')]
    public function test_epp_fail(string $country): void
    {
        $this->assertFalse(self::$testClass->hasCountry($country));

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(strtr(
            N6lPhoneNumberData::COUNTRY_NOT_FOUND_EXCEPTION_MESSAGE,
            ['{country}' => $country]
        ));
        self::$testClass->getEpp($country);
    }
    // End tests

    // Data providers

    public static function countryPass(): \Generator
    {
        self::$n6lPhoneNumberData = require dirname(__DIR__) . '/data/data.php';

        foreach (array_keys(self::$n6lPhoneNumberData) as $country) {
            yield $country => [$country, count(self::$n6lPhoneNumberData[$country]) === 2];
        }
    }

    public static function countryFail(): \Generator
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

        /** @var array $countries */
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
