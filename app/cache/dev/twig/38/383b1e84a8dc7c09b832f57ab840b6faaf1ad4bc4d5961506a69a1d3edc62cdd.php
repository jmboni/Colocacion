<?php

/* DsgagenciaBundle:Afiliados:afiliados_new.html.twig */
class __TwigTemplate_253431f10cabe0a3ac6a5a6b591c1d1956290c44ca0da24c218a4b6b7e8edb43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Afiliados:afiliados_new.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2a7422b859ffaa40e8da7c6aa964feb983589852c473308111de3aa8c3b5177 = $this->env->getExtension("native_profiler");
        $__internal_a2a7422b859ffaa40e8da7c6aa964feb983589852c473308111de3aa8c3b5177->enter($__internal_a2a7422b859ffaa40e8da7c6aa964feb983589852c473308111de3aa8c3b5177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle:Afiliados:afiliados_new.html.twig"));

        // line 3
        $context["form_themes"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a7422b859ffaa40e8da7c6aa964feb983589852c473308111de3aa8c3b5177->leave($__internal_a2a7422b859ffaa40e8da7c6aa964feb983589852c473308111de3aa8c3b5177_prof);

    }

    // line 5
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f37c4a988c7bc111326e99e031f965e89e01884760ece97b7740af138bb18d42 = $this->env->getExtension("native_profiler");
        $__internal_f37c4a988c7bc111326e99e031f965e89e01884760ece97b7740af138bb18d42->enter($__internal_f37c4a988c7bc111326e99e031f965e89e01884760ece97b7740af138bb18d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 6
        ob_start();
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "        <ul class=\"error_list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f37c4a988c7bc111326e99e031f965e89e01884760ece97b7740af138bb18d42->leave($__internal_f37c4a988c7bc111326e99e031f965e89e01884760ece97b7740af138bb18d42_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd4268a39f7393543b817a4231634d048f6c9cfa7bb6f6b057911792825c0770 = $this->env->getExtension("native_profiler");
        $__internal_fd4268a39f7393543b817a4231634d048f6c9cfa7bb6f6b057911792825c0770->enter($__internal_fd4268a39f7393543b817a4231634d048f6c9cfa7bb6f6b057911792825c0770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/csspaginas/show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fd4268a39f7393543b817a4231634d048f6c9cfa7bb6f6b057911792825c0770->leave($__internal_fd4268a39f7393543b817a4231634d048f6c9cfa7bb6f6b057911792825c0770_prof);

    }

    // line 22
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_ab6eb7b701c1dde9b6bdd7fe5a1292e032be334620de3aca1e44ea248f336dcd = $this->env->getExtension("native_profiler");
        $__internal_ab6eb7b701c1dde9b6bdd7fe5a1292e032be334620de3aca1e44ea248f336dcd->enter($__internal_ab6eb7b701c1dde9b6bdd7fe5a1292e032be334620de3aca1e44ea248f336dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 23
        echo "    ";
        $this->displayParentBlock("formulario", $context, $blocks);
        echo "
    <div class=\"container editshow\">
        <div class=\"row well\">
            <div class=\"col-xs-4\">
                <div class=\"page-header\">
                    <h2>Nuevo Usuario</h2>
                </div>
                    
                <form action=";
        // line 31
        echo $this->env->getExtension('routing')->getPath("afiliados_create");
        echo " method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Url")));
        echo "
                        <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "</span>
                    </div>    
                    
                    <div class=\"form-group\">    
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Categoria")));
        echo "
                        <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "</span>
                    </div>
                    <p>
                        <input type=\"submit\" value=\"Submit\" />
                        <!--<button type=\"submit\" value=\"Submit\" class=\"btn btn-info\">Aceptar</button>-->
                    </p>
                ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            
            </div>
        </div>
    </div>
";
        
        $__internal_ab6eb7b701c1dde9b6bdd7fe5a1292e032be334620de3aca1e44ea248f336dcd->leave($__internal_ab6eb7b701c1dde9b6bdd7fe5a1292e032be334620de3aca1e44ea248f336dcd_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Afiliados:afiliados_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 53,  159 => 47,  155 => 46,  151 => 45,  144 => 41,  140 => 40,  136 => 39,  129 => 35,  125 => 34,  121 => 33,  114 => 31,  102 => 23,  96 => 22,  87 => 19,  82 => 18,  76 => 17,  66 => 12,  57 => 10,  53 => 9,  50 => 8,  47 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/*  */
/* {% set form_themes = _self %}*/
/*  */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         <ul class="error_list">*/
/*             {% for error in errors %}*/
/*                 <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/csspaginas/show.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block formulario %}*/
/*     {{ parent() }}*/
/*     <div class="container editshow">*/
/*         <div class="row well">*/
/*             <div class="col-xs-4">*/
/*                 <div class="page-header">*/
/*                     <h2>Nuevo Usuario</h2>*/
/*                 </div>*/
/*                     */
/*                 <form action={{ path('afiliados_create') }} method="post" {{ form_enctype(form) }}>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.url) }}*/
/*                         {{ form_widget(form.url, {'attr' : {'class' : 'form-control', 'placeholder' : 'Url'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.url) }}</span>*/
/*                     </div>    */
/*                     */
/*                     <div class="form-group">    */
/*                         {{ form_label(form.email) }}*/
/*                         {{ form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Email'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.email) }}</span>*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.categoria)}}*/
/*                         {{ form_widget(form.categoria, {'attr' : {'class' : 'form-control', 'placeholder' : 'Categoria'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.categoria)}}</span>*/
/*                     </div>*/
/*                     <p>*/
/*                         <input type="submit" value="Submit" />*/
/*                         <!--<button type="submit" value="Submit" class="btn btn-info">Aceptar</button>-->*/
/*                     </p>*/
/*                 {{ form_end(form) }}*/
/*             */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*                     */
