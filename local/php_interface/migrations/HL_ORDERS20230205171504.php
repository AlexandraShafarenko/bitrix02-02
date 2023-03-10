<?php

namespace Sprint\Migration;


class HL_ORDERS20230205171504 extends Version
{
    protected $description = "Добавление HLBlock Заказы";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'Orders',
  'TABLE_NAME' => 'orders',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Заказы',
    ),
    'en' => 
    array (
      'NAME' => 'Orders',
    ),
  ),
));
        $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_CODE',
  'USER_TYPE_ID' => 'double',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'PRECISION' => 4,
    'SIZE' => 20,
    'MIN_VALUE' => 0.0,
    'MAX_VALUE' => 0.0,
    'DEFAULT_VALUE' => NULL,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Code',
    'ru' => 'Код заказа',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Code',
    'ru' => 'Код заказа',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Code',
    'ru' => 'Код заказа',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_SUM',
  'USER_TYPE_ID' => 'double',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'PRECISION' => 4,
    'SIZE' => 20,
    'MIN_VALUE' => 0.0,
    'MAX_VALUE' => 0.0,
    'DEFAULT_VALUE' => NULL,
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'sum',
    'ru' => 'Сумма заказа',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'sum',
    'ru' => 'Сумма заказа',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'sum',
    'ru' => 'Сумма заказа',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_BUYER',
  'USER_TYPE_ID' => 'usertypeuser',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => NULL,
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Buyer',
    'ru' => 'Покупатель',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Buyer',
    'ru' => 'Покупатель',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Buyer',
    'ru' => 'Покупатель',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
            $helper->Hlblock()->saveField($hlblockId, array (
  'FIELD_NAME' => 'UF_NUMBER',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => 'Number',
    'ru' => 'Номер заказа',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => 'Number',
    'ru' => 'Номер заказа',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => 'Number',
    'ru' => 'Номер заказа',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));
        }

    public function down()
    {
        //your code ...
    }
}
