<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadodocumento
 *
 * @ORM\Table(name="estadodocumento")
 * @ORM\Entity
 */
class Estadodocumento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=2, nullable=false)
     */
    private $codigo = '01';

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=25, nullable=false)
     */
    private $nombre;


}

