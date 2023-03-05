<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Mail\Manager\Orm\AuthorsTable;

/**
 * class FormAddElement
 */
class FormAddElementComponent extends CBitrixComponent{
    /**
     * @return mixed|void|null
     */
    public function executeComponent(){
        $this->arResult['NAME_TABLE'] = $this->arParams['NAME_TABLE'];
        $this->getAuthors();
        $this->includeComponentTemplate();
    }

    /**
     * метод формирует массив данных из таблицы authors
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
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