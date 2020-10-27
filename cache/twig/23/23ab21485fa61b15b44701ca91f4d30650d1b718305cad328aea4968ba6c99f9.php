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

/* default.html.twig */
class __TwigTemplate_9de1010f2d790d8318db6231ea774d674d03bfa4fa56e4b0976dd16d3e1fca4f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cinema' => [$this, 'block_cinema'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "<div class=\"about-section\">
<button class=\"about-button accordeon trigger closed white\" type=\"button\" name=\"about toggle\"><span class=\"arrowbefore bold big\">About</span></button>
  <div class=\"about-text accordeon content closed\">
    ";
        // line 8
        echo ($context["content"] ?? null);
        echo "
  </div>
</div>

";
        // line 13
        echo "  <!-- Slider main container -->
  <div class=\"swiper-container\">
    <!-- Additional required wrapper -->
    <div class=\"swiper-wrapper\">
      ";
        // line 18
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($this->getAttribute($context["p"], "template", []) == "day")) {
                // line 19
                echo "        <div class=\"day-container swiper-slide\" data-title=\"";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "\">
          ";
                // line 21
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", []), "programitems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pitem"]) {
                    // line 22
                    echo "            <div class=\"program-item\">
            ";
                    // line 24
                    echo "              <span class=\"starting-time bold\">";
                    echo $this->getAttribute($context["pitem"], "start", []);
                    echo "</span>
            ";
                    // line 26
                    echo "              <span class=\"duration bold\">";
                    echo $this->getAttribute($context["pitem"], "duration", []);
                    echo " min</span>
            ";
                    // line 28
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "mainimage", []));
                    foreach ($context['_seq'] as $context["image"] => $context["notimportant"]) {
                        // line 29
                        echo "                <img class=\"main-img\" src=\"";
                        echo $context["image"];
                        echo "\" alt=\"\">
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['image'], $context['notimportant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "            ";
                    // line 32
                    echo "              ";
                    // line 33
                    echo "              ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["pitem"], "movies", [])) > 1)) {
                        // line 34
                        echo "                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\"><h1 class=\"arrowbefore\">";
                        // line 35
                        echo $this->getAttribute($context["pitem"], "title", []);
                        echo "</h1></li>
                  ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 37
                            echo "                    <li class=\"content-subtitle\">
                      <span>";
                            // line 38
                            echo $this->getAttribute($context["movie"], "title", []);
                            echo "</span>
                      <span class=\"smalltimes\">";
                            // line 39
                            echo $this->getAttribute($context["movie"], "author", []);
                            echo ",</span>
                      <span class=\"smalltimes\">";
                            // line 40
                            echo $this->getAttribute($context["movie"], "length", []);
                            echo " min</span>
                    </li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "                  <li class=\"content-description accordeon content closed\">";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">";
                        // line 44
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
                </ul>
                <ul class=\"department-list\">
                ";
                        // line 47
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 48
                            echo "                  <li>
                    <span class=\"smalltimes\">";
                            // line 49
                            echo $this->getAttribute($context["movie"], "department", []);
                            echo "</span>
                  </li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                </ul>
            ";
                        // line 54
                        echo "              ";
                    } else {
                        // line 55
                        echo "                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\">
                    <h1 class=\"arrowbefore\">";
                        // line 57
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "title", []);
                        echo "</h1>
                    <span class=\"smalltimes\">";
                        // line 58
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "author", []);
                        echo "</span>
                  </li>
                  <li class=\"content-description accordeon content closed\">";
                        // line 60
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">";
                        // line 61
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
                </ul>
                <ul class=\"department-list\">
                  <li>
                    <span class=\"smalltimes\">";
                        // line 65
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "department", []);
                        echo "</span>
                  </li>
                </ul>
              ";
                    }
                    // line 69
                    echo "            </div>

            ";
                    // line 71
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $context["pitem"]);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "        </div>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </div>
  </div>
