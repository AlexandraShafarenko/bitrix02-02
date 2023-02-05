<?php

use Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();
$eventManager->addEventHandler('main', 'OnUserTypeBuildList', ['Ylab\UserType\CUserTypeUserId',
    'GetUserTypeDescription']);