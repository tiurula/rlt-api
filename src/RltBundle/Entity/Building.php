<?php

namespace RltBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Building.
 *
 * @Serializer\AccessorOrder("custom", custom={"id", "name"})
 *
 * @ORM\Table(name="rlt_buildings")
 * @ORM\Entity(repositoryClass="RltBundle\Repository\BuildingRepository")
 */
class Building
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
    private $name;

    private $distinct;

    private $externalId;

    private $class;

    private $address;

    private $buildType;

    private $floors;

    private $developer;

    private $contractType;

    private $flatCount;

    private $permission;

    private $buildDate;

    private $facing;

    private $paymentType;

    private $accreditation;

    private $images;

    private $description;

    private $ourOpinition;

    private $news;

    private $status;

    private $specifications;

    private $parking;

    private $price;

    private $flats;

    private $createdAt;

    private $updatedAt;
}