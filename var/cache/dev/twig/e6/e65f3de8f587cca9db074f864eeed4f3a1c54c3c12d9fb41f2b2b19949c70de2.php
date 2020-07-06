<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* detailsprojet.html.twig */
class __TwigTemplate_6736ae6399378f34f27c9343207a2e991942ceffebeb2247b855b1321bd79c81 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailsprojet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailsprojet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detailsprojet.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projets"] ?? $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 6
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", []), "html", null, true);
            echo "<br>
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", []), "html", null, true);
            echo "<br>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", []), "html", null, true);
            echo "<br>
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", []), "d/m/Y"), "html", null, true);
            echo "<br>
        ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateFin", []), "d/m/Y"), "html", null, true);
            echo "<br>
        ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateButoir", []), "d/m/Y"), "html", null, true);
            echo "<br>
        ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "fonctionnaliteDev", []), "html", null, true);
            echo "<br>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "hebergement", []), "html", null, true);
            echo "<br>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "preprod", []), "html", null, true);
            echo "<br>
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "url", []), "html", null, true);
            echo "<br>

        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit-projet", ["id" => $this->getAttribute($context["projet"], "id", [])]), "html", null, true);
            echo "\"> Modifier</a> /
        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete-projet", ["id" => $this->getAttribute($context["projet"], "id", [])]), "html", null, true);
            echo "\"> Supprimer</a><br><br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-projet");
        echo "\">Ajouter un projet</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "detailsprojet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 23,  124 => 22,  115 => 19,  111 => 18,  106 => 16,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  67 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% for projet in projets %}

        {{ projet.id }}<br>
        {{ projet.nomProjet}}<br>
        {{ projet.description}}<br>
        {{ projet.dateDebut|date('d/m/Y') }}<br>
        {{ projet.dateFin|date('d/m/Y') }}<br>
        {{ projet.dateButoir|date('d/m/Y') }}<br>
        {{ projet.fonctionnaliteDev}}<br>
        {{ projet.hebergement}}<br>
        {{ projet.preprod}}<br>
        {{ projet.url}}<br>

        <a href=\"{{ path('edit-projet', {id:projet.id}) }}\"> Modifier</a> /
        <a href=\"{{ path('delete-projet', {id:projet.id}) }}\"> Supprimer</a><br><br>

    {% endfor %}

    <a href=\"{{ path('new-projet') }}\">Ajouter un projet</a>

{% endblock %}", "detailsprojet.html.twig", "/Applications/MAMP/htdocs/luuug/app/Resources/views/detailsprojet.html.twig");
    }
}
