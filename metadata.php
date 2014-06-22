<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'srunit',
    'title' => 'sR Unit Extension',
    'description' => array(
        'de' => 'sR Unit OXID Modul',
        'en' => 'sR Unit OXID module',
    ),
    'thumbnail' => 'superreal.png',
    'version' => '0.9-dev',
    'author' => 'superReal GmbH',
    'url' => 'http://www.supereal.de',
    'email' => 'it@superreal.de',
    'extend' => array(
        'oxutilsobject' => 'srunit-oxid-module/core/sroxutilsobject',
        'oxutilsserver' => 'srunit-oxid-module/core/srunitoxutilsserver',
    ),
    'files' => array(),
    'blocks' => array(),
    'templates' => array(),
    'settings' => array(),
);
