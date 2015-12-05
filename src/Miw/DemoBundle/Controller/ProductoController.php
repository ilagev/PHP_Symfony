<?php

namespace Miw\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Miw\DemoBundle\Entity\Producto;

class ProductoController extends Controller
{
    /*
     * Recupera listado de productos
     */
    public function cgetAction() {
        $productos = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('MiwDemoBundle:Producto')
                ->findAll();
        
        return $this->render('MiwDemoBundle:Producto:listado.html.twig', array(
            'productos' => $productos
        ));
    }

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
    
    public function getAction($id, $format) {
        $em = $this->getDoctrine()->getManager();
        
        $producto = $em->getRepository('MiwDemoBundle:Producto')
                       ->find(intval($id));
        
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        if ($format === 'json') {
            $jsonContent  = $serializer->serialize($producto, $format);
            return new Response($jsonContent);
        } else if ($format === 'xml') {
            $xmlContent  = $serializer->serialize($producto, $format);
            return new Response($xmlContent);
        } else {
            return $this->render('MiwDemoBundle:Producto:producto.html.twig', array(
            'producto' => $producto
        ));
        }
        
        
    }
}
