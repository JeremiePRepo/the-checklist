<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    /**
     * @Route("/todolist", name="todo")
     */
    public function index()
    {
        return $this->render('todo/index.html.twig', [
            'controller_name' => 'TodoController',
        ]);
    }

    /**
     * @Route("/todolist/add", name="todo_add")
     */
    public function todoAdd(Request $request)
    {
        // Prépare la création d'un nouveau commentaire
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        // On traite le formulaire s’il a été remplis
        $form->handleRequest($request);
        if( $form->isSubmitted() && $form->isValid() ) {
            // Si le formulaire a été envoyé
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($task);
            $manager->flush();
            $this->addFlash("info","Commentaire ajouté");
            return $this->redirectToRoute('todo');
        }


        return $this->render('todo/todo_add.html.twig', [
            'add_form' => $form->createView()
        ]);
    }
}
