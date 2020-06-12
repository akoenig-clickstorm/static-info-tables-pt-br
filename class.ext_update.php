<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (PT_BR)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Bitmotion\StaticInfoTablesPtBr;

use SJBR\StaticInfoTables\Cache\ClassCacheManager;
use SJBR\StaticInfoTables\Utility\DatabaseUpdateUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class ext_update
{
    public function main(): string
    {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);

        // Clear the class cache and update the database
        $objectManager->get(ClassCacheManager::class)->reBuild();
        $objectManager->get(DatabaseUpdateUtility::class)->doUpdate(Extension::EXTENSION_KEY);

        return sprintf(
            '<p>%s %s</p>',
            LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables'),
            Extension::EXTENSION_KEY
        );
    }

    public function access(): bool
    {
        return true;
    }
}
