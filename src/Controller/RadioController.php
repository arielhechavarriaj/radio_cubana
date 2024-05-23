<?php

namespace App\Controller;

use App\Entity\Radio;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RadioController extends AbstractController
{
    #[Route('/radio', name: 'app_radio')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Radio::class);
        return $this->render('radio/index.html.twig', [
            'controller_name' => 'RadioController',
            'radio_lists' => $repository->findAll()
        ]);
    }


    #[Route('/radio/create', name: 'create_radio')]
    public function createRadio(EntityManagerInterface $entityManager): Response
    {
        $radio = new Radio();
        $radio->setName('Radio Habana Cuba');
        $radio->setAudioUrl('https://icecast.teveo.cu/McW3fLhs');
        $radio->setCategory('NACIONAL');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($radio);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new radio with id ' . $radio->getId());
    }

}
