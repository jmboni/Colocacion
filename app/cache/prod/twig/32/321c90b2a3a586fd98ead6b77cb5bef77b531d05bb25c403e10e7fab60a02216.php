<?php

/* DsgagenciaBundle:Contact:contact.html.twig */
class __TwigTemplate_42d1ae26206ff17488a4611baba8d7d2f5242bfdfec7f6a5b93500b77cc46186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DsgagenciaBundle::layout.html.twig", "DsgagenciaBundle:Contact:contact.html.twig", 1);
        $this->blocks = array(
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DsgagenciaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formulario($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">  
        <div class=\"col-xs-12 col-md-6\">
            <div class=\"jumbotron\">
                <header>
                    <h2>Formulario de Contacto</h2>
                </header>
                
                
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notificacion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            
                <form class=\"form-horizontal\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("dsgagencia_contacto");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
                    <fieldset>
                        <legend>Contacta con nosotros</legend>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                        
                        
                        <div class=\"form-group\">
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'label');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre")));
        echo "
                            <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'errors');
        echo "</span>
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email de contacto")));
        echo "
                            <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "</span>
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'label');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Asunto")));
        echo "
                            <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'errors');
        echo "</span>
                        </div>
                        
                        <div class=\"form-group\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'label');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mensaje")));
        echo "
                            <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'errors');
        echo "</span>
                        </div>
                        
                        <p>
                            <button type=\"submit\" value=\"Submit\" class=\"btn btn-info\">Enviar</button>
                            <button type=\"reset\" class=\"btn btn-default\">Borrar</button>
                        </p>
                        
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    <fieldset>
                </form>
            </div>
        </div>
    <div class=\"col-xs-12 col-md-6\">
        <!-- 4:3 aspect ratio -->
            <div class=\"embed-responsive embed-responsive-4by3\">
                <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1596.5203589159366!2d-2.460519458317484!3d36.84150087027884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b56ca0ad92897ce!2sDSG+Consultores%2C+S.+L.!5e0!3m2!1ses!2ses!4v1464372019176\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
            <br/>
            <div class=\"panel panel-default\">
              <!-- Default panel contents -->
                  <!-- Table -->
                  <table class=\"table table-condensed\">
                    <tr>
                        <th><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"> </span></th>
                        <th>Calle San Leonardo, 23 1º A</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"> </span></th>
                        <th>950 18 17 24</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th><span class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"> </span></th>
                        <th>Mañanas</th>
                        <th>Tardes</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>De 9:00 a 14:00</td>
                        <td>De 16:30 a 19:30</td>
                    </tr>
                  </table>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  129 => 46,  125 => 45,  121 => 44,  114 => 40,  110 => 39,  106 => 38,  99 => 34,  95 => 33,  91 => 32,  84 => 28,  80 => 27,  76 => 26,  69 => 22,  61 => 19,  58 => 18,  49 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'DsgagenciaBundle::layout.html.twig' %}*/
/* */
/* {% block formulario %}*/
/* <div class="container">*/
/*     <div class="row">  */
/*         <div class="col-xs-12 col-md-6">*/
/*             <div class="jumbotron">*/
/*                 <header>*/
/*                     <h2>Formulario de Contacto</h2>*/
/*                 </header>*/
/*                 */
/*                 */
/*                     {% for flashMessage in app.session.flashbag.get('notificacion') %}*/
/*                         <div class="alert alert-success" role="alert">*/
/*                             {{ flashMessage }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*             */
/*                 <form class="form-horizontal" action="{{ path('dsgagencia_contacto') }}" method="post" {{ form_enctype(form)}}>*/
/*                     <fieldset>*/
/*                         <legend>Contacta con nosotros</legend>*/
/*                         {{ form_errors(form) }}*/
/*                         */
/*                         */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.name)}}*/
/*                             {{ form_widget(form.name, {'attr' : {'class' : 'form-control', 'placeholder' : 'Nombre'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.name)}}</span>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.email)}}*/
/*                             {{ form_widget(form.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Email de contacto'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.email)}}</span>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.subject)}}*/
/*                             {{ form_widget(form.subject, {'attr' : {'class' : 'form-control', 'placeholder' : 'Asunto'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.subject)}}</span>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.body)}}*/
/*                             {{ form_widget(form.body, {'attr' : {'class' : 'form-control', 'placeholder' : 'Mensaje'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.body)}}</span>*/
/*                         </div>*/
/*                         */
/*                         <p>*/
/*                             <button type="submit" value="Submit" class="btn btn-info">Enviar</button>*/
/*                             <button type="reset" class="btn btn-default">Borrar</button>*/
/*                         </p>*/
/*                         */
/*                         {{ form_rest(form) }}*/
/*                     <fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     <div class="col-xs-12 col-md-6">*/
/*         <!-- 4:3 aspect ratio -->*/
/*             <div class="embed-responsive embed-responsive-4by3">*/
/*                 <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1596.5203589159366!2d-2.460519458317484!3d36.84150087027884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b56ca0ad92897ce!2sDSG+Consultores%2C+S.+L.!5e0!3m2!1ses!2ses!4v1464372019176" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/*             </div>*/
/*             <br/>*/
/*             <div class="panel panel-default">*/
/*               <!-- Default panel contents -->*/
/*                   <!-- Table -->*/
/*                   <table class="table table-condensed">*/
/*                     <tr>*/
/*                         <th><span class="glyphicon glyphicon-home" aria-hidden="true"> </span></th>*/
/*                         <th>Calle San Leonardo, 23 1º A</th>*/
/*                         <th></th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th><span class="glyphicon glyphicon-earphone" aria-hidden="true"> </span></th>*/
/*                         <th>950 18 17 24</th>*/
/*                         <th></th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th><span class="glyphicon glyphicon-time" aria-hidden="true"> </span></th>*/
/*                         <th>Mañanas</th>*/
/*                         <th>Tardes</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td></td>*/
/*                         <td>De 9:00 a 14:00</td>*/
/*                         <td>De 16:30 a 19:30</td>*/
/*                     </tr>*/
/*                   </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
