<?php

namespace YLab\Components;

use CBitrixComponent;
use CUser;
use Ylab\Helpers\HlBlockHelpers;

CBitrixComponent::includeComponentClass("ylab:element.list");

class ElementListHLComponent extends ElementListComponent{

    public function getElements(): array{
        $entityClass = HlBlockHelpers::getHlEntityClass($this->arParams['NAME_HLBLOCK']);

        $ordersList = $entityClass::getList([
            'select' => ['*'],
            'filter' => [],
        ]);
        $orders = $ordersList->fetchAll();

        foreach ($orders as &$order){
            $order['UF_RESPONSIBLE'] = $this->GetAdminListViewHTML($order['UF_RESPONSIBLE']);
        }

        return is_array($orders) ? $orders : [];
    }

    public function GetAdminListViewHTML($arHtmlControl){
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
            return htmlspecialcharsbx($arUser["NAME"])." ".htmlspecialcharsbx($arUser["LAST_NAME"]);
        }
        else
            return "&nbsp;";
    }
}