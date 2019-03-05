<?php

/* C:\xampp\htdocs\october_cms/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_78c2d255104bdd6cb0b0114381aa46687cc60375ea6f63d1c656d57871d0ffa0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></span>
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1>
    <p>";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "description", []);
        echo "</p>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></span>
    <h1>{{ this.page.title }}</h1>
    <p>{{ this.page.description|raw }}</p>
</header>", "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
