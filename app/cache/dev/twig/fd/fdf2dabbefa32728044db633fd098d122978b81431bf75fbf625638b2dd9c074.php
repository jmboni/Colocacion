<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_73a4cfe5072afb6ec5f432b8da9dce4d83a3d7a7d7e2a2dd762c2f0aa85ad6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_463b49f69492ed24ada03975e9f8bb74568de038abe2febbab72e886eb40fea7 = $this->env->getExtension("native_profiler");
        $__internal_463b49f69492ed24ada03975e9f8bb74568de038abe2febbab72e886eb40fea7->enter($__internal_463b49f69492ed24ada03975e9f8bb74568de038abe2febbab72e886eb40fea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463b49f69492ed24ada03975e9f8bb74568de038abe2febbab72e886eb40fea7->leave($__internal_463b49f69492ed24ada03975e9f8bb74568de038abe2febbab72e886eb40fea7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5aa18c4850a9ba67127e27dc81ae54bf07be1a6fb456e929263bc564a3387805 = $this->env->getExtension("native_profiler");
        $__internal_5aa18c4850a9ba67127e27dc81ae54bf07be1a6fb456e929263bc564a3387805->enter($__internal_5aa18c4850a9ba67127e27dc81ae54bf07be1a6fb456e929263bc564a3387805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_5aa18c4850a9ba67127e27dc81ae54bf07be1a6fb456e929263bc564a3387805->leave($__internal_5aa18c4850a9ba67127e27dc81ae54bf07be1a6fb456e929263bc564a3387805_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-default" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
