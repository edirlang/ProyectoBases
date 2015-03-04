<?php

/* udecBundle:estudiantes:estudiante.html.twig */
class __TwigTemplate_7072b965907859db6e8d1c7440aca0cb791f1a389801fab0ac2323be86066c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("udecBundle::main.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "udecBundle::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Estudiantes ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t<div class=\"panel panel-success\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Codigo:</th>
\t\t\t\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "codigo", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Cedula:</th>
\t\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "cedula", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nombre:</th>
\t\t\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Apellido:</th>
\t\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "apellido", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("udec_estudiantes");
        echo "\">Atras</a>
\t\t\t
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "udecBundle:estudiantes:estudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  51 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