";
    }

    // line 79
    public function block_cinema($context, array $blocks = [])
    {
        // line 80
        echo "<div class=\"cinema-wrapper\">
  <div style=\"width: 100%;height: 100%;\">
    <iframe src=\"https://player.vimeo.com/video/472761182\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen style=\"position:absolute;top:0;left:0;width:100%;height:100%;\"></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 80,  232 => 79,  226 => 75,  218 => 73,  210 => 71,  206 => 69,  199 => 65,  192 => 61,  188 => 60,  183 => 58,  179 => 57,  175 => 55,  172 => 54,  169 => 52,  160 => 49,  157 => 48,  153 => 47,  147 => 44,  142 => 43,  133 => 40,  129 => 39,  125 => 38,  122 => 37,  118 => 36,  114 => 35,  111 => 34,  108 => 33,  106 => 32,  104 => 31,  95 => 29,  90 => 28,  85 => 26,  80 => 24,  77 => 22,  72 => 21,  67 => 19,  61 => 18,  55 => 13,  48 => 8,  43 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{# first, about part #}
<div class=\"about-section\">
<button class=\"about-button accordeon trigger closed white\" type=\"button\" name=\"about toggle\"><span class=\"arrowbefore bold big\">About</span></button>
  <div class=\"about-text accordeon content closed\">
    {{content}}
  </div>
</div>

{# then, program part #}
  <!-- Slider main container -->
  <div class=\"swiper-container\">
    <!-- Additional required wrapper -->
    <div class=\"swiper-wrapper\">
      {# loop through days #}
      {% for p in pages.children.visible if p.template == \"day\" %}
        <div class=\"day-container swiper-slide\" data-title=\"{{p.menu}}\">
          {# loop through program items #}
          {% for pitem in p.header.programitems %}
            <div class=\"program-item\">
            {# start time #}
              <span class=\"starting-time bold\">{{pitem.start}}</span>
            {# duration #}
              <span class=\"duration bold\">{{pitem.duration}} min</span>
            {# main image #}
              {% for image, notimportant in pitem.mainimage %}
                <img class=\"main-img\" src=\"{{image}}\" alt=\"\">
              {% endfor %}
            {# content #}
              {# multiple movies #}
              {% if pitem.movies|length > 1 %}
                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\"><h1 class=\"arrowbefore\">{{pitem.title}}</h1></li>
                  {% for movie in pitem.movies %}
                    <li class=\"content-subtitle\">
                      <span>{{movie.title}}</span>
                      <span class=\"smalltimes\">{{movie.author}},</span>
                      <span class=\"smalltimes\">{{movie.length}} min</span>
                    </li>
                  {% endfor %}
                  <li class=\"content-description accordeon content closed\">{{pitem.desription|markdown}}</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">{{pitem.credits|markdown}}</li>
                </ul>
                <ul class=\"department-list\">
                {% for movie in pitem.movies %}
                  <li>
                    <span class=\"smalltimes\">{{movie.department}}</span>
                  </li>
                {% endfor %}
                </ul>
            {# just one movie #}
              {% else %}
                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\">
                    <h1 class=\"arrowbefore\">{{pitem.movies|first.title}}</h1>
                    <span class=\"smalltimes\">{{pitem.movies|first.author}}</span>
                  </li>
                  <li class=\"content-description accordeon content closed\">{{pitem.desription|markdown}}</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">{{pitem.credits|markdown}}</li>
                </ul>
                <ul class=\"department-list\">
                  <li>
                    <span class=\"smalltimes\">{{pitem.movies|first.department}}</span>
                  </li>
                </ul>
              {% endif %}
            </div>

            {{dump(pitem)}}
          {% endfor %}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block cinema %}
<div class=\"cinema-wrapper\">
  <div style=\"width: 100%;height: 100%;\">
    <iframe src=\"https://player.vimeo.com/video/472761182\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen style=\"position:absolute;top:0;left:0;width:100%;height:100%;\"></iframe>
  </div>
</div>
{% endblock %}
", "default.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme/templates/default.html.twig");
    }
}
