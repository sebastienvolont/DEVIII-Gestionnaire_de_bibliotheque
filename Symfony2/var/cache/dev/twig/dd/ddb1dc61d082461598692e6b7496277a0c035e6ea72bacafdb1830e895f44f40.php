<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* virtueltheque/addLivre.html.twig */
class __TwigTemplate_b67d5fa5224a726835ae88d62183afbd5baf35e50086601f435e9993d71b99df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "virtueltheque/addLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "virtueltheque/addLivre.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "virtueltheque/addLivre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Création Formulaire</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'row', ["label" => "Titre", "attr" => ["placeholder" => "titre du livre"]]);
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 10, $this->source); })()), "synopsis", [], "any", false, false, false, 10), 'row', ["label" => "Synopsis", "attr" => ["placeholder" => "synopsis du livre"]]);
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 11, $this->source); })()), "edition", [], "any", false, false, false, 11), 'row', ["label" => "Maison d'édition", "attr" => ["placeholder" => "Maison d'édition"]]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 12, $this->source); })()), "genre", [], "any", false, false, false, 12), 'row', ["label" => "Genre", "attr" => ["placeholder" => "Genre du livre"]]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 13, $this->source); })()), "couverture", [], "any", false, false, false, 13), 'row', ["label" => "Couverture", "attr" => ["placeholder" => "Url de l'image"]]);
        echo "



    <button type=\"submit\" class=\"btn btn-success\">ajouter le livre</button>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLivre"]) || array_key_exists("formLivre", $context) ? $context["formLivre"] : (function () { throw new RuntimeError('Variable "formLivre" does not exist.', 18, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "virtueltheque/addLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  75 => 7,  71 => 5,  61 => 4,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formLivre 'bootstrap_4_layout.html.twig' %}
{% block body %}
    <h1>Création Formulaire</h1>

    {{form_start(formLivre)}}
    
    {{ form_row(formLivre.titre,{'label':\"Titre\",'attr' : {'placeholder':\"titre du livre\"}})}}
    {{ form_row(formLivre.synopsis,{'label':\"Synopsis\",'attr' : {'placeholder':\"synopsis du livre\"}})}}
    {{ form_row(formLivre.edition,{'label':\"Maison d'édition\",'attr' : {'placeholder':\"Maison d'édition\"}})}}
    {{ form_row(formLivre.genre,{'label':\"Genre\",'attr' : {'placeholder':\"Genre du livre\"}})}}
    {{ form_row(formLivre.couverture,{'label':\"Couverture\",'attr' : {'placeholder':\"Url de l'image\"}})}}



    <button type=\"submit\" class=\"btn btn-success\">ajouter le livre</button>
    {{form_end(formLivre)}}

{% endblock %}", "virtueltheque/addLivre.html.twig", "C:\\Users\\quent\\Documents\\GitHub\\DEVIII-Gestionnaire_de_bibliotheque\\Symfony2\\templates\\virtueltheque\\addLivre.html.twig");
    }
}
