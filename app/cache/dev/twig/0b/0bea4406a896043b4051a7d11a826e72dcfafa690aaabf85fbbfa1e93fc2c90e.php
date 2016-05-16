<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_fa070a0e9e182cb1410ccf9137b4802e51f66edd3b66a1eb963aeab4e64a5154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1e44f9c31fa8bf0bf4956c0335d4d1a0c1f1b4b96eb70de210f6c3cb27d6c66 = $this->env->getExtension("native_profiler");
        $__internal_c1e44f9c31fa8bf0bf4956c0335d4d1a0c1f1b4b96eb70de210f6c3cb27d6c66->enter($__internal_c1e44f9c31fa8bf0bf4956c0335d4d1a0c1f1b4b96eb70de210f6c3cb27d6c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e44f9c31fa8bf0bf4956c0335d4d1a0c1f1b4b96eb70de210f6c3cb27d6c66->leave($__internal_c1e44f9c31fa8bf0bf4956c0335d4d1a0c1f1b4b96eb70de210f6c3cb27d6c66_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f11238c0efec14725bd183ba67cedb743a2d5579bfecc2148f5e3ae7f9d72136 = $this->env->getExtension("native_profiler");
        $__internal_f11238c0efec14725bd183ba67cedb743a2d5579bfecc2148f5e3ae7f9d72136->enter($__internal_f11238c0efec14725bd183ba67cedb743a2d5579bfecc2148f5e3ae7f9d72136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_f11238c0efec14725bd183ba67cedb743a2d5579bfecc2148f5e3ae7f9d72136->leave($__internal_f11238c0efec14725bd183ba67cedb743a2d5579bfecc2148f5e3ae7f9d72136_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
