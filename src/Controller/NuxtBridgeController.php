<?php

namespace Pppl\ContaoNuxtBridgeBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Contao\System;
use Contao\Config;

use Pppl\ContaoNuxtBridgeBundle\NuxtIndex;

/**
 * NuxtBridgeController provides all routes.
 *
 * @Route(defaults={"_scope" = "frontend", "_token_check" = false})
 */
class NuxtBridgeController extends Controller
{
   
    /**
     * Runs the nuxt controller.
     *
     * @return Response
     */
    public function indexAction()
    {
        $this->container->get('contao.framework')->initialize();

        $controller = new NuxtIndex();

        return $controller->run();
    }
}
