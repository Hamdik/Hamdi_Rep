<?php

/* GeneraleBundle:Default:ajouter.html.twig */
class __TwigTemplate_6233c5e81ce1ac542b4490f39131d680d79b24ec89acaa23d29aa54fa768bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneraleBundle:Default:ajouter.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter un animal";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("generale_ajouter");
        echo "\" method=\"post\">


        <h1 style=\"margin-top: 80px;\">Ajouter un animal : <br/></h1>

        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "GeneraleBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }
}
