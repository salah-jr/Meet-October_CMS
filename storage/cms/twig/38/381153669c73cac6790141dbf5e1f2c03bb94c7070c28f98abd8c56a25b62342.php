<?php

/* C:\xampp\htdocs\october_cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_c233c73a8a6493445715d22731beb975f156a55078c1181f82dbde80d1c83fe3 extends Twig_Template
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
        echo "<html>
<head>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body>
    <div id=\"wrapper\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "show_section_one", [])) {
            // line 13
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_one"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "show_section_two", [])) {
            // line 17
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_two"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "show_section_three", [])) {
            // line 21
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_three"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "show_section_four", [])) {
            // line 25
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_page/section_four"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div>
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div>
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  112 => 30,  109 => 29,  105 => 28,  102 => 27,  99 => 26,  94 => 25,  92 => 24,  89 => 23,  86 => 22,  81 => 21,  79 => 20,  76 => 19,  73 => 18,  68 => 17,  66 => 16,  63 => 15,  60 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  40 => 8,  36 => 7,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% partial \"html_base/meta_head\" %}
</head>
<body>
    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"home_page/navigation\" %}
        <div id=\"main\">
            {% page %}

            {% if this.theme.show_section_one %}
                {% partial \"home_page/section_one\" %}
            {% endif %}

            {% if this.theme.show_section_two %}
                {% partial \"home_page/section_two\" %}
            {% endif %}

            {% if this.theme.show_section_three %}
                {% partial \"home_page/section_three\" %}
            {% endif %}

            {% if this.theme.show_section_four %}
                {% partial \"home_page/section_four\" %}
            {% endif %}
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "C:\\xampp\\htdocs\\october_cms/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
