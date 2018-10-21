<?php

namespace RltBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * BuildType.
 *
 * @Serializer\AccessorOrder("custom", custom={"id", "type"})
 *
 * @ORM\Table(name="rlt_build_types")
 * @ORM\Entity(repositoryClass="RltBundle\Repository\BuildTypeRepository")
 */
class BuildType
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
    private $type;

    private $buildings;
}