<?php

namespace Multiservices\PayPayBundle\Datatables;

use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView;
use Sg\DatatablesBundle\Datatable\View\Style;

/**
 * Class ProductosDatatable
 *
 * @package Multiservices\PayPayBundle\Datatables
 */
class ProductosDatatable extends AbstractDatatableView
{
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array $options = array())
    {
        /*$this->topActions->set(array(
            'start_html' => '<div class="row"><div class="col-sm-3">',
            'end_html' => '<hr></div></div>',
            'actions' => array(
                array(
                    'route' => $this->router->generate('productos_new'),
                    'label' => $this->translator->trans('datatables.actions.new'),
                    'icon' => 'glyphicon glyphicon-plus',
                    'attributes' => array(
                        'rel' => 'tooltip',
                        'title' => $this->translator->trans('datatables.actions.new'),
                        'class' => 'btn btn-primary',
                        'role' => 'button'
                    ),
                )
            )
        ));*/

        $this->features->set(array(
            'auto_width' => true,
            'defer_render' => false,
            'info' => true,
            'jquery_ui' => false,
            'length_change' => true,
            'ordering' => true,
            'paging' => true,
            'processing' => true,
            'scroll_x' => false,
            'scroll_y' => '',
            'searching' => true,
            'server_side' => true,
            'state_save' => false,
            'delay' => 0,
            'extensions' => array()
        ));

        $this->ajax->set(array(
            'url' => $this->router->generate('productos_results'),
            'type' => 'GET'
        ));

        $this->options->set(array(
            'display_start' => 0,
            'defer_loading' => -1,
            'dom' => 'lfrtip',
            'length_menu' => array(10, 25, 50, 100),
            'order_classes' => true,
            'order' => array(array(0, 'asc')),
            'order_multi' => true,
            'page_length' => 10,
            'paging_type' => Style::FULL_NUMBERS_PAGINATION,
            'renderer' => '',
            'scroll_collapse' => false,
            'search_delay' => 0,
            'state_duration' => 7200,
            'stripe_classes' => array(),
            'class' => Style::BASE_STYLE,
            'individual_filtering' => false,
            'individual_filtering_position' => 'foot',
            'use_integration_options' => false,
            'force_dom' => false
        ));

        $this->columnBuilder
            ->add('id', 'column', array(
                'title' => 'Id',
            ))
            ->add('descripcionCorta', 'column', array(
                'title' => 'DescripcionCorta',
            ))    
            ->add('referencia', 'column', array(
                'title' => 'Referencia',
            ))
            ->add('descripcion', 'column', array(
                'title' => 'Descripcion',
            ))
            ->add('impuesto', 'column', array(
                'title' => 'Impuesto',
            ))
            
            ->add('stock', 'column', array(
                'title' => 'Stock',
            ))
            ->add('stockMinimo', 'column', array(
                'title' => 'StockMinimo',
            ))
            ->add('avisoMinimo', 'column', array(
                'title' => 'AvisoMinimo',
            ))
            ->add('tipo', 'column', array(
                'title' => 'Tipo',
            ))
            ->add('datosProducto', 'column', array(
                'title' => 'DatosProducto',
            ))
            ->add('fechaAlta', 'column', array(
                'title' => 'FechaAlta',
            ))
            ->add('codembalaje', 'column', array(
                'title' => 'Codembalaje',
            ))
            ->add('unidadesCaja', 'column', array(
                'title' => 'UnidadesCaja',
            ))
            ->add('precioTicket', 'column', array(
                'title' => 'PrecioTicket',
            ))
            ->add('modificarTicket', 'column', array(
                'title' => 'ModificarTicket',
            ))
            ->add('observaciones', 'column', array(
                'title' => 'Observaciones',
            ))
            ->add('precioCompra', 'column', array(
                'title' => 'PrecioCompra',
            ))
            ->add('precioAlmacen', 'column', array(
                'title' => 'PrecioAlmacen',
            ))
            ->add('precioTienda', 'column', array(
                'title' => 'PrecioTienda',
            ))
            ->add('precioPvp', 'column', array(
                'title' => 'PrecioPvp',
            ))
            ->add('precioIva', 'column', array(
                'title' => 'PrecioIva',
            ))
            ->add('codigobarras', 'column', array(
                'title' => 'Codigobarras',
            ))
            ->add('imagen', 'column', array(
                'title' => 'Imagen',
            ))
            ->add('borrado', 'column', array(
                'title' => 'Borrado',
            ))
            ->add('codubicacion.nombre', 'column', array(
                'title' => 'Codubicacion Nombre',
            ))
            ->add('codubicacion.borrado', 'column', array(
                'title' => 'Codubicacion Borrado',
            ))
            ->add('codubicacion.id', 'column', array(
                'title' => 'Codubicacion Id',
            ))
            ->add('codproveedor1.nombre', 'column', array(
                'title' => 'Codproveedor1 Nombre',
            ))
            ->add('codproveedor1.ruc', 'column', array(
                'title' => 'Codproveedor1 Ruc',
            ))
            ->add('codproveedor1.direccion', 'column', array(
                'title' => 'Codproveedor1 Direccion',
            ))
            ->add('codproveedor1.codprovincia', 'column', array(
                'title' => 'Codproveedor1 Codprovincia',
            ))
            ->add('codproveedor1.ciudad', 'column', array(
                'title' => 'Codproveedor1 Ciudad',
            ))
            ->add('codproveedor1.codentidad', 'column', array(
                'title' => 'Codproveedor1 Codentidad',
            ))
            ->add('codproveedor1.cuentabancaria', 'column', array(
                'title' => 'Codproveedor1 Cuentabancaria',
            ))
            ->add('codproveedor1.codpostal', 'column', array(
                'title' => 'Codproveedor1 Codpostal',
            ))
            ->add('codproveedor1.telefono', 'column', array(
                'title' => 'Codproveedor1 Telefono',
            ))
            ->add('codproveedor1.movil', 'column', array(
                'title' => 'Codproveedor1 Movil',
            ))
            ->add('codproveedor1.email', 'column', array(
                'title' => 'Codproveedor1 Email',
            ))
            ->add('codproveedor1.web', 'column', array(
                'title' => 'Codproveedor1 Web',
            ))
            ->add('codproveedor1.borrado', 'column', array(
                'title' => 'Codproveedor1 Borrado',
            ))
            ->add('codproveedor1.codproveedor', 'column', array(
                'title' => 'Codproveedor1 Codproveedor',
            ))
            ->add('codproveedor2.nombre', 'column', array(
                'title' => 'Codproveedor2 Nombre',
            ))
            ->add('codproveedor2.ruc', 'column', array(
                'title' => 'Codproveedor2 Ruc',
            ))
            ->add('codproveedor2.direccion', 'column', array(
                'title' => 'Codproveedor2 Direccion',
            ))
            ->add('codproveedor2.codprovincia', 'column', array(
                'title' => 'Codproveedor2 Codprovincia',
            ))
            ->add('codproveedor2.ciudad', 'column', array(
                'title' => 'Codproveedor2 Ciudad',
            ))
            ->add('codproveedor2.codentidad', 'column', array(
                'title' => 'Codproveedor2 Codentidad',
            ))
            ->add('codproveedor2.cuentabancaria', 'column', array(
                'title' => 'Codproveedor2 Cuentabancaria',
            ))
            ->add('codproveedor2.codpostal', 'column', array(
                'title' => 'Codproveedor2 Codpostal',
            ))
            ->add('codproveedor2.telefono', 'column', array(
                'title' => 'Codproveedor2 Telefono',
            ))
            ->add('codproveedor2.movil', 'column', array(
                'title' => 'Codproveedor2 Movil',
            ))
            ->add('codproveedor2.email', 'column', array(
                'title' => 'Codproveedor2 Email',
            ))
            ->add('codproveedor2.web', 'column', array(
                'title' => 'Codproveedor2 Web',
            ))
            ->add('codproveedor2.borrado', 'column', array(
                'title' => 'Codproveedor2 Borrado',
            ))
            ->add('codproveedor2.codproveedor', 'column', array(
                'title' => 'Codproveedor2 Codproveedor',
            ))
            ->add('codfamilia.nombre', 'column', array(
                'title' => 'Codfamilia Nombre',
            ))
            ->add('codfamilia.borrado', 'column', array(
                'title' => 'Codfamilia Borrado',
            ))
            ->add('codfamilia.id', 'column', array(
                'title' => 'Codfamilia Id',
            ))
           /* ->add(null, 'action', array(
                'title' => $this->translator->trans('datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => 'productos_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => $this->translator->trans('datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => $this->translator->trans('datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => 'productos_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => $this->translator->trans('datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => $this->translator->trans('datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))*/
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return 'Multiservices\PayPayBundle\Entity\Productos';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'productos_datatable';
    }
}
