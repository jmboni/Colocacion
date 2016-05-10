<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_e40a2fea53b8ae23caf78ddcc37b7b447ea37fc095d96e809b55e8a8c9098adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d458b5e49e5652309c481338c127a55fe2467c64fe8e41c9be0a0c75c2f579fb = $this->env->getExtension("native_profiler");
        $__internal_d458b5e49e5652309c481338c127a55fe2467c64fe8e41c9be0a0c75c2f579fb->enter($__internal_d458b5e49e5652309c481338c127a55fe2467c64fe8e41c9be0a0c75c2f579fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d458b5e49e5652309c481338c127a55fe2467c64fe8e41c9be0a0c75c2f579fb->leave($__internal_d458b5e49e5652309c481338c127a55fe2467c64fe8e41c9be0a0c75c2f579fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e19662e52bd70f027bceecad1738d22419216560f51ac03356d90337eb6199b = $this->env->getExtension("native_profiler");
        $__internal_1e19662e52bd70f027bceecad1738d22419216560f51ac03356d90337eb6199b->enter($__internal_1e19662e52bd70f027bceecad1738d22419216560f51ac03356d90337eb6199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1e19662e52bd70f027bceecad1738d22419216560f51ac03356d90337eb6199b->leave($__internal_1e19662e52bd70f027bceecad1738d22419216560f51ac03356d90337eb6199b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66e70307194f4507c0c4e0c366731c3c338c472e0d4f31817273186ea3aea5e2 = $this->env->getExtension("native_profiler");
        $__internal_66e70307194f4507c0c4e0c366731c3c338c472e0d4f31817273186ea3aea5e2->enter($__internal_66e70307194f4507c0c4e0c366731c3c338c472e0d4f31817273186ea3aea5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_66e70307194f4507c0c4e0c366731c3c338c472e0d4f31817273186ea3aea5e2->leave($__internal_66e70307194f4507c0c4e0c366731c3c338c472e0d4f31817273186ea3aea5e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c0bdce0d02ddf978d4c686c7be3852fa2980f16c5a79c2529ff2d48df47c7ad = $this->env->getExtension("native_profiler");
        $__internal_1c0bdce0d02ddf978d4c686c7be3852fa2980f16c5a79c2529ff2d48df47c7ad->enter($__internal_1c0bdce0d02ddf978d4c686c7be3852fa2980f16c5a79c2529ff2d48df47c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1c0bdce0d02ddf978d4c686c7be3852fa2980f16c5a79c2529ff2d48df47c7ad->leave($__internal_1c0bdce0d02ddf978d4c686c7be3852fa2980f16c5a79c2529ff2d48df47c7ad_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ed8ebdcff72555768509cfa386d8ddb9a31395040316f28d98e4abcb668fcd0 = $this->env->getExtension("native_profiler");
        $__internal_6ed8ebdcff72555768509cfa386d8ddb9a31395040316f28d98e4abcb668fcd0->enter($__internal_6ed8ebdcff72555768509cfa386d8ddb9a31395040316f28d98e4abcb668fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6ed8ebdcff72555768509cfa386d8ddb9a31395040316f28d98e4abcb668fcd0->leave($__internal_6ed8ebdcff72555768509cfa386d8ddb9a31395040316f28d98e4abcb668fcd0_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
