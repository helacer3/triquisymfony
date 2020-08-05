<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// entities
use App\Entity\Jugadas;

/*
* controlador para acciones Triqui
*/
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="triqui")
     */
    public function home(Request $request) {
        try {
            
        } catch (\Exception $ex) {
            error_log("\n\n Error (".date('Y-m-d H:i:s').") home: ".$ex->getMessage()."-".$ex->getFile()."-".$ex->getLine());
        }
        // render View
        return $this->render('triqui.html.twig',
            array(

            )
        );
    }

    /**
     * @Route("/guardarjugada", name="guardar_jugada")
     */
    public function guardarJugada(Request $request) {
        try {
            // get Actual Session
            $actSession = "";
            // request Values
            $itemX      = $request->query->get("itemX");
            $itemY      = $request->query->get("itemY");
            $itemSymbol = $request->query->get("itemSymbol");
            // save Item
            $itmGame    = new Jugadas();
            $itmGame->setSessionJuego($actSession);
            $itmGame->setCoordenadaX($itemX);
            $itmGame->setCoordenadaY($itemY);
            $itmGame->setSymbol($itemSymbol);
            $itmGame->setHoraJugada(new \Datetime());
            $itmGame->save();
        } catch (\Exception $ex) {
            error_log("\n\n Error (".date('Y-m-d H:i:s').") guardarJugada: ".$ex->getMessage()."-".$ex->getFile()."-".$ex->getLine());
        }
    }
}
