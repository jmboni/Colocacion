<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_15a58b4aed9f2d00a6dd0f430d387d94a3ecf1069895f1827e534e1db81e0bac extends Twig_Template
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
        $__internal_ff898ebbe5b9c4d0c55130e401adbc8c3a27c23381bc52d4b0677bf8ecaf4062 = $this->env->getExtension("native_profiler");
        $__internal_ff898ebbe5b9c4d0c55130e401adbc8c3a27c23381bc52d4b0677bf8ecaf4062->enter($__internal_ff898ebbe5b9c4d0c55130e401adbc8c3a27c23381bc52d4b0677bf8ecaf4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_ff898ebbe5b9c4d0c55130e401adbc8c3a27c23381bc52d4b0677bf8ecaf4062->leave($__internal_ff898ebbe5b9c4d0c55130e401adbc8c3a27c23381bc52d4b0677bf8ecaf4062_prof);

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
/* {{ revision.timestamp | date }}*/
/* */
