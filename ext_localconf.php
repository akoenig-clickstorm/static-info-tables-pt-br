<?php
defined('TYPO3_MODE') || die;

$initialize = function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.typoscript">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/PageTSconfig/Suggest.tsconfig">');
};
$initialize(\Bitmotion\StaticInfoTablesPtBr\Extension::EXTENSION_KEY);
unset($initialize);
