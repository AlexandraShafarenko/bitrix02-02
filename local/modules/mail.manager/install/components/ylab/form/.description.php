<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => Loc::getMessage('YLAB_MAIL_MANAGER_FORM_NAME'),
    "DESCRIPTION" => Loc::getMessage('YLAB_MAIL_MANAGER_DESCRIPTION'),
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => 'ylab_mail_manager',
        "NAME" => 'Ylab',
    ],
];