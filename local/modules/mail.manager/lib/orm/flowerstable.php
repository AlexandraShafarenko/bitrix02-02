<?php

namespace Mail\Manager\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;

/**
 * Class FlowersTable
 * @package app\Orm
 */
class FlowersTable extends Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
        return 'y_flowers';
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
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_TITLE_FIELD'),
            ]),
            new Entity\StringField('COUNTRY', [
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_COUNTRY_FIELD'),
            ]),
            new Entity\StringField('COLOR', [
                'title' => Loc::getMessage('YLAB_MAIL_MANAGER_FLOWERS_COLOR_FIELD'),
            ]),
        ];
    }
}