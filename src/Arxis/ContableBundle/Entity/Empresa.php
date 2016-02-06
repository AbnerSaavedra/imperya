<?php

namespace Arxis\ContableBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use Arxis\ContableBundle\DBAL\Types\ClaseContribuyenteType;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="Empresa_RepresentanteLegal", columns={"RepresentanteLegalId"}), @ORM\Index(name="Empresa_TipoAgenteRetencion", columns={"TipoAgenteRetencionId"}), @ORM\Index(name="Empresa_TipoIdentificacion", columns={"TipoIdentificacionId"}), @ORM\Index(name="Empresa_Contador", columns={"ContadorId"}), @ORM\Index(name="Empresa_TipoPersona", columns={"TipoPersonaId"})})
 * @ORM\Entity
 */
class Empresa
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
     * @ORM\Column(name="Identificacion", type="string", length=25, nullable=false)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="RazonSocial", type="string", length=100, nullable=false)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreComercial", type="string", length=250, nullable=false)
     */
    private $nombrecomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=100, nullable=false)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=250, nullable=false)
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
     * @ORM\Column(name="Email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=15, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="RegistroEmpresarial", type="string", length=25, nullable=false)
     */
    private $registroempresarial;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text", length=65535, nullable=false)
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="ClaseContribuyente", type="ClaseContribuyenteType", nullable=false, options={"default":"Otros"})
     * @DoctrineAssert\Enum(entity="Arxis\ContableBundle\DBAL\Types\ClaseContribuyenteType")
     */
    private $clasecontribuyente = 'Otros';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicio", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechainicio = '2000-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInscripcion", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechainscripcion = '2000-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaConstitucion", type="date", nullable=false, options={"default":"2000-01-01"})
     */
    private $fechaconstitucion = '2000-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="ActividadEconomicaPrincipal", type="text", length=65535, nullable=false)
     */
    private $actividadeconomicaprincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="ObligacionesTributarias", type="text", length=65535, nullable=false)
     */
    private $obligacionestributarias;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroEstablecimientosAbiertos", type="integer", nullable=false, options={"default":"1"})
     */
    private $numeroestablecimientosabiertos = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumeroEstablecimientosCerrados", type="integer", nullable=false, options={"default":"0"})
     */
    private $numeroestablecimientoscerrados = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Jurisdiccion", type="text", length=65535, nullable=false)
     */
    private $jurisdiccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Resolucion", type="string", length=50, nullable=false)
     */
    private $resolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ContribuyenteEspecial", type="boolean", nullable=false, options={"default":false})
     */
    private $contribuyenteespecial = false;

    /**
     * @var string
     *
     * @ORM\Column(name="ClaveInterna", type="string", length=25, nullable=false, options={"default":"0000000"})
     */
    private $claveinterna = '0000000';

    /**
     * @var integer
     *
     * @ORM\Column(name="EjercicioFiscal", type="integer", nullable=false, options={"default":"2000"})
     */
    private $ejerciciofiscal = '2000';

    /**
     * @var integer
     *
     * @ORM\Column(name="PeriodoFiscal", type="integer", nullable=false, options={"default":"1"})
     */
    private $periodofiscal = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="EjerciciosHistoria", type="integer", nullable=false, options={"default":"1"})
     */
    private $ejercicioshistoria = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="PeriodosHistoria", type="integer", nullable=false, options={"default":"1"})
     */
    private $periodoshistoria = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="PeriodoInicialEjercicio", type="integer", nullable=false, options={"default":"1"})
     */
    private $periodoinicialejercicio = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="PeriodosEjercicio", type="integer", nullable=false, options={"default":"1"})
     */
    private $periodosejercicio = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ServidorSmtpComprobantesElectronicos", type="string", length=250, nullable=false)
     */
    private $servidorsmtpcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="PuertoServidorSmtpComprobantesElectronicos", type="string", length=250, nullable=true)
     */
    private $puertoservidorsmtpcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="UsuarioSmtpComprobantesElectronicos", type="string", length=250, nullable=true)
     */
    private $usuariosmtpcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="PasswordSmtpComprobantesElectronicos", type="string", length=250, nullable=true)
     */
    private $passwordsmtpcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailEmisorComprobantesElectronicos", type="string", length=250, nullable=true)
     */
    private $emailemisorcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="ArchivoEmailComprobantesElectronicos", type="text", length=65535, nullable=true)
     */
    private $archivoemailcomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="ArchivoCertificadoComprobantesElectronicos", type="text", length=65535, nullable=true)
     */
    private $archivocertificadocomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="PasswordCertificadoComprobantesElectronicos", type="text", length=65535, nullable=true)
     */
    private $passwordcertificadocomprobanteselectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoAmbienteComprobantesElectronicos", type="string", nullable=false, options={"default":"Pruebas"})
     */
    private $tipoambientecomprobanteselectronicos = 'Pruebas';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoEmisionComprobantesElectronicos", type="string", nullable=false, options={"default":"Normal"})
     */
    private $tipoemisioncomprobanteselectronicos = 'Normal';

    /**
     * @var string
     *
     * @ORM\Column(name="TipoPublicacionComprobantesElectronicos", type="string", nullable=false, options={"default":"Local"})
     */
    private $tipopublicacioncomprobanteselectronicos = 'Local';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ComprobantesElectronicos", type="boolean", nullable=false, options={"default":false})
     */
    private $comprobanteselectronicos = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ComercioExterior", type="boolean", nullable=false, options={"default":false})
     */
    private $comercioexterior = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ObligadoContabilidad", type="boolean", nullable=false, options={"default":false})
     */
    private $obligadocontabilidad = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicioContabilidad", type="date", nullable=true, options={"default":"2000-01-01"})
     */
    private $fechainiciocontabilidad = '2000-01-01';

    /**
     * @var integer
     *
     * @ORM\Column(name="CuentaContableCapitalId", type="integer", nullable=true)
     */
    private $cuentacontablecapitalid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CuentaContableResultadoId", type="integer", nullable=true)
     */
    private $cuentacontableresultadoid;

    /**
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ContadorId", referencedColumnName="id", nullable=false)
     * })
     */
    private $contadorid;

    /**
     * @var \Contacto
     *
     * @ORM\ManyToOne(targetEntity="Contacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RepresentanteLegalId", referencedColumnName="id", nullable=false)
     * })
     */
    private $representantelegalid;

    /**
     * @var \Tipoagenteretencion
     *
     * @ORM\ManyToOne(targetEntity="Tipoagenteretencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoAgenteRetencionId", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipoagenteretencionid;

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
     *   @ORM\JoinColumn(name="TipoPersonaId", referencedColumnName="id")
     * })
     */
    private $tipopersonaid;  //tambien iria default 1 


}

