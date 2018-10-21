<?php

namespace RltBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Developer.
 *
 * @Serializer\AccessorOrder("custom", custom={"id", "name"})
 *
 * @ORM\Table(name="rlt_developers")
 * @ORM\Entity(repositoryClass="RltBundle\Repository\DeveloperRepository")
 */
class Developer
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

    private $externalId;

    private $phone;

    private $mail;

    private $address;

    private $site;

    private $creationYear;

    private $buildings;

    private $news;

    private $logo;

    private $description;
}