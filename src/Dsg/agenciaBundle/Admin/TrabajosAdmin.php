<?php
 
namespace Dsg\agenciaBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Dsg\agenciaBundle\Entity\Trabajos;
 
class TrabajosAdmin extends Admin
{
    // setup the defaut sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'creado'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('categoria')
            ->add('tipo', 'choice', array('choices' => Trabajos::getTipos(), 'expanded' => true))
            ->add('compania')
            ->add('file', 'file', array('label' => 'Logo Empresa', 'required' => false))
            ->add('url')
            ->add('posicion')
            ->add('localidad')
            ->add('descripcion')
            ->add('how_to_apply')
            ->add('publico')
            ->add('email')
            ->add('activado')
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('categoria')
            ->add('compania')
            ->add('posicion')
            ->add('descripcion')
            ->add('activado')
            ->add('publico')
            ->add('email')
            ->add('finaliza')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('compania')
            ->add('posicion')
            ->add('localidad')
            ->add('url')
            ->add('activado')
            ->add('email')
            ->add('categoria')
            ->add('finaliza')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
 
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('categoria')
            ->add('tipo')
            ->add('compania')
            ->add('webPath', 'string', array('template' => 'DsgagenciaBundle:TrabajosAdmin:lista_logo.html.twig'))
            ->add('url')
            ->add('posicion')
            ->add('localidad')
            ->add('descripcion')
            ->add('how_to_apply')
            ->add('publico')
            ->add('activado')
            ->add('token')
            ->add('email')
            ->add('finaliza')
        ;
    }
    
    public function getBatchActions()
{
    // retrieve the default (currently only the delete action) actions
    $actions = parent::getBatchActions();
 
    // check user permissions
    if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')){
        $actions['extend'] = array(
            'label'            => 'Ampliar ofertas',
            'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
        );
 
        $actions['deleteNeverActivated'] = array(
            'label'            => 'Borrar ofertas nunca activadas',
            'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
        );
    }
 
    return $actions;
}
}