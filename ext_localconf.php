<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TypoScript/Extbase/setup.typoscript">');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/PageTSconfig/Suggest.tsconfig">');
    }, \Bitmotion\StaticInfoTablesPtBr\Extension::EXTENSION_KEY
);

