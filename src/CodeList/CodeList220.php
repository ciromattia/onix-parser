<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 220
 *
 * Used with <ProductFormFeatureValue> <b335>
 *
 * @see https://ns.editeur.org/onix/en/220
 */
class CodeList220 extends CodeList
{
    protected static $en = [
        // Certification values
        '01' => 'FSC-certified',
        '02' => 'PEFC-certified',
        '03' => 'FSC Recycled',
        '04' => 'FSC Mixed Sources',
        '05' => 'FSC Pure',
        '06' => 'Not FSC or PEFC certified',

        // EPUB versions
        '101A' => 'EPUB 2.0.1',
        '101B' => 'EPUB 3.0',
        '101C' => 'EPUB 3.0.1',
        '101D' => 'EPUB 3.1',
        '101E' => 'EPUB 3.2',
        '101F' => 'EPUB 3.3',
        '101G' => 'EPUB 4.0',

        // Kindle formats
        '116A' => 'Kindle mobi 7',
        '116B' => 'Kindle AZW',
        '116C' => 'Kindle KFX',
        '116D' => 'Kindle Print Replica',
        '116E' => 'Kindle Enhanced Media',

        // Text and document formats
        '201' => 'XHTML',
        '202' => 'HTML5',
        '203' => 'XML',
        '204' => 'PDF',
        '205' => 'PDF/A',
        '206' => 'PDF/X',
        '207' => 'PDF/UA',

        // Media formats
        '301' => 'MobiPocket format',
        '302' => 'Fixed format',
        '303' => 'Reflowable format',
        '304' => 'Progressive download',
        '305' => 'Adaptive streaming',

        // Accessibility features
        '401' => 'Screen reader friendly',
        '402' => 'Accessibility metadata included',
        '403' => 'WCAG 2.0 Level A',
        '404' => 'WCAG 2.0 Level AA',
        '405' => 'WCAG 2.0 Level AAA',
        '406' => 'WCAG 2.1 Level A',
        '407' => 'WCAG 2.1 Level AA',
        '408' => 'WCAG 2.1 Level AAA',

        // Technical protection
        '501' => 'DRM protected',
        '502' => 'Digital watermarking',
        '503' => 'Adobe DRM',
        '504' => 'Apple DRM',
        '505' => 'OMA DRM',
        '506' => 'Readium LCP DRM',

        // Interactive features
        '601' => 'Interactive elements',
        '602' => 'Read aloud functionality',
        '603' => 'Synchronised audio',
        '604' => 'Interactive maps',
        '605' => 'Interactive quizzes/tests',
        '606' => 'Interactive exercises'
    ];

    protected static $es = [
        // Certification values
        '01' => 'Certificado FSC',
        '02' => 'Certificado PEFC',
        '03' => 'FSC Reciclado',
        '04' => 'FSC Fuentes mixtas',
        '05' => 'FSC Puro',
        '06' => 'Sin certificación FSC o PEFC',

        // EPUB versions
        '101A' => 'EPUB 2.0.1',
        '101B' => 'EPUB 3.0',
        '101C' => 'EPUB 3.0.1',
        '101D' => 'EPUB 3.1',
        '101E' => 'EPUB 3.2',
        '101F' => 'EPUB 3.3',
        '101G' => 'EPUB 4.0',

        // Kindle formats
        '116A' => 'Kindle mobi 7',
        '116B' => 'Kindle AZW',
        '116C' => 'Kindle KFX',
        '116D' => 'Kindle Print Replica',
        '116E' => 'Kindle Enhanced Media',

        // Text and document formats
        '201' => 'XHTML',
        '202' => 'HTML5',
        '203' => 'XML',
        '204' => 'PDF',
        '205' => 'PDF/A',
        '206' => 'PDF/X',
        '207' => 'PDF/UA',

        // Media formats
        '301' => 'Formato MobiPocket',
        '302' => 'Formato fijo',
        '303' => 'Formato adaptable',
        '304' => 'Descarga progresiva',
        '305' => 'Streaming adaptativo',

        // Accessibility features
        '401' => 'Compatible con lector de pantalla',
        '402' => 'Incluye metadatos de accesibilidad',
        '403' => 'WCAG 2.0 Nivel A',
        '404' => 'WCAG 2.0 Nivel AA',
        '405' => 'WCAG 2.0 Nivel AAA',
        '406' => 'WCAG 2.1 Nivel A',
        '407' => 'WCAG 2.1 Nivel AA',
        '408' => 'WCAG 2.1 Nivel AAA',

        // Technical protection
        '501' => 'Protegido con DRM',
        '502' => 'Marca de agua digital',
        '503' => 'DRM de Adobe',
        '504' => 'DRM de Apple',
        '505' => 'DRM OMA',
        '506' => 'DRM Readium LCP',

        // Interactive features
        '601' => 'Elementos interactivos',
        '602' => 'Funcionalidad de lectura en voz alta',
        '603' => 'Audio sincronizado',
        '604' => 'Mapas interactivos',
        '605' => 'Cuestionarios/pruebas interactivas',
        '606' => 'Ejercicios interactivos'
    ];

    protected static $de = [
        // Certification values
        '01' => 'FSC-zertifiziert',
        '02' => 'PEFC-zertifiziert',
        '03' => 'FSC Recycling',
        '04' => 'FSC Mixed Sources',
        '05' => 'FSC Pure',
        '06' => 'Nicht FSC oder PEFC zertifiziert',

        // EPUB versions
        '101A' => 'EPUB 2.0.1',
        '101B' => 'EPUB 3.0',
        '101C' => 'EPUB 3.0.1',
        '101D' => 'EPUB 3.1',
        '101E' => 'EPUB 3.2',
        '101F' => 'EPUB 3.3',
        '101G' => 'EPUB 4.0',

        // Kindle formats
        '116A' => 'Kindle mobi 7',
        '116B' => 'Kindle AZW',
        '116C' => 'Kindle KFX',
        '116D' => 'Kindle Print Replica',
        '116E' => 'Kindle Enhanced Media',

        // Text and document formats
        '201' => 'XHTML',
        '202' => 'HTML5',
        '203' => 'XML',
        '204' => 'PDF',
        '205' => 'PDF/A',
        '206' => 'PDF/X',
        '207' => 'PDF/UA',

        // Media formats
        '301' => 'MobiPocket Format',
        '302' => 'Festes Format',
        '303' => 'Dynamisches Format',
        '304' => 'Progressiver Download',
        '305' => 'Adaptives Streaming',

        // Accessibility features
        '401' => 'Screenreader-freundlich',
        '402' => 'Barrierefreiheits-Metadaten enthalten',
        '403' => 'WCAG 2.0 Level A',
        '404' => 'WCAG 2.0 Level AA',
        '405' => 'WCAG 2.0 Level AAA',
        '406' => 'WCAG 2.1 Level A',
        '407' => 'WCAG 2.1 Level AA',
        '408' => 'WCAG 2.1 Level AAA',

        // Technical protection
        '501' => 'DRM geschützt',
        '502' => 'Digitales Wasserzeichen',
        '503' => 'Adobe DRM',
        '504' => 'Apple DRM',
        '505' => 'OMA DRM',
        '506' => 'Readium LCP DRM',

        // Interactive features
        '601' => 'Interaktive Elemente',
        '602' => 'Vorlesefunktion',
        '603' => 'Synchronisiertes Audio',
        '604' => 'Interaktive Karten',
        '605' => 'Interaktive Quiz/Tests',
        '606' => 'Interaktive Übungen'
    ];
}
