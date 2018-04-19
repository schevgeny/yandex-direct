<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdBuilderAdGet extends AdBuilderAdGetBase
{

//    Can be omit.
//    protected $Href = null;

    /**
     * Creates a new instance of TextAdBuilderAdGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return self
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }


}
