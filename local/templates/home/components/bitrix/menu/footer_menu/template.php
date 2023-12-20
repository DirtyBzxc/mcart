<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>



    <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
            <div class="col-md-12">
                <h3 class="footer-heading mb-4">Меню</h3>
            </div>
            <div class="col-md-6 col-lg-6">
                <?
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                    ?>

                <ul class="list-unstyled">
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                </ul>
                <? endforeach;?>
            </div>
            </div>
        </div>

    </div>

<?endif?>