<?php
declare(strict_types = 1);

/***
 *
 * This file is part of the "Static Info Tables (UK)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNamePtBr' => [
                'fieldName' => 'cn_short_pt_br',
            ],
        ],
    ],
];
