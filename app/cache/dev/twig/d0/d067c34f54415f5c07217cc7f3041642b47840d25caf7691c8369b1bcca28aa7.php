<?php

/* SonataAdminBundle:CRUD:dashboard__action_create.html.twig */
class __TwigTemplate_87433e19135ea3b15fd96bc618bd7c80d6dd69758cb8614bd9652a207b440c9c extends Twig_Template
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
        $__internal_8f9a13a4e7e93cd733dbe9d211121c20674fc34f8cf7b3f3ce9906592aab9b25 = $this->env->getExtension("native_profiler");
        $__internal_8f9a13a4e7e93cd733dbe9d211121c20674fc34f8cf7b3f3ce9906592aab9b25->enter($__internal_8f9a13a4e7e93cd733dbe9d211121c20674fc34f8cf7b3f3ce9906592aab9b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:dashboard__action_create.html.twig"));

        // line 1
        if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses", array()))) {
            // line 2
            echo "    <a class=\"btn btn-link btn-flat\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
            echo "\">
        <i class=\"fa fa-";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 7
            echo "    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
            echo "\"></i>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                // line 14
                echo "            <li>
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
";
        }
        
        $__internal_8f9a13a4e7e93cd733dbe9d211121c20674fc34f8cf7b3f3ce9906592aab9b25->leave($__internal_8f9a13a4e7e93cd733dbe9d211121c20674fc34f8cf7b3f3ce9906592aab9b25_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:dashboard__action_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  60 => 15,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if admin.subClasses is empty %}*/
/*     <a class="btn btn-link btn-flat" href="{{ action.url }}">*/
/*         <i class="fa fa-{{ action.icon }}"></i>*/
/*         {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}*/
/*     </a>*/
/* {% else %}*/
/*     <a class="btn btn-link btn-flat dropdown-toggle" data-toggle="dropdown" href="#">*/
/*         <i class="fa fa-{{ action.icon }}"></i>*/
/*         {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}*/
/*         <span class="caret"></span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         {% for subclass in admin.subclasses|keys %}*/
/*             <li>*/
/*                 <a href="{{ admin.generateUrl('create', {'subclass': subclass}) }}">{{ subclass|trans({}, action.translation_domain|default('SonataAdminBundle')) }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
