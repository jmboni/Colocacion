<?php
 
namespace Dsg\agenciaBundle\Command;
 
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Dsg\agenciaBundle\Entity\Usuarios;
 
class DsgUsuariosCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('dsg:agencia:usuarios')
            ->setDescription('Añadimos Usuarios')
            ->addArgument('username', InputArgument::REQUIRED, 'The username')
            ->addArgument('password', InputArgument::REQUIRED, 'The password')
        ;
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
 
        $em = $this->getContainer()->get('doctrine')->getManager();
 
        $user = new Usuarios();
        $user->setUsername($username);
        // encode the password
        $factory = $this->getContainer()->get('security.encoder_factory');
        $encoder = $factory->getEncoder($user);
        $encodedPassword = $encoder->encodePassword($password, $user->getSalt());
        $user->setPassword($encodedPassword);
        $em->persist($user);
        $em->flush();
 
        $output->writeln(sprintf('Añadido %s usuario con password %s', $username, $password));
    }
}