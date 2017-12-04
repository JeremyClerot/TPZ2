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

        if (0 === strpos($pathinfo, '/player')) {
            // new
            if ('/player/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PlayerController::newAction',  '_route' => 'new',);
            }

            // edit
            if ('/player/edit' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PlayerController::editAction',  '_route' => 'edit',);
            }

            // index
            if ('/player/index' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PlayerController::indexAction',  '_route' => 'index',);
            }

            // show
            if (0 === strpos($pathinfo, '/player/show') && preg_match('#^/player/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'App\\Controller\\PlayerController::showAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
