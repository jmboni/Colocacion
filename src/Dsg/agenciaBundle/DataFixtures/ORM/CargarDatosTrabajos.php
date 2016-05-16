<?php
namespace Dsg\agenciaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Dsg\agenciaBundle\Entity\Trabajos;
use Symfony\Component\Validator\Constraints\DateTime;

class CargarDatosTrabajos extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        
            $trabajo_dsg = new Trabajos();
            $trabajo_dsg->setCategoria($em->merge($this->getReference("categoria-programacion")));
            $trabajo_dsg->setTipo('tiempo total');
            $trabajo_dsg->setCompania('DSG Consultores');
            $trabajo_dsg->setLogo('sensio-labs.gif');
            $trabajo_dsg->setUrl('http://www.dsgconsultores.com/');
            $trabajo_dsg->setPosicion('Programador');
            $trabajo_dsg->setLocalidad('Almeria, España');
            $trabajo_dsg->setDescripcion('Programador Web con experiencia');
            $trabajo_dsg->setHowToApply('Envia tu CV a DSG Consultores');
            $trabajo_dsg->setPublico(true);
            $trabajo_dsg->setActivado(true);
            $trabajo_dsg->setToken('DSG_Consultores');
            $trabajo_dsg->setEmail('direccion@dsgconsultores.com');
            $trabajo_dsg->setCreado(new \DateTime('2005-12-01'));
            $trabajo_dsg->setactualizado(new \DateTime());
            
            $trabajo_aea = new Trabajos();
            $trabajo_aea->setCategoria($em->merge($this->getReference("categoria-diseño")));
            $trabajo_aea->setTipo('tiempo parcial');
            $trabajo_aea->setCompania('AEA');
            $trabajo_aea->setLogo('sensio-labs.gif');
            $trabajo_aea->setUrl('http://www.estudiosalmerienses.com/');
            $trabajo_aea->setPosicion('Diseñador');
            $trabajo_aea->setLocalidad('Almeria, España');
            $trabajo_aea->setDescripcion('Diseñador Web con experiencia');
            $trabajo_aea->setHowToApply('Envia tu CV a AEA');
            $trabajo_aea->setPublico(true);
            $trabajo_aea->setActivado(true);
            $trabajo_aea->setToken('AEA');
            $trabajo_aea->setEmail('soporte@estudiosalmerienses.com');
            $trabajo_aea->setFinaliza(new \DateTime('2016-05-30'));
            $trabajo_aea->setactualizado(new \DateTime());
            
            $em->persist($trabajo_dsg);
            $em->persist($trabajo_aea);
            
        for($i = 100; $i <= 130; $i++)
        {
            $trabajo_indalopost = new Trabajos();
            $trabajo_indalopost->setCategoria($em->merge($this->getReference("categoria-construcción")));
            $trabajo_indalopost->setTipo('tiempo parcial');
            $trabajo_indalopost->setCompania('Indalopost' .$i);
            $trabajo_indalopost->setLogo('sensio-labs.gif');
            $trabajo_indalopost->setUrl('http://www.indalopost.com/');
            $trabajo_indalopost->setPosicion('Repartidor');
            $trabajo_indalopost->setLocalidad('Almeria, España');
            $trabajo_indalopost->setDescripcion('Serivcio de recogida de correspondencia y entrega en las dependencias de Correos, Manipulado y Franqueo.');
            $trabajo_indalopost->setHowToApply('Envia tu CV a Indalopost');
            $trabajo_indalopost->setPublico(true);
            $trabajo_indalopost->setActivado(true);
            $trabajo_indalopost->setToken('Indalopost_'.$i);
            $trabajo_indalopost->setEmail('indalopost@indalopost.com');
            
            $em->persist($trabajo_indalopost);
        }
        
        $em->flush();
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}