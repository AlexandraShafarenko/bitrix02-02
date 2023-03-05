<?php

namespace Mail\Manager\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Query\Join;

/**
 * Class BooksTable
 * @package app\Orm
 */
class BooksTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
        return 'y_books';
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
            new Entity\StringField('TITLE', [
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_BOOKS_TITLE_FIELD'),
            ]),
            new Entity\IntegerField('AUTHOR_ID',[
                'tittle' => Loc::getMessage('YLAB_MAIL_MANAGER_BOOKS_AUTHOR_ID_FIELD')
            ]),
            (new Reference(
                'AUTHORS',
                AuthorsTable::class,
                Join::on('this.AUTHOR_ID', 'ref.ID')
            ))
                ->configureJoinType('inner'),
        ];
    }
}