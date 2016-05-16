<?php
  
namespace Dsg\agenciaBundle\DataFixtures\ORM;
  
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Dsg\agenciaBundle\Entity\Afiliados;
  
class CargarDatosAfiliados extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $afiliado = new Afiliados();
  
        $afiliado->setUrl('http://sensio-labs.com/');
        $afiliado->setEmail('address1[at]example.com');
        $afiliado->setToken('sensio-labs');
        $afiliado->setActivado(true);
        $afiliado->addCategoria($em->merge($this->getReference('categoria-programacion')));
  
        $em->persist($afiliado);
  
        $afiliado = new Afiliados();
  
        $afiliado->setUrl('/');
        $afiliado->setEmail('address2[at]example.org');
        $afiliado->setToken('symfony');
        $afiliado->setActivado(false);
        $afiliado->addCategoria($em->merge($this->getReference('categoria-programacion')), $em->merge($this->getReference('categoria-diseño')));
  
        $em->persist($afiliado);
        $em->flush();
  
        $this->addReference('afiliados', $afiliado);
    }
  
    public function getOrder()
    {
        return 3; // This represents the order in which fixtures will be loaded
    }
}