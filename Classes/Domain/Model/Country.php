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

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNamePtBr = '';

    /**
     * @return string
     */
    public function getShortNamePtBr(): string
    {
        return $this->shortNamePtBr;
    }

    /**
     * @param string $shortNamePtBr
     */
    public function setShortNamePtBr(string $shortNamePtBr)
    {
        $this->shortNamePtBr = $shortNamePtBr;
    }
}
