<?php

/* C:\xampp\htdocs\october_cms/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm */
class __TwigTemplate_c70d40526ef7ff78c703e6ba0ef18238a720ff36cb4bc1336ed4b1978e269b25 extends Twig_Template
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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "jQuery_version", []), "html", null, true);
        echo "/jquery.min.js\"></script>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "load_octobercms_framework", [])) {
            // line 3
            $_minify = System\Classes\CombineAssets::instance()->useMinify;
            if ($_minify) {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
            }
            else {
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
                echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
            }
            echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
            unset($_minify);
        }
        // line 5
        echo "
<script src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.min.js", 1 => "assets/js/jquery.scrollex.min.js", 2 => "assets/js/jquery.scrolly.min.js", 3 => "assets/js/skel.min.js", 4 => "assets/js/util.js", 5 => "assets/js/main.js"]);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  46 => 5,  30 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/{{ this.theme.jQuery_version }}/jquery.min.js\"></script>
{% if this.theme.load_octobercms_framework %}
{% framework extras %}
{% endif %}

<script src=\"{{ ['assets/js/jquery.min.js','assets/js/jquery.scrollex.min.js', 'assets/js/jquery.scrolly.min.js', 'assets/js/skel.min.js', 'assets/js/util.js', 'assets/js/main.js']|theme }}\"></script>", "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/partials/html_base/scripts.htm", "");
    }
}
