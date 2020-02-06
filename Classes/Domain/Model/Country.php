<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (PT_br)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

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
