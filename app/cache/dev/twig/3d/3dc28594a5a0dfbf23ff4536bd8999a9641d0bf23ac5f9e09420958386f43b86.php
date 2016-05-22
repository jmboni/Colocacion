<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_0fa1d2c69013a1d8383dcba8dbd95361fe530ec712891f0beb29b660808208b4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7ded30adf22d2689ee64586a1b7412dd6ae6b91a6749add904e10f6d4f5385a = $this->env->getExtension("native_profiler");
        $__internal_c7ded30adf22d2689ee64586a1b7412dd6ae6b91a6749add904e10f6d4f5385a->enter($__internal_c7ded30adf22d2689ee64586a1b7412dd6ae6b91a6749add904e10f6d4f5385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ded30adf22d2689ee64586a1b7412dd6ae6b91a6749add904e10f6d4f5385a->leave($__internal_c7ded30adf22d2689ee64586a1b7412dd6ae6b91a6749add904e10f6d4f5385a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6feeb479f761d054da3157f82796635e88cbd890b19a0f695b45e570596279de = $this->env->getExtension("native_profiler");
        $__internal_6feeb479f761d054da3157f82796635e88cbd890b19a0f695b45e570596279de->enter($__internal_6feeb479f761d054da3157f82796635e88cbd890b19a0f695b45e570596279de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_6feeb479f761d054da3157f82796635e88cbd890b19a0f695b45e570596279de->leave($__internal_6feeb479f761d054da3157f82796635e88cbd890b19a0f695b45e570596279de_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
