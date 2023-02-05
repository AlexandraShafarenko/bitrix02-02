<?use \Bitrix\Main\Localization\Loc;?>
<div class="list">

    <?php foreach ($arResult['ITEMS'] as $arItem){ ?>
        <div>
            <p><?=Loc::getMessage('YLAB.ELEMENT.LIST.HL.TEMPLATE.NAME')?> <b><?= $arItem['UF_NAME'] ?></b></p>
            <p><?=Loc::getMessage('YLAB.ELEMENT.LIST.HL.TEMPLATE.DESCRIPTION')?> <i><?= $arItem['UF_DESCRIPTION'] ?></i></p>
            <p><?=Loc::getMessage('YLAB.ELEMENT.LIST.HL.TEMPLATE.INN')?> <b><?= $arItem['UF_INN'] ?></b></p>
            <p><?=Loc::getMessage('YLAB.ELEMENT.LIST.HL.TEMPLATE.RESPONSIBLE')?> <b><?= $arItem['UF_RESPONSIBLE'] ?></b></p>
        </div>
        <hr>
    <?php } ?>
</div>