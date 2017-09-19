<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blacklist
 *
 * @ORM\Table(name="blacklist")
 * @ORM\Entity
 */
class Blacklist
{
    /**
     * @var string
     *
     * @ORM\Column(name="anbieter", type="string", length=255, nullable=true)
     */
    private $anbieter;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ip;


}

