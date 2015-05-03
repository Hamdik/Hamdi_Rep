<?php

/* ::base.html.twig */
class __TwigTemplate_e1260fa093a57ec6c2ff1f23089c730ebf9ecee1050fc2ed398e5380a037dc8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <!-- Necessaire pour bootstrap -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - Mon blog</title>
        <!-- Bootstrap -->
        <!-- <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\"> -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!-- Inclusion de la barre de navigation-->
        ";
        // line 20
        $this->displayBlock('nav', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "        <script src=\"//code.jquery.com/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js\"></script>
        <script src=\"js/bootstrap.min.js \"></script>
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 20)->display($context);
        echo " ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  88 => 21,  80 => 20,  75 => 15,  70 => 9,  61 => 23,  58 => 22,  55 => 21,  53 => 20,  45 => 16,  43 => 15,  34 => 9,  24 => 1,);
    }
}
