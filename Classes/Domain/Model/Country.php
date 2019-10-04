<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNamePtBr = '';

    public function getShortNamePtBr(): string
    {
        return $this->shortNamePtBr;
    }

    public function setShortNamePtBr(string $shortNamePtBr)
    {
        $this->shortNamePtBr = $shortNamePtBr;
    }
}