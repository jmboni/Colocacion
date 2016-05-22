<?php
namespace Dsg\agenciaBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Dsg\agenciaBundle\Entity\Usuarios;
 
class LoadUserData implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;
 
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
 
    /**
     * @param \Doctrine\Common\Persistence\ObjectManager $em
     */
    public function load(ObjectManager $em)
    {
        $usuario = new Usuarios();
        $usuario->setUsername('admin');
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($usuario)
        ;
 
        $encodedPassword = $encoder->encodePassword('admin', $usuario->getSalt());
        $usuario->setPassword($encodedPassword);
 
        $em->persist($usuario);
        $em->flush();
    }
 
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }
}