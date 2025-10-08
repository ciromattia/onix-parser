<?php

namespace Ribal\Onix\CodeList;

use Ribal\Onix\Exception\InvalidCodeListCodeException;
use Ribal\Onix\Exception\InvalidCodeListLanguageException;
use Ribal\Onix\CodeList\CodeList220;
use Ribal\Onix\CodeList\CodeList79;
use Ribal\Onix\CodeList\CodeList98;
use Ribal\Onix\CodeList\CodeList143;
use Ribal\Onix\CodeList\CodeList242;
use Ribal\Onix\CodeList\CodeList184;
use Ribal\Onix\CodeList\CodeList176;
use Ribal\Onix\CodeList\CodeList196;
use Ribal\Onix\CodeList\CodeList76;
use Ribal\Onix\CodeList\CodeList99;

/**
 * CodeListPFF - Combined CodeList for ProductFormFeature
 *
 * Questa classe unisce i valori delle seguenti CodeList:
 * - CodeList220 (EPUB format versions)
 * - CodeList98 (Product form feature description: Color of cover)
 * - CodeList143 (US CPSIA or other international hazard warning)
 * - CodeList176 (Product form feature description: Text font)
 * - CodeList184 (Product form feature description: E-publication accessibility detail)
 * - CodeList196 (E-publication accessibility conformance level)
 * - CodeList76 (Product form detail)
 * - CodeList99 (Product form feature description: Binding or page edge color)
 * - CodeList242 (Battery type)
 */
class CodeListPFF extends CodeList implements CodeListInterface
{
    /**
     * Resolves a CodeList value by code and language
     *
     * @param string $code
     * @param string $language
     * @return CodeList
     */
    public static function resolve(string $code, string $language = 'en')
    {
        $codeList = new static();
        $codeLists = [
            'Ribal\Onix\CodeList\CodeList220',
            'Ribal\Onix\CodeList\CodeList79',
            'Ribal\Onix\CodeList\CodeList98',
            'Ribal\Onix\CodeList\CodeList143',
            'Ribal\Onix\CodeList\CodeList242',
            'Ribal\Onix\CodeList\CodeList184',
            'Ribal\Onix\CodeList\CodeList176',
            'Ribal\Onix\CodeList\CodeList196',
            'Ribal\Onix\CodeList\CodeList76',
            'Ribal\Onix\CodeList\CodeList99',
        ];
        $found = false;

        foreach ($codeLists as $cl) {
            try {
                $found = $cl::resolve($code, $language);
                $codeList->code = $found->getCode();
                $codeList->value = $found->getValue();
                break;
            } catch (\Exception $e) {
                // Ignore
            }
        }

        if (!$found) {
            throw new InvalidCodeListCodeException(sprintf('Missing code %s for language %s in %s', $code, $language, static::class));
        }

        return $codeList;

    }

    /**
     * Combined Code List for ProductFormFeatureValue - en
     *
     * @var array
     */
    protected static $en = [];

    /**
     * Combined Code List for ProductFormFeatureValue - es
     *
     * @var array
     */
    protected static $es = [];

    /**
     * Combined Code List for ProductFormFeatureValue - de
     *
     * @var array
     */
    protected static $de = [];

    /**
     * Combined Code List for ProductFormFeatureValue - fr
     *
     * @var array
     */
    protected static $fr = [];

    /**
     * Combined Code List for ProductFormFeatureValue - it
     *
     * @var array
     */
    protected static $it = [];

    /**
     * Combined Code List for ProductFormFeatureValue - nb
     *
     * @var array
     */
    protected static $nb = [];

    /**
     * Combined Code List for ProductFormFeatureValue - tr
     *
     * @var array
     */
    protected static $tr = [];
}