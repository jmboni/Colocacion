<?php
namespace Dsg\agenciaBundle\Command;
 
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Dsg\agenciaBundle\Entity\Trabajos;
 
class DsgLimpiezaCommand extends ContainerAwareCommand {
 
  protected function configure()
  {
      $this
          ->setName('dsg:agencia:limpieza')
          ->setDescription('Mantenimiento Base Datos')
          ->addArgument('dias', InputArgument::OPTIONAL, 'email', 90)
    ;
  }
 
  protected function execute(InputInterface $input, OutputInterface $output)
  {
      $dias = $input->getArgument('dias');
 
      $em = $this->getContainer()->get('doctrine')->getManager();
      $nb = $em->getRepository('DsgagenciaBundle:Trabajos')->limpieza($dias);
 
      $output->writeln(sprintf('Borrados %d trabajos antiguos', $nb));
  }
}