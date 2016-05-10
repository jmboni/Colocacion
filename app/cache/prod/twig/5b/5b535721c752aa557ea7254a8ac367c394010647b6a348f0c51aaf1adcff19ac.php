<?php

/* DsgagenciaBundle:Trabajos:admin.html.twig */
class __TwigTemplate_050536048fbc0d1dc7f808c0caf868097f1fb874a7aa220f1166981c63809ca7 extends Twig_Template
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
        // line 1
        echo "<div id=\"job_actions\">
    <h3>Administrar</h3>
    <div class=\"form-group\">
        
        ";
        // line 5
        if ( !$this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "activado", array())) {
            // line 6
            echo "        
            <button class=\"btn btn-primary\" type=\"button\" onclick=\"location.href='";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_edit", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "token", array()))), "html", null, true);
            echo "'\">Editar</button>
            <form action=";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_publish", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "token", array()))), "html", null, true);
            echo " method=\"post\">
                ";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : null), 'widget');
            echo "
                <button type=\"submit\">Publicar</button>
            </form>
            
        ";
        }
        // line 14
        echo "        <form class=\"form-horizontal\" action=";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_delete", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "token", array()))), "html", null, true);
        echo " method=\"post\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button class=\"btn btn-primary\" type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Borrar</button>
        </form>
        ";
        // line 18
        if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "activado", array())) {
            // line 19
            echo "            <p";
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "finalizanPronto", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 20
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "finalizadoYa", array())) {
                // line 21
                echo "                    Finalizado
                ";
            } else {
                // line 23
                echo "                    Finaliza en <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "getDaysBeforeFinaliza", array()), "html", null, true);
                echo "</strong> días
                ";
            }
            // line 25
            echo " 
                ";
            // line 26
            if ($this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "finalizanPronto", array())) {
                // line 27
                echo "                    <form action=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajos_extend", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "token", array()))), "html", null, true);
                echo " method=\"post\">
                        ";
                // line 28
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["extend_form"]) ? $context["extend_form"] : null), 'widget');
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trabajos_preview", array("token" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "token", array()), "compania" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "companiaSlug", array()), "localidad" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "localidadSlug", array()), "posicion" => $this->getAttribute((isset($context["trabajos"]) ? $context["trabajos"] : null), "posicionSlug", array()))), "html", null, true);
            echo ">Link</a> para poder gestionar esta oferta en el futuro.]
        ";
        }
        // line 36
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "DsgagenciaBundle:Trabajos:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 34,  95 => 32,  88 => 28,  83 => 27,  81 => 26,  78 => 25,  72 => 23,  68 => 21,  66 => 20,  59 => 19,  57 => 18,  51 => 15,  46 => 14,  38 => 9,  34 => 8,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
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
