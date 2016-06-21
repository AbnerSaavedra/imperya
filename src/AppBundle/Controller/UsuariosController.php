<?php

namespace AppBundle\Controller;

use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\RouteRedirectView;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\Usuario;

/**
 * Class UsersController
 * @package AppBundle\Controller
 * @Annotations\RouteResource("usuarios")
 */
class UsuariosController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Obtiene un simple Usuario.
     *
     * @ApiDoc(
     *   output = "AppBundle\Entity\Usuario",
     *   statusCodes = {
     *     200 = "Retornado cuando se completa exitosamente",
     *     404 = "Retornado cuando no se ecuentra"
     *   }
     * )
     *
     * @param AppBundle\Entity\Usuario|integer $user
     *
     * @throws NotFoundHttpException when does not exist
     *
     * @return View
     */
    public function getAction(Usuario $user)
    {

        $view = $this->view($user);

        return $view;
    }

    /**
     * Obtiene una coleccion de Usuarios.
     *
     * @ApiDoc(
     *   output = "AppBundle\Entity\Usuario",
     *   statusCodes = {
     *     405 = "Method not allowed"
     *   }
     * )
     *
     * @throws MethodNotAllowedHttpException
     *
     * @return View
     */
    public function cgetAction()
    {
        throw new MethodNotAllowedHttpException([], "Method not allowed");
    }
}
