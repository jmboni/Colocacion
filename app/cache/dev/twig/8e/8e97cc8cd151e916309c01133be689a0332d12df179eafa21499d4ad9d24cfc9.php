<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_632f96acb06e1ae7c3629db186374aeb0cfd116e9b8d31e8e0522ea3be8d288b extends Twig_Template
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
        $__internal_951c88fd1f719e33d6f546833605fdf6485995c2c2c4a072af82fdc21b776aba = $this->env->getExtension("native_profiler");
        $__internal_951c88fd1f719e33d6f546833605fdf6485995c2c2c4a072af82fdc21b776aba->enter($__internal_951c88fd1f719e33d6f546833605fdf6485995c2c2c4a072af82fdc21b776aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_951c88fd1f719e33d6f546833605fdf6485995c2c2c4a072af82fdc21b776aba->leave($__internal_951c88fd1f719e33d6f546833605fdf6485995c2c2c4a072af82fdc21b776aba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
