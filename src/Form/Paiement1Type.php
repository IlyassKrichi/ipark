<?php

namespace App\Form;

use App\Entity\EntreeSortie;
use App\Entity\Paiement;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Paiement1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant_paye')
            ->add('date_paiement')
            ->add('mode_paiement')
            ->add('reservation', EntityType::class, [
                'class' => Reservation::class, 'choice_label' => 'id',
            ])
            ->add('entreeSortie', EntityType::class, [
                'class' => EntreeSortie::class, 'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}
