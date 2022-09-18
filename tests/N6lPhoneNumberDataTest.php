<?php
/**
 * @copyright Copyright © 2022 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace Tests;

use BeastBytes\N6lPhoneNumber\PHP\N6lPhoneNumberData;
use PHPUnit\Framework\TestCase;

class N6LPhoneNumberDataTest extends TestCase
{
    private static array $goodCountries;
    private static array $n6lPhoneNumberData;
    private static N6lPhoneNumberData $testClass;

    /**
     * @beforeClass
     */
    public static function init(): void
    {
        self::$n6lPhoneNumberData = require dirname(__DIR__) . '/src/data.php';
        self::$testClass = new N6lPhoneNumberData();
    }

    public function test_getting_countries()
    {
        $this->assertCount(count(self::$goodCountries), self::$testClass->getCountries());
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_has_country($country)
    {
        $this->assertTrue(self::$testClass->hasCountry($country));
    }

    /**
     * @dataProvider badCountries
     */
    public function test_does_not_have_country($country)
    {
        $this->assertFalse(self::$testClass->hasCountry($country));
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_get_pattern($country, $hasReplacement)
    {
        $this->assertSame(self::$n6lPhoneNumberData[$country]['pattern'], self::$testClass->getPattern($country));
    }

    /**
     * @dataProvider goodCountries
     */
    public function test_replacement($country, $hasReplacement)
    {
        $this->assertSame($hasReplacement, self::$testClass->hasReplacement($country));

        if ($hasReplacement) {
            $this->assertSame(self::$n6lPhoneNumberData[$country]['replacement'], self::$testClass->getReplacement($country));
        } else {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage("Country $country does not have a replacement");
            self::$testClass->getReplacement($country);
        }
    }

    /**
     * @dataProvider badCountries
     */
    public function test_bad_countries($country)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country $country not found in list of national phone number formats");
        self::$testClass->getPattern($country);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country $country not found in list of national phone number formats");
        self::$testClass->hasReplacement($country);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Country $country not found in list of national phone number formats");
        self::$testClass->getReplacement($country);
    }

    public function goodCountries(): array
    {
        $n6lPhoneNumberData = require dirname(__DIR__) . '/src/data.php';
        $goodCountries = [];

        foreach (array_keys($n6lPhoneNumberData) as $country) {
            $goodCountries[] = [$country, count($n6lPhoneNumberData[$country]) === 2];
        }

        self::$goodCountries = $goodCountries;
        return self::$goodCountries;
    }

    public function badCountries(): array
    {
        return [
            'non-existent code' => ['XX'],
            'alpha-3 code' => ['GBR'],
            'too short' => ['G'],
            'too long' => ['GBRT'],
            'number string' => ['12']
        ];
    }
}
