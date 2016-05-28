<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_bdf2fc8214639c420fe18d9d73da8490b5b2ed559d9b2b4f696e2f8a7d9c2423 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42f13c3ac5a0ebf3643f3f9b76fb46b3a41804f07dc22d825e546afa5252207 = $this->env->getExtension("native_profiler");
        $__internal_a42f13c3ac5a0ebf3643f3f9b76fb46b3a41804f07dc22d825e546afa5252207->enter($__internal_a42f13c3ac5a0ebf3643f3f9b76fb46b3a41804f07dc22d825e546afa5252207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a42f13c3ac5a0ebf3643f3f9b76fb46b3a41804f07dc22d825e546afa5252207->leave($__internal_a42f13c3ac5a0ebf3643f3f9b76fb46b3a41804f07dc22d825e546afa5252207_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8c6f6e81b2a68b7ff76c3262eabaa7692598756944839c301b4453416c09a268 = $this->env->getExtension("native_profiler");
        $__internal_8c6f6e81b2a68b7ff76c3262eabaa7692598756944839c301b4453416c09a268->enter($__internal_8c6f6e81b2a68b7ff76c3262eabaa7692598756944839c301b4453416c09a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_8c6f6e81b2a68b7ff76c3262eabaa7692598756944839c301b4453416c09a268->leave($__internal_8c6f6e81b2a68b7ff76c3262eabaa7692598756944839c301b4453416c09a268_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
