<?php
/**
 * Country definitions indexed by
 * {@link https://www.iso.org/iso-3166-country-codes.html ISO 3166-1 alpha-2 country code}
 *
 * @psalm-type N6L = array{
 *     pattern: string, // Regex to match input formats derived from {@link https://www.itu.int/oth/T0202.aspx?parent=T0202 National Numbering Plans}
 *     replacement?: string // Replacement to create nationally formatted number
 * }
 *
 * @psalm-type EPP = array{
 *     pattern?: string, // Regex to match unwanted characters in a nationally formatted number
 *     idc: string // International Dialling Code
 * }
 *
 * @psalm-return array{
 *     string, // {@link https://www.iso.org/iso-3166-country-codes.html ISO 3166-1 alpha-2 country code}
 *     array{n6l: N6L,  epp: EPP}
 * }
 */

return [
    'AD' => [ // Andorra
        'n6l' => [
            'pattern' => '/^(([3678]\d{2})|(690))[-. ]?(\d{3})(?(3)[-. ]?(\d{3}))/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/^\D/',
            'idc' => '376',
        ]
    ],
    'AE' => [ // United Arab Emirates
        'n6l' => [
            'pattern' => '/^0(([234679])|(5[02568]))((?(2)[2-8]\d{2}(?<!00)\d{4}|(?(3)\d{7})))/',
        ],
        'epp' => [
            'pattern' => '/^0/',
            'idc' => '971',
        ]
    ],
    'AF' => [ // Afghanistan
        'n6l' => [
            'pattern' => '/^\(?(0\d{2})\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/^\D/',
            'idc' => '93',
        ]
    ],
    'AG' => [ // Antigua and Barbuda (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(268)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/^\D/',
            'idc' => '1',
        ]
    ],
    'AI' => [ // Anguilla (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(264)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'AL' => [ // Albania
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '355',
        ]
    ],
    'AM' => [ // Armenia
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '374',
        ]
    ],
    'AO' => [  // Angola
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '244',
        ]
    ],
    'AR' => [ // Argentina
        'n6l' => [
            'pattern' => '/^\d{10}/',
        ],
        'epp' => [
            'idc' => '54',
        ]
    ],
    'AS' => [ // American Samoa (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(684)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'AT' => [ // Austria
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{3})[-. ]?(\d{3})([-. ]?(\d{3}))?([-. ]?(\d{3}))?/',
            'replacement' => '$1 $2 $3 $5 $7',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '43',
        ]
    ],
    'AU' => [ // Australia
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '61',
        ]
    ],
    'AW' => [ // Aruba
        'n6l' => [
            'pattern' => '/^\d{7}/',
        ],
        'epp' => [
            'idc' => '297',
        ]
    ],
    'AX' => [ // Åland Islands (Finnish numbering plan)
        'n6l' => [
            'pattern' => '/^\d{7,11}/',
        ],
        'epp' => [
            'idc' => '358',
        ]
    ],
    'AZ' => [ // Azerbaijan
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '994',
        ]
    ],
    'BA' => [ // Bosnia and Herzegovina
        'n6l' => [
            'pattern' => '/^\d{6,9}/',
        ],
        'epp' => [
            'idc' => '387',
        ]
    ],
    'BB' => [ // Barbados (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(246)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1'
        ]
    ],
    'BD' => [ // Bangladesh
        'n6l' => [
            'pattern' => '/^0\d{10,11}/',
        ],
        'epp' => [
            'pattern' => '/^0/',
            'idc' => '880',
        ]
    ],
    'BE' => [ // Belgium
        'n6l' => [
            'pattern' => '/^0\d{8,9}/',
        ],
        'epp' => [
            'pattern' => '/^0/',
            'idc' => '32',
        ]
    ],
    'BF' => [ // Burkina Faso
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '226',
        ]
    ],
    'BG' => [ // Bulgaria
        'n6l' => [
            'pattern' => '/^\d{8,9}/',
        ],
        'epp' => [
            'idc' => '359',
        ]
    ],
    'BH' => [ // Bahrain
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '973',
        ]
    ],
    'BI' => [ // Burundi
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '257',
        ]
    ],
    'BJ' => [ // Benin
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '229',
        ]
    ],
    'BL' => [ // Saint Barthélemy (French numbering plan)
        'n6l' => [
            'pattern' => '/^(0[1-9])[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4'
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '590',
        ]
    ],
    'BM' => [ // Bermuda (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(441)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'BN' => [ // Brunei
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '673',
        ]
    ],
    'BO' => [ // Bolivia
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '591',
        ]
    ],
    'BQ' => [ // Bonaire, Sint Eustatius and Saba
        'n6l' => [
            'pattern' => '/^([347]\d{2})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '599',
        ]
    ],
    'BR' => [ // Brazil
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{4,5})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '55',
        ]
    ],
    'BS' => [ // The Bahamas (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(242)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'BT' => [ // Bhutan
        'n6l' => [
            'pattern' => '/^(\d)[-. ]?(\d{2})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '975',
        ]
    ],
    'BV' => [ // Bouvet Island (Norwegian numbering plan)
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '47',
        ]
    ],
    'BW' => [ // Botswana
        'n6l' => [
            'pattern' => '/^\d{7,8}/',
        ],
        'epp' => [
            'idc' => '267',
        ]
    ],
    'BY' => [ // Belarus
        'n6l' => [
            'pattern' => '/^\d{6,11}/',
        ],
        'epp' => [
            'idc' => '375',
        ]
    ],
    'BZ' => [ // Belize
        'n6l' => [
            'pattern' => '/^\d{7}/',
        ],
        'epp' => [
            'idc' => '501',
        ]
    ],
    'CA' => [ // Canada (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(\d{3})\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'CC' => [ // Cocos (Keeling) Islands (Australian numbering plan)
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '61',
        ]
    ],
    'CD' => [ // Democratic Republic of the Congo
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '243',
        ]
    ],
    'CF' => [ // Central African Republic
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '236',
        ]
    ],
    'CG' => [ // Republic of the Congo
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '242',
        ]
    ],
    'CH' => [ // Switzerland
        'n6l' => [
            'pattern' => '/^(2[12467]|3[1234]|4[134]|5[12568]|6[12]|7[13456789]|81)[-. ]?(\d{9})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '41',
        ]
    ],
    'CI' => [ // Ivory Coast / Côte d'Ivoire
        'n6l' => [
            'pattern' => '/^[02][157]\d{8}/',
        ],
        'epp' => [
            'idc' => '225',
        ]
    ],
    'CK' => [ // Cook Islands
        'n6l' => [
            'pattern' => '/^((2)|(\d{2}))[-. ]?((?(2)\d{5}|(?(3)\d{4})))/',
            'replacement' => '$1 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '682',
        ]
    ],
    'CL' => [ // Chile
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '56',
        ]
    ],
    'CM' => [ // Cameroon
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '273',
        ]
    ],
    'CN' => [ // China
        'n6l' => [
            'pattern' => '/^\d{11}(\d{2})?/',
        ],
        'epp' => [
            'idc' => '86',
        ]
    ],
    'CO' => [ // Colombia
        'n6l' => [
            'pattern' => '/^(\d(\d{2})?)[-. ]?\d{7}/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '57',
        ]
    ],
    'CR' => [ // Costa Rica
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?\d{4}/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '506',
        ]
    ],
    'CU' => [ // Cuba
        'n6l' => [
            'pattern' => '/^\d{6,8}/',
        ],
        'epp' => [
            'idc' => '53',
        ]
    ],
    'CV' => [ // Cape Verde
        'n6l' => [
            'pattern' => '/^([259]\d{2})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '238',
        ]
    ],
    'CW' => [ // Curaçao
        'n6l' => [
            'pattern' => '/^(9?)[-. ]?([4-8]\d{2})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '5999',
        ]
    ],
    'CX' => [ // Christmas Island (Australian numbering plan)
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '61',
        ]
    ],
    'CY' => [ // Cyprus
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '357',
        ]
    ],
    'CZ' => [ // Czech Republic
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '420',
        ]
    ],
    'DE' => [ // Germany
        'n6l' => [
            'pattern' => '/^(0(15\d{2}|16[23]|17[0-57-9])|(15\d{3})|(160)|(176)|([2-9]\d{2})|([2-9]\d{3})|([2-9]\d{4})|(30|69|89))[-. ]?((?(2)\d{7}|(?(3)\d{6}|(?(4)\d{7,8}|(?(5)\d{8}|(?(6)\d{3,8}|(?(7)\d{2,7}|(?(8)\d{1,6}|(?(9)\d{3,9})))))))))/',
            'replacement' => '$1 $10',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '49',
        ]
    ],
    'DJ' => [ // Djibouti
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '253',
        ]
    ],
    'DK' => [ // Denmark
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '45',
        ]
    ],
    'DM' => [ // Dominica (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(767)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'DO' => [ // Dominican Republic (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(809|829|849)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'DZ' => [ // Algeria
        'n6l' => [
            'pattern' => '/^(0\d{1,2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})?/',
            'replacement' => '$1 $2 $3 $4 $5',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '213',
        ]
    ],
    'EC' => [ // Ecuador
        'n6l' => [
            'pattern' => '/^\d{7,8}/',
        ],
        'epp' => [
            'idc' => '593',
        ]
    ],
    'EE' => [ // Estonia
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '372',
        ]
    ],
    'EG' => [ // Egypt
        'n6l' => [
            'pattern' => '/^\d{9,10}/',
        ],
        'epp' => [
            'idc' => '20',
        ]
    ],
    'EH' => [ // Western Sahara (Moroccan numbering plan)
        'n6l' => [
            'pattern' => '/^(0528[89])[-. ]?(\d{5})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '212',
        ]
    ],
    'ER' => [ // Eritrea
        'n6l' => [
            'pattern' => '/^(0[17])[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '291',
        ]
    ],
    'ES' => [ // Spain
        'n6l' => [
            'pattern' => '/^((6\d{2}|[78][1-9]\d|9[1-8]\d))[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '34',
        ]
    ],
    'ET' => [ // Ethiopia
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ](\d{7})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '251',
        ]
    ],
    'FI' => [ // Finland
        'n6l' => [
            'pattern' => '/^\d{7,11}/',
        ],
        'epp' => [
            'idc' => '358',
        ]
    ],
    'FJ' => [ // Fiji
        'n6l' => [
            'pattern' => '/^[3689]\d{6}/',
        ],
        'epp' => [
            'idc' => '679',
        ]
    ],
    'FK' => [ // Falkland Islands
        'n6l' => [
            'pattern' => '/^[2-9]\d{4}/',
        ],
        'epp' => [
            'idc' => '500',
        ]
    ],
    'FM' => [ // Micronesia
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '391',
        ]
    ],
    'FO' => [ // Faroe Islands
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '298',
        ]
    ],
    'FR' => [ // France - use '^(0[1-9])(([-. ]?\d{2}){4})' if only match is needed
        'n6l' => [
            'pattern' => '/^(0[1-9])[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '33',
        ]
    ],
    'GA' => [ // Gabon
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '241',
        ]
    ],
    'GB' => [ // United Kingdom
        'n6l' => [
            'pattern' => '/^((\()?)(0\d{2,4})(?(2)\))([-. ]?((\d){3,4}))([-. ]?((\d){3,4}))(?:[-. ]?(x|#).+)?/',
            'replacement' => '$3 $5$8 $10',
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '44',
        ]
    ],
    'GD' => [ // Grenada (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(473)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'GE' => [ // Georgia
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '995',
        ]
    ],
    'GF' => [ // French Guiana
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '594',
        ]
    ],
    'GG' => [ // Guernsey (GB numbering plan)
        'n6l' => [
            'pattern' => '/^((\()?)(0\d{2,4})(?(2)\))([-. ]?((\d){3,4}))([-. ]?((\d){3,4}))(?:[-. ]?(x|#).+)?/',
            'replacement' => '$3 $5$8 $10',
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '44',
        ]
    ],
    'GH' => [ // Ghana
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '233',
        ]
    ],
    'GI' => [ // Gibraltar
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '350',
        ]
    ],
    'GL' => [ // Greenland
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '299',
        ]
    ],
    'GM' => [ // Gambia
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '220',
        ]
    ],
    'GN' => [ // Guinea
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '',
        ]
    ],
    'GP' => [ // Guadeloupe
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '590',
        ]
    ],
    'GQ' => [ // Equatorial Guinea
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '240',
        ]
    ],
    'GR' => [ // Greece
        'n6l' => [
            'pattern' => '/^\d{10}/',
        ],
        'epp' => [
            'idc' => '30',
        ]
    ],
    'GS' => [ // South Georgia and the South Sandwich Islands
        'n6l' => [
            'pattern' => '/^\d{5}/',
        ],
        'epp' => [
            'idc' => '500',
        ]
    ],
    'GT' => [ // Guatemala
        'n6l' => [
            'pattern' => '/^([24-7])[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '502',
        ]
    ],
    'GU' => [ // Guam (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(671)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'GW' => [ // Guinea-Bissau
        'n6l' => [
            'pattern' => '/^((44)|(9[5-7]))[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '245',
        ]
    ],
    'GY' => [ // Guyana
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '592',
        ]
    ],
    'HK' => [ // Hong Kong
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '852',
        ]
    ],
    'HM' => [ // Heard Island and McDonald Islands
        'n6l' => [
            'pattern' => '/^(0\d{3})[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1-$2-$3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '672',
        ]
    ],
    'HN' => [ // Honduras
        'n6l' => [
            'pattern' => '/^([237-9])[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '504',
        ]
    ],
    'HR' => [ // Croatia
        'n6l' => [
            'pattern' => '/^\d{6,10}/',
        ],
        'epp' => [
            'idc' => '385',
        ]
    ],
    'HT' => [ // Haiti
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '509',
        ]
    ],
    'HU' => [ // Hungary
        'n6l' => [
            'pattern' => '/^(06)?[-. ]?(\d{1,2})[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '36',
        ]
    ],
    'ID' => [ // Indonesia
        'n6l' => [
            'pattern' => '/^\d{11,12}/',
        ],
        'epp' => [
            'idc' => '62',
        ]
    ],
    'IE' => [ // Ireland
        'n6l' => [
            'pattern' => '/^0\d{6,10}/',
        ],
        'epp' => [
            'idc' => '353',
        ]
    ],
    'IL' => [ // Israel
        'n6l' => [
            'pattern' => '/^\d{8,9}/',
        ],
        'epp' => [
            'idc' => '972',
        ]
    ],
    'IM' => [ // Isle of Man (GB numbering plan)
        'n6l' => [
            'pattern' => '/^((\()?)(0\d{2,4})(?(2)\))([-. ]?((\d){3,4}))([-. ]?((\d){3,4}))(?:[-. ]?(x|#).+)?/',
            'replacement' => '$3 $5$8 $10',
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '44',
        ]
    ],
    'IN' => [ // India
        'n6l' => [
            'pattern' => '/^\d{10}/',
        ],
        'epp' => [
            'idc' => '91',
        ]
    ],
    'IO' => [ // British Indian Ocean Territory
        'n6l' => [
            'pattern' => '/^(3[78]\d)[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '246',
        ]
    ],
    'IQ' => [ // Iraq
        'n6l' => [
            'pattern' => '/^\d{10}/',
        ],
        'epp' => [
            'idc' => '964',
        ]
    ],
    'IR' => [ // Iran
        'n6l' => [
            'pattern' => '/^\d{5,10}/',
        ],
        'epp' => [
            'idc' => '98',
        ]
    ],
    'IS' => [ // Iceland
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '354',
        ]
    ],
    'IT' => [ // Italy
        'n6l' => [
            'pattern' => '/^\d{6,10}/',
        ],
        'epp' => [
            'idc' => '39',
        ]
    ],
    'JE' => [ // Jersey (GB numbering plan)
        'n6l' => [
            'pattern' => '/^((\()?)(0\d{2,4})(?(2)\))([-. ]?((\d){3,4}))([-. ]?((\d){3,4}))(?:[-. ]?(x|#).+)?/',
            'replacement' => '$3 $5$8 $10',
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '44',
        ]
    ],
    'JM' => [ // Jamaica (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(658|876)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'JO' => [ // Jordan
        'n6l' => [
            'pattern' => '/^\d{8,10}/',
        ],
        'epp' => [
            'idc' => '962',
        ]
    ],
    'JP' => [ // Japan
        'n6l' => [
            'pattern' => '/^\d{9,10}/',
        ],
        'epp' => [
            'idc' => '81',
        ]
    ],
    'KE' => [ // Kenya
        'n6l' => [
            'pattern' => '/^\d{7,12}/',
        ],
        'epp' => [
            'idc' => '254',
        ]
    ],
    'KG' => [ // Kyrgyzstan
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '996',
        ]
    ],
    'KH' => [ // Cambodia
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '855',
        ]
    ],
    'KI' => [ // Kiribati
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '686',
        ]
    ],
    'KM' => [ // Comoros
        'n6l' => [
            'pattern' => '/^\d{7}/',
        ],
        'epp' => [
            'idc' => '269',
        ]
    ],
    'KN' => [ // Saint Kitts and Nevis (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(869)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'KP' => [ // North Korea
        'n6l' => [
            'pattern' => '/^(2((18\d{3})|(((381)|(77[12]))\d{4})|(88[01235])\d{13}))|^(195\d{7})|^(((3[19])|(4[159])|(5[37])|(6[17])|(7[39]))\d{6})|^(8529\d{4})/',
        ],
        'epp' => [
            'idc' => '850',
        ]
    ],
    'KR' => [ // South Korea
        'n6l' => [
            'pattern' => '/^\d{8,10}/',
        ],
        'epp' => [
            'idc' => '82',
        ]
    ],
    'KW' => [ // Kuwait
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '965',
        ]
    ],
    'KY' => [ // Cayman Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(345)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'KZ' => [ // Kazakhstan
        'n6l' => [
            'pattern' => '/^([67]\d{2})[-. ]?(\d{3})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2-$3-$4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '7',
        ]
    ],
    'LA' => [ // Laos
        'n6l' => [
            'pattern' => '/^(\d{8}|\d{10})/',
        ],
        'epp' => [
            'idc' => '856',
        ]
    ],
    'LB' => [ // Lebanon
        'n6l' => [
            'pattern' => '/^\d{7,8}/',
        ],
        'epp' => [
            'idc' => '961',
        ]
    ],
    'LC' => [ // Saint Lucia (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(758)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'LI' => [ // Liechtenstein
        'n6l' => [
            'pattern' => '/^(\d{7}|\d{9})/',
        ],
        'epp' => [
            'idc' => '423',
        ]
    ],
    'LK' => [ // Sri Lanka
        'n6l' => [
            'pattern' => '/^\d{9,10}/',
        ],
        'epp' => [
            'idc' => '94',
        ]
    ],
    'LR' => [ // Liberia
        'n6l' => [
            'pattern' => '/^\(?(?|(33)|(55)|(77)|(88))\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '($1) $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '231',
        ]
    ],
    'LS' => [ // Lesotho
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '266',
        ]
    ],
    'LT' => [ // Lithuania
        'n6l' => [
            'pattern' => '/^([3-9]\d{,2})[-. ]?(\d{2,3})[-. ]?(\d{3,4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '370',
        ]
    ],
    'LU' => [ // Luxembourg
        'n6l' => [
            'pattern' => '/^\d{6,9}/',
        ],
        'epp' => [
            'idc' => '352',
        ]
    ],
    'LV' => [ // Latvia
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '371',
        ]
    ],
    'LY' => [ // Libya
        'n6l' => [
            'pattern' => '/^\d{8,9}/',
        ],
        'epp' => [
            'idc' => '218',
        ]
    ],
    'MA' => [ // Morocco
        'n6l' => [
            'pattern' => '/^(0\d{4})[-. ]?(\d{5})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '212',
        ]
    ],
    'MC' => [ // Monaco
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2,3})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '377',
        ]
    ],
    'MD' => [ // Moldova
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '373',
        ]
    ],
    'ME' => [ // Montenegro
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ]?(\d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '382',
        ]
    ],
    'MF' => [ // Saint Martin (French part)
        'n6l' => [
            'pattern' => '/^(0)[-. ]?(5[69]0)[-. ]?(\d{6})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '590',
        ]
    ],
    'MG' => [ // Madagascar
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ]?(d{2})[-. ]?(\d{5})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '261',
        ]
    ],
    'MH' => [ // Marshall Islands
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '692',
        ]
    ],
    'MK' => [ // Macedonia
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ]?(d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '389',
        ]
    ],
    'ML' => [ // Mali
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '223',
        ]
    ],
    'MM' => [ // Myanmar
        'n6l' => [
            'pattern' => '/^\d{9,10}/',
        ],
        'epp' => [
            'idc' => '95',
        ]
    ],
    'MN' => [ // Mongolia
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(d{3})[-. ]?(\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '976',
        ]
    ],
    'MO' => [ // Macau
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '853',
        ]
    ],
    'MP' => [ // Northern Mariana Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(670)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'MQ' => [ // Martinique
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '596',
        ]
    ],
    'MR' => [ // Mauritania
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '222',
        ]
    ],
    'MS' => [ // Montserrat (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(664)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'MT' => [ // Malta
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '356',
        ]
    ],
    'MU' => [ // Mauritius
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '230',
        ]
    ],
    'MV' => [ // Maldives
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '960',
        ]
    ],
    'MW' => [ // Malawi
        'n6l' => [
            'pattern' => '/^\d{8,12}/',
        ],
        'epp' => [
            'idc' => '265',
        ]
    ],
    'MX' => [ // Mexico
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '52',
        ]
    ],
    'MY' => [ // Malaysia
        'n6l' => [
            'pattern' => '/^\d{10,11}/',
        ],
        'epp' => [
            'idc' => '60',
        ]
    ],
    'MZ' => [ // Mozambique
        'n6l' => [
            'pattern' => '/^\d{8,9}/',
        ],
        'epp' => [
            'idc' => '258',
        ]
    ],
    'NA' => [ // Namibia
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'numeric' => '516',
        ]
    ],
    'NC' => [ // New Caledonia
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{3})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '687',
        ]
    ],
    'NE' => [ // Niger
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '227',
        ]
    ],
    'NF' => [ // Norfolk Island
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '672',
        ]
    ],
    'NG' => [ // Nigeria
        'n6l' => [
            'pattern' => '/^\d{9,11}/',
        ],
        'epp' => [
            'idc' => '234',
        ]
    ],
    'NI' => [ // Nicaragua
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '505',
        ]
    ],
    'NL' => [ // Netherlands
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '31',
        ]
    ],
    'NO' => [ // Norway
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '47',
        ]
    ],
    'NP' => [ // Nepal
        'n6l' => [
            'pattern' => '/^(\d{1})[-. ]?(\d{4})[-. ]?(d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '977',
        ]
    ],
    'NR' => [ // Nauru
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '674',
        ]
    ],
    'NU' => [ // Niue
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '683',
        ]
    ],
    'NZ' => [ // New Zealand
        'n6l' => [
            'pattern' => '/^\d{8,10}/',
        ],
        'epp' => [
            'idc' => '64',
        ]
    ],
    'OM' => [ // Oman
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '968',
        ]
    ],
    'PA' => [ // Panama
        'n6l' => [
            'pattern' => '/^(6?\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '507',
        ]
    ],
    'PE' => [ // Peru
        'n6l' => [
            'pattern' => '/^[09]\d{6,8}/',
        ],
        'epp' => [
            'idc' => '51',
        ]
    ],
    'PF' => [ // French Polynesia
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '689',
        ]
    ],
    'PG' => [ // Papua New Guinea
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '675',
        ]
    ],
    'PH' => [ // Philippines
        'n6l' => [
            'pattern' => '/^(0((2)|(9)\d{2}|(\d{2})))[-. ]?((?(3)\d{4}|\d{3}))[-. ]?(\d{4})/',
            'replacement' => '$1-$6-$7',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '63',
        ]
    ],
    'PK' => [ // Pakistan
        'n6l' => [
            'pattern' => '/^\(?(0\d{2,4})\)?[-. ]?(\d{7,8})/',
            'replacement' => '($1) $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '92',
        ]
    ],
    'PL' => [ // Poland
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(d{7})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '48',
        ]
    ],
    'PM' => [ // Saint Pierre and Miquelon
        'n6l' => [
            'pattern' => '/^(\d{1})[-. ](\d{2})[-. ](\d{2})[-. ](\d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4 $5',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '508',
        ]
    ],
    'PN' => [ // Pitcairn Islands (New Zealand numbering plan)
        'n6l' => [
            'pattern' => '/^\d{8,10}/',
        ],
        'epp' => [
            'idc' => '64',
        ]
    ],
    'PR' => [ // Puerto Rico (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(787|939)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'PS' => [ // State of Palestine
        'n6l' => [
            'pattern' => '/^(\d{2,3})[-. ](\d{3})[-. ](\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '970',
        ]
    ],
    'PT' => [ // Portugal
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '351',
        ]
    ],
    'PW' => [ // Palau
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '680',
        ]
    ],
    'PY' => [ // Paraguay
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '595',
        ]
    ],
    'QA' => [ // Qatar
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '947',
        ]
    ],
    'RE' => [ // Réunion (French numbering plan)
        'n6l' => [
            'pattern' => '/^(0[1-9])[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '262',
        ]
    ],
    'RO' => [ // Romania
        'n6l' => [
            'pattern' => '/^\d{6,9}/',
        ],
        'epp' => [
            'idc' => '40',
        ]
    ],
    'RS' => [ // Serbia
        'n6l' => [
            'pattern' => '/^\d{6,12}/',
        ],
        'epp' => [
            'idc' => '381',
        ]
    ],
    'RU' => [ // Russia
        'n6l' => [
            'pattern' => '/^([3-589]\d{2})[-. ]?(\d{3})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2-$3-$4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '7',
        ]
    ],
    'RW' => [ // Rwanda
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '250',
        ]
    ],
    'SA' => [ // Saudi Arabia
        'n6l' => [
            'pattern' => '/^\d{9,12}/',
        ],
        'epp' => [
            'idc' => '966',
        ]
    ],
    'SB' => [ // Solomon Islands
        'n6l' => [
            'pattern' => '/^(\d{5}|\d{7})/',
        ],
        'epp' => [
            'idc' => '677',
        ]
    ],
    'SC' => [ // Seychelles
        'n6l' => [
            'pattern' => '/^(\d{1})[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '248',
        ]
    ],
    'SD' => [ // Sudan
        'n6l' => [
            'pattern' => '/^\d{9}/',
        ],
        'epp' => [
            'idc' => '249',
        ]
    ],
    'SE' => [ // Sweden
        'n6l' => [
            'pattern' => '/^0\d{6, 12}/',
        ],
        'epp' => [
            'idc' => '46',
        ]
    ],
    'SG' => [ // Singapore
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '65',
        ]
    ],
    'SH' => [ // Saint Helena, Ascension and Tristan da Cunha
        'n6l' => [
            'pattern' => '/^\d{5}/',
        ],
        'epp' => [
            'idc' => '290',
        ]
    ],
    'SI' => [ // Slovenia
        'n6l' => [
            'pattern' => '/^(0\d{1})[-. ]?(\d{3})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '386',
        ]
    ],
    'SJ' => [ // Svalbard and Jan Mayen (Norwegian numbering plan)
        'n6l' => [
            'pattern' => '/^(79)[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '47',
        ]
    ],
    'SK' => [ // Slovakia
        'n6l' => [
            'pattern' => '/^\d{12}/',
        ],
        'epp' => [
            'idc' => '421',
        ]
    ],
    'SL' => [ // Sierra Leone
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '232',
        ]
    ],
    'SM' => [ // San Marino
        'n6l' => [
            'pattern' => '/^\d{6,10}/',
        ],
        'epp' => [
            'idc' => '378',
        ]
    ],
    'SN' => [ // Senegal
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '221',
        ]
    ],
    'SO' => [ // Somalia
        'n6l' => [
            'pattern' => '/^\d{6,9}/',
        ],
        'epp' => [
            'idc' => '252',
        ]
    ],
    'SR' => [ // Suriname
        'n6l' => [
            'pattern' => '/^\d{6,7}/',
        ],
        'epp' => [
            'idc' => '597',
        ]
    ],
    'SS' => [ // South Sudan
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '211',
        ]
    ],
    'ST' => [ // São Tomé and Príncipe
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '239',
        ]
    ],
    'SV' => [ // El Salvador
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '503',
        ]
    ],
    'SX' => [ // Sint Maarten (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(721)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'SY' => [ // Syria
        'n6l' => [
            'pattern' => '/^(0\d{3})[-. ]?(\d{4})[-. ]?(d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '963',
        ]
    ],
    'SZ' => [ // Eswatini
        'n6l' => [
            'pattern' => '/^\d{8}/',
        ],
        'epp' => [
            'idc' => '268',
        ]
    ],
    'TC' => [ // Turks and Caicos Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(649)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'TD' => [ // Chad
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '235',
        ]
    ],
    'TG' => [ // Togo
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '228',
        ]
    ],
    'TH' => [ // Thailand
        'n6l' => [
            'pattern' => '/^\d{8,9}/',
        ],
        'epp' => [
            'idc' => '66',
        ]
    ],
    'TJ' => [ // Tajikistan
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '992',
        ]
    ],
    'TK' => [ // Tokelau
        'n6l' => [
            'pattern' => '/^\d{4,7}/',
        ],
        'epp' => [
            'idc' => '690',
        ]
    ],
    'TL' => [ // East Timor / Timor-Leste
        'n6l' => [
            'pattern' => '/^(\d{3,4})[-. ]?(\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '670',
        ]
    ],
    'TM' => [ // Turkmenistan
        'n6l' => [
            'pattern' => '/^(8)[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1-$2-$3-$4-$5',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '993',
        ]
    ],
    'TN' => [ // Tunisia
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '216',
        ]
    ],
    'TO' => [ // Tonga
        'n6l' => [
            'pattern' => '/^(\d{5})|(d{7})/',
        ],
        'epp' => [
            'idc' => '676',
        ]
    ],
    'TR' => [ // Turkey
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ]?(\d{3})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '90',
        ]
    ],
    'TT' => [ // Trinidad and Tobago (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(868)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'TV' => [ // Tuvalu
        'n6l' => [
            'pattern' => '/^(\d{5,7})/',
        ],
        'epp' => [
            'idc' => '688',
        ]
    ],
    'TW' => [ // Taiwan
        'n6l' => [
            'pattern' => '/^(\d{8,9})/',
        ],
        'epp' => [
            'idc' => '886',
        ]
    ],
    'TZ' => [ // Tanzania
        'n6l' => [
            'pattern' => '/^(\d{9})/',
        ],
        'epp' => [
            'idc' => '255',
        ]
    ],
    'UA' => [ // Ukraine
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{2})[-. ]?(d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '380',
        ]
    ],
    'UG' => [ // Uganda
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(\d{3})[-. ]?(d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '256',
        ]
    ],
    'UM' => [ // United States Minor Outlying Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(\d{3})\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'US' => [ // United States of America
        'n6l' => [
            'pattern' => '/^\(?(\d{3})\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'UY' => [ // Uruguay
        'n6l' => [
            'pattern' => '/^(\d{4})[-. ]?(d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '598',
        ]
    ],
    'UZ' => [ // Uzbekistan
        'n6l' => [
            'pattern' => '/^(\d{2})[-. ]?(d{7})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '998',
        ]
    ],
    'VA' => [ // Vatican City / Holy See
        'n6l' => [
            'pattern' => '/^(06)[-. ]?(698\d{5})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '379',
        ]
    ],
    'VC' => [ // Saint Vincent and the Grenadines (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(784)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'VE' => [ // Venezuela
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{3})[-. ](\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '58',
        ]
    ],
    'VG' => [ // British Virgin Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(284)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'VI' => [ // United States Virgin Islands (US numbering plan)
        'n6l' => [
            'pattern' => '/^\(?(340)\)?[-. ]?(\d{3})[-. ]?(\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '1',
        ]
    ],
    'VN' => [ // Vietnam
        'n6l' => [
            'pattern' => '/^(\d{5})[-. ](\d{4})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '84',
        ]
    ],
    'VU' => [ // Vanuatu
        'n6l' => [
            'pattern' => '/^\d{3,7}/',
        ],
        'epp' => [
            'idc' => '678',
        ]
    ],
    'WF' => [ // Wallis and Futuna
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '681',
        ]
    ],
    'WS' => [ // Samoa
        'n6l' => [
            'pattern' => '/^\d{5,7}/',
        ],
        'epp' => [
            'idc' => '685',
        ]
    ],
    'YE' => [ // Yemen
        'n6l' => [
            'pattern' => '/^(\d{1,3})[-. ](\d{3})[-. ](\d{3})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '967',
        ]
    ],
    'YT' => [ // Mayotte (French numbering plan)
        'n6l' => [
            'pattern' => '/^(0[1-9])[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})[-. ]?(\d{2})/',
            'replacement' => '$1 $2 $3 $4',
        ],
        'epp' => [
            'pattern' => '/^0|\D/',
            'idc' => '262',
        ]
    ],
    'ZA' => [ // South Africa
        'n6l' => [
            'pattern' => '/^(0\d{2})[-. ](\d{3})[-. ](\d{4})/',
            'replacement' => '$1 $2 $3',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '27',
        ]
    ],
    'ZM' => [ // Zambia
        'n6l' => [
            'pattern' => '/^(\d{3})[-. ](\d{6})/',
            'replacement' => '$1 $2',
        ],
        'epp' => [
            'pattern' => '/\D/',
            'idc' => '260',
        ]
    ],
    'ZW' => [ // Zimbabwe
        'n6l' => [
            'pattern' => '/^\d{9,10}/',
        ],
        'epp' => [
            'idc' => '263',
        ]
    ],
];
