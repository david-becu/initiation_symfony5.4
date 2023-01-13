<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dd('Ca fonctionne');
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"}) 
     */
    public function test(Request $request, $age)
    {
        //à été remplacé par les paramètre de test():
        //$request = Request::createFromGlobals(); 

        dump($request);
    
        // $age = $request->attributes->get('age');
        // $age = $request->query->get('age', 0);

        return new Response("Vous avez $age ans !");

        // $age = 0;
         // if(!empty($_GET['age'])) {
        //     $age = $_GET['age'];
        // }
        // dd("Vous avez $age ans");
    }
}