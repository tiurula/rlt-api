<?php

namespace RltBundle\Entity\Model\Zone;

use Symfony\Component\Validator\Constraints as Assert;

class Flat
{
    /**
     * @var float
     *
     * @Assert\Type(type="float")
     *
     */
    private $size;

    private $cost;

    private $costPerM2;

    private $img;

    private $buildDate;
}