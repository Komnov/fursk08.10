<?php

?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><? $APPLICATION->ShowTitle(); ?></title>

    <? $APPLICATION->ShowHead(); ?>

    <?
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/tilda-grid-3.0.min.css');
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/tilda-blocks-2.12.css');
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/tilda-animation-1.0.min.css');
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/tilda-slds-1.4.min.css');
    \Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/tilda-zoom-2.0.min.css');


    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tildastat-0.2.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-1.10.2.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-scripts-2.8.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-blocks-2.7.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/lazyload-1.3.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-animation-1.0.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-slds-1.4.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/hammer.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-zoom-2.0.min.js');
    \Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/tilda-forms-1.0.min.js');
    ?>

    <meta property="og:url" content="https://<?= SITE_SERVER_NAME; ?>"/>
    <meta property="og:title" content="<? $APPLICATION->ShowTitle(); ?>"/>
    <meta property="og:description" content="<? $APPLICATION->ShowProperty('description'); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="257953674358265"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
</head>

<body class="t-body" style="margin:0;">
<?$APPLICATION->ShowPanel();?>