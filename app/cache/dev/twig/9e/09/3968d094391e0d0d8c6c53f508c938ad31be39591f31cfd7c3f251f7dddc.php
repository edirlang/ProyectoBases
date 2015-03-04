<?php

/* udecBundle:estudiantes:index.html.twig */
class __TwigTemplate_9e093968d094391e0d0d8c6c53f508c938ad31be39591f31cfd7c3f251f7dddc extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "
<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8\">
\t<table class=\"table table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Codigo</th>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Proyecto</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 17
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "codigo", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "apellido", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "proyecto", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("udec_estudiante", array("codigo" => $this->getAttribute($context["estudiante"], "codigo", array()))), "html", null, true);
            echo "\">Detalles</a></td>\t
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</tbody>
\t</table>
</div>
<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\">
\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("udec_Estudiante_guardar"), "method" => "POST"));
        echo "
\t
\t<legend>Nuevo Estudiante</legend>
\t<div class=\"form-group\">
\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t<div class=\"from-control\">
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo "
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'errors');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t<div class=\"from-control\">
\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'label');
        echo "
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'errors');
        echo "
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"from-control\">
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>

\t\t<div class=\"from-control\">
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label');
        echo "
\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'errors');
        echo "
\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t<div class=\"from-control\">
\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto", array()), 'label');
        echo "
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto", array()), 'errors');
        echo "
\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyecto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t\t<div class=\"tags\" data-prototype=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t\t\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 63
            echo "            \t<div class=\"form-control\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["tag"], "telefono", array()), 'row');
            echo "</div class=\"form-control\">
        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t</div>

\t</div>
\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>


";
    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        // line 76
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    \tfunction addTagForm(\$collectionHolder, \$newLinkLi) {
\t\t    // Get the data-prototype explained earlier
\t\t    var prototype = \$collectionHolder.data('prototype');

\t\t    // get the new index
\t\t    var index = \$collectionHolder.data('index');

\t\t    // Replace '__name__' in the prototype's HTML to
\t\t    // instead be a number based on how many items we have
\t\t    var newForm = prototype.replace(/__name__/g, index);

\t\t    // increase the index with one for the next item
\t\t    \$collectionHolder.data('index', index + 1);

\t\t    // Display the form in the page in an li, before the \"Add a tag\" link li
\t\t    var \$newFormLi = \$('<div></div>').append(newForm);
\t\t    \$newLinkLi.before(\$newFormLi);
\t\t}

    \tvar \$collectionHolder;

\t\t// setup an \"add a tag\" link
\t\tvar \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Add a tag</a>');
\t\tvar \$newLinkLi = \$('<div></div>').append(\$addTagLink);

\t\tjQuery(document).ready(function() {
\t\t    // Get the ul that holds the collection of tags
\t\t    \$collectionHolder = \$('div.tags');

\t\t    // add the \"add a tag\" anchor and li to the tags ul
\t\t    \$collectionHolder.append(\$newLinkLi);

\t\t    // count the current form inputs we have (e.g. 2), use that as the new
\t\t    // index when inserting a new item (e.g. 2)
\t\t    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

\t\t    \$addTagLink.on('click', function(e) {
\t\t        // prevent the link from creating a \"#\" on the URL
\t\t        e.preventDefault();

\t\t        // add a new tag form (see next code block)
\t\t        addTagForm(\$collectionHolder, \$newLinkLi);
\t\t    });
\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "udecBundle:estudiantes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 76,  216 => 75,  207 => 69,  203 => 68,  198 => 65,  189 => 63,  185 => 62,  181 => 61,  175 => 58,  171 => 57,  167 => 56,  161 => 53,  157 => 52,  153 => 51,  146 => 47,  142 => 46,  138 => 45,  131 => 41,  127 => 40,  123 => 39,  117 => 36,  113 => 35,  109 => 34,  104 => 32,  97 => 28,  91 => 24,  82 => 21,  78 => 20,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  47 => 4,  44 => 3,  38 => 2,  11 => 1,);
    }
}
