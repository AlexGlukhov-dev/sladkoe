<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$frame = $this->createFrame()->begin('');


?>
    <div class="photo-random">
        <? if (is_array($arResult["PICTURE"])): ?>
            <a href="<?= $arResult["DETAIL_PAGE_URL"] ?>"><img
                        border="0"
                        src="<?= $arResult["PICTURE"]["src"] ?>"
                        width="<?= $arResult["PICTURE"]["width"] ?>"
                        height="<?= $arResult["PICTURE"]["height"] ?>"
                        alt="photo"
                /></a><br/>
        <? endif ?>
        <a href="<?= $arResult["DETAIL_PAGE_URL"] ?>"><?= $arResult["NAME"] ?></a>
    </div>
<?
$frame->end();
?>