<?php

namespace App\Controller;

use App\Entity\Artist;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BrowseController extends AbstractController
{
    /**
     * @Route("/artist", name="browse_artist")
     */
    public function artist()
    {
        $artist = $this->getDoctrine()
        ->getRepository(Artist::class)
        ->findBy([],array('name' => 'ASC'));

    return $this->render('artist/artist.html.twig', ['artist' => $artist]);
    }


}
