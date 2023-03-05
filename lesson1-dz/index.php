<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
?>

<?$APPLICATION->IncludeComponent(
    "ylab:element.list.hl",
    "",
    Array(
        "CACHE_TIME" => "86400",
        "CACHE_TYPE" => "A",
        "NAME_HLBLOCK" => "Company"
    )
);?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>