<?php

namespace Ang3\Bundle\OdooApiBundle\Model\Res;

use Ang3\Bundle\OdooApiBundle\Annotations as Odoo;
use Ang3\Bundle\OdooApiBundle\Model\AbstractRecord;
use JMS\Serializer\Annotation as JMS;

/**
 * @author Joanis ROUANET
 */
class Company extends AbstractRecord
{
    use ContactTypeTrait;

    /**
     * @var Partner
     *
     * @JMS\Type("Ang3\Bundle\OdooApiBundle\Model\Res\Partner")
     * @JMS\SerializedName("partner_id")
     * @Odoo\ManyToOne("Ang3\Bundle\OdooApiBundle\Model\Res\Partner")
     */
    protected $partner;

    /**
     * @param Partner $partner
     *
     * @return self
     */
    public function setPartner(Partner $partner)
    {
        $this->partner = $partner;

        return $this;
    }

    /**
     * @return Partner
     */
    public function getPartner()
    {
        return $this->partner;
    }
}
