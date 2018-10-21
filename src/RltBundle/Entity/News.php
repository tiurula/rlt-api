<?php

namespace RltBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * News.
 *
 * @Serializer\AccessorOrder("custom", custom={"id", "title"})
 *
 * @ORM\Table(name="rlt_news")
 * @ORM\Entity(repositoryClass="RltBundle\Repository\NewsRepository")
 */
class News
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
    private $title;

    private $externalId;

    private $images;

    private $description;

    private $text;

    private $tags;

    private $developer;

    private $bank;

    private $building;

    private $createdAt;

    private $updatedAt;
}