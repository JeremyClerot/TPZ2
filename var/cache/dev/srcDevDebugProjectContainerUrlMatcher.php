<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/new')) {
            // App_inventory_new
            if ('/newInventory' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\InventoryController::newAction',  '_route' => 'App_inventory_new',);
            }

            // App_material_new
            if ('/newMaterial' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MaterialController::newAction',  '_route' => 'App_material_new',);
            }

            // App_Person_new
            if ('/newPerson' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PersonController::newAction',  '_route' => 'App_Person_new',);
            }

        }

        elseif (0 === strpos($pathinfo, '/index')) {
            // App_inventory_Index
            if ('/indexInventory' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\InventoryController::indexAction',  '_route' => 'App_inventory_Index',);
            }

            // App_material_Index
            if ('/indexMaterial' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MaterialController::indexAction',  '_route' => 'App_material_Index',);
            }

            // App_Person_Index
            if ('/indexPerson' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PersonController::indexAction',  '_route' => 'App_Person_Index',);
            }

        }

        // App_Person_showInventaire
        if (0 === strpos($pathinfo, '/show') && preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'App_Person_showInventaire')), array (  '_controller' => 'App\\Controller\\PersonController::showAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
