<?php

namespace App\Form;

use App\Entity\Paiement;
use App\Entity\Parking;
use App\Entity\Place;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_reservation')
            ->add('type_vehicule', ChoiceType::class, ['choices' => [
                'Car' => 'Car',
                'Motorcyle' => 'Motorcyle', 'Bike' => 'Bike',
                'Truck' => 'Truck'
            ]])
            ->add('client')
            ->add('parking', EntityType::class, [
                'class' => Parking::class,
            ])
            ->add('place', EntityType::class, [
                'class' => Place::class, 'choice_label' => 'id',
            ])
            ->add('paiement', EntityType::class, [
                'class' => Paiement::class, 'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
