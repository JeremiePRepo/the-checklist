<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/** @Route("/todolist", name="todo_") */
class TodoController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();
        return $this->render('todo/index.html.twig', [
                'tasks' => $tasks,
            ]);
        // return $this->render('todo/index.html.twig', [
        //     'controller_name' => 'TodoController',
        // ]);
    }

    /**
     * @Route("/add", name="todo_add")
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
            return $this->redirectToRoute('todo_index');
        }


        return $this->render('todo/todo_add.html.twig', [
            'add_form' => $form->createView()
        ]);
    }

    /**
     * @route("/delete/{id}", name="delete", requirements={"id":"\d+"})
     */
    public function delete(Task $task)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($task);
        $manager->flush();

        $this->addFlash("info","La tâche a bien été supprimé");

        return $this->redirectToRoute('todo_index');
    }
}
