<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoagenteretencion
 *
 * @ORM\Table(name="tipoagenteretencion")
 * @ORM\Entity
 */
class Tipoagenteretencion
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
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=250, nullable=false)
     */
    private $nombre;


}

