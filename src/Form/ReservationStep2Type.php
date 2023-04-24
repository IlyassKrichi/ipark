<?php

namespace App\Form;

use App\Entity\Paiement;
use App\Entity\Parking;
use App\Entity\Place;
use App\Entity\Reservation;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationStep2Type extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('parking', EntityType::class, [
                'class' => Parking::class,
                'choice_label' => 'nom',
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('p')
                        ->andWhere('p.adresse = :adresse')
                        ->setParameter('adresse', $options['adresse']);
                },
            ])
            ->add('place', EntityType::class, [
                'class' => Place::class,
                'choice_label' => 'id'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('adresse');
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}