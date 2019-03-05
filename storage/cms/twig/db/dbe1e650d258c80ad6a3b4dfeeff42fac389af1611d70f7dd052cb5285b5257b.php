<?php

/* C:\xampp\htdocs\october_cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm */
class __TwigTemplate_efe3c1c2bfeb3789cbe14da0089623c434ebc9c0da81d02513ab2542336d7d79 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"#one\">One</a></li>
        <li><a href=\"#two\">Two</a></li>
        <li><a href=\"#three\">Three</a></li>
        <li><a href=\"#four\">Four</a></li>
    </ul>
</nav>", "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/home_page/navigation.htm", "");
    }
}
