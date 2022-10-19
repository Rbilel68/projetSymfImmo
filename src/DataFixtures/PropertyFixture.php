<?php

namespace App\DataFixtures;
use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use Faker\Factory;

class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
       // $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 100; $i++ ){
            $property = new Property();
            $property
                ->setTitle("maison54")
                ->setDescription("loream ipsum")
                ->setSurface("5")
                ->setRooms("5")
                ->setBedrooms("5")
                ->setFloor("3")
                ->setPrice("1500000")
                ->setHeat("1")
                ->setCity("lyon")
                ->setAddress("4 rue victor hugo")
                ->setPostalCode("69000")
                ->setSold(false);
             $manager->persist($property);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
