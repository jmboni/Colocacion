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
        $__internal_5b0802c437a0fc98246fa5ebf77de8188532a2490d8fed148781dbd4fe2acd1f = $this->env->getExtension("native_profiler");
        $__internal_5b0802c437a0fc98246fa5ebf77de8188532a2490d8fed148781dbd4fe2acd1f->enter($__internal_5b0802c437a0fc98246fa5ebf77de8188532a2490d8fed148781dbd4fe2acd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b0802c437a0fc98246fa5ebf77de8188532a2490d8fed148781dbd4fe2acd1f->leave($__internal_5b0802c437a0fc98246fa5ebf77de8188532a2490d8fed148781dbd4fe2acd1f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6d33cdad026270597f19052a9639a493945cc0a12f4c538a2a08d56f21ea353d = $this->env->getExtension("native_profiler");
        $__internal_6d33cdad026270597f19052a9639a493945cc0a12f4c538a2a08d56f21ea353d->enter($__internal_6d33cdad026270597f19052a9639a493945cc0a12f4c538a2a08d56f21ea353d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_6d33cdad026270597f19052a9639a493945cc0a12f4c538a2a08d56f21ea353d->leave($__internal_6d33cdad026270597f19052a9639a493945cc0a12f4c538a2a08d56f21ea353d_prof);

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
