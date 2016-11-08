<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          [12]\\d{6,8}|
          [3-57-9]\\d{8}|
          6\\d{5,8}
        ',
    'PossibleNumberPattern' => '\\d{6,9}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          (?:
            1[2-8]|
            2[2-69]|
            3[2-4]|
            4[1-468]|
            5[24-689]|
            6[1-3578]|
            7[14-7]|
            8[1-79]|
            9[145]
          )\\d{7}|
          [12]2\\d{5}
        ',
    'PossibleNumberPattern' => '\\d{6,9}',
    'ExampleNumber' => '123456789',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          (?:
            5[0137]|
            6[069]|
            7[2389]|
            88
          )\\d{7}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '512345678',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '800123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '70\\d{7}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '701234567',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '801\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '801234567',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '39\\d{7}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '391234567',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => '64\\d{4,7}',
    'PossibleNumberPattern' => '\\d{6,9}',
    'ExampleNumber' => '641234567',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'PL',
  'countryCode' => 48,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            [14]|
            2[0-57-9]|
            3[2-4]|
            5[24-689]|
            6[1-3578]|
            7[14-7]|
            8[1-79]|
            9[145]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(\\d{2})(\\d{1})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[12]2',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    2 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '
            26|
            39|
            5[0137]|
            6[0469]|
            7[02389]|
            8[08]
          ',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    3 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{2,3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '64',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    4 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '64',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
