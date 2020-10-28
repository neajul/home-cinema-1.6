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
class __TwigTemplate_978bff4aee8f04d70d98739b9bd84401f1945cb2ab4a18ed0e9e1668aecd35ad extends \Twig\Template
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
            'cinema' => [$this, 'block_cinema'],
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
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('bottom', $context, $blocks);
        // line 70
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
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/swiper/swiper-bundle.min.css", 1 => 97], "method");
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://unpkg.com/swiper/swiper-bundle.min.js", 1 => ["group" => "bottom"]], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://player.vimeo.com/api/player.js", 1 => ["group" => "bottom"]], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/moment.js", 1 => ["group" => "bottom"]], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/moment-timezone-with-data-10-year-range.min.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.transit.min.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/index.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 41
    public function block_header($context, array $blocks = [])
    {
        // line 42
        echo "    <div class=\"header\">
        <div class=\"wrapper padding\">
            <a class=\"logo left\" href=\"";
        // line 44
        echo ($context["home_url"] ?? null);
        echo "\">
              <span class=\"logo-title bold big nowrap\">";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</span>
              <span class=\"logo-subtitle smalltimes nowrap\">";
        // line 46
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</span>
            </a>
            ";
        // line 48
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 53
        echo "            <button class=\"enter bold big nowrap blue\" type=\"button\" name=\"Enter Cinema\"></button>
        </div>
    </div>
";
    }

    // line 48
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 49
        echo "            <nav class=\"main-nav\">
                ";
        // line 50
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "            </nav>
            ";
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        // line 59
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        </div>
      ";
        // line 63
        $this->displayBlock('cinema', $context, $blocks);
        // line 64
        echo "    </section>
";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
    }

    // line 63
    public function block_cinema($context, array $blocks = [])
    {
    }

    // line 67
    public function block_bottom($context, array $blocks = [])
    {
        // line 68
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
        return array (  264 => 68,  261 => 67,  256 => 63,  251 => 61,  246 => 64,  244 => 63,  241 => 62,  239 => 61,  235 => 59,  232 => 58,  227 => 51,  225 => 50,  222 => 49,  219 => 48,  212 => 53,  210 => 48,  205 => 46,  201 => 45,  197 => 44,  193 => 42,  190 => 41,  183 => 36,  178 => 35,  175 => 34,  165 => 31,  162 => 30,  159 => 29,  156 => 28,  153 => 27,  150 => 26,  147 => 25,  144 => 24,  139 => 21,  136 => 20,  133 => 19,  130 => 18,  127 => 17,  121 => 14,  117 => 13,  114 => 12,  112 => 11,  101 => 7,  98 => 6,  95 => 5,  87 => 70,  85 => 67,  82 => 66,  80 => 58,  77 => 57,  75 => 41,  70 => 39,  67 => 38,  65 => 34,  62 => 33,  60 => 24,  57 => 23,  55 => 17,  52 => 16,  50 => 5,  45 => 3,  42 => 2,  40 => 1,);
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
    {% do assets.addCss('https://unpkg.com/swiper/swiper-bundle.min.css', 97) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
    {% do assets.addJs('https://unpkg.com/swiper/swiper-bundle.min.js', {group:'bottom'}) %}
    {% do assets.addJs('https://player.vimeo.com/api/player.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/moment.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/moment-timezone-with-data-10-year-range.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/jquery.transit.min.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/index.js', {group:'bottom'}) %}
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
              <span class=\"logo-title bold big nowrap\">{{ config.site.title }}</span>
              <span class=\"logo-subtitle smalltimes nowrap\">{{ page.title }}</span>
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
            <button class=\"enter bold big nowrap blue\" type=\"button\" name=\"Enter Cinema\"></button>
        </div>
    </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
      {% block cinema %}{% endblock %}
    </section>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme/templates/partials/base.html.twig");
    }
}
