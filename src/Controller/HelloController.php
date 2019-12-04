<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }

    /**
     * @Route("/hello/{name}")
     */
    public function hello($name)
    {
        return $this->render('hello/hello.html.twig', array('name' => $name));
    }

    /**
     * @Route("/hello/{name}/{time}")
     */
    public function helloManyTimes(string $name, int $time)
    {
        if($time !=0 && $time >= 10){
            $time = 3;
        }
        return $this->render('hello/helloManyTimes.html.twig', array('name' => $name,'time' => $time));
    }
}
