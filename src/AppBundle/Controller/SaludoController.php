<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class SaludoController {
    
    public function holaAction() {
        return new Response('<h1>¡Buenas tardes!</h1>');
    }

}