<?

namespace Ylab\UserType;

use CUser;

class CUserTypeUserId
{

    function GetUserTypeDescription() {
        return array(
            "USER_TYPE_ID"	=> "usertypeuser",
            "CLASS_NAME"	=> __CLASS__,
            "DESCRIPTION"	=> 'Привязка к пользователю',
            "BASE_TYPE"		=> "int",
        );
    }

    function GetDBColumnType($arUserField) {
        global $DB;

        switch(strtolower($DB->type)) {
            case "mysql":	return "int(1)";
            case "oracle":	return "number(1)";
            case "mssql":	return "int";
        }
    }

    function GetEditFormHTML($arUserField, $arHtmlControl) {
        $sField = FindUserID(
            $arUserField["FIELD_NAME"],
            $arUserField["VALUE"],
            "",
            "hlrow_edit_".$_REQUEST["ENTITY_ID"]."_form",
            "5",
            "",
            "показать пользователя",
            "",
            ""
        );

        return $sField;
    }

    function GetAdminListViewHTML($arUserField, $arHtmlControl)
    {
        static $cache = array();
        $arHtmlControl = intVal($arHtmlControl["VALUE"]);
        if(!array_key_exists($arHtmlControl, $cache))
        {
            $rsUsers = CUser::GetList($by, $order, array("ID" => $arHtmlControl));
            $cache[$arHtmlControl] = $rsUsers->Fetch();
        }
        $arUser = $cache[$arHtmlControl];
        if($arUser)
        {
            return "[<a title='".GetMessage("MAIN_EDIT_USER_PROFILE")."' href='user_edit.php?ID=".$arUser["ID"].
                "&lang=".LANG."'>".$arUser["ID"]."</a>] (".htmlspecialcharsbx($arUser["LOGIN"]).") ".
                htmlspecialcharsbx($arUser["NAME"])." ".htmlspecialcharsbx($arUser["LAST_NAME"]);
        }
        else
            return "&nbsp;";
    }

}
