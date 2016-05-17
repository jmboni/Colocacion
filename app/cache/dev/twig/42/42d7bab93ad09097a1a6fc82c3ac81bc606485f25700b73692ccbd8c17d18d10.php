<?php

/* DsgagenciaBundle::Trabajos/admin.html.twig */
class __TwigTemplate_0d9a4e962d6e038be4cf523c5f208bd4b22e3f1a8f23f61f0f834fd7091c7495 extends Twig_Template
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
        $__internal_23a382c823486366055a8e3014d2b50b1c444e470683fb3518490babdf804256 = $this->env->getExtension("native_profiler");
        $__internal_23a382c823486366055a8e3014d2b50b1c444e470683fb3518490babdf804256->enter($__internal_23a382c823486366055a8e3014d2b50b1c444e470683fb3518490babdf804256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DsgagenciaBundle::Trabajos/admin.html.twig"));

        // line 1
        echo "<div id=\"job_actions\">
    <h3>Administrar</h3>
    <div class=\"form-group\">
        
        ";
        // line 5
        if ( !$this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "activado", array())) {
            // line 6
            echo "        
            <button class=\"btn btn-primary\" type=\"button\" onclick=\"location.href='";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "token", array()))), "html", null, true);
            echo "'\">Editar</button>
            <form action=";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_publish", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "token", array()))), "html", null, true);
            echo " method=\"post\">
                ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
                <button type=\"submit\">Publicar</button>
            </form>
            
        ";
        }
        // line 14
        echo "        <form class=\"form-horizontal\" action=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_delete", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "token", array()))), "html", null, true);
        echo " method=\"post\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button class=\"btn btn-primary\" type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Borrar</button>
        </form>
        ";
        // line 18
        if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "activado", array())) {
            // line 19
            echo "            <p";
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "finalizanPronto", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 20
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "finalizadoYa", array())) {
                // line 21
                echo "                    Finalizado
                ";
            } else {
                // line 23
                echo "                    Finaliza en <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "getDaysBeforeFinaliza", array()), "html", null, true);
                echo "</strong> días
                ";
            }
            // line 25
            echo " 
                ";
            // line 26
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "finalizanPronto", array())) {
                // line 27
                echo "                    <form action=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_extend", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "token", array()))), "html", null, true);
                echo " method=\"post\">
                        ";
                // line 28
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : $this->getContext($context, "extend_form")), 'widget');
                echo "
                        - <button type=\"submit\">Ampliar</button> por 30 días más.
                    </form>
                ";
            }
            // line 32
            echo "            </p>
        ";
        } else {
            // line 34
            echo "                [Pincha sobre el siguiente <a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trabajos_preview", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "token", array()), "compania" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "companiaSlug", array()), "localidad" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "localidadSlug", array()), "posicion" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : $this->getContext($context, "trabajos")), "posicionSlug", array()))), "html", null, true);
            echo ">Link</a> para poder gestionar esta oferta en el futuro.]
        ";
        }
        // line 36
        echo "    </div>
</div>";
        
        $__internal_23a382c823486366055a8e3014d2b50b1c444e470683fb3518490babdf804256->leave($__internal_23a382c823486366055a8e3014d2b50b1c444e470683fb3518490babdf804256_prof);

    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle::Trabajos/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  102 => 34,  98 => 32,  91 => 28,  86 => 27,  84 => 26,  81 => 25,  75 => 23,  71 => 21,  69 => 20,  62 => 19,  60 => 18,  54 => 15,  49 => 14,  41 => 9,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div id="job_actions">*/
/*     <h3>Administrar</h3>*/
/*     <div class="form-group">*/
/*         */
/*         {% if not trabajos.activado %}*/
/*         */
/*             <button class="btn btn-primary" type="button" onclick="location.href='{{ path('trabajos_edit', { 'token': trabajos.token }) }}'">Editar</button>*/
/*             <form action={{ path('trabajos_publish', { 'token': trabajos.token }) }} method="post">*/
/*                 {{ form_widget(publish_form) }}*/
/*                 <button type="submit">Publicar</button>*/
/*             </form>*/
/*             */
/*         {% endif %}*/
/*         <form class="form-horizontal" action={{ path('trabajos_delete', { 'token': trabajos.token }) }} method="post">*/
/*             {{ form_widget(delete_form) }}*/
/*             <button class="btn btn-primary" type="submit" onclick="if(!confirm('Are you sure?')) { return false; }">Borrar</button>*/
/*         </form>*/
/*         {% if trabajos.activado %}*/
/*             <p{% if trabajos.finalizanPronto %} class="expires_soon" {% endif %}>*/
/*                 {% if trabajos.finalizadoYa %}*/
/*                     Finalizado*/
/*                 {% else %}*/
/*                     Finaliza en <strong>{{ trabajos.getDaysBeforeFinaliza }}</strong> días*/
/*                 {% endif %}*/
/*  */
/*                 {% if trabajos.finalizanPronto %}*/
/*                     <form action={{ path('trabajos_extend', { 'token': trabajos.token }) }} method="post">*/
/*                         {{ form_widget(extend_form) }}*/
/*                         - <button type="submit">Ampliar</button> por 30 días más.*/
/*                     </form>*/
/*                 {% endif %}*/
/*             </p>*/
/*         {% else %}*/
/*                 [Pincha sobre el siguiente <a href={{ url('trabajos_preview', {'token': trabajos.token, 'compania': trabajos.companiaSlug, 'localidad': trabajos.localidadSlug, 'posicion': trabajos.posicionSlug }) }}>Link</a> para poder gestionar esta oferta en el futuro.]*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
