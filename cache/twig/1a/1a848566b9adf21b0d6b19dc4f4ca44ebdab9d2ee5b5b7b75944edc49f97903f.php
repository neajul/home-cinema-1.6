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

/* partials/base.html.twig */
class __TwigTemplate_3c70247cca4492916edad2b3c841526a484a9bdf25d5f2eecceeef1b2cf26288 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('assets', $context, $blocks);
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('bottom', $context, $blocks);
        // line 61
        echo "
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 27
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 29
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        // line 35
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 37
        echo ($context["home_url"] ?? null);
        echo "\">
                ";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "
                ";
        // line 39
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
            </a>
            ";
        // line 41
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 46
        echo "        </div>
    </div>
";
    }

    // line 41
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 42
        echo "            <nav class=\"main-nav\">
                ";
        // line 43
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "            </nav>
            ";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        // line 51
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
    </section>
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
    }

    // line 58
    public function block_bottom($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 59,  229 => 58,  224 => 53,  218 => 54,  216 => 53,  212 => 51,  209 => 50,  204 => 44,  202 => 43,  199 => 42,  196 => 41,  190 => 46,  188 => 41,  183 => 39,  179 => 38,  175 => 37,  171 => 35,  168 => 34,  161 => 29,  156 => 28,  153 => 27,  143 => 24,  140 => 23,  135 => 20,  132 => 19,  129 => 18,  126 => 17,  120 => 14,  116 => 13,  113 => 12,  111 => 11,  100 => 7,  97 => 6,  94 => 5,  86 => 61,  84 => 58,  81 => 57,  79 => 50,  76 => 49,  74 => 34,  69 => 32,  66 => 31,  64 => 27,  61 => 26,  59 => 23,  56 => 22,  54 => 17,  51 => 16,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
    {% do assets.addCss('theme://css/custom.css', 98) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"{{ home_url }}\">
                {{ config.site.title }}
                {{ page.title }}
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme-2-0/templates/partials/base.html.twig");
    }
}
