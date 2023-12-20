<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer/about.php"
                )
            );?>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
           

            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer/links.php"
                )
            );?>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer/copyright.php"
                )
            );?>

        </div>
    </div>
</footer>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
<?php

$APPLICATION->AddHeadScript('js/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript('js/jquery-migrate-3.0.1.min.js');
$APPLICATION->AddHeadScript('js/jquery-ui.js');
$APPLICATION->AddHeadScript('js/popper.min.js');
$APPLICATION->AddHeadScript('js/bootstrap.min.js');
$APPLICATION->AddHeadScript('js/owl.carousel.min.js');
$APPLICATION->AddHeadScript('js/mediaelement-and-player.min.js');
$APPLICATION->AddHeadScript('js/jquery.stellar.min.js');
$APPLICATION->AddHeadScript('js/jquery.countdown.min.js');
$APPLICATION->AddHeadScript('js/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript('js/bootstrap-datepicker.min.js');
$APPLICATION->AddHeadScript('js/aos.js');
$APPLICATION->AddHeadScript('js/main.js');

?>
</body>

</html>