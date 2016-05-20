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
        $__internal_0d6b90a355fc2b352de41fd379c318115282f3e1161e393f63efbafa8b54b527 = $this->env->getExtension("native_profiler");
        $__internal_0d6b90a355fc2b352de41fd379c318115282f3e1161e393f63efbafa8b54b527->enter($__internal_0d6b90a355fc2b352de41fd379c318115282f3e1161e393f63efbafa8b54b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6b90a355fc2b352de41fd379c318115282f3e1161e393f63efbafa8b54b527->leave($__internal_0d6b90a355fc2b352de41fd379c318115282f3e1161e393f63efbafa8b54b527_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_37fa99540ca29a504dbfd5cac746c00d074ed9dcbd98facc4731109d78009e8b = $this->env->getExtension("native_profiler");
        $__internal_37fa99540ca29a504dbfd5cac746c00d074ed9dcbd98facc4731109d78009e8b->enter($__internal_37fa99540ca29a504dbfd5cac746c00d074ed9dcbd98facc4731109d78009e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_37fa99540ca29a504dbfd5cac746c00d074ed9dcbd98facc4731109d78009e8b->leave($__internal_37fa99540ca29a504dbfd5cac746c00d074ed9dcbd98facc4731109d78009e8b_prof);

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
