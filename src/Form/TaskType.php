<?php

namespace App\Form;

use App\Entity\Task;
use App\Entity\Ponderator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('ponderators', EntityType::class, [
                'class' => Ponderator::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => 'true',
            ])
            // ->add('deadline')
            // ->add('duration')
            // ->add('repetition')
            // ->add('startDate')
            // ->add('checked')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
