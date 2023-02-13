<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<table border="1">
    <tr>
        <?php
        foreach ($arResult['HEADER'] as $header) {
            ?>
            <td><?= $header ?></td>
            <?php
        }
        ?>
    </tr>
    <?php
    foreach ($arResult['FLOWERS'] as $arItem) {
        ?>
        <tr>
            <td><?= $arItem['ID'] ?></td>
            <td><?= $arItem['TITLE'] ?></td>
            <td><?= $arItem['COUNTRY'] ?></td>
            <td><?= $arItem['COLOR'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<div>
    <h2><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_H1_USER')?></h2>
    <div>
        <form method="post" id="form">
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_NAME')?></label>
            <p><input name="name" type="text" required></p>
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_EMAIL')?></label>
            <p><input name="email" type="email" required></p>
            <p><input type="submit"></p>
        </form>
    </div>

    <p id="result"></p>

    <script>
        let form = document.getElementById('form');

        form.addEventListener('submit', getFormValue);

        function getFormValue(event) {
            event.preventDefault();
            let name = form.querySelector('[name="name"]')
            let email = form.querySelector('[name="email"]');
            let ele = {
                name: name.value,
                email: email.value,
            };
            BX.ajax.runAction('mail:manager.basic.addEmailsTable',{
                data: ele
            }).then(function(response){
                let paragraph = document.getElementById("result");
                paragraph.textContent += response['data'];
            });}
    </script>
</div>