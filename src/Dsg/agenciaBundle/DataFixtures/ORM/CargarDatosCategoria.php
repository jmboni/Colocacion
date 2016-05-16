<?php
namespace Dsg\agenciaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Dsg\agenciaBundle\Entity\Categoria;

class CargarDatosCategoria extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $disenno = new Categoria();
        $disenno->setNombre('Diseño');
        $disenno->setSlugValue('Diseño');

        $programacion = new Categoria();
        $programacion->setNombre('Programación');
        $programacion->setSlugValue('Programación');

        $restauracion = new Categoria();
        $restauracion->setNombre('Restauración');
        $restauracion->setSlugValue('Restauración');

        $construccion = new Categoria();
        $construccion->setNombre('Construcción');
        $construccion->setSlugValue('Construcción');

        $em->persist($disenno);
        $em->persist($programacion);
        $em->persist($restauracion);
        $em->persist($construccion);
        $em->flush();

        $this->addReference('categoria-diseño', $disenno);
        $this->addReference('categoria-programacion', $programacion);
        $this->addReference('categoria-restauración', $restauracion);
        $this->addReference('categoria-construcción', $construccion);
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}