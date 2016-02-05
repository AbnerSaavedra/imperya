<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoidentificacion
 *
 * @ORM\Table(name="tipoidentificacion")
 * @ORM\Entity
 */
class Tipoidentificacion
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
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoCompraATS", type="string", length=2, nullable=false)
     */
    private $codigocompraats;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoVentaATS", type="string", length=2, nullable=false)
     */
    private $codigoventaats;


}

