<?php

/* udecBundle::main.html.twig */
class __TwigTemplate_297c7f333b7e790491228d3cbcaf01e8d15fd02bad960881f5df2b48d8952f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "\t<nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"#\">HOME</a>
\t\t</div>
\t
\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("udec_estudiantes");
        echo "\">Estudiantes</a></li>
\t\t\t\t<li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("udec_proyectos");
        echo "\">Proyectos</a></li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuario<b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a href=\"#\">Salir</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div><!-- /.navbar-collapse -->
\t</nav>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t<div id=\"contenido\">
\t\t";
        // line 35
        $this->displayBlock('contenido', $context, $blocks);
        // line 37
        echo "\t</div>
\t<div id=\"sidebar\">
\t\t";
        // line 39
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "\t</div>
";
    }

    // line 35
    public function block_contenido($context, array $blocks = array())
    {
        // line 36
        echo "\t\t";
    }

    // line 39
    public function block_sidebar($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "udecBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  106 => 39,  102 => 36,  99 => 35,  94 => 42,  92 => 39,  88 => 37,  86 => 35,  83 => 34,  80 => 33,  63 => 19,  59 => 18,  42 => 3,  39 => 2,  11 => 1,);
    }
}
