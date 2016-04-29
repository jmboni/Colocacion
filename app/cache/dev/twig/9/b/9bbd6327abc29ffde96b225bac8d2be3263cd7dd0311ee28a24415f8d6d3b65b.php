<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_9bbd6327abc29ffde96b225bac8d2be3263cd7dd0311ee28a24415f8d6d3b65b extends Twig_Template
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
        $__internal_f7b41811e15dc32e02810a2f1c53d4df37a2b36c900cc6c785849329b4654360 = $this->env->getExtension("native_profiler");
        $__internal_f7b41811e15dc32e02810a2f1c53d4df37a2b36c900cc6c785849329b4654360->enter($__internal_f7b41811e15dc32e02810a2f1c53d4df37a2b36c900cc6c785849329b4654360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b41811e15dc32e02810a2f1c53d4df37a2b36c900cc6c785849329b4654360->leave($__internal_f7b41811e15dc32e02810a2f1c53d4df37a2b36c900cc6c785849329b4654360_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7044097aac44c9d5b3b8825f55e32fa6b999f999a5d366a24231dc1b091c04c5 = $this->env->getExtension("native_profiler");
        $__internal_7044097aac44c9d5b3b8825f55e32fa6b999f999a5d366a24231dc1b091c04c5->enter($__internal_7044097aac44c9d5b3b8825f55e32fa6b999f999a5d366a24231dc1b091c04c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7044097aac44c9d5b3b8825f55e32fa6b999f999a5d366a24231dc1b091c04c5->leave($__internal_7044097aac44c9d5b3b8825f55e32fa6b999f999a5d366a24231dc1b091c04c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16f464d6d0af8f5e5b6288bac205275d9e1ce45d2a5596011a4bbdac9b6ae391 = $this->env->getExtension("native_profiler");
        $__internal_16f464d6d0af8f5e5b6288bac205275d9e1ce45d2a5596011a4bbdac9b6ae391->enter($__internal_16f464d6d0af8f5e5b6288bac205275d9e1ce45d2a5596011a4bbdac9b6ae391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_16f464d6d0af8f5e5b6288bac205275d9e1ce45d2a5596011a4bbdac9b6ae391->leave($__internal_16f464d6d0af8f5e5b6288bac205275d9e1ce45d2a5596011a4bbdac9b6ae391_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c5a9539082ef026724bd5d92c7f814a3e47848ad184edabe54a72e726d1b9a6 = $this->env->getExtension("native_profiler");
        $__internal_1c5a9539082ef026724bd5d92c7f814a3e47848ad184edabe54a72e726d1b9a6->enter($__internal_1c5a9539082ef026724bd5d92c7f814a3e47848ad184edabe54a72e726d1b9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c5a9539082ef026724bd5d92c7f814a3e47848ad184edabe54a72e726d1b9a6->leave($__internal_1c5a9539082ef026724bd5d92c7f814a3e47848ad184edabe54a72e726d1b9a6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8356b4bd915875c1b8dd7691bc12fc7069f2f7aab72f6e32ed63d2b16b2ee0fe = $this->env->getExtension("native_profiler");
        $__internal_8356b4bd915875c1b8dd7691bc12fc7069f2f7aab72f6e32ed63d2b16b2ee0fe->enter($__internal_8356b4bd915875c1b8dd7691bc12fc7069f2f7aab72f6e32ed63d2b16b2ee0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8356b4bd915875c1b8dd7691bc12fc7069f2f7aab72f6e32ed63d2b16b2ee0fe->leave($__internal_8356b4bd915875c1b8dd7691bc12fc7069f2f7aab72f6e32ed63d2b16b2ee0fe_prof);

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
