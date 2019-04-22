<?php

namespace App\Controller;

use App\Entity\Ponderator;
use App\Form\PonderatorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/ponderators", name="pond_")
 * */
class PonderatorController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $ponderators = $this->getDoctrine()->getRepository(Ponderator::class)->findAll();

        return $this->render('ponderator/index.html.twig', compact('ponderators'));
    }

    /**
     * @Route("/add", name="add")
     */
    public function Add(Request $request)
    {
        $ponderator = new Ponderator();
        $form = $this->createForm(PonderatorType::class, $ponderator);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire a été envoyé
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($ponderator);
            $manager->flush();
            $this->addFlash('info', 'Pondérateur ajouté');

            return $this->redirectToRoute('pond_index');
        }

        return $this->render('ponderator/pond_add.html.twig', [
            'add_form' => $form->createView(),
        ]);
    }
}
