<?php

namespace Mail\Manager\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\Relations\OneToMany;

/**
 * Class AuthorsTable
 * @package app\Orm
 */
class AuthorsTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
        return 'y_authors';
    }

    /**
     * Returns entity map definition.
     * @return array
     * @throws \Exception
     */
    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true,
                'title' => 'ID',
            ]),
            new Entity\StringField('NAME', [
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_AUTHOR_NAME_FIELD'),
            ]),
            new Entity\StringField('SURNAME', [
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_AUTHOR_SURNAME_FIELD'),
            ]),
            (new OneToMany('BOOKS', BooksTable::class, 'AUTHORS'))->configureJoinType('inner')
        ];
    }
}