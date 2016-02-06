<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Arxis\ContableBundle\DBAL\Types\ClaseContribuyenteType;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto", indexes={@ORM\Index(name="Contacto_TipoIdentificacion", columns={"TipoIdentificacionId"}), @ORM\Index(name="Contacto_TipoPersona", columns={"TipoPersonaId"})})
 * @ORM\Entity
 */
class Contacto  ///Anteriormente se llamaba Contacto renombrada asi para compatibilidad
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
     * @var integer
     *
     * @ORM\Column(name="PaisId", type="integer", nullable=false)
     */
    private $paisid;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=15, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=15, nullable=false)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=250, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreComercial", type="string", length=50, nullable=false)
     */
    private $nombrecomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefonos", type="string", length=50, nullable=false)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=50, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=25, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="Contacto", type="string", length=50, nullable=false)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="RegistroEmpresarial", type="string", length=15, nullable=false)
     */
    private $registroempresarial;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ActividadEconomica", type="text", length=65535, nullable=true)
     */
    private $actividadeconomica;

    /**
     * @var string
     *
     * @ORM\Column(name="ClaseContribuyente", type="ClaseContribuyenteType", nullable=false, options={"default":"Otros"})
     * @DoctrineAssert\Enum(entity="Arxis\ContableBundle\DBAL\Types\ClaseContribuyenteType")
     */
    private $clasecontribuyente = 'Otros';

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text", length=65535, nullable=true)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Cliente", type="string", length=1, nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Proveedor", type="string", length=1, nullable=false)
     */
    private $proveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Vendedor", type="string", length=1, nullable=false)
     */
    private $vendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Empleado", type="string", length=1, nullable=false)
     */
    private $empleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Transportista", type="string", length=1, nullable=false)
     */
    private $transportista;

    /**
     * @var string
     *
     * @ORM\Column(name="Recaudador", type="string", length=1, nullable=false)
     */
    private $recaudador;

    /**
     * @var \Tipoidentificacion
     *
     * @ORM\ManyToOne(targetEntity="Tipoidentificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoIdentificacionId", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipoidentificacionid;

    /**
     * @var \Tipopersona
     *
     * @ORM\ManyToOne(targetEntity="Tipopersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoPersonaId", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipopersonaid;


}

