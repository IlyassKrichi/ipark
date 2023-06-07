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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant_paye')
            ->add('date_paiement', DateType::class, ['widget' => 'single_text'])
            ->add('mode_paiement', ChoiceType::class, ['choices' => [
                'Visa' => 'Visa', 'Mastercard' => 'Mastercard'
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}
