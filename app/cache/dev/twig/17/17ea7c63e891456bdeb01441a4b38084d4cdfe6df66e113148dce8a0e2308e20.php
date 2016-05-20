<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_b31a5d4d2e4c72c3deab3b2fb47ca1d21e8cbee68c5a607e4492b55806b671f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73656155834553bef52876f9694418a618c89c629ff97e4a570d9e1316b62cad = $this->env->getExtension("native_profiler");
        $__internal_73656155834553bef52876f9694418a618c89c629ff97e4a570d9e1316b62cad->enter($__internal_73656155834553bef52876f9694418a618c89c629ff97e4a570d9e1316b62cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        // line 2
        echo "
";
        
        $__internal_73656155834553bef52876f9694418a618c89c629ff97e4a570d9e1316b62cad->leave($__internal_73656155834553bef52876f9694418a618c89c629ff97e4a570d9e1316b62cad_prof);

    }

    // line 1
    public function block_user_block($context, array $blocks = array())
    {
        $__internal_135158560cc52595ca739e8783123ff3f4d6a8edd34b15eca588ab3805fc970d = $this->env->getExtension("native_profiler");
        $__internal_135158560cc52595ca739e8783123ff3f4d6a8edd34b15eca588ab3805fc970d->enter($__internal_135158560cc52595ca739e8783123ff3f4d6a8edd34b15eca588ab3805fc970d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<div class=\"modal-footer\"><a ";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " class=\"btn btn-primary btn-block\">Logout</a></div>";
        
        $__internal_135158560cc52595ca739e8783123ff3f4d6a8edd34b15eca588ab3805fc970d->leave($__internal_135158560cc52595ca739e8783123ff3f4d6a8edd34b15eca588ab3805fc970d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  25 => 2,  23 => 1,);
    }
}
/* {% block user_block %}<div class="modal-footer"><a {{ path('logout') }} class="btn btn-primary btn-block">Logout</a></div>{% endblock %}*/
/* */
/* */
