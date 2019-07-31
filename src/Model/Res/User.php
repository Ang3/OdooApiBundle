<?php

namespace Ang3\Bundle\OdooApiBundle\Model\Res;

use Ang3\Bundle\OdooApiBundle\Annotations as Odoo;
use Ang3\Bundle\OdooApiBundle\Model\AbstractRecord;
use Ang3\Bundle\OdooApiBundle\Model\ActivatableModelTrait;

/**
 * @author Joanis ROUANET
 *
 * @Odoo\Model("res.users")
 */
class User extends AbstractRecord
{
    use ActivatableModelTrait;
    use ContactTypeTrait;
}