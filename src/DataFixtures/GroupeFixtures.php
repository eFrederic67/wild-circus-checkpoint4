<?php

namespace App\DataFixtures;

use App\Entity\Groupe;
use App\Entity\Membre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GroupeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($ind = 1; $ind <= 5; $ind++) {

            $groupe = new Groupe();
            $groupe->setName('Danse'.$ind);
            $groupe->setDescription('Groupe composer de'.$ind.'danseur');
            $manager->persist($groupe);

            for ($n = 1; $n <= 5; $n++) {

                $membre = new Membre();
                $membre->setDescription('Danseur classique');
                $membre->setFirstname('Yavuz'.$ind);
                $membre->setLastname('Kutuk'.$ind);
                $membre->setPseudo('Kyatuz'.$ind);
                $membre->setGroupe($groupe);
                $manager->persist($membre);
            }
        }
        $manager->flush();

    }
}
