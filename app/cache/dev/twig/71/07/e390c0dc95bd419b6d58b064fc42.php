<?php

/* BackOfficeBundle:Team:new.html.twig */
class __TwigTemplate_7107e390c0dc95bd419b6d58b064fc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Team creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("team"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Team:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  69 => 25,  86 => 39,  90 => 32,  56 => 20,  62 => 21,  226 => 99,  221 => 98,  218 => 97,  203 => 19,  195 => 17,  179 => 101,  177 => 97,  166 => 89,  124 => 50,  112 => 59,  87 => 34,  65 => 30,  53 => 16,  82 => 32,  40 => 12,  23 => 3,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 89,  207 => 20,  198 => 18,  181 => 66,  176 => 65,  170 => 61,  168 => 90,  146 => 58,  142 => 56,  128 => 66,  125 => 44,  107 => 36,  38 => 15,  144 => 53,  141 => 73,  135 => 47,  126 => 45,  109 => 41,  103 => 56,  67 => 21,  61 => 23,  47 => 15,  105 => 24,  93 => 28,  76 => 25,  72 => 23,  68 => 27,  27 => 7,  91 => 31,  84 => 29,  94 => 33,  88 => 6,  79 => 17,  59 => 22,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 9,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 67,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 36,  78 => 34,  75 => 28,  71 => 42,  58 => 22,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 28,  63 => 24,  46 => 22,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 74,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 37,  96 => 52,  83 => 18,  80 => 26,  74 => 36,  66 => 31,  55 => 23,  52 => 19,  50 => 13,  43 => 7,  41 => 15,  37 => 8,  35 => 6,  32 => 12,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 77,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 47,  116 => 35,  111 => 37,  108 => 42,  102 => 30,  98 => 45,  95 => 34,  92 => 51,  89 => 31,  85 => 41,  81 => 40,  73 => 35,  64 => 38,  60 => 17,  57 => 11,  54 => 19,  51 => 14,  48 => 17,  45 => 15,  42 => 17,  39 => 14,  36 => 13,  33 => 9,  30 => 7,);
    }
}
