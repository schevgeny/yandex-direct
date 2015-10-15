<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierAddItem extends BidModifierAddBase
{

    protected $MobileAdjustment = null;

    protected $DemographicsAdjustments = null;

    protected $RetargetingAdjustments = null;

    /**
     * Creates a new instance of BidModifierAddItem.
     *
     * @return BidModifierAddItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MobileAdjustment.
     *
     * @return MobileAdjustmentAdd|null
     */
    public function getMobileAdjustment()
    {
        return $this->MobileAdjustment;
    }

    /**
     * Sets MobileAdjustment.
     *
     * @param MobileAdjustmentAdd|null $value
     * @return $this
     */
    public function setMobileAdjustment(MobileAdjustmentAdd $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustments.
     *
     * @return DemographicsAdjustmentAdd[]|null
     */
    public function getDemographicsAdjustments()
    {
        return $this->DemographicsAdjustments;
    }

    /**
     * Sets DemographicsAdjustments.
     *
     * @param DemographicsAdjustmentAdd[]|null $value
     * @return $this
     */
    public function setDemographicsAdjustments(array $value = null)
    {
        $this->DemographicsAdjustments = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustments.
     *
     * @return RetargetingAdjustmentAdd[]|null
     */
    public function getRetargetingAdjustments()
    {
        return $this->RetargetingAdjustments;
    }

    /**
     * Sets RetargetingAdjustments.
     *
     * @param RetargetingAdjustmentAdd[]|null $value
     * @return $this
     */
    public function setRetargetingAdjustments(array $value = null)
    {
        $this->RetargetingAdjustments = $value;

        return $this;
    }


}

