<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang=<?= LANGUAGE_ID ?>>

<head>
    <title><?php $APPLICATION->ShowTitle();?></title>
    <meta charset="utf-8">
    <?php $APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
<?php
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/magnific-popup.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.default.min.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-datepicker.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/mediaelementplayer.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/flaticon/font/flaticon.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fl-bigmug-line.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/aos.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");
?>
</head>

<body>
<div id="page-wrapper">
    <div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/phone.php"
                            )
                        );?>
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/email.php"
                            )
                        );?>
                    </p>
                </div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/links.php"
                    )
                );?>
            </div>
        </div>
    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/title.php"
                        )
                    );?>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu_v2",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "3",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "top_menu_v2"
                    ),
                    false
                );?>

            </div>
        </div>
    </div>
</div>


