<?php

/* udecBundle:Default:ejemplos.html.twig */
class __TwigTemplate_1af4d0534fc286733a426fe20da47da19758946fec7e905954e1cba31fb5bc90 extends Twig_Template
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
        echo "<h1>Ejemplos con twig</h1>
<p>
\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "\t\t* ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</p>
<p>
\t";
        // line 8
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "edixon"), "html", null, true);
        echo "
</p>
<p>
\tFecha de hoy: ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "udecBundle:Default:ejemplos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  40 => 8,  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
