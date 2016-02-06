<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobantediario
 *
 * @ORM\Table(name="comprobantediario", indexes={@ORM\Index(name="ComprobanteDiario_Establecimiento", columns={"EstablecimientoId"}), @ORM\Index(name="ComprobanteDiario_TipoComprobanteDiario", columns={"TipoComprobanteDiarioId"}), @ORM\Index(name="ComprobanteDiario_Documento", columns={"DocumentoId"}), @ORM\Index(name="ComprobanteDiario_EstadoDocumento", columns={"EstadoDocumentoId"})})
 * @ORM\Entity
 */
class Comprobantediario
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false, options={"default":"2000-01-01 00:00:00"})
     */
    private $fecha = '2000-01-01 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaEmision", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechaemision = '2000-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="Serie", type="string", length=10, nullable=false, options={"default":"001001"})
     */
    private $serie = '001001';

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false, options={"default":0,"unsigned":true})
     */
    private $numero = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=250, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text", length=65535, nullable=true)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Debe", type="decimal", precision=12, scale=2, nullable=false, options={"default":"0.00","unsigned":true})
     */
    private $debe = 0.00;

    /**
     * @var string
     *
     * @ORM\Column(name="Haber", type="decimal", precision=12, scale=2, nullable=false, options={"default":"0.00","unsigned":true})
     */
    private $haber = 0.00;

    /**
     * @var string
     *
     * @ORM\Column(name="Concepto", type="string", length=250, nullable=false)
     */
    private $concepto;

    /**
     * @var \Documento
     *
     * @ORM\ManyToOne(targetEntity="Documento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DocumentoId", referencedColumnName="id", nullable=false)
     * })
     */
    private $documentoid; //deberia estar a 1 hay que ver

    /**
     * @var \Establecimiento
     *
     * @ORM\ManyToOne(targetEntity="Establecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstablecimientoId", referencedColumnName="id", nullable=false)
     * })
     */
    private $establecimientoid;  //debera ser igual a uno

    /**
     * @var \Estadodocumento
     *
     * @ORM\ManyToOne(targetEntity="Estadodocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstadoDocumentoId", referencedColumnName="id", nullable=false)
     * })
     */
    private $estadodocumentoid;

    /**
     * @var \Tipocomprobantediario
     *
     * @ORM\ManyToOne(targetEntity="Tipocomprobantediario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoComprobanteDiarioId", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipocomprobantediarioid;


}

