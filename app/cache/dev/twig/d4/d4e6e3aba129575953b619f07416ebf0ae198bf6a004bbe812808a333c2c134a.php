<?php

/* DsgagenciaBundle:Default:index.html.twig */
class __TwigTemplate_fb513d9ec98bada5d24765f94d9b2265a6f9f58868729be8b56ad1bca79eca43 extends Twig_Template
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
        $__internal_535a17d94842982c356b442807fc1e143823f9d995725756eddf194bd06dac0d = $this->env->getExtension("native_profiler");
        $__internal_535a17d94842982c356b442807fc1e143823f9d995725756eddf194bd06dac0d->enter($__internal_535a17d94842982c356b442807fc1e143823f9d995725756eddf194bd06dac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_535a17d94842982c356b442807fc1e143823f9d995725756eddf194bd06dac0d->leave($__internal_535a17d94842982c356b442807fc1e143823f9d995725756eddf194bd06dac0d_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
