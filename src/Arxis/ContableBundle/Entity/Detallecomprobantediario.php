<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detallecomprobantediario
 *
 * @ORM\Table(name="detallecomprobantediario", indexes={@ORM\Index(name="DetalleComprobanteDiario_ComprobanteDiario", columns={"ComprobanteDiarioId"}), @ORM\Index(name="DetalleComprobanteDiario_CuentaContable", columns={"CuentaContableId"})})
 * @ORM\Entity
 */
class Detallecomprobantediario
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
     * @ORM\Column(name="Concepto", type="string", length=250, nullable=false)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroDocumento", type="string", length=250, nullable=true)
     */
    private $numerodocumento;

    /**
     * @var float
     *
     * @ORM\Column(name="Debe", type="decimal", precision=12, scale=2, nullable=false, options={"default":"0.00","unsigned":true})
     */
    private $debe = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="Haber", type="decimal", precision=12, scale=2, nullable=false, options={"default":"0.00","unsigned":true})
     */
    private $haber = '0.00';

    /**
     * @var \Comprobantediario
     *
     * @ORM\ManyToOne(targetEntity="Comprobantediario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComprobanteDiarioId", referencedColumnName="id", nullable=false)
     * })
     */
    private $comprobantediarioid;

    /**
     * @var \Cuentacontable
     *
     * @ORM\ManyToOne(targetEntity="Cuentacontable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CuentaContableId", referencedColumnName="id", nullable=false)
     * })
     */
    private $cuentacontableid;


}

