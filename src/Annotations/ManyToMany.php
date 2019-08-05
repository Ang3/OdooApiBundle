<?php

namespace Ang3\Bundle\OdooApiBundle\Annotations;

/**
 * @author Joanis ROUANET
 *
 * @Annotation
 * @Target({"PROPERTY"})
 * @Attributes({
 *   @Attribute("class", type = "string")
 * })
 */
class ManyToMany
{
    /**
     * @Required
     *
     * @var string
     */
    public $class;
}
