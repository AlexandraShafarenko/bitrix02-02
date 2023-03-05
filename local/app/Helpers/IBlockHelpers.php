<?php

namespace Ylab\Helpers;

use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\Iblock;

class IBlockHelpers
{
    /**
     * Метод для получения класса IB-Блока по символьному коду
     * @param string $sIDCode
     * @return \Bitrix\Main\ORM\Data\DataManager|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function getIBlockID(string $sIDCode){
        Loader::includeModule('iblock');

        $iBlockID = IblockTable::getList([
            'select' => ['ID'],
            'filter' => ['=NAME' => $sIDCode]
        ])->fetch();

        return $iBlockID;
    }
}