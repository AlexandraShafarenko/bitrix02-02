<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Engine\ActionFilter\Authentication;
use Bitrix\Main\Engine\ActionFilter\HttpMethod;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Localization\Loc;
use Mail\Manager\Orm\AuthorsTable;
use Mail\Manager\Orm\BooksTable;

/**
 * class CustomAjax
 */
class CustomAjaxController extends Controller
{
    /**
     * @return array
     */
    public function configureActions()
    {
        $defaultFilters = [
            new Authentication(),
            new HttpMethod([HttpMethod::METHOD_POST])
        ];

        return [
            'addAuthorTable' => [
                'prefilters' => $defaultFilters
            ],
            'addBooksTable' => [
                'prefilters' => $defaultFilters
            ],
        ];
    }

    /**
     * Метод записывает данные из формы в таблицу authors
     * @param $name
     * @param $surname
     * @return string|void|null
     * @throws Exception
     */
    public function addAuthorsTableAction($name, $surname){

        $result = AuthorsTable::add([
            'NAME' => $name,
            'SURNAME' => $surname
        ]);
        if ($result->isSuccess())
        {
            return Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_RESPONSE_AUTHORS');
        }
    }

    /**
     * Метод записывает данные из формы в таблицу books
     * @param $title
     * @param $authors
     * @return string|void|null
     * @throws Exception
     */
    public function addBooksTableAction($title, $authors){
        $result = BooksTable::add([
            'TITLE' => $title,
            'AUTHOR_ID' =>(int) $authors
        ]);

        if ($result->isSuccess())
        {
            return Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_RESPONSE_BOOKS');
        }
    }
}