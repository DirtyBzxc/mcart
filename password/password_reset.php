<?
require($_SERVER['DOCUMENT_ROOT']."/bitrix/header.php");
$USER->Update(1,array("LOGIN"=>'test123'));
$USER->Update(1,array("PASSWORD"=>'Bitrix*123456'));
echo 'Вы успешно изменили данные для входа в панель администратора.';
require($_SERVER['DOCUMENT_ROOT']."/bitrix/footer.php");
?>