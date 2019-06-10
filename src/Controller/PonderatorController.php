<?php

namespace App\Controller;

use App\Entity\Ponderator;
use App\Form\PonderatorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class PonderatorController
 * @Route("/ponderators", name="pond_")
 * @package App\Controller
 */
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
     *
     * @param Request $request
     * @return RedirectResponse|Response
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

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param Ponderator $ponderator
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function Edit(Ponderator $ponderator, Request $request)
    {
        // Prépare le formulaire
        $form = $this->createForm(PonderatorType::class, $ponderator);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire a été envoyé
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($ponderator);
            $manager->flush();
            $this->addFlash('info', 'Pondérateur modifié');

            return $this->redirectToRoute('pond_index');
        }

        return $this->render('ponderator/pond_add.html.twig', [
            'add_form' => $form->createView(),
        ]);
    }

    /**
     * @route("/delete/{id}", name="delete", requirements={"id":"\d+"})
     *
     * @param Ponderator $ponderator
     * @return RedirectResponse
     */
    public function delete(Ponderator $ponderator)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($ponderator);
        $manager->flush();

        $this->addFlash('info', 'La tâche a bien été supprimé');

        return $this->redirectToRoute('pond_index');
    }
}
