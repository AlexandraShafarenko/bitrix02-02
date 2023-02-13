<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;

$arComponentParameters = [
    'GROUPS' => [
        'VARIABLES' => [
            'NAME' => Loc::getMessage('YLAB_MAIL_MANAGER_GROUPS'),
            "SORT" => 100
        ],
    ],
    'PARAMETERS' => [
        'NAME_TABLE' => [
            'PARENT' => 'VARIABLES',
            'NAME' => Loc::getMessage('YLAB_MAIL_MANAGER_NAME_TABLE'),
            'TYPE' => 'STRING',
        ],
        'CACHE_TIME' => ['DEFAULT' => 86400],
    ]
];