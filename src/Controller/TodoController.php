<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
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
    public function todoAdd()
    {
        // Prépare la création d'un nouveau commentaire
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        return $this->render('todo/todo_add.html.twig', [
            'add_form' => $form->createView()
        ]);
    }
}
