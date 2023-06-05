<?php

namespace App\Form;

use App\Entity\EntreeSortie;
use App\Entity\Paiement;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntreeSortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_entree')
            ->add('date_sortie')
            ->add('Paiement', EntityType::class, [
                'class' => Paiement::class, 'choice_label' => 'id',
            ])
            ->add('Reservation', EntityType::class, [
                'class' => Reservation::class, 'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EntreeSortie::class,
        ]);
    }
}
