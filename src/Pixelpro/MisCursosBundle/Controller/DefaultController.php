<?php

namespace Pixelpro\MisCursosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('PixelproMisCursosBundle:Default:index.html.twig');
    }

    public function mostrarAction($id) {
         return $this->render('PixelproMisCursosBundle:Default:mostrar.html.twig');
    }

    public function crearAction(Request $request) {
        
    }

    public function nuevoAction() {
        return $this->render('PixelproMisCursosBundle:Default:nuevo.html.twig'); 
    }

    public function editarAction($id) {
         return $this->render('PixelproMisCursosBundle:Default:editar.html.twig');
    }

    public function actualizarAction(Request $request, $id) {
        
    }

    public function eliminarAction(Request $request, $id) {
        
    }

}
