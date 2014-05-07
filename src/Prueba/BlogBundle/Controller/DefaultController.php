<?php

namespace Prueba\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
//        return array('name' => $name);
//        return new Response('Hello World',200);
        return new Response(json_encode(array('some_variable'=>'some value')),200,array('content-type'=>'application/json'));
    }
}
