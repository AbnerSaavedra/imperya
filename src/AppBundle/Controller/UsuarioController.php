<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
* @Rest\RouteResource("Usuario")
 */
class UsuarioController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Lists all Usuario entities.
     *
     * @ApiDoc(
     *   resource = true,
     *   section="Usuario",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when not found"
     *   }
     * )
     *
     * @Rest\View()
     *
     */
    public function cgetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('AppBundle:Usuario')->findAll();

        //$usuarios_datatable = $this->get("appbundle_datatable.usuarios");
        //$usuarios_datatable->buildDatatable();

        $view = $this->view($usuarios)
            ->setTemplate('usuario/index.html.twig')
            ->setTemplateData([
                            'usuarios' => $usuarios
                             ]);
        return $usuarios;
    }
    
    /**
     * Crea una nueva Usuario entidad.
     *
     * @ApiDoc(
     *   resource = true,
     *   section="Usuario",
     *   input = "AppBundle\Form\UsuarioType",
     *   output = "AppBundle\Entity\Usuario",
     *    statusCodes = {
     *      201 = "Retorna cuando se crea un nuevo Usuario",
     *      400 = "Returna cuando el formulario contiene errores" 
     *   }
     * )
     * @Rest\View(
     *   template = "usuario/new.html.twig",
     *   statusCode = Response::HTTP_BAD_REQUEST
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface[]|View
     */
    public function postAction(Request $request)
    {

        try {
            $usuario = $this->getHandler()->post(
                new Usuario(),
                $request->request->all()
            );
            $routeOptions = array(
                'usuario'        => $usuario->getId(),
                '_format'    => $request->get('_format'),
            );
            return $this->routeRedirectView(
                'get_usuario',
                $routeOptions,
                Response::HTTP_CREATED
            );
        } catch (InvalidFormException $e) {
            return $e->getForm();
        }
    }

    /**
     * Finds and displays a Usuario entity.
     *
     * @ApiDoc(
     *   resource = true,
     *   output = "AppBundle\Entity\Usuario",
     *   section="Usuario",
     *    statusCodes = {
     *      200 = "Retorna la entidad Usuario",
     *      404 = "Retorna cuando no se ecuentra objeto" 
     *   }
     * )
     *
     */
    public function getAction(Usuario $usuario)
    {
        
        $view = $this->view($usuario, 200)
            ->setTemplate('usuario/show.html.twig')
            ->setTemplateData(['usuario'=>$usuario]);
        return $this->handleView($view);
    }

    /**
     * Replaces an existing Usuario entity.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "AppBundle\Form\UsuarioType",
     *   output = "AppBundle\Entity\Usuario",
     *   section="Usuario",
     *    statusCodes = {
     *      201="Retorna cuando Usuario ha sido creado exitosamente",
     *      204="Retorna cuando un existente Usuario ha sido actualizado exitosamente",
     *      400="Retorna cuando la data del formulario es invalida"
     *   }
     * )
     * @param Request $request
     * @param integer $id
     * @return array|\FOS\RestBundle\View\View|null
     */
    public function putAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('AppBundle:Usuario')->find($id);

        try {
            if ($usuario === null) {
                $statusCode = Response::HTTP_CREATED;
                $usuario = $this->getHandler()->post(
                    new Usuario(),
                    $request->request->all()
                );
            } else {
                $statusCode = Response::HTTP_NO_CONTENT;
                $usuario = $this->getHandler()->put(
                    $usuario,
                    $request->request->all()
                );
            }
            $routeOptions = array(
                'usuario'        => $usuario->getId(),
                '_format'   => $request->get('_format')
            );
            return $this->routeRedirectView('get_usuario', $routeOptions, $statusCode);
        } catch (InvalidFormException $e) {
            return $e->getForm();
        }
    }

    /**
     * Updates an existing Usuario entity.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "AppBundle\Form\UsuarioType",
     *   output = "AppBundle\Entity\Usuario",
     *   section="Usuario",
     *    statusCodes = {
     *      204="Returned when an existing Usuario has been successfully updated",
     *      400="Returned when the posted data is invalid",
     *      404="Returned when trying to update a non existent Usuario"
     *   }
     * )
     * @param Request $request
     * @param Usuario $usuario
     * @return array|\FOS\RestBundle\View\View|null
     */
    public function patchAction(Request $request, Usuario $usuario)
    {
        

        try {
            $usuario = $this->getHandler()->patch(
                $usuario,
                $request->request->all()
            );
            $routeOptions = array(
                'usuario'        => $usuario->getId(),
                '_format'   => $request->get('_format')
            );
            return $this->routeRedirectView('get_usuario', $routeOptions, Response::HTTP_NO_CONTENT);
        } catch (InvalidFormException $e) {
            return $e->getForm();
        }
    }

    /**
     * Deletes a Usuario entity.
     *
     * @ApiDoc(
     *      resource = true,
     *      section="Usuario",
     *      statusCodes = {
     *         204="Retorna cuando Usuario existente  ha sido eliminado completamente",
     *         404="Retorna cuando intenta eliminar una Usuario no existente"
     *      }
     *  )
     *
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $this->getHandler()->delete($usuario);

        return $this->routeRedirectView('get_usuarios', array(), Response::HTTP_NO_CONTENT);
    }

       
    /**
     * Returns the required handler for this controller
     *
     * @return \AppBundle\Form\FormHandler
     */
    private function getHandler()
    {
        return $this->get('appbundle.form.handler.usuario');
    }
}
