<?php

namespace RltBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BuildClass.
 *
 * @Serializer\AccessorOrder("custom", custom={"id", "class"})
 *
 * @ORM\Table(name="rlt_build_classes")
 * @ORM\Entity(repositoryClass="RltBundle\Repository\BuildClassRepository")
 */
class BuildClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true, nullable=false)
     */
    private $class;

    private $buildings;
}