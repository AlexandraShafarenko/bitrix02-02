<?php
use Bitrix\Main\ArgumentException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;
use Mail\Manager\Orm\AuthorsTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
class FormComponent extends CBitrixComponent{
    /**
     * @return void
     */
    public function executeComponent(){
        $this->arResult['NAME_TABLE'] = $this->arParams['NAME_TABLE'];
        $this->getAuthors();
        $this->includeComponentTemplate();
    }

    /**
     * метод формирует массив данных из таблицы authors
     * @return void
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     */
    public function getAuthors(){
        $arParams = [
            'select' => [
                'ID',
                'NAME']
        ];
        $arItems = AuthorsTable::getList($arParams)->fetchAll();
        $this->arResult['AUTHORS'] = $arItems;
    }
}