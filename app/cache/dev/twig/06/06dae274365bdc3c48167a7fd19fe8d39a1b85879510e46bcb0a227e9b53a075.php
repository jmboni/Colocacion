<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7955f2388a3d7faebfa4d4367a642b6f645ff1098c4fdcd39e34e7eb1732ef9c extends Twig_Template
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
        $__internal_719e8f9745d2fbaee8752fbc077891dc2c5512092b398f7eb966853f7e63ec2d = $this->env->getExtension("native_profiler");
        $__internal_719e8f9745d2fbaee8752fbc077891dc2c5512092b398f7eb966853f7e63ec2d->enter($__internal_719e8f9745d2fbaee8752fbc077891dc2c5512092b398f7eb966853f7e63ec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_719e8f9745d2fbaee8752fbc077891dc2c5512092b398f7eb966853f7e63ec2d->leave($__internal_719e8f9745d2fbaee8752fbc077891dc2c5512092b398f7eb966853f7e63ec2d_prof);

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
