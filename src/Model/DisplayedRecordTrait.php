<?php

namespace Ang3\Bundle\OdooApiBundle\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Joanis ROUANET
 */
trait DisplayedRecordTrait
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("display_name")
     */
    protected $displayName;

    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
}
