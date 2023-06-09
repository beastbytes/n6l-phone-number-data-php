<?php
/**
 * Patterns used to validate national phone numbers indexed by
 * {@link https://www.iso.org/iso-3166-country-codes.html ISO 3166-1 alpha-2 country code}
 *
 * Patterns are derived from {@link https://www.itu.int/oth/T0202.aspx?parent=T0202 National Numbering Plans}.
 *
 * A country definition is an array. The 'pattern' key is required; its value is the regex to match the country's
 * national phone numbers. The 'replacement' key is optional; if present its value is the replacement string for
 * preg_replace() to format the phone number to a standard format for that country
 */
return [
    'AD' => [ // Andorra
        'pattern' => '/(([3678]\d{2})|(690))[\-\. ]?(\d{3})(?(3)[\-\. ]?(\d{3}))/',
        'replacement' => '$1 $2 $3'
    ],
    'AE' => [ // United Arab Emirates
        'pattern' => '/^0(([234679])|(5[02568]))((?(2)[2-8]\d{2}(?<!00)\d{4}|(?(3)\d{7})))/',
    ],
    'AF' => [ // Afghanistan
        'pattern' => '/(7((2)|(3)|(4)|6))[\-\. ]?((?(3)8|(?(4)0|(?(5)[89]|(?(6)4)))\d{6})/',
        'replacement' => '$1 $6'
    ],
    'AG' => [ // Antigua and Barbuda (US numbering plan)
        'pattern' => '/\(?(268)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'AI' => [ // Anguilla (US numbering plan)
        'pattern' => '/\(?(264)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'AL' => [ // Albania
        'pattern' => '/(\d{4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'AM' => [ // Armenia
        'pattern' => '/\d{8}/',
    ],
    'AO' => [  // Angola
        'pattern' => '/(\d{3})[\-\. ]?(\d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'AR' => [ // Argentina
        'pattern' => '/\d{10}/',
    ],
    'AS' => [ // American Samoa (US numbering plan)
        'pattern' => '/\(?(684)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'AT' => [ // Austria
        'pattern' => '/(\d{3})[\-\. ]?(\d{3})[\-\. ]?(\d{3})([\-\. ]?(\d{3}))?([\-\. ]?(\d{3}))?/',
        'replacement' => '$1 $2 $3 $5 $7'
    ],
    'AU' => [ // Australia
        'pattern' => '/\d{9}/',
    ],
    'AW' => [ // Aruba
        'pattern' => '/\d{7}/',
    ],
    'AX' => [ // Åland Islands (Finnish numbering plan)
        'pattern' => '/\d{7,11}/',
    ],
    'AZ' => [ // Azerbaijan
        'pattern' => '/\d{9}/',
    ],
    'BA' => [ // Bosnia and Herzegovina
        'pattern' => '/\d{6,9}/',
    ],
    'BB' => [ // Barbados (US numbering plan)
        'pattern' => '/\(?(246)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'BD' => [ // Bangladesh
        'pattern' => '/0\d{10,11}/',
    ],
    'BE' => [ // Belgium
        'pattern' => '/0\d{8,9}/',
    ],
    'BF' => [ // Burkina Faso
        'pattern' => '/\d{8}/',
    ],
    'BG' => [ // Bulgaria
        'pattern' => '/\d{8,9}/',
    ],
    'BH' => [ // Bahrain
        'pattern' => '/\d{8}/',
    ],
    'BI' => [ // Burundi
        'pattern' => '/\d{8}/',
    ],
    'BJ' => [ // Benin
        'pattern' => '/\d{8}/',
    ],
    'BL' => [ // Saint Barthélemy (French numbering plan)
        'pattern' => '/(0[1-9])[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'BM' => [ // Bermuda (US numbering plan)
        'pattern' => '/\(?(441)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'BN' => [ // Brunei
        'pattern' => '/(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'BO' => [ // Bolivia
        'pattern' => '/\d{8}/',
    ],
    'BQ' => [ // Bonaire, Sint Eustatius and Saba
        'pattern' => '/([347]\d{2}[\-\. ]?(\d{4}/',
        'replacement' => '$1 $2'
    ],
    'BR' => [ // Brazil
        'pattern' => '/(\d{2})[\-\. ]?(\d{4,5}[\-\. ]?(\d{4}/',
        'replacement' => '$1 $2 $3'
    ],
    'BS' => [ // The Bahamas (US numbering plan)
        'pattern' => '/\(?(242)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'BT' => [ // Bhutan
        'pattern' => '/(\d)[\-\. ]?(\d{2})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'BV' => [ // Bouvet Island (Norwegian numbering plan)
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'BW' => [ // Botswana
        'pattern' => '/\d{7,8}/',
    ],
    'BY' => [ // Belarus
        'pattern' => '/\d{6,11}/',
    ],
    'BZ' => [ // Belize
        'pattern' => '/\d{7}/',
    ],
    'CA' => [ // Canada (US numbering plan)
        'pattern' => '/\(?(\d{3})\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'CC' => [ // Cocos (Keeling) Islands (Australian numbering plan)
        'pattern' => '/\d{9}/',
    ],
    'CD' => [ // Democratic Republic of the Congo
        'pattern' => '/\d{9}/',
    ],
    'CF' => [ // Central African Republic
        'pattern' => '/\(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'CG' => [ // Republic of the Congo
        'pattern' => '/\(d{2})[\-\. ]?(\d{3})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'CH' => [ // Switzerland
        'pattern' => '/(2[12467]|3[1234]|4[134]|5[12568]|6[12]|7[13456789]|81)[\-\. ]?(\d{9})/',
        'replacement' => '$1 $2'
    ],
    'CI' => [ // Ivory Coast / Côte d'Ivoire
        'pattern' => '/[02][157]\d{8}/',
    ],
    'CK' => [ // Cook Islands
        'pattern' => '/((2)|(\d{2}))[\-\. ]?((?(2)\d{5}|(?(3)\d{4})))/',
        'replacement' => '$1 $4'
    ],
    'CL' => [ // Chile
        'pattern' => '/(\d{3})[\-\. ]?(\d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'CM' => [ // Cameroon
        'pattern' => '/\(d{3})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'CN' => [ // China
        'pattern' => '/\d{11}(\d{2})?/',
    ],
    'CO' => [ // Colombia
        'pattern' => '/(\d(\d{2})?)[\-\. ]?\d{7}/',
        'replacement' => '$1 $2'
    ],
    'CR' => [ // Costa Rica
        'pattern' => '/(\d{4})[\-\. ]?\d{4}/',
        'replacement' => '$1 $2'
    ],
    'CU' => [ // Cuba
        'pattern' => '/\d{6,8}/',
    ],
    'CV' => [ // Cape Verde
        'pattern' => '/([259]\d{2})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'CW' => [ // Curaçao
        'pattern' => '/(9?)[\-\. ]?([4-8]\d{2})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'CX' => [ // Christmas Island (Australian numbering plan)
        'pattern' => '/\d{9}/',
    ],
    'CY' => [ // Cyprus
        'pattern' => '/\d{8}/',
    ],
    'CZ' => [ // Czech Republic
        'pattern' => '/\d{9}/',
    ],
    'DE' => [ // Germany
        'pattern' => '/(0(15\d{2}|16[23]|17[0-57-9])|(15\d{3})|(160)|(176)|([2-9]\d{2})|([2-9]\d{3})|([2-9]\d{4})|(30|69|89))[\-\. ]?((?(2)\d{7}|(?(3)\d{6}|(?(4)\d{7,8}|(?(5)\d{8}|(?(6)\d{3,8}|(?(7)\d{2,7}|(?(8)\d{1,6}|(?(9)\d{3,9})))))))))/',
        'replacement' => '$1 $10'
    ],
    'DJ' => [ // Djibouti
        'pattern' => '/\(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'DK' => [ // Djibouti
        'pattern' => '/\(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'DM' => [ // Dominica (US numbering plan)
        'pattern' => '/\(?(767)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'DO' => [ // Dominican Republic (US numbering plan)
        'pattern' => '/\(?(809|829|849)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'DZ' => [ // Algeria
        'pattern' => '/(0\d{1,2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})?/',
        'replacement' => '$1 $2 $3 $4 $5'
    ],
    'EC' => [ // Ecuador
        'pattern' => '/\d{7,8}/',
    ],
    'EE' => [ // Estonia
        'pattern' => '/\d{8}/',
    ],
    'EG' => [ // Egypt
        'pattern' => '/\d{9,10}/',
    ],
    'EH' => [ // Western Sahara (Moroccan numbering plan)
        'pattern' => '/(0528[89])[\-\. ]?(\d{5})/',
        'replacement' => '$1 $2'
    ],
    'ER' => [ // Eritrea
        'pattern' => '/(0[17])[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'ES' => [ // Spain
        'pattern' => '/((6\d{2}|[78][1-9]\d|9[1-8]\d))[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'ET' => [ // Ethiopia
        'pattern' => '/(0\d{2})[\-\. ](\d{7})/',
        'replacement' => '$1 $2'
    ],
    'FI' => [ // Finland
        'pattern' => '/\d{7,11}/',
    ],
    'FJ' => [ // Fiji
        'pattern' => '/[3689]\d{6}/',
    ],
    'FK' => [ // Falkland Islands
        'pattern' => '/[2-9]\d{4}/',
    ],
    'FM' => [ // Micronesia
        'pattern' => '/\(d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'FO' => [ // Faroe Islands
        'pattern' => '/\(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3'
    ],
    'FR' => [ // France - use '^(0[1-9])(([\-\. ]?\d{2}){4})' if only match is needed
        'pattern' => '/(0[1-9])[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'GA' => [ // Gabon
        'pattern' => '/(0\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'GB' => [ // United Kingdom
        'pattern' => '/((\()?)(0\d{2,4})(?(2)\))([\-\. ]?((\d){3,4}))([\-\. ]?((\d){3,4}))(?:[\-\. ]?(x|#).+)?/',
        'replacement' => '$3 $5$8 $10'
    ],
    'GD' => [ // Grenada (US numbering plan)
        'pattern' => '/\(?(473)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'GE' => [ // Georgia
        'pattern' => '/\d{9}/',
    ],
    'GF' => [ // French Guiana
        'pattern' => '/\d{9}/',
    ],
    'GG' => [ // Guernsey (GB numbering plan)
        'pattern' => '/((\()?)(0\d{2,4})(?(2)\))([\-\. ]?((\d){3,4}))([\-\. ]?((\d){3,4}))(?:[\-\. ]?(x|#).+)?/',
        'replacement' => '$3 $5$8 $10'
    ],
    'GH' => [ // Ghana
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'GI' => [ // Gibraltar
        'pattern' => '/\d{8}/',
    ],
    'GL' => [ // Greenland
        'pattern' => '/\(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3'
    ],
    'GM' => [ // Gambia
        'pattern' => '/\(d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'GN' => [ // Guinea
        'pattern' => '/(\d{3})[\-\. ]?(\d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'GP' => [ // Guadeloupe
        'pattern' => '/\d{9}/',
    ],
    'GQ' => [ // Equatorial Guinea
        'pattern' => '/\d{9}/',
    ],
    'GR' => [ // Greece
        'pattern' => '/\d{10}/',
    ],
    'GS' => [ // South Georgia and the South Sandwich Islands
        'pattern' => '/\d{5}/',
    ],
    'GT' => [ // Guatemala
        'pattern' => '/([24-7])[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'GU' => [ // Guam (US numbering plan)
        'pattern' => '/\(?(671)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'GW' => [ // Guinea-Bissau
        'pattern' => '/((44)|(9[5-7]))[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'GY' => [ // Guyana
        'pattern' => '/\(d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'HK' => [ // Hong Kong
        'pattern' => '/\(d{4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'HM' => [ // Heard Island and McDonald Islands
        'pattern' => '/(0\d{3})[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1-$2-$3'
    ],
    'HN' => [ // Honduras
        'pattern' => '/([237-9])[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'HR' => [ // Croatia
        'pattern' => '/\d{6,10}/',
    ],
    'HT' => [ // Haiti
        'pattern' => '/\(d{4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'HU' => [ // Hungary
        'pattern' => '/(06)?[\-\. ]?(\d{1,2})[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'ID' => [ // Indonesia
        'pattern' => '/\d{11,12}/',
    ],
    'IE' => [ // Ireland
        'pattern' => '/0\d{6,10}/',
    ],
    'IL' => [ // Israel
        'pattern' => '/\d{8,9}/',
    ],
    'IM' => [ // Isle of Man (GB numbering plan)
        'pattern' => '/((\()?)(0\d{2,4})(?(2)\))([\-\. ]?((\d){3,4}))([\-\. ]?((\d){3,4}))(?:[\-\. ]?(x|#).+)?/',
        'replacement' => '$3 $5$8 $10'
    ],
    'IN' => [ // India
        'pattern' => '/\d{10}/',
    ],
    'IO' => [ // British Indian Ocean Territory
        'pattern' => '/(3[78]\d)[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'IQ' => [ // Iraq
        'pattern' => '/\d{10}/',
    ],
    'IR' => [ // Iran
        'pattern' => '/\d{5,10}/',
    ],
    'IS' => [ // Iceland
        'pattern' => '/\(d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'IT' => [ // Italy
        'pattern' => '/\d{6,10}/',
    ],
    'JE' => [ // Jersey (GB numbering plan)
        'pattern' => '/((\()?)(0\d{2,4})(?(2)\))([\-\. ]?((\d){3,4}))([\-\. ]?((\d){3,4}))(?:[\-\. ]?(x|#).+)?/',
        'replacement' => '$3 $5$8 $10'
    ],
    'JM' => [ // Jamaica (US numbering plan)
        'pattern' => '/\(?(658|876)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'JO' => [ // Jordan
        'pattern' => '/\d{8,10}/',
    ],
    'JP' => [ // Japan
        'pattern' => '/\d{9,10}/',
    ],
    'KE' => [ // Kenya
        'pattern' => '/\d{7,12}/',
    ],
    'KG' => [ // Kyrgyzstan
        'pattern' => '/\d{9}/',
    ],
    'KH' => [ // Cambodia
        'pattern' => '/\d{8}/',
    ],
    'KI' => [ // Kiribati
        'pattern' => '/\d{8}/',
    ],
    'KM' => [ // Comoros
        'pattern' => '/\d{7}/',
    ],
    'KN' => [ // Saint Kitts and Nevis (US numbering plan)
        'pattern' => '/\(?(869)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'KP' => [ // North Korea
        'pattern' => '/^(2((18\d{3})|(((381)|(77[12]))\d{4})|(88[01235])\d{13}))|^(195\d{7})|^(((3[19])|(4[159])|(5[37])|(6[17])|(7[39]))\d{6})|^(8529\d{4})/'
        ],
    'KR' => [ // South Korea
        'pattern' => '/\d{8,10}/',
    ],
    'KW' => [ // Kuwait
        'pattern' => '/\d{8}/',
    ],
    'KY' => [ // Cayman Islands (US numbering plan)
        'pattern' => '/\(?(345)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'KZ' => [ // Kazakhstan
        'pattern' => '^([67]\d{2})[\-\. ]?(\d{3})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2-$3-$4'
    ],
    'LA' => [ // Laos
        'pattern' => '/\d{8}|\d{10}/',
    ],
    'LB' => [ // Lebanon
        'pattern' => '/\d{7,8}/',
    ],
    'LC' => [ // Saint Lucia (US numbering plan)
        'pattern' => '/\(?(758)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'LI' => [ // Liechtenstein
        'pattern' => '/\d{7}|\d{9}/',
    ],
    'LK' => [ // Sri Lanka
        'pattern' => '/\d{9,10}/',
    ],
    'LR' => [ // Liberia
        'pattern' => '/\(?(?|(33)|(55)|(77)|(88))\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2 $3'
    ],
    'LS' => [ // Lesotho
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'LT' => [ // Lithuania
        'pattern' => '/([3-9]\d{,2})[\-\. ]?(\d{2,3})[\-\. ]?(\d{3,4})/',
        'replacement' => '$1 $2 $3'
    ],
    'LU' => [ // Luxembourg
        'pattern' => '/\d{6,9}/',
    ],
    'LV' => [ // Latvia
        'pattern' => '/(\d{4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'LY' => [ // Libya
        'pattern' => '/\d{8,9}/',
    ],
    'MA' => [ // Morocco
        'pattern' => '/(0\d{4})[\-\. ]?(\d{5})/',
        'replacement' => '$1 $2'
    ],
    'MC' => [ // Monaco
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2,3})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'MD' => [ // Moldova
        'pattern' => '/\(d{4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'ME' => [ // Montenegro
        'pattern' => '/\(0d{2})[\-\. ]?(d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'MF' => [ // Saint Martin (French part)
        'pattern' => '/(0)[\-\. ]?(5[69]0)[\-\. ]?(\d{6})/',
        'replacement' => '$1 $2 $3'
    ],
    'MG' => [ // Madagascar
        'pattern' => '/(0\d{2})[\-\. ]?(d{2})[\-\. ]?(\d{5})/',
        'replacement' => '$1 $2 $3'
    ],
    'MH' =>  [ // Marshall Islands
        'pattern' => '/\(d{3})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'MK' => [ // Macedonia
        'pattern' => '/(0\d{2})[\-\. ]?(d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'ML' => [ // Mali
        'pattern' => '/(\d{2})[\-\. ]?(d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'MM' => [ // Myanmar
        'pattern' => '/\d{9,10}/',
    ],
    'MN' => [ // Mongolia
        'pattern' => '/(\d{2})[\-\. ]?(d{3})[\-\. ]?(\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'MO' => [ // Macau
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'MP' => [ // Northern Mariana Islands (US numbering plan)
        'pattern' => '/\(?(670)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'MQ' => [ // Martinique
        'pattern' => '/\d{9}/',
    ],
    'MR' => [ // Mauritania
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'MS' => [ // Montserrat (US numbering plan)
        'pattern' => '/\(?(664)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'MT' => [ // Malta
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'MU' => [ // Mauritius
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'MV' => [ // Maldives
        'pattern' => '/(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'MW' => [ // Malawi
        'pattern' => '/\d{8,12}',
    ],
    'MX' => [ // Mexico
        'pattern' => '/(\d{2})[\-\. ]?(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'MY' => [ // Malaysia
        'pattern' => '/\d{10,11}/',
    ],
    'MZ' => [ // Mozambique
        'pattern' => '/\d{8,9}/',
    ],
    'NA' => [ // Namibia
        'pattern' => '/\d{9}/',
    ],
    'NC' => [ // New Caledonia
        'pattern' => '/(\d{3})[\-\. ]?(d{3})/',
        'replacement' => '$1 $2'
    ],
    'NE' => [ // Niger
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'NF' => [ // Norfolk Island
        'pattern' => '/(\d{2})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'NG' => [ // Nigeria
        'pattern' => '/\d{9,11}/',
    ],
    'NI' => [ // Nicaragua
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'NL' => [ // Netherlands
        'pattern' => '/(\d{3})[\-\. ]?(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'NO' => [ // Norway
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'NP' => [ // Nepal
        'pattern' => '/(\d{1})[\-\. ]?(\d{4})[\-\. ]?(d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'NR' => [ // Nauru
        'pattern' => '/(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'NU' => [ // Niue
        'pattern' => '/(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'NZ' => [ // New Zealand
        'pattern' => '/\d{8,10}/',
    ],
    'OM' => [ // Oman
        'pattern' => '/\d{8}/',
    ],
    'PA' => [ // Panama
        'pattern' => '/(6?\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'PE' => [ // Peru
        'pattern' => '/[09]\d{6,8}',
    ],
    'PF' => [ // French Polynesia
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'PG' => [ // Papua New Guinea
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'PH' => [ // Philippines
        'pattern' => '/(0((2)|(9)\d{2}|(\d{2})))[\-\. ]?((?(3)\d{4}|\d{3}))[\-\. ]?(\d{4})/',
        'replacement' => '$1-$6-$7'
    ],
    'PK' => [ // Pakistan
        'pattern' => '/\(?(0\d{2,4})\)?[\-\. ]?(\d{7,8})/',
        'replacement' => '($1) $2'
    ],
    'PL' => [ // Poland
        'pattern' => '/(\d{2})[\-\. ]?(d{7})/',
        'replacement' => '$1 $2'
    ],
    'PM' => [ // Saint Pierre and Miquelon
        'pattern' => '/(\d{1})[\-\. ](\d{2})[\-\. ](\d{2})[\-\. ](\d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4 $5'
    ],
    'PN' => [ // Pitcairn Islands (New Zealand numbering plan)
        'pattern' => '/\d{8,10}/',
    ],
    'PR' => [ // Puerto Rico (US numbering plan)
        'pattern' => '/\(?(787|939)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'PS' => [ // State of Palestine
        'pattern' => '/(\d{2,3})[\-\. ](\d{3})[\-\. ](\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'PT' => [ // Portugal
        'pattern' => '/(\d{3})[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'PW' => [ // Palau
        'pattern' => '/(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'PY' => [ // Paraguay
        'pattern' => '/(\d{3})[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'QA' => [ // Qatar
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'RE' => [ // Réunion (French numbering plan)
        'pattern' => '/(0[1-9])[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'RO' => [ // Romania
        'pattern' => '/\d{6,9}/',
    ],
    'RS' => [ // Serbia
        'pattern' => '/\d{6,12}/',
    ],
    'RU' => [ // Russia
        'pattern' => '^([3-589]\d{2})[\-\. ]?(\d{3})[\-\. ]?(\d{2})[\-\. ]?(\d{2})',
        'replacement' => '$1 $2-$3-$4'
    ],
    'RW' => [ // Rwanda
        'pattern' => '/(\d{3})[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'SA' => [ // Saudi Arabia
        'pattern' => '/\d{9,12}/',
    ],
    'SB' => [ // Solomon Islands
        'pattern' => '/\d{5}|\d{7}/',
    ],
    'SC' => [ // Seychelles
        'pattern' => '/(\d{1})[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'SD' => [ // Sudan
        'pattern' => '/\d{9}/',
    ],
    'SE' => [ // Sweden
        'pattern' => '/0\d{6, 12}/',
    ],
    'SG' => [ // Singapore
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'SH' => [ // Saint Helena, Ascension and Tristan da Cunha
        'pattern' => '/\d{5}/',
    ],
    'SI' => [ // Slovenia
        'pattern' => '/(0\d{1})[\-\. ]?(\d{3})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'SJ' => [ // Svalbard and Jan Mayen (Norwegian numbering plan)
        'pattern' => '/(79)[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'SK' => [ // Slovakia
        'pattern' => '/\d{12}/',
    ],
    'SL' => [ // Sierra Leone
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'SM' => [ // San Marino
        'pattern' => '/\d{6,10}/',
    ],
    'SN' => [ // Senegal
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'SO' => [ // Somalia
        'pattern' => '/\d{6,9}/',
    ],
    'SR' => [ // Suriname
        'pattern' => '/\d{6,7}/',
    ],
    'SS' => [ // South Sudan
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'ST' => [ // São Tomé and Príncipe
        'pattern' => '/(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'SV' => [ // El Salvador
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'SX' => [ // Sint Maarten (US numbering plan)
        'pattern' => '/\(?(721)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'SY' => [ // Syria
        'pattern' => '/(0\d{3})[\-\. ]?(\d{4})[\-\. ]?(d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'SZ' => [ // Eswatini
        'pattern' => '/\d{8}/',
    ],
    'TC' => [ // Turks and Caicos Islands (US numbering plan)
        'pattern' => '/\(?(649)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'TD' => [ // Chad
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'TG' => [ // Togo
        'pattern' => '/(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'TH' => [ // Thailand
        'pattern' => '/\d{8,9}/',
    ],
    'TJ' => [ // Tajikistan
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'TK' => [ // Tokelau
        'pattern' => '/\d{4,7}/',
    ],
    'TL' => [ // East Timor / Timor-Leste
        'pattern' => '/(\d{3,4})[\-\. ]?(\d{4})/',
        'replacement' => '$1 $2'
    ],
    'TM' => [ // Turkmenistan
        'pattern' => '/(8)[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1-$2-$3-$4-$5'
    ], // Turkmenistan
    'TN' => [ // Tunisia
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'TO' => [ // Tonga7
        'pattern' => '/(\d{5})|(d{7})/',
    ],
    'TR' => [ // Turkey
        'pattern' => '/(\d{3})[\-\. ]?(\d{3})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'TT' => [ // Trinidad and Tobago (US numbering plan)
        'pattern' => '/\(?(868)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'TV' => [ // Tuvalu
        'pattern' => '/(\d{5,7})/',
    ],
    'TW' => [ // Taiwan
        'pattern' => '/(\d{8,9})/',
    ],
    'TZ' => [ // Tanzania
        'pattern' => '/(\d{9})/',
    ],
    'UA' => [ // Ukraine
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{2})[\-\. ]?(d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'UG' => [ // Uganda
        'pattern' => '/(\d{2})[\-\. ]?(\d{3})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'UM' => [ // United States Minor Outlying Islands (US numbering plan)
        'pattern' => '/\(?(\d{3})\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'US' => [ // United States of America
        'pattern' => '/\(?(\d{3})\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'UY' => [ // Uruguay
        'pattern' => '/(\d{4})[\-\. ]?(d{4})/',
        'replacement' => '$1 $2'
    ],
    'UZ' => [ // Uzbekistan
        'pattern' => '/(\d{2})[\-\. ]?(d{7})/',
        'replacement' => '$1 $2'
    ],
    'VA' => [ // Vatican City / Holy See
        'pattern' => '/(06)[\-\. ]?(698\d{5})',
        'replacement' => '$1 $2'
    ],
    'VC' => [ // Saint Vincent and the Grenadines (US numbering plan)
        'pattern' => '/\(?(784)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'VE' => [ // Venezuela
        'pattern' => '/(\d{3})[\-\. ](\d{3})[\-\. ](\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'VG' => [ // British Virgin Islands (US numbering plan)
        'pattern' => '/\(?(284)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'VI' => [ // United States Virgin Islands (US numbering plan)
        'pattern' => '/\(?(340)\)?[\-\. ]?(\d{3})[\-\. ]?(\d{4})/',
        'replacement' => '($1) $2-$3'
    ],
    'VN' => [ // Vietnam
        'pattern' => '/(\d{5})[\-\. ](\d{4})/',
        'replacement' => '$1 $2'
    ],
    'VU' => [ // Vanuatu
        'pattern' => '/\d{3,7}/',
    ],
    'WF' => [ // Wallis and Futuna
        'pattern' => '/(\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2'
    ],
    'WS' => [ // Samoa
        'pattern' => '/\d{5,7}/',
    ],
    'YE' => [ // Yemen
        'pattern' => '/(\d{1,3})[\-\. ](\d{3})[\-\. ](\d{3})/',
        'replacement' => '$1 $2 $3'
    ],
    'YT' => [ // Mayotte (French numbering plan)
        'pattern' => '/(0[1-9])[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})[\-\. ]?(\d{2})/',
        'replacement' => '$1 $2 $3 $4'
    ],
    'ZA' => [ // South Africa
        'pattern' => '/(0\d{2})[\-\. ](\d{3})[\-\. ](\d{4})/',
        'replacement' => '$1 $2 $3'
    ],
    'ZM' => [ // Zambia
        'pattern' => '/(\d{3})[\-\. ](\d{6})/',
        'replacement' => '$1 $2'
    ],
    'ZW' => [ // Zimbabwe
        'pattern' => '/\d{9,10}/',
    ],
];
