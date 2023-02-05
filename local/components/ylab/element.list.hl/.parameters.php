<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;


$arComponentParameters = [
    'GROUPS' => [
        'VARIABLES' => [
            'NAME' => Loc::getMessage('YLAB.ELEMENT.LIST.HL.GROUPS'),
            "SORT" => 100
        ],
    ],
    'PARAMETERS' => [
        'NAME_HLBLOCK' => [
            'PARENT' => 'VARIABLES',
            'NAME' => Loc::getMessage('YLAB.ELEMENT.LIST.HL.CODE'),
            'TYPE' => 'STRING'
        ],
        'CACHE_TIME' => ['DEFAULT' => 86400],
    ]
];
