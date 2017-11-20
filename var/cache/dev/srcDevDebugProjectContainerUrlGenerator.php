<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_inventorycontroller_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\InventoryController::new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inventory/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_inventorycontroller_edit' => array (  0 =>   array (    0 => 'p',  ),  1 =>   array (    '_controller' => 'App\\Controller\\InventoryController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'p',    ),    1 =>     array (      0 => 'text',      1 => '/inventory/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_inventorycontroller_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\InventoryController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inventory/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_materialcontroller_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MaterialController::new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/material/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_materialcontroller_edit' => array (  0 =>   array (    0 => 'p',  ),  1 =>   array (    '_controller' => 'App\\Controller\\MaterialController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'p',    ),    1 =>     array (      0 => 'text',      1 => '/material/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_materialcontroller_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\MaterialController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/material/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_personnecontroller_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PersonController::new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_personnecontroller_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PersonController::edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_personnecontroller_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\PersonController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
