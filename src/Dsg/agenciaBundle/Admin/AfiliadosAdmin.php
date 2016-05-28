<?php
 
namespace Dsg\agenciaBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Dsg\agenciaBundle\Entity\Afiliados;

 
class AfiliadosAdmin extends Admin
{
    protected $datagridValues = array(
        '_sort_order' => 'ASC',
        '_sort_by' => 'activado',
        'activado' => array('value' => 4) // Este valor muestra las cuentas de afiliados no activadas
    );
 
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email')
            ->add('url')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('activado');
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('activado')
            ->addIdentifier('email')
            ->add('url')
            ->add('creado')
            ->add('token')
            ->add('_action', 'actions', array( 'actions' => array('activar' => array('template' => 'DsgagenciaBundle:AfiliadosAdmin:list_action_activar.html.twig'),
                'desactivar' => array('template' => 'DsgagenciaBundle:AfiliadosAdmin:list_action_desactivar.html.twig'))))
        ;
    }

    
    public function getBatchActions()
    {
        $actions = parent::getBatchActions();
 
        if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')) {
            $actions['activate'] = array(
                'label'            => 'Activar',
                'ask_confirmation' => true
            );
 
            $actions['deactivate'] = array(
                'label'            => 'Desactivar',
                'ask_confirmation' => true
            );
        }
 
        return $actions;
    }
    
    protected function configureRoutes(RouteCollection $collection) {
        parent::configureRoutes($collection);
 
        $collection->add('activate',
            $this->getRouterIdParameter().'/activate')
        ;
 
        $collection->add('deactivate',
            $this->getRouterIdParameter().'/deactivate')
        ;
    }
}