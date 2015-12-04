<?php

namespace Miw\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;

use Miw\DemoBundle\Entity\Producto;

class ProductoController extends Controller
{
    public function newAction()
    {
        $num = rand(0, 1000);
        
        $producto = new Producto();
        $producto->setDescripcion('Descripcion = ' . $num);
        $producto->setNombre('Nombre = ' . $num);
        $producto->setPrecio($num);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
        
        return new Response('Id. Producto = ' . $producto->getId());
    }
}
