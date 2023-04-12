<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ClientFixture extends Fixture implements FixtureGroupInterface
{
    public function __construct(
        private UserPasswordHasherInterface $hasher
    ) {}
    public function load(ObjectManager $manager): void
    {
        $admin1 = new Client();
        $admin1->setEmail('admin@gmail.com');
        $admin1->setPassword($this->hasher->hashPassword($admin1, 'admin1'));
        $admin1->setNom('admin1');
        $admin1->setPrenom('');
        $admin1->setGenre('');
        $admin1->setRoles(['ROLE_ADMIN']);
        $admin2 = new Client();
        $admin2->setEmail('admin2@gmail.com');
        $admin2->setPassword($this->hasher->hashPassword($admin2, 'admin2'));
        $admin2->setNom('admin2');
        $admin2->setPrenom('');
        $admin2->setGenre('');
        $admin2->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin1);
        $manager->persist($admin2);
        for ($i=1; $i<=5;$i++) {
            $user = new Client();
            $user->setEmail("user$i@gmail.com");
            $user->setPassword($this->hasher->hashPassword($user,'user'));
            $user->setNom("user$i");
            $user->setPrenom('');
            $user->setGenre('');
            $manager->persist($user);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['user'];
    }
}
