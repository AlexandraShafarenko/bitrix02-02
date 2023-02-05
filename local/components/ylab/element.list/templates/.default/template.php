<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div class="list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <div>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.NAME') ?> <?= $arItem['NAME'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.PRICE') ?> <?= $arItem['PRICE'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.PERCENT') ?> <?= $arItem['PERCENT'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.TOTAL') ?> <?= $arItem['TOTAL'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.STATUS') ?> <?= $arItem['STATUS'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.WEIGHT') ?> <?= $arItem['WEIGHT'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.NOMENKLATURE_NUMBER') ?> <?= $arItem['NOMENKLATURE_NUMBER']?>
            </p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.ORDER') ?> <?= $arItem['ORDER'] ?></p>
        </div>
        <hr>
    <?php } ?>
</div>