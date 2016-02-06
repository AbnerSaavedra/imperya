<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Arxis\ContableBundle\DBAL\Types\EstadoEstablecimientoType;

/**
 * Establecimiento
 *
 * @ORM\Table(name="establecimiento", indexes={@ORM\Index(name="Establecimiento_Empresa", columns={"EmpresaId"})})
 * @ORM\Entity
 */
class Establecimiento
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
     * @ORM\Column(name="NombreComercial", type="string", length=250, nullable=false)
     */
    private $nombrecomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=3, nullable=false, options={"default":"001"})
     */
    private $numero = '001';

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="text", length=65535, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefonos", type="string", length=100, nullable=false)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=100, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="ActividadesEconomicas", type="text", length=65535, nullable=false)
     */
    private $actividadeseconomicas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicio", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechainicio = '2000-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCierre", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechacierre = '2000-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaReinicio", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechareinicio = '2000-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="EstadoEstablecimientoType", nullable=false, options={"default":"Abierto"})
     * @DoctrineAssert\Enum(entity="Arxis\ContableBundle\DBAL\Types\EstadoEstablecimientoType")
     */
    private $estado = 'Abierto';

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text", length=65535, nullable=true)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="blob", length=65535, nullable=true)
     */
    private $logo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ComprobantesElectronicos", type="boolean", nullable=true, options={"default":false})
     */
    private $comprobanteselectronicos = false;

    /**
     * @var \Establecimiento
     *
     * @ORM\ManyToOne(targetEntity="Establecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EmpresaId", referencedColumnName="id", nullable=false)
     * })
     */
    private $empresaid;


}

