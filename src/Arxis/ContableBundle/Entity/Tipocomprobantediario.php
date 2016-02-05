<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocomprobantediario
 *
 * @ORM\Table(name="tipocomprobantediario")
 * @ORM\Entity
 */
class Tipocomprobantediario
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
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=25, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text", length=65535, nullable=false)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false)
     */
    private $numero = '1';


}

