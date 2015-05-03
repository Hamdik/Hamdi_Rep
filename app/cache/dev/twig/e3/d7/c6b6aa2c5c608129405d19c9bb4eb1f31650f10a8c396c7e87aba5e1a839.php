<?php

/* GeneraleBundle:Default:index.html.twig */
class __TwigTemplate_e3d7c6b6aa2c5c608129405d19c9bb4eb1f31650f10a8c396c7e87aba5e1a839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneraleBundle:Default:index.html.twig", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animaux"]) ? $context["animaux"] : $this->getContext($context, "animaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 7
            echo "        <article style=\"margin-top: 80px;\">
            <header>
                <h3 > Titre : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "titre", array()), "html", null, true);
            echo " </h3><br/>
                <time>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["animal"], "date", array()), "d F Y h:m"), "html", null, true);
            echo "</time><br/>
            </header>
            <div id=\"content\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "url", array()), "html", null, true);
            echo " \" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "titre", array()), "html", null, true);
            echo "\"/> <br/>
                <p>
                    <h3 > description : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["animal"], "description", array()), "html", null, true);
            echo " </h3><br/>
                </p>
            </div>
        </article>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "GeneraleBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  64 => 15,  57 => 13,  51 => 10,  47 => 9,  43 => 7,  38 => 6,  35 => 5,  29 => 4,  11 => 2,);
    }
}
