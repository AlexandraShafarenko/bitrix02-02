<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;
?>
<?if ($arResult['NAME_TABLE'] == 'authors'): ?>
<div>
    <h2><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_H1_AUTHOR')?></h2>
    <div>
        <form method="post" id="form_author">
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_NAME')?></label>
            <p><input name="name" type="text" required></p>
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_SURNAME')?></label>
            <p><input name="surname" type="text" required></p>
            <p><input type="submit"></p>
        </form>
    </div>
    <p id="result_author"></p>
    <script>
        let form_author = document.getElementById('form_author');

        form_author.addEventListener('submit', getFormValue);

        function getFormValue(event) {
            event.preventDefault();
            let name = form_author.querySelector('[name="name"]')
            let surname = form_author.querySelector('[name="surname"]');
            let data = {
                name: name.value,
                surname: surname.value,
            };
            BX.ajax.runAction('mail:manager.basic.addAuthorsTable',{
                data: data
            }).then(function(response){
                let paragraph = document.getElementById("result_author");
                paragraph.textContent += response['data'];
            });}
    </script>
</div>
<?endif;?>
<?if ($arResult['NAME_TABLE'] == 'books'):?>
<div>
    <h2><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_H1_BOOK')?></h2>
    <div>
        <form method="post" id="form_books">
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_TITLE')?></label>
            <p><input name="title" type="text" required></p>
            <label><?=Loc::getMessage('YLAB_MAIL_MANAGER_TEMPLATE_LABEL_AUTHORS')?></label>
            <p><select name="authors">
                    <?foreach ($arResult['AUTHORS'] as $arItems):?>
                    <option value="<?=$arItems['ID']?>"><?=$arItems['NAME']?></option>
                    <?endforeach;?>
                </select></p>
            <p><input type="submit"></p>
        </form>
    </div>
    <p id="result_books"></p>
    <script>
        let form_books = document.getElementById('form_books');

        form_books.addEventListener('submit', getFormValue);

        function getFormValue(event) {
            event.preventDefault();
            let title = form_books.querySelector('[name="title"]');
            let authors = form_books.querySelector('[name="authors"]');
            let data = {
                title: title.value,
                authors: authors.value
            };
            BX.ajax.runAction('mail:manager.basic.addBooksTable',{
                data: data
            }).then(function(response){
                let paragraph = document.getElementById("result_books");
                paragraph.textContent += response['data'];
            });}
    </script>
</div>
<?endif;?>
