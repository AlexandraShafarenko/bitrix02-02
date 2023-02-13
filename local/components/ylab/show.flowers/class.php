<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Mail\Manager\Orm\AuthorsTable;
use Mail\Manager\Orm\BooksTable;
use Mail\Manager\Orm\EmailsTable;
use Mail\Manager\Orm\FlowersTable;
use Bitrix\Main\Localization\Loc;

/**
 * Class ShowFlowers
 */
class ShowFlowersComponent extends CBitrixComponent
{
    /**
     * @return mixed|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function executeComponent()
    {
        Loader::includeModule('mail.manager');
        
        $this->addElementBook('title', 1);
        $this->addElementAuthor("name", 'surname');
        $this->addElementEmail('name', 'email');
        $this->addElementFlower('title', 'country', 'color');

        $this->arResult = $this->getFlowers();
        $this->includeComponentTemplate();
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function getFlowers(){
        $result = [];
        $result['HEADER']['ID'] = Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_HEAD_ID');
        $result['HEADER']['NAME'] = Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_HEAD_NAME');
        $result['HEADER']['COUNTRY'] = Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_HEAD_COUNTRY');
        $result['HEADER']['COLOR'] = Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_HEAD_COLOR');

        $arParams = [
            'select' => [
                '*'
            ]
        ];
        $oProfiles = FlowersTable::getList($arParams);
        if ($oProfiles->getSelectedRowsCount()) {
            while ($arProfile = $oProfiles->fetch()) {
                $result['FLOWERS'][] = $arProfile;
            }
        }
        return $result;
    }
    /**
     * метод добавляет тестовый элемент в таблицу
     * @param $name
     * @param $surname
     * @return void
     * @throws Exception
     */
    public function addElementAuthor($name, $surname){
        AuthorsTable::add([
            'NAME' => $name,
            'SURNAME' => $surname
        ]);
    }
    /**
     * метод добавляет тестовый элемент в таблицу
     * @param $title
     * @param $author
     * @return void
     * @throws Exception
     */
    public function addElementBook($title, $author){
        BooksTable::add([
            'TITLE' => $title,
            'AUTHOR_ID' =>$author
        ]);
    }
    /**
     * метод добавляет тестовый элемент в таблицу
     * @param $name
     * @param $email
     * @return void
     * @throws Exception
     */
    public function addElementEmail($name, $email){
        EmailsTable::add([
            'NAME' => $name,
            'EMAIL' => $email
        ]);
    }

    /**
     * метод добавляет тестовый элемент в таблицу
     * @param $title
     * @param $country
     * @param $color
     * @return void
     * @throws Exception
     */
    public function addElementFlower($title, $country, $color){
        FlowersTable::add([
            'TITLE' => $title,
            'COUNTRY' => $country,
            'COLOR' => $color
        ]);
    }
}