<?php
namespace Mail\Manager\Controller;

use Bitrix\Main\Engine\ActionFilter\Authentication;
use Bitrix\Main\Engine\ActionFilter\HttpMethod;
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Localization\Loc;
use Mail\Manager\Orm\AuthorsTable;
use Mail\Manager\Orm\BooksTable;
use Mail\Manager\Profile;

/**
 * Класс-контроллер содержит один метод для проверки работоспособности контроллеров.
 * Можно обратиться из консоли браузера:
 * ```
 * BX.ajax.runAction('mail:manager.basic.version')
 * ```
 *
 * Class Basic
 * @package YLab\Controller
 */
class Basic extends Controller
{
    /**
     * @inheritDoc
     * @return array
     */
    public function configureActions()
    {
        $defaultFilters = [
            new Authentication(),
            new HttpMethod([HttpMethod::METHOD_POST])
        ];

        return [
            'addEmailsTable' => [
                'prefilters' => $defaultFilters
            ],
        ];
    }

    /**
     * Метод записывает данные из формы в таблицу emails
     * @param $name
     * @param $email
     * @return string|void|null
     */
    public function addEmailsTableAction($name, $email)
    {
        $filds = [];

        $filds['NAME'] = $name;
        $filds['EMAIL'] = $email;

        $profile = new Profile();

        if($profile->addProfile($filds)){
            return Loc::getMessage('YLAB_MAIL_MANAGER_CONTROLLER_USER');
        }
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
            return Loc::getMessage('YLAB_MAIL_MANAGER_CONTROLLER_AUTHOR');
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
            return Loc::getMessage('YLAB_MAIL_MANAGER_CONTROLLER_BOOK');
        }
    }
}