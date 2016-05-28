<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_735c38fe0504c052776db301691314a5e11747029f73091725123d710188e6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b3660c569306eabe38b49c1f7682272f084fedbca1533293501b0058a69014 = $this->env->getExtension("native_profiler");
        $__internal_a9b3660c569306eabe38b49c1f7682272f084fedbca1533293501b0058a69014->enter($__internal_a9b3660c569306eabe38b49c1f7682272f084fedbca1533293501b0058a69014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_a9b3660c569306eabe38b49c1f7682272f084fedbca1533293501b0058a69014->leave($__internal_a9b3660c569306eabe38b49c1f7682272f084fedbca1533293501b0058a69014_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
