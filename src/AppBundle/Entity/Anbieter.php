<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anbieter
 *
 * @ORM\Table(name="anbieter")
 * @ORM\Entity
 */
class Anbieter
{
    /**
     * @var string
     *
     * @ORM\Column(name="beschreibung", type="string", length=255, nullable=false)
     */
    private $beschreibung;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage_url", type="string", length=255, nullable=true)
     */
    private $homepageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="sum", type="integer", nullable=true)
     */
    private $sum;

    /**
     * @var integer
     *
     * @ORM\Column(name="gesamt", type="integer", nullable=true)
     */
    private $gesamt;

    /**
     * @var integer
     *
     * @ORM\Column(name="profilbild_id", type="integer", nullable=true)
     */
    private $profilbildId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

