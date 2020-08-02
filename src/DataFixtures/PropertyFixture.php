<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class PropertyFixture extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i< 100; $i++){
            $property = new Property();
            $property
                ->setTitle($faker->words(2, true))
                ->setDescription($faker->sentences(3,true))
                ->setSurface($faker->numberBetween(10, 1000))
                ->setRooms($faker->numberBetween(1,10))
                ->setBedrooms($faker->numberBetween(1,9))
                ->setFloor($faker->numberBetween(1,5))
                ->setPrice($faker->numberBetween(50000, 1500000))
                ->setHeat($faker->numberBetween(0,count(Property::HEAT) - 1))
                ->setCity($faker->city)
                ->setAddress($faker->address)
                ->setPostalCode($faker->postcode)
                ->setSold(false);
            $manager->persist($property);
        }
        $manager->flush();
    }
}
