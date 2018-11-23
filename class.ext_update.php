<?php
declare(strict_types=1);

namespace Bitmotion\StaticInfoTablesPtBr;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;

class ext_update
{
    /**
     * Main function, returning the HTML content
     */
    public function main(): string
    {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);

        // Clear the class cache
        /** @var ClassCacheManager $classCacheManager */
        $classCacheManager = $objectManager->get(ClassCacheManager::class);
        $classCacheManager->reBuild();

        // Update the database
        /** @var DatabaseUpdateUtility $databaseUpdateUtility */
        $databaseUpdateUtility = $objectManager->get(DatabaseUpdateUtility::class);
        $databaseUpdateUtility->doUpdate(Extension::EXTENSION_KEY);

        $updateLanguageLabels = LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables');

        return '<p>' . $updateLanguageLabels . ' ' . Extension::EXTENSION_KEY . '</p>';
    }

    public function access(): bool
    {
        return true;
    }
}