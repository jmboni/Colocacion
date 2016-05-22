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
        $__internal_d109f7d812b438b95d5c4d982a8ba891eeea2b95cb22f0e5331de593df9bcbff = $this->env->getExtension("native_profiler");
        $__internal_d109f7d812b438b95d5c4d982a8ba891eeea2b95cb22f0e5331de593df9bcbff->enter($__internal_d109f7d812b438b95d5c4d982a8ba891eeea2b95cb22f0e5331de593df9bcbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d109f7d812b438b95d5c4d982a8ba891eeea2b95cb22f0e5331de593df9bcbff->leave($__internal_d109f7d812b438b95d5c4d982a8ba891eeea2b95cb22f0e5331de593df9bcbff_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a3bddf029ba01a68e9de59831b7917cd32195a496204bea4c14bef3649726d1a = $this->env->getExtension("native_profiler");
        $__internal_a3bddf029ba01a68e9de59831b7917cd32195a496204bea4c14bef3649726d1a->enter($__internal_a3bddf029ba01a68e9de59831b7917cd32195a496204bea4c14bef3649726d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_a3bddf029ba01a68e9de59831b7917cd32195a496204bea4c14bef3649726d1a->leave($__internal_a3bddf029ba01a68e9de59831b7917cd32195a496204bea4c14bef3649726d1a_prof);

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
