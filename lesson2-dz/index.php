<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
?>
<h2>Таблица цветов</h2>
<?php
$APPLICATION->IncludeComponent(
    'ylab:show.flowers',
    '',
    []
);
?>
<?php
$APPLICATION->IncludeComponent(
    'ylab:form.add.element',
    '',
    [
        'NAME_TABLE' => 'authors'
    ]
);
?>
<?php
$APPLICATION->IncludeComponent(
    'ylab:form.add.element',
    '',
    [
        'NAME_TABLE' => 'books'
    ]
);
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>