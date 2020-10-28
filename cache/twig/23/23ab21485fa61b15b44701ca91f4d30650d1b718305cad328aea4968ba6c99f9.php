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
        // line 9
        echo "    <div class=\"column left\">
      ";
        // line 10
        echo ($context["content"] ?? null);
        echo "
    </div>
    <div class=\"column right\">
      ";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute(($context["header"] ?? null), "credits", []));
        echo "
    </div>
  </div>
</div>

";
        // line 19
        echo "  <!-- Slider main container -->
  <div class=\"swiper-container\">
    <!-- Additional required wrapper -->
    <div class=\"swiper-wrapper\">
      ";
        // line 24
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($this->getAttribute($context["p"], "template", []) == "day")) {
                // line 25
                echo "        <div class=\"day-container swiper-slide\" data-title=\"";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "\">
          ";
                // line 27
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "header", []), "programitems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pitem"]) {
                    // line 28
                    echo "            <div class=\"program-item\">
            ";
                    // line 30
                    echo "              <span class=\"starting-time bold\">";
                    echo $this->getAttribute($context["pitem"], "start", []);
                    echo "</span>
            ";
                    // line 32
                    echo "              <span class=\"duration bold\">";
                    echo $this->getAttribute($context["pitem"], "duration", []);
                    echo " min</span>
            ";
                    // line 34
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "mainimage", []));
                    foreach ($context['_seq'] as $context["image"] => $context["notimportant"]) {
                        // line 35
                        echo "                <img class=\"main-img\" src=\"";
                        echo $context["image"];
                        echo "\" alt=\"\">
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['image'], $context['notimportant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "            ";
                    // line 38
                    echo "              ";
                    // line 39
                    echo "              ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["pitem"], "movies", [])) > 1)) {
                        // line 40
                        echo "                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\"><h1 class=\"arrowbefore\">";
                        // line 41
                        echo $this->getAttribute($context["pitem"], "title", []);
                        echo "</h1></li>
                  ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 43
                            echo "                    <li class=\"content-subtitle\">
                      <span>";
                            // line 44
                            echo $this->getAttribute($context["movie"], "title", []);
                            echo "</span>
                      <span class=\"smalltimes\">";
                            // line 45
                            echo $this->getAttribute($context["movie"], "author", []);
                            echo ",</span>
                      <span class=\"smalltimes\">";
                            // line 46
                            echo $this->getAttribute($context["movie"], "length", []);
                            echo " min</span>
                    </li>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                  <li class=\"content-description accordeon content closed\">";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">";
                        // line 50
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
                </ul>
                <ul class=\"department-list\">
                ";
                        // line 53
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["pitem"], "movies", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                            // line 54
                            echo "                  <li>
                    <span class=\"smalltimes\">";
                            // line 55
                            echo $this->getAttribute($context["movie"], "department", []);
                            echo "</span>
                  </li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "                </ul>
            ";
                        // line 60
                        echo "              ";
                    } else {
                        // line 61
                        echo "                <ul class=\"content-list\">
                  <li class=\"content-title accordeon trigger closed\">
                    <h1 class=\"arrowbefore\">";
                        // line 63
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "title", []);
                        echo "</h1>
                    <span class=\"smalltimes\">";
                        // line 64
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "author", []);
                        echo "</span>
                  </li>
                  <li class=\"content-description accordeon content closed\">";
                        // line 66
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "desription", []));
                        echo "</li>
                  <li class=\"content-credits accordeon content closed smalltimes\">";
                        // line 67
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["pitem"], "credits", []));
                        echo "</li>
                </ul>
                <ul class=\"department-list\">
                  <li>
                    <span class=\"smalltimes\">";
                        // line 71
                        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($context["pitem"], "movies", [])), "department", []);
                        echo "</span>
                  </li>
                </ul>
              ";
                    }
                    // line 75
                    echo "            </div>

            ";
                    // line 77
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $context["pitem"]);
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "        </div>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>
  </div>
";
    }

    // line 85
    public function block_cinema($context, array $blocks = [])
    {
        // line 86
        echo "<div class=\"cinema-wrapper\">
  <div style=\"width: 100%;height: 100%;\">
    <iframe src=\"https://player.vimeo.com/video/";
        // line 88
        echo $this->getAttribute(($context["header"] ?? null), "vimeo", []);
        echo "\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen style=\"position:absolute;top:0;left:0;width:100%;height:100%;\"></iframe>
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
        return array (  249 => 88,  245 => 86,  242 => 85,  236 => 81,  228 => 79,  220 => 77,  216 => 75,  209 => 71,  202 => 67,  198 => 66,  193 => 64,  189 => 63,  185 => 61,  182 => 60,  179 => 58,  170 => 55,  167 => 54,  163 => 53,  157 => 50,  152 => 49,  143 => 46,  139 => 45,  135 => 44,  132 => 43,  128 => 42,  124 => 41,  121 => 40,  118 => 39,  116 => 38,  114 => 37,  105 => 35,  100 => 34,  95 => 32,  90 => 30,  87 => 28,  82 => 27,  77 => 25,  71 => 24,  65 => 19,  57 => 13,  51 => 10,  48 => 9,  43 => 5,  40 => 3,  30 => 1,);
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
  {# <div class=\"about-text accordeon content\"> #}
    <div class=\"column left\">
      {{content}}
    </div>
    <div class=\"column right\">
      {{header.credits|markdown}}
    </div>
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
    <iframe src=\"https://player.vimeo.com/video/{{header.vimeo}}\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen style=\"position:absolute;top:0;left:0;width:100%;height:100%;\"></iframe>
  </div>
</div>
{% endblock %}
", "default.html.twig", "/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme/templates/default.html.twig");
    }
}
