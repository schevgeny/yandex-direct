<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdUpdate extends TextAdUpdateBase
{

//    Can be omit.
//    protected $Text = null;

    /**
     * Creates a new instance of DynamicTextAdUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Text.
     *
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }

    /**
     * Sets Text.
     *
     * @param string|null $value
     * @return $this
     */
    public function setText($value = null)
    {
        $this->Text = $value;

        return $this;
    }


}

