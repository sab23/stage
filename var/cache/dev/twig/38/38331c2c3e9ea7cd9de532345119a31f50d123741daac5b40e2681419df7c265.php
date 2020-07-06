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

/* detailscollab.html.twig */
class __TwigTemplate_0da543cad46bf70bd13c8f10ebc5b2ae254cb544d25bcff65c9848ee802b3344 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailscollab.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailscollab.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detailscollab.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable(($context["collabs"] ?? $this->getContext($context, "collabs")));
        foreach ($context['_seq'] as $context["_key"] => $context["collab"]) {
            // line 6
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["collab"], "id", []), "html", null, true);
            echo "<br>
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["collab"], "nomCollab", []), "html", null, true);
            echo "<br>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["collab"], "prenomCollab", []), "html", null, true);
            echo "<br>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["collab"], "numCollab", []), "html", null, true);
            echo "<br>
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["collab"], "emailCollab", []), "html", null, true);
            echo "<br>

        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit-collab", ["id" => $this->getAttribute($context["collab"], "id", [])]), "html", null, true);
            echo "\"> Modifier</a> /
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete-collab", ["id" => $this->getAttribute($context["collab"], "id", [])]), "html", null, true);
            echo "\"> Supprimer</a><br><br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new-collab");
        echo "\">Ajouter un collaborateur</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "detailscollab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  104 => 17,  95 => 14,  91 => 13,  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  67 => 6,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

    {% for collab in collabs %}

        {{ collab.id }}<br>
        {{ collab.nomCollab}}<br>
        {{ collab.prenomCollab}}<br>
        {{ collab.numCollab}}<br>
        {{ collab.emailCollab}}<br>

        <a href=\"{{ path('edit-collab', {id:collab.id}) }}\"> Modifier</a> /
        <a href=\"{{ path('delete-collab', {id:collab.id}) }}\"> Supprimer</a><br><br>

    {% endfor %}

    <a href=\"{{ path('new-collab') }}\">Ajouter un collaborateur</a>

{% endblock %}", "detailscollab.html.twig", "/Applications/MAMP/htdocs/luuug/app/Resources/views/detailscollab.html.twig");
    }
}
