<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_b31a5d4d2e4c72c3deab3b2fb47ca1d21e8cbee68c5a607e4492b55806b671f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_405db2b52b3d3fc7af776970e1d1cede9a0a8e67d2ed4a72dba3a6e224e184a3 = $this->env->getExtension("native_profiler");
        $__internal_405db2b52b3d3fc7af776970e1d1cede9a0a8e67d2ed4a72dba3a6e224e184a3->enter($__internal_405db2b52b3d3fc7af776970e1d1cede9a0a8e67d2ed4a72dba3a6e224e184a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_405db2b52b3d3fc7af776970e1d1cede9a0a8e67d2ed4a72dba3a6e224e184a3->leave($__internal_405db2b52b3d3fc7af776970e1d1cede9a0a8e67d2ed4a72dba3a6e224e184a3_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_cc24bfa4d4bca1bcf149d259f50be6d684e1c2c37982855ccc48f09be673f945 = $this->env->getExtension("native_profiler");
        $__internal_cc24bfa4d4bca1bcf149d259f50be6d684e1c2c37982855ccc48f09be673f945->enter($__internal_cc24bfa4d4bca1bcf149d259f50be6d684e1c2c37982855ccc48f09be673f945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_cc24bfa4d4bca1bcf149d259f50be6d684e1c2c37982855ccc48f09be673f945->leave($__internal_cc24bfa4d4bca1bcf149d259f50be6d684e1c2c37982855ccc48f09be673f945_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
