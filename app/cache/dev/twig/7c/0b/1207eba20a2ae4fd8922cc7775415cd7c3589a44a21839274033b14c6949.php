<?php

/* udecBundle:Default:alumno.html.twig */
class __TwigTemplate_7c0b1207eba20a2ae4fd8922cc7775415cd7c3589a44a21839274033b14c6949 extends Twig_Template
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
        echo "<h1>Detalle de alumno</h1>
\t<div>
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "matricula", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumno"]) ? $context["alumno"] : $this->getContext($context, "alumno")), "nombre", array()), "html", null, true);
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "udecBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
